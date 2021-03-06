<?php

/*
 * This file is part of the TODO REST API package.
 *
 * (c) Rémi Houdelette <https://github.com/B0ulzy>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\AppBundle\Entity; 

/**
 * Dummy entity for test purposes 
 * 
 * @author Rémi Houdelette <b0ulzy.todo@gmail.com>
 */
class Dummy 
{
    /**
     * @var integer
     */
    private $id; 

    /**
     * @var string
     */
    private $name; 

    /**
     * Get ID
     * 
     * @return integer
     */
    public function getId() 
    {
        return $this->id; 
    } 

    /**
     * Set ID
     * 
     * @param integer $id
     * @return self
     */
    public function setId($id) 
    {
        $this->id = $id; 

        return $this; 
    }

    /**
     * Get name
     * 
     * @return string
     */
    public function getName() 
    {
        return $this->name; 
    } 

    /**
     * Set name
     * 
     * @param string $name
     * @return self
     */
    public function setName($name) 
    {
        $this->name = $name; 

        return $this; 
    }
}

