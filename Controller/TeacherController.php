<?php
declare(strict_types = 1);

class TeacherController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {

        $loaderTeacher = new TeacherLoader();
        $allTeachers = $loaderTeacher->getTeachers();
        var_dump($allTeachers);



        require 'View/teacher.php';
    }
}
