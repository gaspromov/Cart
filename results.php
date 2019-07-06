<?php

include("nvp_data.php");
include("indicator_calculators.php");
include("indicator_stats.php");

if (!isset($_GET["surname"]))
    header('Location: index.php');

$surname = $_GET["surname"];
$name = $_GET["name"];
$father = $_GET["father"];

$sex = $_GET["sex"];

$country = $_GET["country"];
$region = $_GET["region"];
$town = $_GET["town"];

$date = $_GET["date"];
$radio = $_GET["radio"];
$profession = $_GET["profession"];

$growth = $_GET["growth"];
$weight = $_GET["weight"];
$chest = $_GET["chest"];
$waist = $_GET["waist"];

$o = $_GET["firstnorm"];
$p = $_GET["secondnorm"];
$s = $_GET["thirdnorm"];
$n = $_GET["fourthnorm"];
$v = abs($_GET["fifthnorm"]);
$b = $_GET["sixthnorm"];

function get_age_from_date($date) {
    $today = date("Y-m-d");
    $diff = date_diff(date_create($date), date_create($today));
    return $diff->format('%y');
}

$age = get_age_from_date($date);

function generate_table($o, $p, $s, $n, $v, $b, $age, $sex) {
    ?>
    <table border="1px solid black">
        <tr>
            <th>Тесты</th>
            <th>Ваши результаты</th>
            <th>Коэффициент ОУФК*</th>
            <th>Оценка</th>
        </tr>
        <tr>
            <?php
            $result = $o;
            $ratio = ($sex == "male") ?
                get_OUFK_male($o, null, null, null, null, null, $age) :
                get_OUFK_female($o, null, null, null, null, null, $age);
            $score = get_OUFK_score_string(get_OUFK_score($ratio));
            ?>
            <td>Сгибание и разгибание рук в упоре лежа (отжимание) (кол-во раз)
            <td><?php echo $result; ?></td>
            <td><?php echo $ratio; ?></td>
            <td><?php echo $score; ?></td>
        </tr>
        <tr>
            <?php
            $result = $p;
            $ratio = ($sex == "male") ?
                get_OUFK_male(null, $p, null, null, null, null, $age) :
                get_OUFK_female(null, $p, null, null, null, null, $age);
            $score = get_OUFK_score_string(get_OUFK_score($ratio));
            ?>
            <td>Прыжок в длину с места (см)
            <td><?php echo $result; ?></td>
            <td><?php echo $ratio; ?></td>
            <td><?php echo $score; ?></td>
        </tr>
        <tr>
            <?php
            $result = $s;
            $ratio = ($sex == "male") ?
                get_OUFK_male(null, null, $s, null, null, null, $age) :
                get_OUFK_female(null, null, $s, null, null, null, $age);
            $score = get_OUFK_score_string(get_OUFK_score($ratio));
            ?>
            <td>Поднимание туловища из положения лежа на спине (кол-во раз)
            <td><?php echo $result; ?></td>
            <td><?php echo $ratio; ?></td>
            <td><?php echo $score; ?></td>
        </tr>
        <tr>
            <?php
            $result = $n;
            $ratio = ($sex == "male") ?
                get_OUFK_male(null, null, null, $n, null, null, $age) :
                get_OUFK_female(null, null, null, $n, null, null, $age);
            $score = get_OUFK_score_string(get_OUFK_score($ratio));
            ?>
            <td>Удержание тела в висе на перекладине (с)
            <td><?php echo $result; ?></td>
            <td><?php echo $ratio; ?></td>
            <td><?php echo $score; ?></td>
        </tr>
        <tr>
            <?php
            $result = $v;
            $ratio = ($sex == "male") ?
                get_OUFK_male(null, null, null, null, $v, null, $age) :
                get_OUFK_female(null, null, null, null, $v, null, $age);
            $score = get_OUFK_score_string(get_OUFK_score($ratio));
            ?>
            <td>Наклон вперед из положения сидя (+см)
            <td><?php echo $result; ?></td>
            <td><?php echo $ratio; ?></td>
            <td><?php echo $score; ?></td>
        </tr>
        <tr>
            <?php
            $result = $b;
            $ratio = ($sex == "male") ?
                get_OUFK_male(null, null, null, null, null, $b, $age) :
                get_OUFK_female(null, null, null, null, null, $b, $age);
            $score = get_OUFK_score_string(get_OUFK_score($ratio));
            ?>
            <td>Бег 1000м (сек)</td>
            <td><?php echo $result; ?></td>
            <td><?php echo $ratio; ?></td>
            <td><?php echo $score; ?></td>
        </tr>
    </table>
    <br>
    <table border="1px solid black">
        <?php
        $bio_age = how_age_for_OUFK_male($o, $p, $s, $n, $v, $b, $age);
        $raznica =  abs($bio_age - $age);
        $oufk = get_OUFK_male($o, $p, $s, $n, $v, $b, $age);
        $score = get_OUFK_score_string(get_OUFK_score($oufk));
        ?>
        <tr>
            <td>Ваш биологический возраст</td>
            <td><?php echo $bio_age; ?></td>
            <td rowspan="4"><?php echo get_recommendations($bio_age, $age); ?></td>
        </tr>
        <tr>
            <td>Разница между календарным и биологическим возрастом(+-)</td>
            <td><?php echo $raznica; ?></td>
        </tr>
        <tr>
            <td>*Общий уровень физической кондиции</td>
            <td><?php echo $oufk; ?></td>
        </tr>
        <tr>
            <td>Общая оценка</td>
            <td><?php echo $score; ?></td>
        </tr>
    </table>
    <?php
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Персональная карта</title>
</head>
<body>

<?php include("header.php"); ?>

<div class="table">
    <h2>Персональная карта</h2><p>"Взойди на свой Олимп"</p>
    <br>

    <h2><?php echo $surname.' '.$name.' '.$father; ?></h2>
    <br>

    <?php generate_table($o, $p, $s, $n, $v, $b, $age, $sex); ?>

</div >

<?php include("footer.php"); ?>

</body>
</html>