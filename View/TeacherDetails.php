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

                  <?php
                    echo '
                    <td>
                    ' . $teacherDetails->getId() . ';
                     </td>'
                    ?>
                  <?php
                  echo '
                    <td>
                    ' . $teacherDetails->getName() . ';
                     </td>'
                  ?>
                  <?php
                  echo '
                    <td>
                    ' . $teacherDetails->getEmail() . ';
                     </td>'
                  ?>

            </tr>

        </table>
    </form>
</section>



<?php require 'includes/footer.php' ?>
