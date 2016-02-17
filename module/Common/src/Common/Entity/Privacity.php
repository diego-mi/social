<?php

namespace Common\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Privacity
 *
 * @ORM\Table(name="privacity", uniqueConstraints={@ORM\UniqueConstraint(name="str_name", columns={"str_name"})})
 * @ORM\Entity
 */
class Privacity extends AbstractEntity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_privacity", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPrivacity;

    /**
     * @var string
     *
     * @ORM\Column(name="str_name", type="string", length=50, nullable=false)
     */
    private $strName;

    /**
     * @var string
     *
     * @ORM\Column(name="str_description", type="string", length=200, nullable=true)
     */
    private $strDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="str_icon", type="string", length=100, nullable=false)
     */
    private $strIcon;


}

