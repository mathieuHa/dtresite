<?php

namespace DTRESiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DTRESiteBundle:Default:index.html.twig');
    }

    public function teamAction()
    {
        return $this->render('DTRESiteBundle:Default:team.html.twig');
    }

    public function projectAction()
    {
        return $this->render('DTRESiteBundle:Default:project.html.twig');
    }

    public function eventAction()
    {
        return $this->render('DTRESiteBundle:Default:event.html.twig');
    }

    public function contactAction()
    {
        return $this->render('DTRESiteBundle:Default:contact.html.twig');
    }

    public function aboutAction()
    {
        return $this->render('DTRESiteBundle:Default:about.html.twig');
    }

}
