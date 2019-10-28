<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController
{
    /**
     * @Route("/products", name="product.index")
     * @return Response
     */
    public function index(): Response
    {
        return new Response("les produits");
    }
}