<?php
/**
 * Written by Nair
 */

namespace controllers;
include_once 'utils/ControllerAbstract.php';
include_once 'utils/View.php';

class StudentController extends \ControllerAbstract

{

    /**
     * StudentController constructor.
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
        $students = $this->conn->selectFreeRun("select * from students where active=1");
        $view = new \View('student');
        $view->assign('students', $students);
    }

}