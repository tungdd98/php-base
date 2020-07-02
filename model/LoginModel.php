<?php
class LoginModel extends Model
{
    public function getRecord($email)
    {
        $arr = array();
        $arr = parent::getRecord("select user_id, email, password, rule from users where email='$email'");
        return $arr;
    }
}
