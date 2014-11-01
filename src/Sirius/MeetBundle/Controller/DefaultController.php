<?php

namespace Sirius\MeetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SiriusMeetBundle:Default:index.html.twig', array('name' => $name));
    }
}
