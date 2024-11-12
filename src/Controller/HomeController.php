<?php

namespace App\Controller;
use App\Form\ContactType;

use App\Entity\Contact;
use App\Repository\ContactRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home_index")
     */
    #[Route('/', name: 'index')]
    public function index(ContactRepository $contactRepository): Response
    {
        $contacts = $contactRepository->findAll();
        return $this->render('home/index.html.twig', [
            'contacts' => $contacts,
        ]);
    }

    /**
     * @Route("/contact/{id}", name="contact")
     */
    #[Route('/contact/{id}', name: 'contact')]
    public function contact(Contact $contact): Response
    {
        return $this->render('contact/contact.html.twig', [
            'contact' => $contact,
        ]);
    }

    /**
     * @Route("/edit-contact/{id}", name="edit_contact")
     */
    #[Route('/edit-contact/{id}', name: 'edit_contact')]
    public function editContact(Contact $contact, Request $request, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
    
            return $this->redirectToRoute('index');
        }
    
        return $this->render('contact/editContact.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/delete-contact/{id}", name="delete_contact")
     */
    #[Route('/delete-contact/{id}', name: 'delete_contact')]
    public function deleteContact(ContactRepository $contactRepository, EntityManagerInterface $entityManager, Contact $contact): Response
    {
        $entityManager->remove($contact);
        $entityManager->flush();

        return $this->redirectToRoute('index');
    }
    #[Route('/add-contact', name: 'add_contact')]
    public function addContact(Request $request, EntityManagerInterface $entityManager): Response
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
    
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($contact);
            $entityManager->flush();
    
            return $this->redirectToRoute('index');
        }
    
        return $this->render('contact/ajouterContact.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}