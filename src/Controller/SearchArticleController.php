<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

class SearchArticleController extends AbstractController
{
    /**
     * @Route("/search/article", name="search_article", methods={"get","post"})
     */
    public function index(Request $request, ArticleRepository $articleRepository){

        if($request->isMethod('POST')){
            // recuperation des valeurs de la requete
            $data = $request->request->all();
            // recuperation par le titre
            $titre = $data['titre'];
            $articles = $articleRepository->findBy(array('titre'=> $titre));
  
            // retour sur la page d'accueil après l'enregistrement
            return $this->render('search_article/index.html.twig', ['articlesBlog' => $articles]);
        }


        return $this->render('search_article/index.html.twig', [
            'controller_name' => 'SearchArticleController'
        ]);
    }

}
