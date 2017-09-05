<?php
/**
 * Created by PhpStorm.
 * User: benjah
 * Date: 06/09/17
 * Time: 00:58
 */
$students = [
    "Emmanuel"  => 42,
    "Thierry"   => 51,
    "Pascal"    => 45,
    "Eric"      => 48,
    "Nicolas"   => 19
];
// Initialisation du compteur
$count = 0;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Âges des élèves</title>
    <style>.rigth { text-align: right; }</style>
</head>
<body>
<h1>Âges des élèves</h1>
<table>
    <tr>
        <th>Noms</th>
        <th>Âges</th>
    </tr>
    <?php foreach ($students as $name => $age) { ?>
        <tr>
            <td class="rigth"><?php echo $name ?>:</td>
            <td><?php echo $age ?></td>
        </tr>
        <?php
        // On ajoute tout les âges
        $count += $age;
    }
    // Calcul de la moyenne d'âge
    $average = $count / count($students); ?>
</table>
<p>Moyenne d'âge: <?php echo $average ?></p>
</body>
</html>