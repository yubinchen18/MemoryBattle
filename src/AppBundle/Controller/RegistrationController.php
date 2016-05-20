<?php

namespace AppBundle\Controller;

use AppBundle\Form\UserTypeUser;
use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Registration Controller
 */
class RegistrationController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request)
    {
        $authenticationUtils = $this->get('security.authentication_utils');

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();
        
        // last email entered by the user
        //$lastEmail = $authenticationUtils->getLastEmail();

        return $this->render(
            'security/login.html.twig',
            array(
                // last username entered by the user
                'last_username' => $lastUsername,
                //'last_email'    => $lastEmail,
                'error'         => $error,
            )
        );
    }
    
    /**
     * @Route("/register", name="register")
     */
    public function registerAction(Request $request)
    {
        // 1) build the form
        $user = new User();
        $form = $this->createForm(UserTypeUser::class, $user);
        
        // 2) handle the submit (will only happen to POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            // 3) Encode the password (you could also do this via Doctrine listener)
            $password = $this->get('security.password_encoder')
                    ->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);
            // Hard code user role ass 'ROLE_USER' on default
            $user->setRole('ROLE_USER');
            
            // 4) save the User!
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            
            // ... do any other work - like sending them on email, etc
            // maybe set a 'flash' success message  for the user
            
            return $this->redirectToRoute('login');
        }
        
        return $this->render(
            'security/register.html.twig',
            array('form' => $form->createView())
        );
    }
    
    
}
