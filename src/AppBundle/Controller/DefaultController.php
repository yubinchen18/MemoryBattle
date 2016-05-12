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
        //return $this->render('default/index.html.twig', [
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
        $score = $session->get('score');
        
        //persist per level
        $em = $this->getDoctrine()->getManager();
        $game = $em->getRepository('AppBundle:Game')->find($session->get('gameId'));
        $game->setLvl10Goodpicks($request->request->get('goodPicks'));
        $game->setLvl10Badpicks($request->request->get('badPicks'));
        $game->setLvl10Bonus($request->request->get('bonus'));
        $game->setLvl10Score($request->request->get('score'));
        $game->setFinalScore($score);
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
            //'items' => $items,
            //'model' => $model,
            //'screenTimer' => $screenTimer,
            //'nextLevel' => $nextLevel,
            'score' => $score,
            'items' => $items,
            //'levelId' => $id
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
        
        
        //var_dump($goodPicks);
        //var_dump($_SESSION);
        //ini session bag, at level 1 set score to 0
        if($id==1)
        {
            
            $game = new Game();
            $game->setUserId($user);
            $game->setCreated(new \DateTime);
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($game);
            $em->flush();
            
            $session->set('score', 0);
            $session->set('gameId', $game->getId());
        } else {
            
            /* *
             * Score system
             * each good pick + 1
             * each bad pick - 1
             * if only good picks get bonus double score
             * if only good picks and press submit bonus 
             */
            
            
            //if ($request->request->has('goodPicks') && $request->request->has('badPicks'))
            
            $newScore = $session->get('score') + ($request->request->get('score'));
            $session->set('score', $newScore);
            
            //persist per level
            $em = $this->getDoctrine()->getManager();
            $game = $em->getRepository('AppBundle:Game')->find($session->get('gameId'));
            
            switch ($request->request->get('level'))
            {
                case 1:
                    $game->setLvl1Goodpicks($request->request->get('goodPicks'));
                    $game->setLvl1Badpicks($request->request->get('badPicks'));
                    $game->setLvl1Bonus($request->request->get('bonus'));
                    $game->setLvl1Score($request->request->get('score'));
                    break;
                case 2:
                    $game->setLvl2Goodpicks($request->request->get('goodPicks'));
                    $game->setLvl2Badpicks($request->request->get('badPicks'));
                    $game->setLvl2Bonus($request->request->get('bonus'));
                    $game->setLvl2Score($request->request->get('score'));
                    break;
                case 3:
                    $game->setLvl3Goodpicks($request->request->get('goodPicks'));
                    $game->setLvl3Badpicks($request->request->get('badPicks'));
                    $game->setLvl3Bonus($request->request->get('bonus'));
                    $game->setLvl3Score($request->request->get('score'));
                    break;
                case 4:
                    $game->setLvl4Goodpicks($request->request->get('goodPicks'));
                    $game->setLvl4Badpicks($request->request->get('badPicks'));
                    $game->setLvl4Bonus($request->request->get('bonus'));
                    $game->setLvl4Score($request->request->get('score'));
                    break;
                case 5:
                    $game->setLvl5Goodpicks($request->request->get('goodPicks'));
                    $game->setLvl5Badpicks($request->request->get('badPicks'));
                    $game->setLvl5Bonus($request->request->get('bonus'));
                    $game->setLvl5Score($request->request->get('score'));
                    break;
                case 6:
                    $game->setLvl6Goodpicks($request->request->get('goodPicks'));
                    $game->setLvl6Badpicks($request->request->get('badPicks'));
                    $game->setLvl6Bonus($request->request->get('bonus'));
                    $game->setLvl6Score($request->request->get('score'));
                    break;
                case 7:
                    $game->setLvl7Goodpicks($request->request->get('goodPicks'));
                    $game->setLvl7Badpicks($request->request->get('badPicks'));
                    $game->setLvl7Bonus($request->request->get('bonus'));
                    $game->setLvl7Score($request->request->get('score'));
                    break;
                case 8:
                    $game->setLvl8Goodpicks($request->request->get('goodPicks'));
                    $game->setLvl8Badpicks($request->request->get('badPicks'));
                    $game->setLvl8Bonus($request->request->get('bonus'));
                    $game->setLvl8Score($request->request->get('score'));
                    break;
                case 9:
                    $game->setLvl9Goodpicks($request->request->get('goodPicks'));
                    $game->setLvl9Badpicks($request->request->get('badPicks'));
                    $game->setLvl9Bonus($request->request->get('bonus'));
                    $game->setLvl9Score($request->request->get('score'));
                    break;
                case 10:
                    $game->setLvl10Goodpicks($request->request->get('goodPicks'));
                    $game->setLvl10Badpicks($request->request->get('badPicks'));
                    $game->setLvl10Bonus($request->request->get('bonus'));
                    $game->setLvl10Score($request->request->get('score'));
                    break;
            }

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
        $score = $session->get('score');
        
        return $this->render('play/level.html.twig', array(
            'items' => $items,
            'model' => $model,
            'screenTimer' => $screenTimer,
            'nextLevel' => $nextLevel,
            'score' => $score,
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
     * @Route("/admin")
     */
    public function adminAction()
    {
        return new Response('<html><body>Admin Page!</body><html>');
    }
}
