<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController {

    #[Route('/article', name: 'article')]
    public function index(): Response {
        return $this->render('base.html.twig');
    }

    #[Route('/article/add', name: 'article-add')]
    public function add(): Response {
        $this->addFlash('success', " Votre article est ajouté !");
        $this->addFlash('success', "Merci de votre participation");
        $this->addFlash('info', "Le message est visible pour tous le monde !");
        $this->addFlash('danger', "Erreur tous va être supprimé !");
        return $this->render('article/add.html.twig');
    }
}