<?php
/**
 * Created by PhpStorm.
 * User: olexandr
 * Date: 23.11.2018
 * Time: 12:09
 */

class Author
{
    private $name;

    /**
     * @var Page[]
     */
    private $pages = [];

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function addToPage($page)
    {
        $this->pages[] = $page;
    }
}