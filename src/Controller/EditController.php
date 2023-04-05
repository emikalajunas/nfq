<?php

namespace App\Controller;

use App\Entity\Article;
use App\Form\Type\ArticleeditType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class EditController extends AbstractController
{   
//-----------------------------------------------------------------    
//2023 04 02: existing acticles nr in db are: 41-46
//-----------------------------------------------------------------    
    #[Route('/article/edit/{id}', name: 'article_edit')]
    public function edit(Request $request, Article $article, EntityManagerInterface $entityManager): Response
    {            
          $form = $this->createForm(ArticleeditType::class, $article); 
          $form->handleRequest($request); 
          $updatedAt = $article->updatedAt = date('l jS \of F Y h:i:s');
          //$readtime = $article->readtime = 123;
        
         if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($article); 
            $entityManager->flush(); 
//-----------------------------------------------------------------            
//20230404 or use return instead of back button
            //return $this->redirectToRoute('home');
//-----------------------------------------------------------------             
         }        
          return $this->render('pages/edit.html.twig', [
            'form' => $form->createView(),
            'article' => $article
        ]);  
    } 
}