<?php

/**
 * ErrorController 
 * 
 * @author Ancuta Teuca
 */
class ErrorController 
{    
    
    /**
     * In case that file is not found return error 404
     * @return string
     */
    public function error404Action() 
    {
        return '404 Page not found';
    }           
}
