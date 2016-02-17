<?php

namespace Common\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommentEdit
 *
 * @ORM\Table(name="comment_edit", indexes={@ORM\Index(name="id_comment", columns={"id_comment"})})
 * @ORM\Entity
 */
class CommentEdit extends AbstractEntity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_comment_edit", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCommentEdit;

    /**
     * @var string
     *
     * @ORM\Column(name="str_content_comment_edit", type="blob", length=65535, nullable=false)
     */
    private $strContentCommentEdit;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_create_at_comment_edit", type="datetime", nullable=false)
     */
    private $dtCreateAtCommentEdit = 'CURRENT_TIMESTAMP';

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

