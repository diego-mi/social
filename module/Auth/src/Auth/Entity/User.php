<?php

namespace Auth\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user", uniqueConstraints={@ORM\UniqueConstraint(name="str_username_user", columns={"str_username_user"}), @ORM\UniqueConstraint(name="str_email_user", columns={"str_email_user"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="Auth\Entity\UserRepository")
 */
class User
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
     * @ORM\Column(name="str_password_user", type="string", length=100, nullable=false)
     */
    private $strPasswordUser;

    /**
     * @var string
     *
     * @ORM\Column(name="str_email_user", type="string", length=100, nullable=false)
     */
    private $strEmailUser;

    /**
     * @var integer
     *
     * @ORM\Column(name="dt_last_login_user", type="integer", nullable=true)
     */
    private $dtLastLoginUser;

    /**
     * @return int
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * @param int $idUser
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;
    }

    /**
     * @return string
     */
    public function getStrNameUser()
    {
        return $this->strNameUser;
    }

    /**
     * @param string $strNameUser
     */
    public function setStrNameUser($strNameUser)
    {
        $this->strNameUser = $strNameUser;
    }

    /**
     * @return string
     */
    public function getStrUsernameUser()
    {
        return $this->strUsernameUser;
    }

    /**
     * @param string $strUsernameUser
     */
    public function setStrUsernameUser($strUsernameUser)
    {
        $this->strUsernameUser = $strUsernameUser;
    }

    /**
     * @return string
     */
    public function getStrEmailUser()
    {
        return $this->strEmailUser;
    }

    /**
     * @param string $strEmailUser
     */
    public function setStrEmailUser($strEmailUser)
    {
        $this->strEmailUser = $strEmailUser;
    }

    /**
     * @return int
     */
    public function getDtLastLoginUser()
    {
        return $this->dtLastLoginUser;
    }

    /**
     * @param int $dtLastLoginUser
     */
    public function setDtLastLoginUser($dtLastLoginUser)
    {
        $this->dtLastLoginUser = $dtLastLoginUser;
    }

    /**
     * @return string
     */
    public function getStrPasswordUser()
    {
        return $this->strPasswordUser;
    }

    /**
     * @param string $strPasswordUser
     */
    public function setStrPasswordUser($strPasswordUser)
    {
        $this->strPasswordUser = $strPasswordUser;
    }
}
