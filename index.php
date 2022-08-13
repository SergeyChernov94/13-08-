<?php

$array = [["name" => "Sergey"], ["name" => "Pavel"], ["name" => "Boris"], ["name" => "Zhenya"], ["name" => "Max"], ["name" => "Petr"]]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

<?php 
    $fact = isset($_POST["fact"]) ? $_POST["fact"] : '';
    echo $fact;
?>

<?php foreach($array as $item): ?>
    <table>
        <tr>
            <?php foreach($item as $key => $value): ?>
                <th>
                    <?= $key ?>
                </th>
        </tr>

        <tr>
            <?php foreach($item as $key => $value): ?>
                <td>
                    <?= $value ?>
                </td>
                <?php endforeach; ?>
        </tr>
    </table>
    <span><?= $item["name"]?></span>
    <?php endforeach; ?>
    
</body>
</html>
<?php