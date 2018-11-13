<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Users;
use App\Entity\Note;
use App\Form\SinUpType;
use App\Form\NoteType;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Request;

class NoteController extends AbstractController
{   

   
    /**
     * @Route("/note", name="list_note")
     */
    public function index(Note $note = null, ObjectManager $manager, Request $request ){
        $manager = $this->getDoctrine()->getRepository("App:Note");
        $lesNotes = $manager->findAll();

        $form = $this->createForm(NoteType::class,$note);
        return $this->render("note/index.html.twig",[
            'notes' => $lesNotes,
            'form' => $form->createView(),
        ]);

    }
    /**
     * @Route("/addnote", name="add_note")
     */
    public function addNote(Note $note = null, ObjectManager $manager, Request $request){

        if($request->isMethod('POST') && $request->request->count() > 0){
            //Recupere les notes selectionnés
            $dataForm = $request->request->get('note');
            $note = new Note();
            $note->setNom($dataForm['nom']);
            
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($note);
            $manager->flush();
            return $this->redirectToRoute('list_note');
        }

        return $this->render("note/index.html.twig");

    }


    /**
     *@Route("/delnote", name="delete_note")
     */
    public function deleteNote(Note $note = null, ObjectManager $manager, Request $request){

        // if($request->isMethod('POST') && $request->request->count() > 0){
        //     //Recupere les notes selectionnés
        //     $dataForm = $request->request->get('note');
        //     $note = new Note();
        //     $note = $manager->find(dataForm['nom']);
        //     dump($note);die;
            
        //     $manager = $this->getDoctrine()->getManager();
        //     $manager->persist($note);
        //     $manager->flush();
        //     return $this->redirectToRoute('list_note');
        // }

        // return $this->render("note/index.html.twig");

    }
}
