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
        require_once 'mobtable.php';
        $mobid = $_GET['id'];
        if ($mobid == null) {
            header("Location: selectmob.php");
            die();
        }
        $pdo = require_once 'mysql.php';
        $sql = 'SELECT * from mob_db_re WHERE id = ' . $mobid;
        $statement = $pdo->query($sql);
        $mob = $statement->fetch();
        if($mob)
        {
            mobtable($mob);
            $sql = 'SELECT * from mob_skill_db_re WHERE mob_id =' . $mobid . ' ORDER BY STATE ASC';
            $statement = $pdo->query($sql);
            $skill = $statement->fetchAll(PDO::FETCH_ASSOC);
            mobskill($skill);
            $items = itemarray($mob);
            if(!empty($items))
            {
                $drops = droparray($mob);
                $sql = 'SELECT * from item_db_re where name_aegis in (';
                foreach($items as $item)
                {
                    $sql = $sql . '\'' . $item . '\'';
                    if($item != $items[array_key_last($items)])
                    {
                        $sql = $sql . ', ';
                    }
                }
                $sql = $sql . ')';
                $statement = $pdo->query($sql);
                $itemlist = $statement->fetchAll(PDO::FETCH_ASSOC);
                //loottable($itemlist, $drops);
                loottable2($itemlist, $drops);
            }
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