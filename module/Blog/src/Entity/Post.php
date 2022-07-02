<?php

namespace Blog\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table (name="posts",
 *     uniqueConstraints={
 *         @ORM\UniqueConstraint (name="title_idx", columns={"title"}),
 *     },
 *     indexes={
 *         @ORM\Index (name="created_at_idx", columns={"created_at"}),
 *     },
 *     options={"collate":"utf8mb4_unicode_ci", "charset":"utf8mb4"}
 *     )
 */
class Post
{

    /**
     * @throws \Exception
     */
    public function __construct()
    {
        $this->comments = new ArrayCollection();
        $this->createdAt = createDateTimeUtc();
    }

    /**
     * @ORM\Id
     * @ORM\Column (name="id", type="integer")
     * @ORM\GeneratedValue
     */
    private int $id;

    /**
     * @ORM\Column (name="title", type="string")
     */
    private string $title;

    /**
     * @ORM\Column (name="body", type="text", length=65535)
     */
    private string $body;

    /**
     * @property Comment[] $comment
     * @ORM\OneToMany (targetEntity="Comment", mappedBy="post" , cascade={"persist", "remove"})
     */
    private ?ArrayCollection $comments;

    /**
     * @var \DateTime
     *
     * @ORM\Column (name="created_at", type="datetime")
     */
    private \DateTime $createdAt;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): Post
    {
        $this->title = $title;

        return $this;
    }

    public function getBody(): string
    {
        return $this->body;
    }

    public function setBody(string $body): Post
    {
        $this->body = $body;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt(\DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return Collection|Comment[]
     */
    public function getComments(): Collection
    {
        return $this->comments;
    }

    /**
     * @TODO Describe addComments
     * @param Comment $comment
     * @return $this
     */
    public function addComments(Comment $comment): Post
    {
        if (!$this->comments->contains($comment)) {
            $this->comments->add($comment);
            $comment->setPost($this);
        }

        return $this;
    }
}
