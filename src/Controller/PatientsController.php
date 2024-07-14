<?php

namespace App\Controller;

use App\Repository\PatientRepository;
use App\Utils\XFormat;
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
            $result[] = [
                "patient_id"     => $patient->getId(),
                "patient_name"   => [
                    "patient_first_name"  => $patient->getPatientFirstName(),
                    "patient_last_name"   => $patient->getPatientLastName(),
                    "patient_middle_name" => $patient->getPatientMiddleName(),
                ],
                "patient_dob"    => XFormat::dateShort($patient->getPatientDob()),
                "patient_gender" => XFormat::genderFullName($patient->getPatientGender())
            ];
        }

        return $this->json([
            "data"  => $result,
            "total" => \count($result)
        ]);
    }
}
