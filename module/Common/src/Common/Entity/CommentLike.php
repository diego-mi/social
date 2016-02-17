<?php

namespace Common\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommentLike
 *
 * @ORM\Table(name="comment_like", indexes={@ORM\Index(name="id_author", columns={"id_author"}), @ORM\Index(name="id_comment", columns={"id_comment"})})
 * @ORM\Entity
 */
class CommentLike extends AbstractEntity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_comment_like", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCommentLike;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_create_at", type="datetime", nullable=false)
     */
    private $dtCreateAt = 'CURRENT_TIMESTAMP';

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
     * @var \Common\Entity\Comment
     *
     * @ORM\ManyToOne(targetEntity="Common\Entity\Comment")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_comment", referencedColumnName="id_comment")
     * })
     */
    private $idComment;


}

