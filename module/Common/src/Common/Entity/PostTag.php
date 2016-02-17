<?php

namespace Common\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PostTag
 *
 * @ORM\Table(name="post_tag", indexes={@ORM\Index(name="id_post", columns={"id_post", "id_tag"}), @ORM\Index(name="id_tag", columns={"id_tag"})})
 * @ORM\Entity
 */
class PostTag extends AbstractEntity
{
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

    /**
     * @var \Common\Entity\Tag
     *
     * @ORM\ManyToOne(targetEntity="Common\Entity\Tag")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tag", referencedColumnName="id_tag")
     * })
     */
    private $idTag;


}

