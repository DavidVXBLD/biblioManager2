<?php

namespace App\Entity;

use App\Repository\BorrowRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BorrowRepository::class)
 */
class Borrow
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Books::class, inversedBy="borrows")
     */
    private $books;

    /**
     * @ORM\ManyToOne(targetEntity=Clients::class, inversedBy="borrows")
     */
    private $clients;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_loan;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $date_rendered;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_rendered_max;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBooks(): ?Books
    {
        return $this->books;
    }

    public function setBooks(?Books $books): self
    {
        $this->books = $books;

        return $this;
    }

    public function getClients(): ?Clients
    {
        return $this->clients;
    }

    public function setClients(?Clients $clients): self
    {
        $this->clients = $clients;

        return $this;
    }

    public function getDateLoan(): ?\DateTimeInterface
    {
        return $this->date_loan;
    }

    public function setDateLoan(\DateTimeInterface $date_loan): self
    {
        $this->date_loan = $date_loan;

        return $this;
    }

    public function getDateRendered(): ?\DateTimeInterface
    {
        return $this->date_rendered;
    }

    public function setDateRendered(?\DateTimeInterface $date_rendered): self
    {
        $this->date_rendered = $date_rendered;

        return $this;
    }

    public function getDateRenderedMax(): ?\DateTimeInterface
    {
        return $this->date_rendered_max;
    }

    public function setDateRenderedMax(\DateTimeInterface $date_rendered_max): self
    {
        $this->date_rendered_max = $date_rendered_max;

        return $this;
    }
}
