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

    <h1>Hello, Poring!</h1>

    <?php
        require_once 'mobtable.php';
        $pdo = require_once 'mysql.php';
        $sql = 'SELECT * from mob_db_re WHERE id = 1039';
        $statement = $pdo->query($sql);
        $mob = $statement->fetch();
        if($mob)
        {
            mobtable($mob);
            $sql = 'SELECT * from mob_skill_db_re WHERE mob_id = 1039';
            $statement = $pdo->query($sql);
            $skill = $statement->fetchAll(PDO::FETCH_ASSOC);
            if($skill)
            {
                mobskill($skill);
            }
            else
            {
                echo "No skills.";
            }
            //$itemlist = itemlookup($pdo, $mob);
            loottable($mob);
            if($mob['mode_mvp'] == 1)
            {
                mvptable($mob);
            }
        }
        else
        {
            echo "Problem loading mob.";
        }
        
    ?> 

    <?php include "includes/footer.php" ?>
    
</body>
</html>