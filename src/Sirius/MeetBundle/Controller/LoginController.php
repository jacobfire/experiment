<?php

namespace Sirius\MeetBundle\Controller;

use Sirius\MeetBundle\Entity\Task;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoginController extends Controller
{
    public function indexAction()
    {
        // create a task and give it some dummy data for this example
        $task = new Task();
        $task->setTask('Write a blog post');
        $task->setDueDate(new \DateTime('tomorrow'));

        $form = $this->createFormBuilder($task)
            ->add('task', 'text')
            ->add('dueDate', 'date')
            ->add('save', 'submit', array('label' => 'Create Task'))
            ->getForm();

        return $this->render('SiriusMeetBundle:Login:index.html.twig', array(
            'form' => $form->createView(),
        ));

        //return $this->render('SiriusMeetBundle:Login:index.html.twig');
    }
}
