<?php
declare(strict_types = 1);

class TeacherController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {

        $loaderTeacher = new TeacherLoader();


        if (isset($POST['name']) and isset($POST['email']) and isset($POST['add'])) {
            $loaderTeacher->addTeacher($POST['name'], $POST['email']);
        }

        $allTeachers = $loaderTeacher->getTeachers();


        require 'View/teacher.php';
    }
}
