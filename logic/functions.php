<?php

function generatePassword()
{

    if (isset($_GET['password_length']) && isset($_GET['repetition'])) {
        $password_length = $_GET['password_length'];
        $repetition = $_GET['repetition'];
        $new_password = '';

        $allowed_chars = buildAllowedChars();

        while (strlen($new_password) < $password_length) {
            $char = $allowed_chars[rand(0, strlen($allowed_chars) - 1)];

            if (shouldAddCharacter($repetition, $char, $new_password)) {
                $new_password .= $char;
            }
        }

        $_SESSION['password'] = $new_password;
    } else {
        return false;
    }
}

function buildAllowedChars()
{
    $symbols = '!?&%$<>^+-*/()[]{}@#_=';
    $allowed_letters = 'zjkvwrtypleqbihgfsax';
    $allowed_up_letters = strtoupper($allowed_letters);
    $allowed_numbers = '0123456789';
    $allowed_chars = '';

    if (isset($_GET['opt'])) {
        foreach ($_GET['opt'] as $option) {
            switch ($option) {
                case 'letters':
                    $allowed_chars .= $allowed_letters;
                    break;
                case 'lettersM':
                    $allowed_chars .= $allowed_up_letters;
                    break;
                case 'numbers':
                    $allowed_chars .= $allowed_numbers;
                    break;
                case 'characters':
                    $allowed_chars .= $symbols;
                    break;
            }
        }
    }

    return $allowed_chars;
}

function shouldAddCharacter($repetition, $char, $password)
{
    if ($repetition == 'si') {
        return true;
    } else {
        return strpos($password, $char) === false;
    }
}
?>