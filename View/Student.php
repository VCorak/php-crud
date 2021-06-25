<?php require 'includes/header.php' ?>

<section>
    <h4>Student Table</h4>
    <p><a href="index.php">Back to homepage</a></p>
    <p><a href="index.php?page=student">Student Table</a></p>
    <p><a href="index.php?page=class">Class Table</a></p>
    <p><a href="index.php?page=teacher">Teacher Table</a></p>

    <form action="" method="POST">
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Class name & ID</th>
            </tr>
            <tr>
                <td></td>
                <td><input id="name" name="name"></td>
                <td><input id="email" name="email"></td>
                <td><select name="classId">
                        <?php

                        foreach ($allClasses as $classData) {
                            echo '
                            <option value="' .$classData->getId() .'">
                            ' .$classData->getName() .'
</option>
                            ';
                        }

                        ?>
                    </select></td>
                <td>
                    <button name="add" value="add">Add</button>
                </td>
            </tr>
            <?php
            foreach ($allStudents as $studentData) {
                echo '<tr>
                    <td>' .$studentData->getId() .'</td>
                    <td>' .$studentData->getName() .'</td>
                    <td>' .$studentData->getEmail() .'</td>
                    <td>' .$studentData->getClassId() .'</td>
                    <td>
                <button name="update" value="' . $studentData->getId() . '">Update</button>
            </td>
            <td>
                <button name="delete" value="' . $studentData->getId() . '">Delete</button>
            </td>
                    </tr>';
            }
            ?>

        </table>
    </form>
</section>


<?php require 'includes/footer.php' ?>
