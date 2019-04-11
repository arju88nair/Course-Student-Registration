<?php

include_once 'controllers/StudentController.php';
include_once 'controllers/CourseController.php';
include_once 'controllers/RegistrationController.php';
include_once 'controllers/Controller.php';

// Grabs the URI and breaks it apart in case we have querystring stuff
$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);

// Checking for resources and image files to route it differently
if (preg_match('/\.(?:png|jpg|jpeg|gif|js|css)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // Serve the requested resource as-is.
}

// Instance of the controllers
$studentController = new \controllers\StudentController();
$courseController = new \controllers\CourseController();
$registrationController = new \controllers\RegistrationController();
$controller = new \controllers\Controller();


// Routing it up!
switch ($request_uri[0]) {
    case '/students':
        return $studentController->index();
        break;
    case '/addStudent':
        return $studentController->add();
        break;
    case '/editView':
        return $controller->editView();
        break;
    case '/edit':
        return $controller->edit();
        break;
    case '/delete':
        return $controller->delete();
        break;
    case '/courses':
        return $courseController->index();
        break;
    case '/add':
        return $controller->add();
        break;
    case '/registrations':
        return $registrationController->index();
        break;
    case '/register':
        return $controller->add();
        break;
//    case '/editReg':
//        return $registrationController->edit();
//        break;
    default:
        echo "404 not found";
        break;
}
