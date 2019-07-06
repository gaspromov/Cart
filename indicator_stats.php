<?php

function how_age_for_O_male($val, $age) {
    if (get_age($age) <= 22)
    {
        for ($i = 22; $i >= 3; $i--)
        {
            if ($val >= get_nvp_o_male($i))
                return $i;
            if ($i == 3) return $i;
        }
    } else {
        for ($i = 23; $i <= 80; $i++)
        {
            if ($val >= get_nvp_o_male($i))
                return $i;
            if ($i == 80) return $i;
        }
    }
}

function how_age_for_P_male($val, $age) {
    if (get_age($age) <= 22)
    {
        for ($i = 22; $i >= 3; $i--)
        {
            if ($val >= get_nvp_p_male($i))
                return $i;
            if ($i == 3) return $i;
        }
    } else {
        for ($i = 23; $i <= 80; $i++)
        {
            if ($val >= get_nvp_p_male($i))
                return $i;
            if ($i == 80) return $i;
        }
    }
}

function how_age_for_S_male($val, $age) {
    if (get_age($age) <= 22)
    {
        for ($i = 22; $i >= 3; $i--)
        {
            if ($val >= get_nvp_s_male($i))
                return $i;
            if ($i == 3) return $i;
        }
    } else {
        for ($i = 23; $i <= 80; $i++)
        {
            if ($val >= get_nvp_s_male($i))
                return $i;
            if ($i == 80) return $i;
        }
    }
}

function how_age_for_N_male($val, $age) {
    if (get_age($age) <= 22)
    {
        for ($i = 22; $i >= 3; $i--)
        {
            if ($val >= get_nvp_n_male($i))
                return $i;
            if ($i == 3) return $i;
        }
    } else {
        for ($i = 23; $i <= 80; $i++)
        {
            if ($val >= get_nvp_n_male($i))
                return $i;
            if ($i == 80) return $i;
        }
    }
}

function how_age_for_V_male($val, $age) {
    if (get_age($age) <= 22)
    {
        for ($i = 22; $i >= 3; $i--)
        {
            if ($val >= get_nvp_v_male($i))
                return $i;
            if ($i == 3) return $i;
        }
    } else {
        for ($i = 23; $i <= 80; $i++)
        {
            if ($val >= get_nvp_v_male($i))
                return $i;
            if ($i == 80) return $i;
        }
    }
}

function how_age_for_B_male($val, $age) {
    if (get_age($age) <= 22)
    {
        for ($i = 3; $i <= 22; $i++)
        {
            if ($val >= get_nvp_b_male($i))
                return $i;
            if ($i == 22) return $i;
        }
    } else {
        for ($i = 80; $i >= 23; $i--)
        {
            if ($val >= get_nvp_b_male($i))
                return $i;
            if ($i == 23) return $i;
        }
    }
}

function how_age_for_O_female($val, $age) {
    if (get_age($age) <= 22)
    {
        for ($i = 22; $i >= 3; $i--)
        {
            if ($val >= get_nvp_o_female($i))
                return $i;
            if ($i == 3) return $i;
        }
    } else {
        for ($i = 23; $i <= 80; $i++)
        {
            if ($val >= get_nvp_o_female($i))
                return $i;
            if ($i == 80) return $i;
        }
    }
}

function how_age_for_P_female($val, $age) {
    if (get_age($age) <= 22)
    {
        for ($i = 22; $i >= 3; $i--)
        {
            if ($val >= get_nvp_p_female($i))
                return $i;
            if ($i == 3) return $i;
        }
    } else {
        for ($i = 23; $i <= 80; $i++)
        {
            if ($val >= get_nvp_p_female($i))
                return $i;
            if ($i == 80) return $i;
        }
    }
}

function how_age_for_S_female($val, $age) {
    if (get_age($age) <= 22)
    {
        for ($i = 22; $i >= 3; $i--)
        {
            if ($val >= get_nvp_s_female($i))
                return $i;
            if ($i == 3) return $i;
        }
    } else {
        for ($i = 23; $i <= 80; $i++)
        {
            if ($val >= get_nvp_s_female($i))
                return $i;
            if ($i == 80) return $i;
        }
    }
}

function how_age_for_N_female($val, $age) {
    if (get_age($age) <= 22)
    {
        for ($i = 22; $i >= 3; $i--)
        {
            if ($val >= get_nvp_n_female($i))
                return $i;
            if ($i == 3) return $i;
        }
    } else {
        for ($i = 23; $i <= 80; $i++)
        {
            if ($val >= get_nvp_n_female($i))
                return $i;
            if ($i == 80) return $i;
        }
    }
}

function how_age_for_V_female($val, $age) {
    if (get_age($age) <= 22)
    {
        for ($i = 22; $i >= 3; $i--)
        {
            if ($val >= get_nvp_v_female($i))
                return $i;
            if ($i == 3) return $i;
        }
    } else {
        for ($i = 23; $i <= 80; $i++)
        {
            if ($val >= get_nvp_v_female($i))
                return $i;
            if ($i == 80) return $i;
        }
    }
}

function how_age_for_B_female($val, $age) {
    if (get_age($age) <= 22)
    {
        for ($i = 3; $i <= 22; $i++)
        {
            if ($val >= get_nvp_b_female($i))
                return $i;
            if ($i == 22) return $i;
        }
    } else {
        for ($i = 80; $i >= 23; $i--)
        {
            if ($val >= get_nvp_b_female($i))
                return $i;
            if ($i == 23) return $i;
        }
    }
}

function how_age_for_OUFK_male($o, $p, $s, $n, $v, $b, $age) {
    $values = array();

    $intO = intval($o);
    if ($intO != 0) {
        $values[count($values)] = how_age_for_O_male($intO, $age);
    }
    $intP = intval($p);
    if ($intP != 0) {
        $values[count($values)] = how_age_for_P_male($intP, $age);
    }
    $intS = intval($s);
    if ($intS != 0) {
        $values[count($values)] = how_age_for_S_male($intS, $age);
    }
    $intN = intval($n);
    if ($intN != 0) {
        $values[count($values)] = how_age_for_N_male($intN, $age);
    }
    $intV = intval($v);
    if ($intV != 0) {
        $values[count($values)] = how_age_for_V_male($intV, $age);
    }
    $intB = intval($b);
    if ($intB != 0) {
        $values[count($values)] = how_age_for_B_male($intB, $age);
    }

    $result = 0;
    for ($i = 0; $i < count($values); $i++) {
        $result += $values[$i];
    }
    return get_age($result / count($values));
}

function how_age_for_OUFK_female($o, $p, $s, $n, $v, $b, $age) {
    $values = array();

    $intO = intval($o);
    if ($intO != 0) {
        $values[count($values)] = how_age_for_O_female($intO, $age);
    }
    $intP = intval($p);
    if ($intP != 0) {
        $values[count($values)] = how_age_for_P_female($intP, $age);
    }
    $intS = intval($s);
    if ($intS != 0) {
        $values[count($values)] = how_age_for_S_female($intS, $age);
    }
    $intN = intval($n);
    if ($intN != 0) {
        $values[count($values)] = how_age_for_N_female($intN, $age);
    }
    $intV = intval($v);
    if ($intV != 0) {
        $values[count($values)] = how_age_for_V_female($intV, $age);
    }
    $intB = intval($b);
    if ($intB != 0) {
        $values[count($values)] = how_age_for_B_female($intB, $age);
    }

    $result = 0;
    for ($i = 0; $i < count($values); $i++) {
        $result += $values[$i];
    }
    return get_age($result / count($values));
}