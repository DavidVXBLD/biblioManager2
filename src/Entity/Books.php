<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Books
 *
 * @ORM\Table(name="books", indexes={@ORM\Index(name="FK_client_id", columns={"client_id"})})
 * @ORM\Entity
 */
class Books
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=100, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="author", type="string", length=100, nullable=false)
     */
    private $author;

    /**
     * @var string
     *
     * @ORM\Column(name="summary", type="string", length=400, nullable=false)
     */
    private $summary;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="release_date", type="date", nullable=false)
     */
    private $releaseDate;

    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=50, nullable=false)
     */
    private $category;

    /**
     * @var bool
     *
     * @ORM\Column(name="for_child", type="boolean", nullable=false)
     */
    private $forChild;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="available", type="boolean", nullable=true)
     */
    private $available;

    /**
     * @var int|null
     *
     * @ORM\Column(name="client_id", type="integer", nullable=true)
     */
    private $clientid;

    /**
     * @ORM\ManyToMany(targetEntity=Clients::class, inversedBy="Books")
     */
    private $Clients;

    public function __construct()
    {
        $this->Clients = new ArrayCollection();
    }

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

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(string $author): self
    {
        $this->author = $author;

        return $this;
    }

    public function getSummary(): ?string
    {
        return $this->summary;
    }

    public function setSummary(string $summary): self
    {
        $this->summary = $summary;

        return $this;
    }

    public function getReleaseDate(): ?\DateTimeInterface
    {
        return $this->releaseDate;
    }

    public function setReleaseDate(\DateTimeInterface $releaseDate): self
    {
        $this->releaseDate = $releaseDate;

        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(string $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getForChild(): ?bool
    {
        return $this->forChild;
    }

    public function setForChild(bool $forChild): self
    {
        $this->forChild = $forChild;

        return $this;
    }

    public function getAvailable(): ?bool
    {
        return $this->available;
    }

    public function setAvailable(?bool $available): self
    {
        $this->available = $available;

        return $this;
    }

    public function toArray()
    {
        return [
        'id' => $this->getId(),
        'title' => $this->getTitle(),
        'author' => $this->getAuthor(),
        'summary' => $this->getSummary(),
        'releaseDate' => $this->getReleaseDate(),
        'category' => $this->getCategory(),
        'forChild' => $this->getForChild(),
        'available' => $this->getAvailable(),
        'client_id' => $this->getClientId()
        ];
    }

    /**
     * @return Collection|Clients[]
     */
    public function getClients(): Collection
    {
        return $this->Clients;
    }

    public function addClient(Clients $client): self
    {
        if (!$this->Clients->contains($client)) {
            $this->Clients[] = $client;
        }

        return $this;
    }

    public function removeClient(Clients $client): self
    {
        $this->Clients->removeElement($client);

        return $this;
    }
}
