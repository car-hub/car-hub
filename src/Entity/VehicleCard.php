<?php

declare(strict_types=1);

namespace CarHub\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="vehicle_card")
 * @ORM\Entity
 */
class VehicleCard
{
    /**
     * @ORM\OneToOne(targetEntity="CarHub\Entity\Car", mappedBy="card")
     */
    private Car $car;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private int $id;
}
