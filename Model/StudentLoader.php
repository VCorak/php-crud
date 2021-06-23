<?php

class StudentLoader

{
    private array $students = [];

    public function __construct()
    {
        $this->loadStudents();

    }


    public function getStudents(): array
    {
        $this->loadStudents();
        return $this->students;
    }


    public function loadStudents() {
        $con = Database::connect();
        $handle = $con->prepare('SELECT * FROM student');
        $handle->execute();
        $selectedStudents = $handle->fetchAll();
        $this->students = [];

        foreach ($selectedStudents as $student) {
            $this->students[] = new Student((int)$student['student_id'], $student['name'], $student['email'], (int)$student['class_id']);
        }
    }


    public function getStudentsById(int $id): Student
    {
        foreach ($this->students as $student) {
            if ($student->getId() === $id) {
                return $student;
            }
        }
    }


    public function addStudent($name, $email, $classId) {
        $con = Database::connect();
        $handle = $con->prepare('INSERT INTO student(name, email, class_id) VALUES(:name, :email, :classid)');
        $handle->bindValue(':name', $name);
        $handle->bindValue(':email', $email);
        $handle->bindValue(':classid', $classId);
        $handle->execute();

    }
}
