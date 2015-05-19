<?php
/**
 * Created by PhpStorm.
 * User: robregonm
 * Date: 18/05/15
 * Time: 10:30 PM
 */

namespace app\models;


class User extends \auth\models\User
{
    public function getNombreUsuario()
    {
        return $this->username;
    }
}