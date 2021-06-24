<?php

class TeacherLoader

{
    private array $teachers = [];

    public function __construct()
    {

        $this->loadTeachers();
    }

    public function getTeachers(): array
    {
        $this->loadTeachers();
        return $this->teachers;
    }

    public function loadTeachers() {
        $con = Database::connect();
        $handle = $con->prepare('SELECT * FROM teacher');
        $handle->execute();
        $selectedTeachers = $handle->fetchAll();
        $this->teachers = [];

        foreach ($selectedTeachers as $teacher) {
            $this->teachers[] = new Teacher((int)$teacher['teacher_id'], $teacher['name'], $teacher['email']);
        }
    }

    public function getTeachersById(int $id): Teacher
    {
        foreach ($this->teachers as $teacher) {
            if ($teacher->getId() === $id) {
                return $teacher;
            }
        }
    }

    public function addTeacher($name, $email) {
        $con = Database::connect();
        $handle = $con->prepare('INSERT INTO teacher(name, email) VALUES (:name, :email)');
        $handle->bindValue(':name', $name);
        $handle->bindValue(':email', $email);
        $handle->execute();
    }

    public function deleteTeacherById($id)
    {
        $con = Database::connect();
        $handle = $con->prepare('DELETE FROM teacher WHERE teacher_id = :id');
        $handle->bindValue(':id', $id);
        $handle->execute();
    }

    public function updateTeacherById($name, $email, $id)
    {
        $con = Database::connect();
        $handle = $con->prepare('UPDATE teacher set name = :name, email = :email WHERE teacher_id = :id');
        $handle->bindValue(':name', $name);
        $handle->bindValue(':email', $email);
        $handle->bindValue(':id', $id);
        $handle->execute();
    }
}

