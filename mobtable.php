<?php

require_once 'helper.php';
function mobtable($row)
{
    echo "<div class=\"container text-center mb-3\">";
    echo "<div class=\"row mb-3\">";
        echo "<div class=\"col-md-4 grid-border text-center\">Mob Sprite</div>";
        echo "<div class=\"col-md-8 grid-border text-center\">";
            echo "<div class=\"pb-3 text-center\">".$row['name_english']. "</div>";
            echo "<div class=\"row\">";
                echo "<div class=\"col grid-border text-center\"> Level: ". $row['level'] ."</div>";
                echo "<div class=\"col grid-border text-center\"> HP: ". $row['hp'] ."</div>";
            echo "</div>";
            echo "<div class=\"row\">";
                echo "<div class=\"col grid-border text-center\"> Element: ". $row['element'] . ' ' . $row['element_level'] . "</div>";
                echo "<div class=\"col grid-border text-center\"> Race: ". $row['race'] ."</div>";
            echo "</div>";
            echo "<div class=\"row\">";
                echo "<div class=\"col grid-border text-center\"> Size: ". $row['size'] ."</div>";
                echo "<div class=\"col grid-border text-center\"> Attack Range: ". $row['attack_range'] ."</div>";
            echo "</div>"; 
            echo "<div class=\"row\">";
                echo "<div class=\"col grid-border text-center\"> Base EXP: ". $row['base_exp'] ."</div>";
                echo "<div class=\"col grid-border text-center\"> Job EXP: ". $row['job_exp'] ."</div>";
            echo "</div>";
            echo "<div class=\"row\">";
                echo "<div class=\"col grid-border text-center\"> Attack: ". $row['attack'] ."</div>";
                echo "<div class=\"col grid-border text-center\"> Magic Attack: ". $row['attack2'] ."</div>";
            echo "</div>";
            echo "<div class=\"row\">";
                echo "<div class=\"col grid-border text-center\"> Defense: ". $row['defense'] . ' + '. NHandler($row['resistance']) ."</div>";
                echo "<div class=\"col grid-border text-center\"> Magic Defense: ". $row['magic_defense'] . ' + '. NHandler($row['magic_resistance']) ."</div>";
            echo "</div>";  
        echo "</div>";
    echo "</div>";
    echo "</div>";

    echo "<div class=\"container grid-border text-center mb-3\">";
        echo "<div class=\"row grid-border\">";
            echo "<div class=\"col text-center\">STR</div>";
            echo "<div class=\"col text-center\">AGI</div>";
            echo "<div class=\"col text-center\">VIT</div>";
            echo "<div class=\"col text-center\">INT</div>";
            echo "<div class=\"col text-center\">DEX</div>";
            echo "<div class=\"col text-center\">LUK</div>";
        echo "</div>";
        echo "<div class=\"row\">";
            echo "<div class=\"col text-center\">" . NHandler($row['str']) . "</div>";
            echo "<div class=\"col text-center\">" . NHandler($row['agi']) . "</div>";
            echo "<div class=\"col text-center\">" . NHandler($row['vit']) . "</div>";
            echo "<div class=\"col text-center\">" . NHandler($row['int']) . "</div>";
            echo "<div class=\"col text-center\">" . NHandler($row['dex']) . "</div>";
            echo "<div class=\"col text-center\">" . NHandler($row['luk']) . "</div>";
        echo "</div>";
    echo "</div>";
}

function mobskill($skill)
{
    echo "<div class=\"container grid-border text-center mb-3\">";
        echo "<div class=\"row grid-border\">";
            echo "<div class=\"col text-center\">Mob skills</div>";
        echo "</div>";
        foreach ($skill as $row) {
            echo "<div class=\"row\">";
                echo "<div class=\"col text-center\">Skill: ". skillname($row['INFO']) .", Level: ". $row['SKILL_LV'] . ", State: ". $row['STATE'] . ", Rate: " . rate($row['RATE']) . "</div>";
            echo "</div>";
        }
    echo "</div>";
}

