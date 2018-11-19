<?php
/**
 * Created by PhpStorm.
 * User: olexandr
 * Date: 19.11.2018
 * Time: 10:02
 */

class FacebookConnector implements SocialNetworkConnector
{
    private $login, $password;

    public function __construct($login, $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function logIn()
    {
        print("Send HTTP API request to log in user $this->login with " .
            "password $this->password" . PHP_EOL);
    }

    public function logOut()
    {
        print("Send HTTP API request to log out user $this->login" . PHP_EOL);
    }

    public function createPost($content)
    {
        print("Send HTTP API requests to create a post in Facebook timeline." . PHP_EOL);
    }
}