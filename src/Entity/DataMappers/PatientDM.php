<?php

namespace App\Entity\DataMappers;

use App\Entity\Interfaces\EntityInterface;
use App\Entity\Patient;
use App\Utils\XFormat;

class PatientDM extends AbstractDM
{
    #[\Override] public function entityAsArray(Patient|EntityInterface $entity): array
    {
        return [
            "patient_id"     => $entity->getId(),
            "patient_name"   => [
                "patient_first_name"  => $entity->getPatientFirstName(),
                "patient_last_name"   => $entity->getPatientLastName(),
                "patient_middle_name" => $entity->getPatientMiddleName(),
            ],
            "patient_dob"    => XFormat::dateShort($entity->getPatientDob()),
            "patient_gender" => XFormat::genderFullName($entity->getPatientGender())
        ];
    }
}
