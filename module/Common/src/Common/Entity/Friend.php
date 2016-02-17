<?php

namespace Common\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Friend
 *
 * @ORM\Table(name="friend", indexes={@ORM\Index(name="id_inviter", columns={"id_inviter"})})
 * @ORM\Entity
 */
class Friend extends AbstractEntity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_friend", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFriend;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_invited", type="integer", nullable=false)
     */
    private $idInvited;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_create_at", type="datetime", nullable=false)
     */
    private $dtCreateAt = '0000-00-00 00:00:00';

    /**
     * @var integer
     *
     * @ORM\Column(name="int_status", type="integer", nullable=false)
     */
    private $intStatus = '0';

    /**
     * @var \Common\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="Common\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_inviter", referencedColumnName="id_user")
     * })
     */
    private $idInviter;


}

