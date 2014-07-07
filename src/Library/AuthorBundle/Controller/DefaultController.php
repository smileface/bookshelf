<?php

namespace Library\AuthorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($id)
    {
        $author = $this->getDoctrine()->getManager()
            ->getRepository("LibraryAuthorBundle:Author")->find($id);

        return $this->render('LibraryAuthorBundle:Default:index.html.twig', array('author' => $author));
    }
}
