<?php

namespace FormaLibre\TeachersMobilityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration as EXT;

class TeachersMobilityController extends Controller
{
    /**
     * @EXT\Route("/index", name="formalibre_teachersmobility_index")
     * @EXT\Template
     *
     * @return Response
     */
    public function indexAction()
    {
        throw new \Exception('hello');
    }
}
