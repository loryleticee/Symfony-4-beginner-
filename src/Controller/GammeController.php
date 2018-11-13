<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Note;
use App\Entity\Accord;
use App\Entity\Genre;
use App\Form\GenreType;
use App\Form\AccordType;
use App\Form\NoteType;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\FormRenderer;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Request;
//use Symfony\Component\Form\Tests\Fixtures\Type;

class GammeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(Accord $accord = null)
    {
       /* if(!$accord){
            $accord= new Accord();
        }

        $form=$this->createForm(TpeType::class ,$note );
        */
        return $this->render('gamme/index.html.twig',[
        'controller_name' => 'GammeController']);
    }

    /**
     * @Route("/administrer", name="administrer")
     */
    public function add(Note $note = null ,Accord $accord = null,Genre $genre = null ,Request $request,ObjectManager $manager)
    {  
       
        //Type par default 
        $manager = $this->getDoctrine()->getRepository('App:Genre');
        $defaultType = $manager->find(2);

        if(!$accord){
            $accord = new Accord();
        }
        if(!$note){
            $note = new Note();
        }

        $formGenre=$this->createForm(AccordType::class ,$accord ,array('typeParDefault'=> $defaultType));
        $formNote=$this->createForm(NoteType::class ,$note);


        if($request->isMethod('POST') && $request->request->count() > 0){

           // dump($request->request->all());die; 

           //Recupere le genre selectionné dans la liste 'M' par défault
            $leGenre = $request->request->get('genre');

            //Recupere le repository Genre 
            $manager = $this->getDoctrine()->getRepository('App:Genre');
            /*Recupere l'objet $genre avec l'id passé en parametre
            *@param Genre object 
            */
            $leGenre = $manager->find($leGenre["nom"]);
            /*Recupere le nom de l'objet 
            @param string
            */
            $leGenre = $leGenre->getNom();
        

            //Recupere les notes selectionnés
            $lesNotes = $request->request->get('note');
            //Recupere le repository Note
            $manager = $this->getDoctrine()->getRepository('App:Note');
            /*Recupere l'objet $note avec l'id passé en parametre
            *@param Note object 
            */
            $note = $manager->find($lesNotes["nom"][0]);
            /*Recupere le nom de l'objet 
            @param string
            */
            $nomNote = $note->getNom();

            //
            $accord->setNom($nomNote.' '.$leGenre);

            
            
            for($i=0;$i<count($lesNotes['nom']);$i++){
                $note = $manager->find($lesNotes['nom'][$i]);
                $accord->addNote($note);
            }
            
            
            /*
            $i = 0;
            foreach($lesNotes as $item ){
                dump($item);
                $note = $manager->findByNom($item);

                $accord->addNote($note);

                $i++;
            }    
            dump($accord);die;
            */

            
                $manager = $this->getDoctrine()->getManager();
                $manager->persist($accord);
                $manager->flush();
                return $this->redirectToRoute('administrer');
            
           
        }

        $manager = $this->getDoctrine()->getRepository('App:Accord');
        $accord = $manager->findAll();

        return $this->render('gamme/ajout.html.twig', [
            'formGenre' => $formGenre->createView(),
            'formNote'=> $formNote->createView(),
            'NewChord'=> $accord,
        ]);
    }
}
