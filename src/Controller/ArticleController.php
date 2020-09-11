<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class ArticleController extends AbstractController
{
    /**
     * page home avec tous les articles
     * @Route("/", name="app_index")
     */
    public function index(ArticleRepository $articleRepository){
        $articles = $articleRepository->findAll();

        return $this->render('article/index.html.twig', ['articlesBlog' => $articles]);
    }

    /**
     * ajouter un article
     * @Route("add/article", name="app_add_article", methods={"get","post"})
     */
    public function addArticle(Request $request, EntityManagerInterface $em){

        if($request->isMethod('POST')){
            // recuperation des valeurs de la requete
            $data = $request->request->all();
            // création d'un nouvel objet Article
            $article = new Article();
            // ajout de la donnée dans titre, contenu et image
            $article->setTitre($data['titre']);
            $article->setContenu($data['contenu']);
            $article->setImage($data['image']);
            $article->setDateCreation(new \DateTime('now'));
            
            // persistance des données
            $em->persist($article);
            $em->flush();
            // retour sur la page d'accueil après l'enregistrement
            return $this->redirectToRoute('app_index');
        }
        // si la requete est en get
        return $this->render('article/newArticle.html.twig');
    }

}
