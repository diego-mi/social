<?php

namespace Common\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 *
 * @ORM\Table(name="post", indexes={@ORM\Index(name="id_author", columns={"id_author"}), @ORM\Index(name="privacity_post", columns={"privacity_post"}), @ORM\Index(name="classification_post", columns={"classification_post"})})
 * @ORM\Entity
 */
class Post extends AbstractEntity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_post", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPost;

    /**
     * @var integer
     *
     * @ORM\Column(name="title_post", type="integer", nullable=true)
     */
    private $titlePost;

    /**
     * @var integer
     *
     * @ORM\Column(name="description_post", type="integer", nullable=true)
     */
    private $descriptionPost;

    /**
     * @var integer
     *
     * @ORM\Column(name="content_post", type="integer", nullable=true)
     */
    private $contentPost;

    /**
     * @var integer
     *
     * @ORM\Column(name="type_post", type="integer", nullable=false)
     */
    private $typePost;

    /**
     * @var integer
     *
     * @ORM\Column(name="create_at_post", type="integer", nullable=false)
     */
    private $createAtPost;

    /**
     * @var \Common\Entity\Classification
     *
     * @ORM\ManyToOne(targetEntity="Common\Entity\Classification")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="classification_post", referencedColumnName="id_classification")
     * })
     */
    private $classificationPost;

    /**
     * @var \Common\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="Common\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_author", referencedColumnName="id_user")
     * })
     */
    private $idAuthor;

    /**
     * @var \Common\Entity\Privacity
     *
     * @ORM\ManyToOne(targetEntity="Common\Entity\Privacity")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="privacity_post", referencedColumnName="id_privacity")
     * })
     */
    private $privacityPost;


}

