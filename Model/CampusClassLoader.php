<?php


class CampusClassLoader
{
    private array $classes;


    public function __construct()
    {
        $con = Database::openConnection();
        $handle = $con->prepare('SELECT * FROM class');
        $handle->execute();
        $selectedClass = $handle->fetchAll();

        foreach ($selectedClass as $class) {
            $this->classes[] = new CampusClass((int)$class['Id'], $class['Name'], $class['Location'],(int)$class['TeacherId']);
        }
    }

    public function getClasses(): array
    {
        return $this->classes;
    }
    public function getClassById(int $id)
    {
        foreach ($this->classes as $class) {
            if ($class->getId() === $id) {
                return $class;
            }
        }
    }

}
