<?php

namespace App\Entity;

use App\Entity\Interfaces\EntityInterface;
use App\Repository\PatientRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PatientRepository::class)]
#[ORM\Table(name: "patients")]
class Patient implements EntityInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(name: "patient_last_name", length: 255)]
    private ?string $patientLastName = null;

    #[ORM\Column(name: "patient_first_name", length: 255)]
    private ?string $patientFirstName = null;

    #[ORM\Column(name: "patient_middle_name", length: 255, nullable: true)]
    private ?string $patientMiddleName = null;

    #[ORM\Column(name: "patient_dob", type: Types::DATE_IMMUTABLE, nullable: true)]
    private ?\DateTimeImmutable $patientDob = null;

    #[ORM\Column(
        name: "patient_gender",
        type: Types::SMALLINT,
        nullable: true,
        options: [
            "comment" => "0 - female, 1 - male, NULL - not specified"
        ]
    )]
    private ?int $patientGender = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPatientLastName(): ?string
    {
        return $this->patientLastName;
    }

    public function setPatientLastName(string $patientLastName): static
    {
        $this->patientLastName = $patientLastName;

        return $this;
    }

    public function getPatientFirstName(): ?string
    {
        return $this->patientFirstName;
    }

    public function setPatientFirstName(string $patientFirstName): static
    {
        $this->patientFirstName = $patientFirstName;

        return $this;
    }

    public function getPatientMiddleName(): ?string
    {
        return $this->patientMiddleName;
    }

    public function setPatientMiddleName(string $patientMiddleName): static
    {
        $this->patientMiddleName = $patientMiddleName;

        return $this;
    }

    public function getPatientDob(): ?\DateTimeImmutable
    {
        return $this->patientDob;
    }

    public function setPatientDob(?\DateTimeImmutable $patientDob): static
    {
        $this->patientDob = $patientDob;

        return $this;
    }

    public function getPatientGender(): ?int
    {
        return $this->patientGender;
    }

    public function setPatientGender(?int $patientGender): static
    {
        $this->patientGender = $patientGender;

        return $this;
    }
}
