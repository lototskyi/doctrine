<?php
/**
 * Created by PhpStorm.
 * User: olexandr
 * Date: 19.11.2018
 * Time: 10:04
 */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

spl_autoload_register();

function clientCode(SocialNetworkPoster $creator)
{
    // ...
    $creator->post("Hello world!");
    $creator->post("I had a large hamburger this morning!");
    // ...
}

print("Testing ConcreteCreator1:\n");
clientCode(new FacebookPoster("john_smith", "******"));
print("\n\n");

print("Testing ConcreteCreator2:\n");
clientCode(new LinkedInPoster("john_smith@example.com", "******"));