<?php

namespace App\Entity;

use App\Repository\GeoRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GeoRepository::class)]
class Geo
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $lat;

    #[ORM\Column(type: 'string', length: 255)]
    private $lng;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLat(): ?string
    {
        return $this->lat;
    }

    public function setLat(string $lat): self
    {
        $this->lat = $lat;

        return $this;
    }

    public function getLng(): ?string
    {
        return $this->lng;
    }

    public function setLng(string $lng): self
    {
        $this->lng = $lng;

        return $this;
    }
}
