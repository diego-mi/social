<?php

namespace Common\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PostLike
 *
 * @ORM\Table(name="post_like", indexes={@ORM\Index(name="id_post", columns={"id_post"}), @ORM\Index(name="id_author", columns={"id_author"})})
 * @ORM\Entity
 */
class PostLike extends AbstractEntity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_post_like", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPostLike;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_create_at", type="datetime", nullable=false)
     */
    private $dtCreateAt = 'CURRENT_TIMESTAMP';

    /**
     * @var \Common\Entity\Post
     *
     * @ORM\ManyToOne(targetEntity="Common\Entity\Post")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_post", referencedColumnName="id_post")
     * })
     */
    private $idPost;

    /**
     * @var \Common\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="Common\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_author", referencedColumnName="id_user")
     * })
     */
    private $idAuthor;


}

