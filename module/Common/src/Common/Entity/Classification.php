<?php

namespace Common\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Classification
 *
 * @ORM\Table(name="classification")
 * @ORM\Entity
 */
class Classification extends AbstractEntity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_classification", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idClassification;

    /**
     * @var string
     *
     * @ORM\Column(name="str_name", type="string", length=50, nullable=false)
     */
    private $strName;

    /**
     * @var string
     *
     * @ORM\Column(name="str_description", type="string", length=200, nullable=false)
     */
    private $strDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="str_icon", type="string", length=100, nullable=false)
     */
    private $strIcon;


}

