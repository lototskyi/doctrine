<?php
/**
 * Created by PhpStorm.
 * User: olexandr
 * Date: 20.11.2018
 * Time: 11:49
 */

class TwigPageTemplate extends BasePageTemplate
{
    public function getTemplateString(): string
    {
        $renderedTitle = $this->titleTemplate->getTemplateString();
        return <<<EOF
<div class="page">
  $renderedTitle
  <article class="content">{{ content }}</article>
</div>
EOF;
    }
}