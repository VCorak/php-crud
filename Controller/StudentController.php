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

        if (isset($GET['id'])) {
            $studentDetails = $loader->getStudentsById((int) $GET['id']);
            require 'View/studentDetails.php';
        } else {

            if (isset($POST['name']) and isset($POST['email']) and isset($POST['add'])) {
                $loader->addStudent($POST['name'], $POST['email'], $POST['classId']);
            } elseif (isset($POST['delete'])) {
                $loader->deleteStudentById($POST['delete']);
            } elseif (isset($POST['update'])) {
                $loader->updateStudentById($POST['name'], $POST['email'], $POST['classId'], $POST['update']);
            }

            $allStudents = $loader->getStudents();
            $allClasses = $loader2->getClasses();

            require 'View/student.php';
        }
    }
}
