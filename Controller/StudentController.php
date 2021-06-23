<?php
declare(strict_types = 1);

class StudentController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {

        // $loader is array filled with objects
        $loader = new StudentLoader();
        $allStudents = $loader->getStudents();




        require 'View/student.php';
    }
}
