<?php

declare(strict_types=1);

namespace CarHub\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="repair_shop")
 * @ORM\Entity
 */
class RepairShop
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private int $id;
}
