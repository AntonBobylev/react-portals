<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class IndexController extends AbstractController
{
    #[Route(path: "/", name: "application_index", methods: ["GET"])]
    public function index(): JsonResponse
    {
        return $this->json("Welcome to the application backend!");
    }
}
