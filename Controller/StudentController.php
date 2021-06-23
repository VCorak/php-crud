<?php
declare(strict_types = 1);

class StudentController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {

        // $loader is array filled with objects
        $loader = new StudentLoader();
        $loader2 = new CampusClassLoader();


        if (isset($POST['name']) and isset($POST['email']) and isset($POST['add'])) {
        $loader->addStudent($POST['name'], $POST['email'], $POST['classId']);
        }

        $allStudents = $loader->getStudents();
        $allClasses = $loader2->getClasses();

        require 'View/student.php';
    }
}
