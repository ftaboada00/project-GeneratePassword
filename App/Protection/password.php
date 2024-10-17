<?php
namespace  MyProject\Protection; 

class Password
{

    public function generate($length)
    {
        $charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=[]{}|;:,.<>? ";
        $password = '';
        $charsetLength = strlen($charset) - 1;
        for ($i = 0; $i < $length; $i++) {
            $password .= $charset[rand(0, $charsetLength)];
        }
        return $password;
    }
}
