<?php

function get_OUFK_male($o, $p, $s, $n, $v, $b, $age) {
    $values = array();

    $intO = intval($o);
    if ($intO != 0) {
        $values[count($values)] = get_O_male($intO, $age);
    }
    $intP = intval($p);
    if ($intP != 0) {
        $values[count($values)] = get_P_male($intP, $age);
    }
    $intS = intval($s);
    if ($intS != 0) {
        $values[count($values)] = get_S_male($intS, $age);
    }
    $intN = intval($n);
    if ($intN != 0) {
        $values[count($values)] = get_N_male($intN, $age);
    }
    $intV = intval($v);
    if ($intV != 0) {
        $values[count($values)] = get_V_male($intV, $age);
    }
    $intB = intval($b);
    if ($intB != 0) {
        $values[count($values)] = get_B_male($intB, $age);
    }

    $result = 0;
    for ($i = 0; $i < count($values); $i++) {
        $result += $values[$i];
    }
    return $result / count($values);
}

function get_OUFK_female($o, $p, $s, $n, $v, $b, $age) {
    $values = array();

    $intO = intval($o);
    if ($intO != 0) {
        $values[count($values)] = get_O_female($intO, $age);
    }
    $intP = intval($p);
    if ($intP != 0) {
        $values[count($values)] = get_P_female($intP, $age);
    }
    $intS = intval($s);
    if ($intS != 0) {
        $values[count($values)] = get_S_female($intS, $age);
    }
    $intN = intval($n);
    if ($intN != 0) {
        $values[count($values)] = get_N_female($intN, $age);
    }
    $intV = intval($v);
    if ($intV != 0) {
        $values[count($values)] = get_V_female($intV, $age);
    }
    $intB = intval($b);
    if ($intB != 0) {
        $values[count($values)] = get_B_female($intB, $age);
    }

    $result = 0;
    for ($i = 0; $i < count($values); $i++) {
        $result += $values[$i];
    }
    return $result / count($values);
}

function get_OUFK_score($OUFK_val) {
    if ($OUFK_val >= 0.61)
        return 5;
    if ($OUFK_val >= 0.21)
        return 4;
    if ($OUFK_val >= -0.2)
        return 3;
    if ($OUFK_val >= -0.6)
        return 2;
    if ($OUFK_val >= -1.0)
        return 1;
    return 0;
}

function get_OUFK_score_string($OUFK_score) {
    switch ($OUFK_score) {
        case 0:
            return "опасная зона";
        case 1:
            return "неудовлетворительно";
        case 2:
            return "удовлетворительно";
        case 3:
            return "хорошо";
        case 4:
            return "отлично";
        case 5:
            return "супер";
    }
}

function get_recommendations($bio_age, $age) {
    if (abs($bio_age - $age) <= 3) {
        if ($bio_age > $age)
            return "Избегать длительных стрессовых ситуаций. Придерживаться здорового образа жизни.";
        else
            return "Активнее включайтесь в здоровый образ жизни. Не избегайте физических упражнений";
    } else if (abs($bio_age - $age) <= 6) {
        if ($bio_age > $age)
            return "Обратить внимание на свое здоровье. Необходимо пройти тщательное медицинское обследование всех органов и систем.";
        else
            return "У Вас хорошие резервы на будущее.";
    } else {
        if ($bio_age > $age)
            return "В Вашем организме наблюдаются серьезные нарушения. Необходима консультация врача. Поторопитесь посетить врача.";
        else
            return "Молодец! У Вас замечательные перспективы. Так держать. ";
    }
}