<?php
/**
 * Created by PhpStorm.
 * User: olexandr
 * Date: 23.11.2018
 * Time: 12:09
 */

spl_autoload_register();

function clientCode()
{
    $author = new Author("John Smith");
    $page = new Page("Tip of the day", "Keep calm and carry on.", $author);

    // ...

    $page->addComment("Nice tip, thanks!");

    // ...

    $draft = clone $page;
    print("Dump of the clone. Note that the author is now referencing two objects.\n\n");
    print_r($draft);
}

clientCode();