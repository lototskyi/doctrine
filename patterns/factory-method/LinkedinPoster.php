<?php
/**
 * Created by PhpStorm.
 * User: olexandr
 * Date: 19.11.2018
 * Time: 10:01
 */

class LinkedinPoster extends SocialNetworkPoster
{
    private $email, $password;

    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new LinkedInConnector($this->email, $this->password);
    }
}