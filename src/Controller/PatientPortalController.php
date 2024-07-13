<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class PatientPortalController extends AbstractController
{
    #[Route(path: "getPatientPortal", name: "app_patient_portal", methods: ["GET"])]
    public function getPatientPortal(): JsonResponse
    {
        return $this->json("Patient portal data will be here!");
    }
}