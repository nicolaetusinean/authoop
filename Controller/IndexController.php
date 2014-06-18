<?php

/**
 * Description of IndexController
 *
 * @author Ancuta
 */
class IndexController 
{
    
    public function indexAction()
    {
        $content = file_get_contents(__DIR__.'/../View/Index/index.html');
        return $content;
    }
}
