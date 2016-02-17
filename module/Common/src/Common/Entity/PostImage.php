<?php

namespace Common\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PostImage
 *
 * @ORM\Table(name="post_image", indexes={@ORM\Index(name="id_post", columns={"id_post"})})
 * @ORM\Entity
 */
class PostImage extends AbstractEntity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_post_image", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPostImage;

    /**
     * @var string
     *
     * @ORM\Column(name="str_name", type="string", length=100, nullable=false)
     */
    private $strName;

    /**
     * @var \Common\Entity\Post
     *
     * @ORM\ManyToOne(targetEntity="Common\Entity\Post")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_post", referencedColumnName="id_post")
     * })
     */
    private $idPost;


}

