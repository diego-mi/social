<?php

namespace Common\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PostType
 *
 * @ORM\Table(name="post_type")
 * @ORM\Entity
 */
class PostType extends AbstractEntity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_post_type", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPostType;

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
     * @var integer
     *
     * @ORM\Column(name="int_type", type="integer", nullable=false)
     */
    private $intType;


}