function loottable($row)
{
    echo "<div class=\"container grid-border text-center mb-3\">";
        echo "<div class=\"row grid-border\">";
            echo "<div class=\"col text-center\">Loot</div>";
        echo "</div>";
        echo "<div class=\"row\">";
            echo "<div class= \"col text-center\">" . lootslot($row['drop1_item'], $row['drop1_rate']) . "</div>";
            echo "<div class= \"col text-center\">" . lootslot($row['drop2_item'], $row['drop2_rate']) . "</div>";
            echo "<div class= \"col text-center\">" . lootslot($row['drop3_item'], $row['drop3_rate']) . "</div>";
        echo "</div>";
        echo "<div class=\"row\">";
            echo "<div class= \"col text-center\">" . lootslot($row['drop4_item'], $row['drop4_rate']) . "</div>";
            echo "<div class= \"col text-center\">" . lootslot($row['drop5_item'], $row['drop5_rate']) . "</div>";
            echo "<div class= \"col text-center\">" . lootslot($row['drop6_item'], $row['drop6_rate']) . "</div>";
        echo "</div>";
        echo "<div class=\"row\">";
            echo "<div class= \"col text-center\">" . lootslot($row['drop7_item'], $row['drop7_rate']) . "</div>";
            echo "<div class= \"col text-center\">" . lootslot($row['drop8_item'], $row['drop8_rate']) . "</div>";
            echo "<div class= \"col text-center\">" . lootslot($row['drop9_item'], $row['drop9_rate']) . "</div>";
        echo "</div>";
    echo "</div>";
}

function itemlookup($pdo, $mob)
{
    $valid = 0;
    $sql = "select * from item_db_re where name_aegis IN (";
    if($mob['drop1_item'] != null)
    {
        $sql = $sql . $mob['drop1_item'] . ", ";
        $valid = 1;
    }
    if($mob['drop2_item'] != null)
    {
        $sql = $sql . $mob['drop2_item'] . ", ";
        $valid = 1;
    }
    if($mob['drop3_item'] != null)
    {
        $sql = $sql . $mob['drop3_item'] . ", ";
        $valid = 1;
    }
    if($mob['drop4_item'] != null)
    {
        $sql = $sql . $mob['drop4_item'] . ", ";
        $valid = 1;
    }
    if($mob['drop5_item'] != null)
    {
        $sql = $sql . $mob['drop5_item'] . ", ";
        $valid = 1;
    }
    if($mob['drop6_item'] != null)
    {
        $sql = $sql . $mob['drop6_item'] . ", ";
        $valid = 1;
    }
    if($mob['drop7_item'] != null)
    {
        $sql = $sql . $mob['drop7_item'] . ", ";
        $valid = 1;
    }
    if($mob['drop8_item'] != null)
    {
        $sql = $sql . $mob['drop8_item'] . ", ";
        $valid = 1;
    }
    if($mob['drop9_item'] != null)
    {
        $sql = $sql . $mob['drop9_item'] . ", ";
        $valid = 1;
    }
    $sql = $sql . ")";
    if($valid == 0)
        return null;
    $statement = $pdo->query($sql);
    $itemlist = $statement->fetchAll(PDO::FETCH_ASSOC);
}                

function mvptable($row)
{
    echo "<div class=\"container text-center grid-border mb-3\">";
        echo "<div class=\"row grid-border\">";
            echo "<div class=\"col text-center\">MVP Boss</div>";
        echo "</div>";
        echo "<div class=\"row\">";
            echo "<div class=\"col text-center\">MVP Exp: " . $row['mvp_exp'] . "</div>";
        echo "</div>";
        echo "<div class=\"row\">";
            echo "<div class= \"col text-center\">" . lootslot($row['mvpdrop1_item'], $row['mvpdrop1_rate']) . "</div>";
            echo "<div class= \"col text-center\">" . lootslot($row['mvpdrop2_item'], $row['mvpdrop2_rate']) . "</div>";
            echo "<div class= \"col text-center\">" . lootslot($row['mvpdrop3_item'], $row['mvpdrop3_rate']) . "</div>";
        echo "</div>";
    echo "</div>";
}