<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route("/", name: "home")]
    public function list(ArticleRepository $articleRepository): Response
    {
//-----------------------------------------------------------------
//20230407 logics order:
//1. finds all articles in db
//2. loops through db data, finds articles and by article id`s renderers to "pages/index.html.twig" article.readtime
//3. gets each article text (getText()) and explodes it to array
//4. filters this array in criteria not less then 3 characters
//5. implodes back new array (returned from filtering) and counts words,
//6. divides words from 200,
//7. ceils (ceil()) result and sends to render("pages/index.html.twig",
//-----------------------------------------------------------------
        $articles_in_db_array = $articleRepository->findAll();

        foreach ($articles_in_db_array as $article_id) {
            $articleRepository->findOneBy([
                "id" => $article_id,
            ])->readtime = ceil(
                str_word_count(
                    implode(
                        " ",

                        array_filter(
                            explode(
                                " ",
                                $articleRepository
                                    ->findOneBy(["id" => $article_id])
                                    ->getText()
                            ),
                            function ($findShorter) {
                                return strlen($findShorter) > 3;
                            }
                        )
                    ),
                    0
                ) / 200
            );
        }

        return $this->render("pages/index.html.twig", [
//-----------------------------------------------------------------
//20230404 gets DESC articles by updateAt time, limits max 1000000
//-----------------------------------------------------------------
            "articles" => $articleRepository->findBy(
                [],
                ["updatedAt" => "DESC"],
                1000000,
                0
            ),
        ]);
    }
}
