<?php
/**
 * Created by PhpStorm.
 * User: olexandr
 * Date: 19.11.2018
 * Time: 10:01
 */

interface SocialNetworkConnector
{
    public function logIn();

    public function logOut();

    public function createPost($content);
}