<?php

declare(strict_types=1);

namespace CarHub\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="car")
 * @ORM\Entity
 */
class Car
{
    /**
     * @ORM\ManyToMany(targetEntity="CarHub\Entity\RepairShop")
     */
    private Collection $repairShops;

    /**
     * @ORM\OneToMany(targetEntity="CarHub\Entity\Rental", mappedBy="car", orphanRemoval=true)
     *
     * @var Collection<int, Rental>
     */
    private Collection $rentals;

    /**
     * @ORM\ManyToOne(targetEntity="CarHub\Entity\PriceGrid")
     * @ORM\JoinColumn(name="grid_id", referencedColumnName="id")
     */
    private PriceGrid $priceGrid;

    /**
     * @ORM\OneToOne(targetEntity="CarHub\Entity\VehicleCard", inversedBy="car")
     */
    private VehicleCard $card;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private int $id;

    /**
     * @ORM\Column(type="string")
     */
    private string $title;

    /**
     * @ORM\Column(type="string")
     */
    private string $fuel;

    /**
     * @ORM\Column(type="string")
     */
    private string $gearbox;

    /**
     * @ORM\Column(type="integer")
     */
    private int $range;

    public function __construct(string $title, string $fuel, string $gearbox, int $range)
    {
        $this->title = $title;
        $this->fuel = $fuel;
        $this->gearbox = $gearbox;
        $this->range = $range;
        $this->card = new VehicleCard();
        $this->rentals = new ArrayCollection();
        $this->repairShops = new ArrayCollection();
    }

    public function addRental(Rental $rental): void
    {
        $this->rentals->add($rental);
    }

    public function removeRental(Rental $rental): void
    {
        $this->rentals->removeElement($rental);
    }
}
