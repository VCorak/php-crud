<?php require 'includes/header.php' ?>

<section>
    <h4>Teacher Table</h4>
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

            </tr>
            <tr>
                <td></td>
                <td><input id="name" name="name"></td>
                <td><input id="email" name="email"></td>
                <td><select name="classId"></select></td>
                <td>
                    <button name="add" value="add">Add</button>
                </td>
            </tr>
            <?php
            foreach ($allTeachers as $teacherData) {
                echo '<tr>
                    <td>' .$teacherData->getId() .'</td>
                    <td>' .$teacherData->getName() .'</td>
                    <td>' .$teacherData->getEmail() .'</td
                    </tr>';
            }
            ?>

            </td>
            <td>
                <button name="update" value="' . $row->getId() . '">Update</button>
            </td>
            <td>
                <button name="delete" value="' . $row->getId() . '">Delete</button>
            </td>
            </tr>


        </table>
    </form>
</section>



<?php require 'includes/footer.php' ?>
