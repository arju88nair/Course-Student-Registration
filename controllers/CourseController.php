<?php

/**
 * Written by Nair
 */


namespace controllers;
include_once 'utils/ControllerAbstract.php';
include_once 'utils/View.php';

class CourseController  extends \ControllerAbstract
{


    /**
     * CourseController constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }


    /**
     * Student route
     */
    public function index()
    {
        $courses = $this->conn->selectFreeRun("select * from courses where active=1");
        $view = new \View('course');
        $view->assign('courses', $courses);
    }


}