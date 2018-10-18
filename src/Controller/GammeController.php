<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Note;
use App\Entity\Accord;
use App\Form\NoteType;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\FormRenderer;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Validation\Article;

class GammeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(Note $note = null)
    {
        if(!$note){
            $note = new Note();
        }

        $form=$this->createForm(NoteType::class ,$note );

        return $this->render('gamme/index.html.twig',[
        'controller_name' => 'GammeController']);
    }
    /**
     * @Route("/administrer", name="administrer")
     */
    public function add(Note $note = null,Request $request,ObjectManager $manager)
    {

        $form=$this->createForm(NoteType::class ,$note );

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            if($request->request->count() > 0 ){
               
               // $manager->persist($note);
                //$manager->flush();
                dump($request);
            }
        }
        
        return $this->render('gamme/ajout.html.twig', [
            'formAdd' => $form->createView()
        ]);
    }
}
