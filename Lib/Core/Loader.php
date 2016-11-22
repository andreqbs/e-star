<?php

namespace Lib\Core;

use Exception;

ini_set('display_errors', true);
error_reporting(E_ALL);

class Loader
{

    protected static $root_path = __DIR__.'/../../';

    protected static $fileExt = '.php';
    

    public function __construct()
    {
        spl_autoload_register([$this, 'folders']);
    }

    private function folders($classNameSpace)
    {
         
         $classPieces = explode('/', str_replace('\\', '/', $classNameSpace));
         $class_Path = strtolower(implode('/', array_slice($classPieces, -count($classPieces), -1)));
         $file = '/'.$classPieces[count($classPieces)-1].static::$fileExt;
         $full_path = static::$root_path.$class_Path.$file;
         //echo '++'.$full_path.'++';

         if(file_exists($full_path))
             {
                 require_once $full_path;
             } else {
                 throw new Exception('Falha no Caminho'.$full_path);
             }

    }
}

new Loader;


