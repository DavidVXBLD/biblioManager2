<?php

namespace App\Controller;

use App\Entity\Books;
use App\Form\BookType;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BookController extends AbstractController
{
    #[Route('/book', name: 'book')]
    public function index(): Response
    {
        return $this->render('book/index.html.twig', [
            'controller_name' => 'BookController',
        ]);
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

}
