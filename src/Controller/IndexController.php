<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function list(ArticleRepository $articleRepository): Response
    {
        return $this->render('pages/index.html.twig', [
//-----------------------------------------------------------------            
//20230404 gets DESC articles by updateAt time, limits max 6 (thank u stackoverflow.com)
//-----------------------------------------------------------------    
            'articles' => $articleRepository->findBy(array(),array('updatedAt'=>'DESC'),6,0)
        ]);
    }
}
