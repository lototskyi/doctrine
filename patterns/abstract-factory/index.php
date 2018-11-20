<?php
/**
 * Created by PhpStorm.
 * User: olexandr
 * Date: 20.11.2018
 * Time: 11:53
 */

spl_autoload_register();

function templateRenderer(TemplateFactory $factory)
{
    $pageTemplate = $factory->createPageTemplate();

    print($pageTemplate->getTemplateString());

    // Here's how would you use the template further in real life:

    // Twig::render($pageTemplate->getTemplateString(), [
    //     'title' => $page->title,
    //     'content' => $page->content, ]);
}

/**
 * Now, in other parts of the app, the client code can accept factory objects of
 * any type.
 */
print("Testing rendering with the Twig factory:\n");
templateRenderer(new TwigTemplateFactory());
print("\n\n");

print("Testing rendering with the PHPTemplate factory:\n");
templateRenderer(new PHPTemplateFactory());