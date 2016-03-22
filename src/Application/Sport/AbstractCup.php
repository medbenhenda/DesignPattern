<?php
/**
 * Created by PhpStorm.
 * User: m.benhenda(benhenda.med@gmail.com)
 * Date: 22/03/2016
 * Time: 21:57
 */

namespace Application\Sport;


abstract class AbstractCup {

    abstract function getOrganisators();

    /**
     * @param mixed $organisators
     */
    abstract function setOrganisators($organisators);

    /**
     * @return array
     */
    abstract function getQualifiers();

    /**
     * @param array $qualifiers
     */
    abstract function setQualifiers($qualifiers);

    /**
     * @return array
     */
    abstract function getStadium();

    /**
     * @param array $stadium
     */
    abstract function setStadium($stadium);
}