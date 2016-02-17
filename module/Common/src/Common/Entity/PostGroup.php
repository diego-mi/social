<?php

namespace Common\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PostGroup
 *
 * @ORM\Table(name="post_group", indexes={@ORM\Index(name="id_post", columns={"id_post", "id_user_post_group"}), @ORM\Index(name="id_user_post_group", columns={"id_user_post_group"})})
 * @ORM\Entity
 */
class PostGroup extends AbstractEntity
{
    /**
     * @var \Common\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="Common\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user_post_group", referencedColumnName="id_user")
     * })
     */
    private $idUserPostGroup;

    /**
     * @var \Common\Entity\Post
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Common\Entity\Post")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_post", referencedColumnName="id_post")
     * })
     */
    private $idPost;


}

