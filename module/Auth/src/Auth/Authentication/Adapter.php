<?php

namespace Auth\Authentication;

use Doctrine\ORM\EntityManager;
use Auth\Entity\User;
use Zend\Authentication\Adapter\AdapterInterface;
use Zend\Authentication\Result;

class Adapter implements AdapterInterface
{
    protected $em;
    protected $strEmailUser;
    protected $strPasswordUser;
    /**
     * @param EntityManager $em
     */
    public function __contruct(EntityManager $em)
    {
        $this->em = $em;
    }
    /**
     * @param mixed $em
     */
    public function setEm(EntityManager $em)
    {
        $this->em = $em;
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
        return $this;
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
     * @return $this
     */
    public function setStrPasswordUser($strPasswordUser)
    {
        $this->strPasswordUser = $strPasswordUser;
        return $this;
    }

    /**
     * Performs an authentication attempt
     *
     * @return \Zend\Authentication\Result
     * @throws \Zend\Authentication\Adapter\Exception\ExceptionInterface If authentication cannot be performed
     */
    public function authenticate()
    {
        $user = $this->em->getRepository('Auth\Entity\User')
            ->findByLoginAndPassword(
                new User(),
                $this->getStrEmailUser(),
                $this->getStrPasswordUser()
            );
        if ($user) {
            return new Result(Result::SUCCESS, $user, array());
        }
        return new Result(
            Result::FAILURE_CREDENTIAL_INVALID,
            null,
            array('Username ou senha inválidos')
        );
    }
}
