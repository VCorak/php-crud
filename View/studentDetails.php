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

                    <?php
                    echo '
                    <td>
                    ' . $studentDetails->getId() . ';
                     </td>'
                    ?>
                    <?php
                    echo '
                    <td>
                    ' . $studentDetails->getName() . ';
                     </td>'
                    ?>
                    <?php
                    echo '
                    <td>
                    ' . $studentDetails->getEmail() . ';
                     </td>'
                    ?>
                    <?php
                    echo '
                    <td>
                    ' . $studentDetails->getClassId() . ';
                     </td>'
                    ?>


                </tr>


            </table>
        </form>
    </section>


<?php require 'includes/footer.php' ?>