<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Table1
 * @ApiResource()
 * @ORM\Table(name="table 1")
 * @ORM\Entity(repositoryClass="App\Repository\Table1Repository")
 */
class Table1
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=7, nullable=true)
     */
    private $type;

    /**
     * @var string|null
     *
     * @ORM\Column(name="geometry_type", type="string", length=7, nullable=true)
     */
    private $geometryType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="geometry_coordinates_0", type="string", length=255, nullable=true)
     */
    private $geometryCoordinates0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="geometry_coordinates_1", type="string", length=255, nullable=true)
     */
    private $geometryCoordinates1;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getGeometryType(): ?string
    {
        return $this->geometryType;
    }

    public function setGeometryType(?string $geometryType): self
    {
        $this->geometryType = $geometryType;

        return $this;
    }

    public function getGeometryCoordinates0(): ?string
    {
        return $this->geometryCoordinates0;
    }

    public function setGeometryCoordinates0(?string $geometryCoordinates0): self
    {
        $this->geometryCoordinates0 = $geometryCoordinates0;

        return $this;
    }

    public function getGeometryCoordinates1(): ?string
    {
        return $this->geometryCoordinates1;
    }

    public function setGeometryCoordinates1(?string $geometryCoordinates1): self
    {
        $this->geometryCoordinates1 = $geometryCoordinates1;

        return $this;
    }


}
