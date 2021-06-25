<?php require 'includes/header.php' ?>

<section>
    <h4>Teacher Table</h4>
    <p><a href="index.php">Back to homepage</a></p>
    <p><a href="index.php?page=student">Student Table</a></p>
    <p><a href="index.php?page=class">Class Table</a></p>
    <p><a href="index.php?page=teacher">Teacher Table</a></p>


    <form action="" method="POST">
        <h3><?php if(isset($teacherMessage)){echo( $teacherMessage) ;} ?></h3>
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
               
                <td>
                    <button name="add" value="add">Add</button>
                </td>
            </tr>
            <?php
            foreach ($allTeachers as $teacherData) {
                echo '<tr>
                    <td>' .$teacherData->getId() .'</td>
                    <td>' .$teacherData->getName() .'</td>
                    <td>' .$teacherData->getEmail() .'</td>
                     <td>
                <button name="update" value="' . $teacherData->getId() . '">Update</button>
            </td>
            <td>
                <button name="delete" value="' . $teacherData->getId() . '">Delete</button>
            </td>
            <td>
            <a href="index.php?page=teacher&id=' .$teacherData->getId() .'">Details</a>
</td>
                    </tr>';
            }
            ?>

        </table>
    </form>
</section>



<?php require 'includes/footer.php' ?>
