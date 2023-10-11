<?php
$password_length = $_GET['password_length'];
//var_dump($password_length);

function generatePsw(int $length)
{

    $characters = '1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!"$%&/()?^*#-_'; /* characters length 76 */

    $generate_password = '';
    for ($i = 0; $i < $length; $i++) {
        $generate_password .= substr($characters, rand(0, (strlen($characters))), 1);
    };

    return $generate_password;
}