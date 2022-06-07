<?php

namespace Blog\Entity;


/**
 * @TODO Describe Post
 *
 * @ORM\Entity
 * @ORM\Table (name='posts')
 */
class Post
{
    /**
     * @ORM\Id
     * @ORM\Column (type="integer")
     * @ORM\GeneratedValue
     * @var int
     */
    private int $id;

    /**
     * @ORM\Column (type="string")
     * @var string
     */
    private string $title;

    /**
     * @var string
     */
    private string $body;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @ORM\Column (type="text")
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return $this->body;
    }

    /**
     * @param string $body
     */
    public function setBody(string $body): void
    {
        $this->body = $body;
    }

}
