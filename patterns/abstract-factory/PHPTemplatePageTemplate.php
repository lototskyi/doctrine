<?php
/**
 * Created by PhpStorm.
 * User: olexandr
 * Date: 20.11.2018
 * Time: 11:53
 */

class PHPTemplatePageTemplate extends BasePageTemplate
{
    public function getTemplateString(): string
    {
        $renderedTitle = $this->titleTemplate->getTemplateString();
        return <<<EOF
<div class="page">
  $renderedTitle
  <article class="content"><?php print(\$content) ?></article>
</div>
EOF;
    }
}