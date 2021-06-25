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

                <?php
                echo '
                    <td>
                    ' . $campusClassDetails->getId() . ';
                     </td>'
                ?>
                <?php
                echo '
                    <td>
                    ' . $campusClassDetails->getName() . ';
                     </td>'
                ?>
                <?php
                echo '
                    <td>
                    ' . $campusClassDetails->getLocation() . ';
                     </td>'
                ?>
                <?php
                echo '
                    <td>
                    ' . $campusClassDetails->getTeacherId() . ';
                     </td>'
                ?>

            </tr>


        </table>
    </form>
</section>

<?php require 'includes/footer.php'?>
