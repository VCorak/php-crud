<?php

class TeacherLoader

{
    private array $teachers;

    public function __construct()
    {
        $con = Database::connect();
        $handle = $con->prepare('SELECT * FROM teachers');
        $handle->execute();
        $selectedTeachers = $handle->fetchAll();

        foreach ($selectedTeachers as $teacher) {
            $this->teachers[] = new Teacher((int)$teacher['id'], $teacher['class_id'], $teacher['name'], (int)$teacher['email']);
        }
    }

    public function getTeachers(): array
    {
        return $this->teachers;
    }

    public function getTeachersById(int $id): Teacher
    {
        foreach ($this->teachers as $teacher) {
            if ($teacher->getId() === $id) {
                return $teacher;
            }
        }
    }
}
