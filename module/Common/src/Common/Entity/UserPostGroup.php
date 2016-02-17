<?php

namespace Common\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserPostGroup
 *
 * @ORM\Table(name="user_post_group")
 * @ORM\Entity
 */
class UserPostGroup extends AbstractEntity
{
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
     * @var \DateTime
     *
     * @ORM\Column(name="dt_create_at", type="datetime", nullable=false)
     */
    private $dtCreateAt = 'CURRENT_TIMESTAMP';

    /**
     * @var \Common\Entity\User
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Common\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user_post_group", referencedColumnName="id_user")
     * })
     */
    private $idUserPostGroup;


}

