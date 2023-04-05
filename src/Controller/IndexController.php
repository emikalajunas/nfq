<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route("/", name: "home")]
    public function list(ArticleRepository $articleRepository): Response
    {
        $articles_in_db_array = $articleRepository->findAll();
        foreach ($articles_in_db_array as $article_id) {
            $articleRepository->findOneBy([
                "id" => $article_id,
            ])->readtime = ceil(
                str_word_count(
                    $articleRepository->findOneBy(["id" => $article_id])->text,
                    0
                ) / 200
            );
        }

        return $this->render("pages/index.html.twig", [
//-----------------------------------------------------------------
//20230404 gets DESC articles by updateAt time, limits max 6
//-----------------------------------------------------------------
            "articles" => $articleRepository->findBy(
                [],
                ["updatedAt" => "DESC"],
                100,
                0
            ),
        ]);
    }
}
