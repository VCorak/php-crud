<?php


class CampusClassLoader
{
    private array $classes = [];


    public function __construct()
    {
        $this->loadClasses();
    }

    public function getClasses(): array
    {
        $this->loadClasses();
        return $this->classes;
    }

    public function loadClasses() {
        $con = Database::connect();
        $handle = $con->prepare('SELECT * FROM class');
        $handle->execute();
        $selectedClass = $handle->fetchAll();
        $this->classes = [];
        foreach ($selectedClass as $class) {
            $this->classes[] = new CampusClass((int)$class['class_id'], $class['name'], $class['location'],(int)$class['teacher_id']);
        }
    }


    public function getClassById(int $id)
    {
        foreach ($this->classes as $class) {
            if ($class->getId() === $id) {
                return $class;
            }
        }
    }

    public function addClass($name, $location, $teacherId) {
        $con = Database::connect();
        $handle = $con->prepare('INSERT INTO class (name, location, teacher_id) VALUES(:name, :location, :teacherid)');
        $handle->bindValue(':name', $name);
        $handle->bindValue(':location', $location);
        $handle->bindValue(':teacherid', $teacherId);
        $handle->execute();
    }

}
