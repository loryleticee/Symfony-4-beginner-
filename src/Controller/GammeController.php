<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Note;
use App\Entity\Accord;
use App\Entity\Genre;
use App\Form\GenreType;
use App\Form\NoteType;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\FormRenderer;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Validation\Article;
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
        //
        $formGenre=$this->createForm(GenreType::class ,$genre ,array('typeParDefault'=>$defaultType));
        $formGenre->handleRequest($request);

        //
        $formNote=$this->createForm(NoteType::class ,$note);
        $formNote->handleRequest($request);

        if($formNote->isSubmitted() && $formNote->isValid()){

            if($request->request->count() > 0 ){
                $manager = $this->getDoctrine()->getManager();
                $manager->persist($accord);
                $manager->flush();
                
                return new Reponse ("vrvrvr");
            }
           
        }
        
        return $this->render('gamme/ajout.html.twig', [
            'formGenre' => $formGenre->createView(),
            'formNote'=> $formNote->createView(),
        ]);
    }
}
