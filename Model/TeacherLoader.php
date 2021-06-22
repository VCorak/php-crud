<?php

class TeacherLoader

{
    private array $teachers = [];

    public function __construct()
    {
        $con = Database::connect();
        $handle = $con->prepare('SELECT * FROM teacher');
        $handle->execute();
        $selectedTeachers = $handle->fetchAll();

        foreach ($selectedTeachers as $teacher) {
            $this->teachers[] = new Teacher((int)$teacher['teacher_id'], $teacher['name'], (int)$teacher['email'], $teacher['class_id']);
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

