<?php
/**
 * Created by Nair.
 */

namespace controllers;


class RegistrationController extends \ControllerAbstract
{

    /**
     * Registration constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }


    /**
     * Main route for showing the registration data
     */
    public function index()
    {
        $courses = $this->conn->selectFreeRun("select id,name from courses where active=1");
        $students = $this->conn->selectFreeRun("select id,name from students where active=1");
        $registrations = $this->conn->selectFreeRun("select r.id,c.name course_name,c.duration,c.fee,c.staff,s.name student_name,s.dob,s.qualification,r.active from registrations r join students s on s.id=r.student_id JOIN courses c on c.id=r.course_id where r.active=1 AND s.active=1 AND c.active=1");

        $view = new \View('registration');
        $view->assign('courses', $courses);
        $view->assign('students', $students);
        $view->assign('registrations', $registrations);
    }


//    public function edit()
//    {
//        $controller = new Controller();
//        $escaped = $controller->validate($_POST);
//        extract($escaped);
//    }

}