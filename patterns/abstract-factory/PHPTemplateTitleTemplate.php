<?php
/**
 * Created by PhpStorm.
 * User: olexandr
 * Date: 20.11.2018
 * Time: 11:45
 */

class PHPTemplateTitleTemplate implements TitleTemplate
{
    public function getTemplateString(): string
    {
        return "<h1><?php print(\$title) ?></h1>";
    }
}