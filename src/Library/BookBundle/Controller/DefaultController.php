<?php

namespace Library\BookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($id)
    {
        $book = $this->getDoctrine()->getManager()
            ->getRepository("LibraryBookBundle:Book")->find($id);

        return $this->render('LibraryBookBundle:Default:index.html.twig', array('book' => $book));
    }
}
