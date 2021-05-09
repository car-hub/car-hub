<?php

declare(strict_types=1);

namespace CarHub\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="rental")
 * @ORM\Entity
 */
class Rental
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private int $id;

    /**
     * @ORM\ManyToOne(targetEntity="CarHub\Entity\Car", inversedBy="rentals")
     */
    private Car $car;
}
