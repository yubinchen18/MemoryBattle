<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Product;
use AppBundle\Entity\Model;
use AppBundle\Entity\Item;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
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
     * @Route("level/{id}", name="level")
     */
    public function playAction($id)
    {
        $model = $this->getDoctrine()
                ->getRepository('AppBundle:Model')
                ->find($id);
        
        if (!$model) {
            throw $this->createNotFoundException(
                'No model found for id '.$id
            );
        }
        
        $items = $this->getDoctrine()
                ->getRepository('AppBundle:Item')
                ->findByModel($id);
        shuffle($items);
        
        $screenTimer = 10;
        
        return $this->render('play/level.html.twig', array(
            'items' => $items,
            'model' => $model,
            'screenTimer' => $screenTimer
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
}
