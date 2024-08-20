<?php

class Auth {
    public static function check() {
        Session::start();
        return Session::get('user_id') ? true : false;
    }

    public static function login($user_id) {
        Session::start();
        Session::set('user_id', $user_id);
    }

    public static function logout() {
        Session::start();
        Session::destroy();
    }
}
