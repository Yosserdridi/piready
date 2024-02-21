<?php

namespace App\Entity;

use App\Repository\CampRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CampRepository::class)]
class Camp
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $Campid = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $location = null;

    #[ORM\Column]
    private ?int $capacity = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?string $contactperson = null;

    #[ORM\Column(length: 255)]
    private ?string $contactdetails = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCampid(): ?int
    {
        return $this->Campid;
    }

    public function setCampid(int $Campid): static
    {
        $this->Campid = $Campid;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(string $location): static
    {
        $this->location = $location;

        return $this;
    }

    public function getCapacity(): ?int
    {
        return $this->capacity;
    }

    public function setCapacity(int $capacity): static
    {
        $this->capacity = $capacity;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getContactperson(): ?string
    {
        return $this->contactperson;
    }

    public function setContactperson(string $contactperson): static
    {
        $this->contactperson = $contactperson;

        return $this;
    }

    public function getContactdetails(): ?string
    {
        return $this->contactdetails;
    }

    public function setContactdetails(string $contactdetails): static
    {
        $this->contactdetails = $contactdetails;

        return $this;
    }
}
