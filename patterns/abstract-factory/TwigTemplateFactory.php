<?php
/**
 * Created by PhpStorm.
 * User: olexandr
 * Date: 20.11.2018
 * Time: 11:27
 */

class TwigTemplateFactory implements TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate
    {
        return new TwigTitleTemplate();
    }

    public function createPageTemplate(): PageTemplate
    {
        return new TwigPageTemplate($this->createTitleTemplate());
    }
}