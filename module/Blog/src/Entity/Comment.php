<?php

namespace Blog\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table (name="comments",
 *     indexes={
 *         @ORM\Index (name="created_at_idx", columns={"created_at"}),
 *     },
 *     options={"collate":"utf8mb4_unicode_ci", "charset":"utf8mb4"})
 * )
 */
class Comment
{
    /**
     * @ORM\Id
     * @ORM\Column (name="id", type="integer")
     * @ORM\GeneratedValue
     */
    private int $id;

    /**
     * @ORM\Column (name="body", type="text", length=65535)
     */
    private string $body;

    /**
     * @var Post|null
     * @ORM\ManyToOne (targetEntity="Blog\Entity\Post")
     * @ORM\JoinColumns ({
     * @ORM\JoinColumn (name="post_id", referencedColumnName="id")
     * })
     */
    private ?Post $post;

    /**
     * @var \DateTime
     *
     * @ORM\Column (name="created_at", type="datetime")
     */
    private \DateTime $createdAt;

    /**
     * @throws \Exception
     */
    public function __construct()
    {
        $this->createdAt = createDateTimeUtc();
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getBody(): string
    {
        return $this->body;
    }

    public function setBody(string $body): self
    {
        $this->body = $body;

        return $this;
    }

    public function setPost(Post $post): self
    {
        if ($this->post !== $post) {
            $post->addComments($this);
        }
        $this->post = $post;

        return $this;
    }

    public function getPost(): Post
    {
        return $this->post;
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
    public function setCreatedAt(\DateTime $createdAt): Comment
    {
        $this->createdAt = $createdAt;

        return $this;
    }

}
