<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Users;
use App\Form\SinUpType;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class SecurityController extends AbstractController
{   
    /**
     * @Route("/signup", name="security_signup")
     */
    public function registration(UserPasswordEncoderInterface $encoder ,Request $request,ObjectManager $manager ){
        $user = new Users();;

        $form = $this->createForm(SinUpType::class, $user);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $hash = $encoder->encodePassword($user,$user->getPassword());

            $user->setPassword($hash);

            $manager->persist($user);
            
            $manager->flush();
             
            return $this->redirectToRoute('login');
        }
        return $this->render('security/signup.html.twig',[
            'formUser' => $form->createView()
        ]);
    }
    /**
     * @Route("/login", name = "secure_login")
     */
    public function login(){
        return $this->render('security/login.html.twig');
    }
     /**
     * @Route("/signout", name = "secure_logout")
     */
    public function logout(){
        return ; 
    }
}
