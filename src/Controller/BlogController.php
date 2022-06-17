<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\User;
use App\Repository\UserRepository;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="app_blog")
     */
    public function index(UserRepository $userRepo): Response
    {
        $repo = $this->getDoctrine()->getRepository(User::class);


        $users = $userRepo->findAll();

        foreach($users as $user){
            $nom=$user->getNom();
        }

        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
            'users' => $users
        ]);
    }

    /**
     * @Route("/", name="home")
     */

   public function home(){
        return $this->render('blog/home.html.twig',[
            'title' => "Bienvenu",
        ]);
   } 
     /**
     * @Route("/form", name="home")
     */
   public function form(){
        return $this->render('blog/form.html.twig',[
            
        ]);
   } 
}
