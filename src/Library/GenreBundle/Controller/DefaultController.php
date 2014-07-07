<?php

namespace Library\GenreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($id)
    {
        $genre = $this->getDoctrine()->getManager()
            ->getRepository("LibraryGenreBundle:Genre")->find($id);

        return $this->render('LibraryGenreBundle:Default:index.html.twig', array('genre' => $genre));
    }
}
