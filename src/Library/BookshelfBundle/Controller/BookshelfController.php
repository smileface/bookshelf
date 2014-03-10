<?php

namespace Library\BookshelfBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;

// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class BookshelfController extends Controller
{
    /**
     * @Route("/", name="_welcome")
     * @Template()
     */
    public function indexAction()
    {
        return $this->render('LibraryBookshelfBundle:Bookshelf:index.html.twig');
    }

}
