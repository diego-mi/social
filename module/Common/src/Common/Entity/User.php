<?php

namespace Common\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user", uniqueConstraints={@ORM\UniqueConstraint(name="str_username_user", columns={"str_username_user"}), @ORM\UniqueConstraint(name="str_email_user", columns={"str_email_user"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="Common\Entity\UserRepository")
 */
class User extends AbstractEntity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="str_name_user", type="string", length=100, nullable=false)
     */
    private $strNameUser;

    /**
     * @var string
     *
     * @ORM\Column(name="str_username_user", type="string", length=50, nullable=false)
     */
    private $strUsernameUser;

    /**
     * @var string
     *
     * @ORM\Column(name="str_email_user", type="string", length=100, nullable=false)
     */
    private $strEmailUser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_bourn_user", type="datetime", nullable=false)
     */
    private $dtBournUser = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     *
     * @ORM\Column(name="int_sex_user", type="integer", nullable=false)
     */
    private $intSexUser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_create_at_user", type="datetime", nullable=false)
     */
    private $dtCreateAtUser = '0000-00-00 00:00:00';

    /**
     * @var integer
     *
     * @ORM\Column(name="dt_last_login_user", type="integer", nullable=true)
     */
    private $dtLastLoginUser;


}

