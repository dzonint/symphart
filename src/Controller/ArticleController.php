<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use App\Entity\Article;


class ArticleController extends AbstractController {

    /**
     * @Route("/", name="article_list")
     * @Method({"GET"})
     */
    public function index() {
        $articles = $this->getDoctrine()->getRepository(Article::class)->findAll();

        return $this->render('articles/index.html.twig', ['articles' => $articles]);
    }

    /**
     * @Route("/article/{id}", name="article_show")
     */
    public function show(int $id) {
        $article = $this->getDoctrine()->getRepository(Article::class)->find($id);

        return $this->render('articles/show.html.twig', ['article' => $article]);
    }
}

?>