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

    public function addClass($name, $location, $teacherId) { // connecting teacher with the class
        $con = Database::connect();
        $handle = $con->prepare('INSERT INTO class (name, location, teacher_id) VALUES(:name, :location, :teacherid)');
        $handle->bindValue(':name', $name);
        $handle->bindValue(':location', $location);
        $handle->bindValue(':teacherid', $teacherId);
        $handle->execute();
    }

    public function deleteCampusClassById($id)
    {
        $con = Database::connect();
        $handle = $con->prepare('UPDATE student SET class_id = NULL WHERE class_id = :id'); // if I want to remove class id from student (class_id= null), first update it in student then...
        $handle->bindValue(':id', $id);
        $handle->execute();
        $handle = $con->prepare('DELETE FROM class WHERE class_id = :id'); // ...delete connected class_id between student and class
        $handle->bindValue(':id', $id);
        $handle->execute();
    }

    public function updateCampusClassById($name, $location, $teacherId, $id) // just updating the class value if I change the class??
    {
        $con = Database::connect();
        $handle = $con->prepare('UPDATE class set name = :name, location = :location, teacher_id = :teacherId WHERE class_id = :id ');
        $handle->bindValue(':name', $name);
        $handle->bindValue(':location', $location);
        $handle->bindValue(':teacherId', $teacherId);
        $handle->bindValue(':id', $id);
        $handle->execute();
    }

}
