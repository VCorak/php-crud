<?php require 'includes/header.php'?>
<section>
    <h4>Classes Table</h4>
    <p><a href="index.php">Back to homepage</a></p>
    <p><a href="index.php?page=student">Student Table</a></p>
    <p><a href="index.php?page=class">Classes Table</a></p>
    <p><a href="index.php?page=teacher">Teacher Table</a></p>

    <form action="" method="POST">
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Location</th>
                <th>Teacher ID</th>
            </tr>
            <tr>
                <td></td>
                <td><input id="name" name="name"></td>
                <td><input id="location" name="location"></td>
                <td><select name="teacherId">
                        <?php
                        foreach ($allTeachers as $teachersData) { // dropdown menu for teachers name
                            echo '
                            <option value="' .$teachersData->getId() .'"> 
                            ' .$teachersData->getName() .'
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
            foreach ($allClasses as $classesData) {
                echo '<tr>
                    <td>' .$classesData->getId() .'</td>
                    <td>' .$classesData->getName() .'</td>
                    <td>' .$classesData->getLocation() .'</td>
                    <td>' .$classesData->getTeacherId() .'
             
                   </td>
                <td>    
                <button name="update" value="' . $classesData->getId() . '">Update</button>
            </td>
            <td>
                <button name="delete" value="' . $classesData->getId() . '">Delete</button>
            </td>
            <td>
            <a href="index.php?page=class&id=' .$classesData->getId() .'">Details</a>
</td>
                    </tr>';
            }
            ?>

        </table>
    </form>
</section>
<?php require 'includes/footer.php'?>
