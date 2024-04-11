<!DOCTYPE html>
<html data-bs-theme="dark">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/custom.css">
    <script src= "/javascript/bootstrap.bundle.min.js"></script>
    <title>RO Database</title>
</head>
<body>

    <?php include "includes/header.php" ?>
    <?php include "includes/nav.php" ?>

    <?php

        $pdo = require_once 'mysql.php';
        $sql = 'SELECT id, name_english from mob_db_re';
        $statement = $pdo->query($sql);
        $mobs = $statement->fetchAll(PDO::FETCH_ASSOC);
        echo "<div class=\"dropdown\">";
            echo "<button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"> Select Mob</button>";
            echo "<ul class=\"dropdown-menu\">";
            foreach ($mobs as $row) {
                echo "<li><a class=\"dropdown-item\" href=\"mob.php?id=".$row['id']."\">". $row['name_english']."</a></li>";
            }
            echo "</ul>";
        echo "</div>";


    ?>

    <?php include "includes/footer.php" ?>
    
</body>
</html>