<?php
/**
 * Created by PhpStorm.
 * User: olexandr
 * Date: 19.11.2018
 * Time: 10:00
 */

class FacebookPoster extends SocialNetworkPoster
{
    private $login, $password;

    public function __construct($login, $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new FacebookConnector($this->login, $this->password);
    }
}