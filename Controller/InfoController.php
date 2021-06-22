<?php
declare(strict_types = 1);

class InfoController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {

        // $loader is array filled with objects
        $loader = new StudentLoader();
        $allStudents = $loader->getStudents();
        var_dump($allStudents);

        $loaderTeacher = new TeacherLoader();
        $allTeachers = $loaderTeacher->getTeachers();
        var_dump($allTeachers);

        $loaderClasses = new CampusClassLoader();
        $allClasses = $loaderClasses->getClasses();
        var_dump($allClasses);


        require 'View/info.php';
    }
}
