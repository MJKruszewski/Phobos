<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 25.07.16
 * Time: 12:39
 */

namespace AppBundle\Library\Utilities\Directories;

/**
 * Class DirectoryAbstract
 * @package AppBundle\Entity\Directories
 */
abstract class DirectoryAbstract implements DirectoryStrategyInterface
{
    /**
     * @var int
     */
    private $constantRepresentation;

    /**
     * @var string
     */
    protected $name;

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getConstantRepresentation()
    {
        return $this->constantRepresentation;
    }

    /**
     * @param int $constantRepresentation
     */
    public function setConstantRepresentation(int $constantRepresentation)
    {
        $this->constantRepresentation = $constantRepresentation;
    }

    /**
     * @param int $strategyId
     * @return void
     */
    public abstract function prepareEntityByStrategy(int $strategyId);

}