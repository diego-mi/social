<?php

namespace Common\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comment
 *
 * @ORM\Table(name="comment", indexes={@ORM\Index(name="id_author_comment", columns={"id_author_comment"}), @ORM\Index(name="id_post_comment", columns={"id_post_comment"})})
 * @ORM\Entity
 */
class Comment extends AbstractEntity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_comment", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idComment;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_post_comment", type="integer", nullable=false)
     */
    private $idPostComment;

    /**
     * @var string
     *
     * @ORM\Column(name="str_content_comment", type="blob", length=65535, nullable=false)
     */
    private $strContentComment;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_create_at_comment", type="datetime", nullable=false)
     */
    private $dtCreateAtComment = 'CURRENT_TIMESTAMP';

    /**
     * @var \Common\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="Common\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_author_comment", referencedColumnName="id_user")
     * })
     */
    private $idAuthorComment;


}

