<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * @Route("/products", name="product.index")
     * @param ProductRepository $repository
     * @return Response
     */
    public function index(ProductRepository $repository): Response
    {
       /* $product = new Product();
        $product->setTitle('Iphone 11')
            ->setDescription('64 Go')
            ->setPrice(1000);

        $em = $this->getDoctrine()->getManager();
        $em->persist($product);
        $em->flush();*/

       $products = $repository->findAll();
       dump($products);

        return $this->render('product/index.html.twig', [
            'current_menu' => 'products'
        ]);
    }
}