<?php

namespace App\Controller;

use App\Entity\Books;
use App\Entity\Borrow;
use App\Form\BookType;
use App\Entity\Clients;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BookController extends AbstractController
{
    #[Route('/book', name: 'book')]
    public function index(ManagerRegistry $doctrine): Response
    {
        
    }

    #[Route('/book/listing', name: 'book_listing')]
    public function listing(EntityManagerInterface $entity): Response
    {
        $books = $entity->getRepository(Books::class)->findAll();
        return $this->render('book/listing.html.twig', [
            'controller_name' => 'BookController',
            'books' => $books
        ]);
    }

    #[Route('/book/create', name: 'book_create')]
    public function createBook(Request $request, ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();

        $book = new Books();

        $form = $this->createForm(BookType::class, $book);
        $form->add("submit",SubmitType::class,["attr" => ["class" => "btn btn-primary"]]);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $book = $form->getData();

            $entityManager->persist($book);
            $entityManager->flush();

            return $this->redirectToRoute('book_listing');
        }

        return $this->renderForm('book/create.html.twig', [
            'form' => $form,
        ]);
    }

    #[Route('/book/edit/{id}', name: 'book_edit')]
    public function updateBook(ManagerRegistry $doctrine, Request $request, int $id): Response
    {
        $entityManager = $doctrine->getManager();
        $book = $entityManager->getRepository(Books::class)->find($id);

        $form = $this->createForm(BookType::class,$book);
        $form->add("submit",SubmitType::class,["attr" => ["class" => "btn btn-primary"]]);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $book = $form->getData();
            $entityManager->persist($book);
            $entityManager->flush();
            return $this->redirectToRoute('book_listing');
        }
        return $this->renderForm('book/create.html.twig', [
            'controller_name' => 'Edit Book',
            'form' => $form
        ]);
    }

    #[Route('/book/delete/{id}', name: 'book_delete')]
    public function deleteBook(ManagerRegistry $doctrine, Request $request, int $id): Response
    {
        $entityManager = $doctrine->getManager();
        $book = $entityManager->getRepository(Books::class)->find($id);
        $entityManager->remove($book);
        $entityManager->flush();
        return $this->redirectToRoute('book_listing');
        
    }

    #[Route('/book/borrow/{id}', name: 'book_borrow')]
    public function borrow(ManagerRegistry $doctrine, Request $request, int $id): Response
    {
        $entityManager = $doctrine->getManager();
        $book = $entityManager->getRepository(Books::class)->findOneBy(['id'=>$id]);
        
        $borrow = new Borrow;
            $borrow->setDateLoan(new \DateTime("now"));
            $borrow->setDateRenderedMax(new \DateTime("+15 days"));
            $borrow->setBooks($book);

        $form = $this->createFormBuilder($borrow)
        ->add("Clients", EntityType::class, [
            "label" => "Emprunteur",
            "class" => Clients::class,
            "attr" => ['class' => 'form-control my-4'],
            "choice_label" => 'lastName',
        ])
        ->add('save', SubmitType::class, [
            'label' => "Valider",
            "attr" => ["class' => 'btn btn-primary"]
        ])
        ->getForm();

        $form -> handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $update = $form->getData();
            
            $book->setAvailable(1);

            $borrow->setClients($update->getClients());

            $entityManager->persist($borrow);
            $entityManager->flush();

            return $this->redirectToRoute('book_listing');
        } 
        
        return $this->renderForm('book/borrow.html.twig', [
            'form' => $form
        ]);
    }
}
