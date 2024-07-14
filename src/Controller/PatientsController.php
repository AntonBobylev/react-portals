<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class PatientsController extends AbstractController
{
    #[Route(path: "getPatients", name: "app_get_patients", methods: ["GET"])]
    public function getPatients(): JsonResponse
    {
        // TODO: implement fetching from database

        $patients = [[
            "patient_name" => [
                "patient_first_name"  => "John",
                "patient_last_name"   => 'Doe',
                "patient_middle_name" => 'Bruce'
            ],
            "patient_dob"    => "2000-07-14",
            "patient_gender" => "male"
        ], [
            "patient_name" => [
                "patient_first_name"  => "Jane",
                "patient_last_name"   => 'Doe',
                "patient_middle_name" => 'Debora'
            ],
            "patient_dob"    => "2002-03-31",
            "patient_gender" => "female"
        ]];

        return $this->json([
            "data"  => $patients,
            "total" => \count($patients)
        ]);
    }
}
