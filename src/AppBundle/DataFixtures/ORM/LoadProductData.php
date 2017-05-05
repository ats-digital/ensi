<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Product;

/**
 * LoadProductData
 *
 * @author Wajih WERIEMI <wweriemi@ats-digital.com>
 */
class LoadProductData implements FixtureInterface
{
    /**
     * Load
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $products = [
            [
                'name' => 'Laptop',
                'description' => 'CPU I7, RAM 6Go, Disk SSD 250Gb',
                'price' => 879.50,
                'qte' => 12,
            ],
            [
                'name' => 'Desktop Computer',
                'description' => 'CPU I5, RAM 2Go, Disk Sata 500Gb',
                'price' => 439.99,
                'qte' => 30,
            ],
            [
                'name' => 'Printer',
                'description' => 'Mono Laser up to 12 ppm',
                'price' => 250.00,
                'qte' => 5,
            ],
            [
                'name' => 'Fax',
                'description' => '',
                'price' => 59.00,
                'qte' => 2,
            ],
            [
                'name' => 'Phone',
                'description' => '',
                'price' => 20.00,
                'qte' => 0,
            ],
        ];
        foreach ($products as $product) {
            $obj = new Product();
            $obj->setName($product['name']);
            $obj->setDescription($product['description']);
            $obj->setPrice($product['price']);
            $obj->setQte($product['qte']);

            $manager->persist($obj);
        }

        $manager->flush();
    }
}