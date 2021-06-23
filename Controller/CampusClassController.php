<?php
declare(strict_types = 1);

class CampusClassController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {

        $loaderClasses = new CampusClassLoader();
        $allClasses = $loaderClasses->getClasses();




        require 'View/CampusClass.php';
    }
}
