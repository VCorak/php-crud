<?php
declare(strict_types = 1);

class CampusClassController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {

        $loaderClasses = new CampusClassLoader();
        $loaderTeacher = new TeacherLoader();
        
        if (isset($POST['name']) and isset($POST['location']) and isset($POST['add'])) {
            $loaderClasses->addClass($POST['name'], $POST['location'], $POST['teacherId']);
        }

        $allClasses = $loaderClasses->getClasses();
        $allTeachers = $loaderTeacher->getTeachers();


        require 'View/CampusClass.php';
    }
}
