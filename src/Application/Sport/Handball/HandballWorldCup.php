<?php
/**
 * Created by PhpStorm.
 * User: m.benhenda(benhenda.med@gmail.com)
 * Date: 22/03/2016
 * Time: 21:41
 */
namespace Application\Sport\Handball;

class HandballWorldCup
{
    private $organisators;

    private $qualifiers;

    private $stadium;

    public function __construct($organisators, array $qualifiers, array $stadium)
    {
        $this->organisators = $organisators;
        $this->qualifiers = $qualifiers;
        $this->stadium = $stadium;
    }

    /**
     * @return mixed
     */
    public function getOrganisators()
    {
        return $this->organisators;
    }

    /**
     * @param mixed $organisators
     */
    public function setOrganisators($organisators)
    {
        $this->organisators = $organisators;
    }

    /**
     * @return array
     */
    public function getQualifiers()
    {
        return $this->qualifiers;
    }

    /**
     * @param array $qualifiers
     */
    public function setQualifiers($qualifiers)
    {
        $this->qualifiers = $qualifiers;
    }

    /**
     * @return array
     */
    public function getStadium()
    {
        return $this->stadium;
    }

    /**
     * @param array $stadium
     */
    public function setStadium($stadium)
    {
        $this->stadium = $stadium;
    }

    
}