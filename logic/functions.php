<?php

function generatePassword()
{
    $symbols = '!?&%$<>^+-*/()[]{}@#_=';
    $allowed_letters = 'zjkvwrtypleqbihgfsax';
    $allowed_up_letters = strtoupper($allowed_letters);
    $allowed_numbers = '0123456789';

    if (isset($_GET['password_length']) && isset($_GET['repetition'])) {
        $password_length = $_GET['password_length'];
        $repetition = $_GET['repetition'];
        $new_password = '';

        while (strlen($new_password) < $password_length) {
            $allowed_chars = $symbols . $allowed_letters . $allowed_up_letters . $allowed_numbers;
            $char = $allowed_chars[rand(0, strlen($allowed_chars) - 1)];

            if (doRepeat($repetition, $char, $new_password)) {
                $new_password .= $char;
            }
        }

        $_SESSION['password'] = $new_password;
    } else {
        return false;
    }
}

function doRepeat($repetition, $char, $password)
{
    if ($repetition == 'si') {
        return true;
    } else {
        return strpos($password, $char) === false;
    }
}
?>