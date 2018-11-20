<?php
/**
 * Created by PhpStorm.
 * User: olexandr
 * Date: 20.11.2018
 * Time: 11:48
 */

abstract class BasePageTemplate implements PageTemplate
{
    protected $titleTemplate;

    public function __construct(TitleTemplate $titleTemplate)
    {
        $this->titleTemplate = $titleTemplate;
    }
}