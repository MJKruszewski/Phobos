<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 22.07.16
 * Time: 20:16
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Races")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\Repository\RacesRepository")
 * */
class Races
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @var int
     * @ORM\Column(name="is_main", type="boolean")
     */
    private $is_main;

    /**
     * @var string
     * @ORM\Column(name="name", type="string", length=20 )
     */
    private $name;

    /**
     * @ORM\Column(name="description", type="text")
     */
    private $description;

}