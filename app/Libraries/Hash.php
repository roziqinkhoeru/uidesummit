<?php
namespace App\Libraries;

// class hash
class Hash
{
    public static function makeHash($password)
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }
    
    public static function verify($password, $hash)
    {
        if (password_verify($password, $hash)) {
            return true;
        } else {
            return false;
        }
    }
}

;
