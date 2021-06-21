<?php
declare(strict_types=1);

class Student extends Teacher

{

    private int $classId;

    public function __construct(int $id, string $name, string $email, int $classId)
    {

        $this->classId = $classId;
       parent::__construct($id, $name, $email);

    }

    // GETTERS

    public function getClassId(): int
    {
        return $this->classId;
    }


}
