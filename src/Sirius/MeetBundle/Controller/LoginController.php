<?php

namespace Sirius\MeetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoginController extends Controller
{
    public function indexAction()
    {

        return $this->render('SiriusMeetBundle:Login:index.html.twig');
    }
}
