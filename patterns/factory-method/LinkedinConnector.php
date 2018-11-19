<?php
/**
 * Created by PhpStorm.
 * User: olexandr
 * Date: 19.11.2018
 * Time: 10:03
 */

class LinkedinConnector implements SocialNetworkConnector
{
    private $email, $password;

    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function logIn()
    {
        print("Send HTTP API request to log in user $this->email with " .
            "password $this->password" . PHP_EOL);
    }

    public function logOut()
    {
        print("Send HTTP API request to log out user $this->email" . PHP_EOL);
    }

    public function createPost($content)
    {
        print("Send HTTP API requests to create a post in LinkedIn timeline." . PHP_EOL);
    }
}