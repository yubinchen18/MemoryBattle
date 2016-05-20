<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Model;
use AppBundle\Entity\Item;
use AppBundle\Entity\Game;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        
        // Access for users only
        $this->denyAccessUnlessGranted('ROLE_USER', null, "Please login first!");
        // replace this example code with whatever you need
        $manager = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository("AppBundle:Item");
        $products = $repository->findAll();
        
        return $this->render('home.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
            //'base_dir' => realpath(__DIR__.'/..'),
            'products' => $products,
        ]);
    }
    
    /**
     * @Route("level/finalScore", name="finalScore")
     */
    public function scoreAction(Request $request)
    {
        // Access for users only
        $this->denyAccessUnlessGranted('ROLE_USER', null, "Please login first!");
        
        $session = $request->getSession();
        $user = $this->getUser();
        
        //persist per level
        $em = $this->getDoctrine()->getManager();
        $game = $em->getRepository('AppBundle:Game')->find($session->get('gameId'));
        
        $lvl = $request->request->get('level');
        $game->setLvlGoodpicks($lvl, $request->request->get('goodPicks'));
        $game->setLvlBadpicks($lvl, $request->request->get('badPicks'));
        $game->setLvlBonus($lvl, $request->request->get('bonus'));
        $game->setLvlScore($lvl, $request->request->get('score'));
        
        // update final score
        $finalScore = 0;
        for ($i = 1; $i <= 10; $i++)
        {
            $finalScore += $game->getLvlScore($i);   
        }
        $game->setFinalScore($finalScore);
        
        $em->flush();
        
        /*
        $repository = $this->getDoctrine()->getRepository('AppBundle:Game');
        $query = $repository->createQueryBuilder('g')
                ->select('g')
                ->from('AppBundle:Game', 'g')
                ->orderBy('g.finalScore', 'DESC')
                ->setMaxResults(10)
                ->getQuery()
                ->getResult();
        */
        
        $query = $em->createQuery(
                'SELECT p FROM AppBundle:Game p ORDER BY p.finalScore DESC')->setMaxResults(10);
        
        $items = $query->getResult();
        
        return $this->render('play/final.html.twig', array(
            'game' => $game,
            'items' => $items
        ));
    }
    
    /**
     * @Route("level/{id}", name="level")
     */
    public function playAction($id, Request $request)
    {        
        // Access for users only
        $this->denyAccessUnlessGranted('ROLE_USER', null, "Please login first!");

        //Get models from DB
        $model = $this->getDoctrine()
                ->getRepository('AppBundle:Model')
                ->find($id);
        
        if (!$model) {
            throw $this->createNotFoundException(
                'No model found for id '.$id
            );
        }
        //var_dump($_POST);
        //Get items from DB
        $repository = $this->getDoctrine()->getRepository('AppBundle:Item');
        $items = $repository->findByModel($id);
                
        //Randomize
        shuffle($items);
        
        //Get request parameters
        $goodPicks = json_decode($request->request->get('goodPicks'));
        $badPicks = json_decode($request->request->get('badPicks'));
        $session = $request->getSession();
        $user = $this->getUser();
        
        //ini session bag, at level 1 set score to 0
        if($id==1)
        {            
            $game = new Game();
            $game->setUserId($user);
            $game->setCreated(new \DateTime);
            $game->setFinalScore(0);
                       
            $em = $this->getDoctrine()->getManager();
            $em->persist($game);
            $em->flush();
            
            $session->set('gameId', $game->getId());
        } else {            
            //persist per level
            $em = $this->getDoctrine()->getManager();
            $game = $em->getRepository('AppBundle:Game')->find($session->get('gameId'));
            
            $lvl = $request->request->get('level');
            $game->setLvlGoodpicks($lvl, $request->request->get('goodPicks'));
            $game->setLvlBadpicks($lvl, $request->request->get('badPicks'));
            $game->setLvlBonus($lvl, $request->request->get('bonus'));
            $game->setLvlScore($lvl, $request->request->get('score'));
            
            // update final score
            $finalScore = 0;
            for ($i = 1; $i <= 10; $i++)
            {
                $finalScore += $game->getLvlScore($i);   
            }
            $game->setFinalScore($finalScore);
            
            // save game data
            $em->flush();
            
        }

        //Level specific data such as timer
        $screenTimer = 10;
        
        //end level
        if ($id == 10)
        {
            $nextLevel = 'finalScore';
        } else {
            $nextLevel = $id+1;
        }
        
        return $this->render('play/level.html.twig', array(
            'items' => $items,
            'model' => $model,
            'screenTimer' => $screenTimer,
            'nextLevel' => $nextLevel,
            'game' => $game,
            'levelId' => $id
        ));
    }
    
    
    /**
     * @Route("/show/{id}", name="show")
     */
    public function showAction($id)
    {
        $product = $this->getDoctrine()
        ->getRepository('AppBundle:Product')
        ->find($id);

        if (!$product) {
            throw $this->createNotFoundException(
            'No product found for id '.$id
            );
        }
        
        return new Response(var_dump($product));
        

    // ... do something, like pass the $product object into a template
    }
    
    /**
     * @Route("/scandir/{dir}", name="scandir", requirements={"dir"=".+"})
     */
    public function scandirAction($dir)
    {
        $base_dir = realpath($this->getParameter('kernel.root_dir').'/../web/').'/';
        $dirPath = $base_dir.$dir;
        $list = scandir($dirPath);
        $em = $this->getDoctrine()->getManager();
        $flushed = [];
        $failed = [];
        
        if (preg_match('#item#', $dir)) {
            foreach ($list as $item) {
                if ($item[0] !== '.') {
                    $modelName = [];
                    preg_match('#model\-[0-9]+#', $item, $modelName);
                    $model = $this->getDoctrine()
                                  ->getRepository('AppBundle:Model')
                                  ->findByName($modelName[0]);
                    
                    $exists = $this->getDoctrine()
                                   ->getRepository('AppBundle:Item')
                                   ->findByName(rtrim($item, '\.jpg'));

                    if ($model && !$exists) {
                            $dbItem = new Item();
                            $dbItem->setName(rtrim($item, '\.jpg'));
                            $dbItem->setCategory('Test');
                            $dbItem->setPrice(99);
                            $dbItem->setModel($model[0]);
                            $dbItem->setDescription('Script test');
                            $dbItem->setPicture($dir.'/'.$item);
                            if (preg_match('#fake#', $item))
                            {
                                $dbItem->setFake(true);
                            } else {
                                $dbItem->setFake(false);
                            }
                            $em->persist($dbItem);
                    }                    
                } 
            }    
        }
        
        if (preg_match('#model#', $dir)) {
            foreach ($list as $model)
            {
                if ($model[0] !== '.') {
                    $exists = $this->getDoctrine()
                                   ->getRepository('AppBundle:Model')
                                   ->findByName(rtrim($model, '\.jpg'));
                    
                    if (!$exists) {
                        $dbModel = new Model();
                        $dbModel->setName(rtrim($model, '\.jpg'));
                        $dbModel->setPicture('images/models/'.$model);
                        $dbModel->setTotalItems(99);
                        $em->persist($dbModel);
                    }
                }
            }
        }

        $em->flush();
        $em->clear();
        
        return new Response(var_dump($list));
    }
    
    /**
     * @Route("/presentatie")
     */
    public function presentAction()
    {
        return $this->render('eindpresentatie.html.twig', [
        ]);
    }
    
    
    /**
     * @Route("/admin")
     */
    public function adminAction()
    {
        return new Response('<html><body>Admin Page!</body><html>');
    }
}
