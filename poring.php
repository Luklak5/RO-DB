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
        $pdo = require_once 'mysql.php';
        $sql = 'SELECT * from mob_db_re WHERE id = 1002';
        $statement = $pdo->query($sql);
        $mob = $statement->fetchAll(PDO::FETCH_ASSOC);
        foreach ($mob as $row) {
            echo 'Name: '. $row['name_english'] .', Level: '. $row['level'] . ', HP: '. $row['hp'] .', Base EXP: '. $row['base_exp'];
        }
    ?> 

    <div class="row mb-3 text-center">
        <div class="col-md-4 grid-border text-center">.col-md-4</div>
        <div class="col-md-8 grid-border">
            <div class="pb-3 text-center">
                .col-md-8
            </div>
            <div class="row">
                <div class="col-md-6 grid-border text-center">.col-md-6</div>
                <div class="col-md-6 grid-border text-center">.col-md-6</div>
            </div>
        </div>
    </div>

    <?php include "includes/footer.php" ?>
    
</body>
</html>