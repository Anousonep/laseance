<?php

namespace App\Controller;

use App\Entity\Champions;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TeamController extends AbstractController
{
    public $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    /**
     * @Route("/team", name="team_index")
     */
    public function index()
    {
        $champions = $this->entityManager->getRepository(Champions::class)->findAll();

        return $this->render('team/index.html.twig', [
            'champions' => $champions
        ]);
    }
}
