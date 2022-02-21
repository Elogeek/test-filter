<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController {

    #[Route('/article', name: 'article')]
    public function index(): Response {
        return $this->render('article/index.html.twig');
    }

    #[Route('/article/add', name: 'article-add')]
    public function add(): Response {
        $this->addFlash('success', " Votre article est ajouté !");
        return $this->render('article/add');
    }
}