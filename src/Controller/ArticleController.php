<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;


class ArticleController extends AbstractController {

    /**
     * @Route("/")
     * @Method({"GET"})
     */
    public function index() {
        $articles = ['Article 1', 'Article 2'];

        return $this->render('articles/index.html.twig', ['articles' => $articles]);
    }
}

?>