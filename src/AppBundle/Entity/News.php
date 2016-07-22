<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 22.07.16
 * Time: 16:36
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="News")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\Repository\NewsRepository")
 * */
class News
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(name="title", type="string", length=255 )
     */
    private $title;

    /**
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @ORM\Column(name="date_add", type="date")
     */
    private $dateadd;

    /**
     * @param int $int
     */
    public function setId(int $int)
    {
        $this->id = $int;
    }

    /**
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getTitle() : string
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getContent() : string
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content)
    {
        $this->content = $content;
    }

    /**
     * @return \DateTime
     */
    public function getDateadd() :\DateTime
    {
        return $this->dateadd;
    }

    /**
     * @param \DateTime $dateadd
     */
    public function setDateadd(\DateTime $dateadd)
    {
        $this->dateadd = $dateadd;
    }


}