<?php

namespace App\Controller;

use App\Entity\DataMappers\PatientDM;
use App\Repository\PatientRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class PatientsController extends AbstractController
{
    #[Route(path: "getPatients", name: "app_get_patients", methods: ["GET"])]
    public function getPatients(PatientRepository $patientRepository): JsonResponse
    {
        $patients = $patientRepository->findAll();

        $result = [];
        foreach ($patients as $patient) {
            $result[] = (new PatientDM())->entityAsArray($patient);
        }

        return $this->json([
            "data"  => $result,
            "total" => \count($result)
        ]);
    }
}
