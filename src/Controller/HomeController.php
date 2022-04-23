<?php

namespace App\Controller;

use App\Entity\Articles;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    public $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    /**
     * @Route("/", name="homepage")
     */
    public function home(){

        $articles = $this->entityManager->getRepository(Articles::class)->findAll();

        return $this->render('home/home.html.twig', [
            'title' => 'La séance',
            'articles' => $articles
        ]);

    }
}
