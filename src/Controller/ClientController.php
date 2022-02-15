<?php

namespace App\Controller;

use App\Entity\Clients;
use App\Entity\Borrow;
use App\Form\ClientType;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ClientController extends AbstractController
{
    #[Route('/client', name: 'client')]
    public function index(): Response
    {
        return $this->render('client/index.html.twig', [
            'controller_name' => 'ClientController',
        ]);
    }

    #[Route('/client/listing', name: 'client_listing')]
    public function listing(EntityManagerInterface $entity): Response
    {
        $clients = $entity->getRepository(Clients::class)->findAll();

        return $this->render('client/listing.html.twig', [
            'controller_name' => 'clientController',
            'clients' => $clients
        ]);
    }

    #[Route('/client/details/{id}', name: 'client_details')]
    public function showClient(ManagerRegistry $registry, int $id): Response
    {
        $clients = $registry->getRepository(Clients::class)->findOneBy(["id" => $id]);
        $borrowed = $registry->getRepository(Borrow::class)->findBy(["clients" => $clients, "date_rendered" => null]);
        return $this->render('client/details.html.twig', [
            'controller_name' => 'client Detail',
            'clients' => $clients,
            'bookList' => $borrowed
        ]);
    }

    #[Route('/client/create', name: 'client_create')]
    public function createclient(Request $request, ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();

        $client = new Clients();

        $form = $this->createForm(ClientType::class, $client);
        $form->add("submit",SubmitType::class,["attr" => ["class" => "btn btn-primary"]]);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $client = $form->getData();

            $entityManager->persist($client);
            $entityManager->flush();

            return $this->redirectToRoute('client_listing');
        }

        return $this->renderForm('client/create.html.twig', [
            'form' => $form,
        ]);
    }

    #[Route('/client/edit/{id}', name: 'client_edit')]
    public function updateclient(ManagerRegistry $doctrine, Request $request, int $id): Response
    {
        $entityManager = $doctrine->getManager();
        $client = $entityManager->getRepository(Clients::class)->find($id);

        $form = $this->createForm(ClientType::class,$client);
        $form->add("submit",SubmitType::class,["attr" => ["class" => "btn btn-primary"]]);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $client = $form->getData();
            $entityManager->persist($client);
            $entityManager->flush();
            return $this->redirectToRoute('client_listing');
        }
        return $this->renderForm('client/create.html.twig', [
            'controller_name' => 'Edit client',
            'form' => $form
        ]);
    }

    #[Route('/client/delete/{id}', name: 'client_delete')]
    public function deleteclient(ManagerRegistry $doctrine, int $id): Response
    {
        $entityManager = $doctrine->getManager();
        $client = $entityManager->getRepository(Clients::class)->find($id);
        $entityManager->remove($client);
        $entityManager->flush();
        return $this->redirectToRoute('client_listing');
        
    }
}
