<?php

namespace App\Entity;

use App\Repository\AmenagementsRepository;
use Doctrine\ORM\Mapping as ORM;
use Cocur\Slugify\Slugify;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass=AmenagementsRepository::class)
 * @UniqueEntity("title")
 */
class Amenagements
{

    const TYPE = [
        0 => 'design-interieur',
        1 => 'architecture'
    ];


    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     *@Assert\Length(min=10)
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     *@Assert\Length(min=10)
     */
    private $description;

    /**
     * @ORM\Column(type="text")
     *@Assert\Length(min=10)
     */
    private $content;

    /**
     * @ORM\Column(type="integer")
     */
    private $type;




    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }
    public function getSlug(): string
    {
        return (new Slugify())->Slugify($this->title);
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(int $type): self
    {
        $this->type = $type;

        return $this;
    }
}
