<?php

class Autoloader
{
    private $prefix;
    private $root;

    public function __construct($prefix,$root)
    {
        $this->prefix = $prefix;
        $this->root = $root;
    }

    public function loadClass($classname)
    {
        $classFile = '';

        if (substr($classname, 0, strlen($this->prefix)) == $this->prefix) {
            $classFile = substr($classname, strlen($this->prefix));

            require $this->root.str_replace('\\', DIRECTORY_SEPARATOR, $classFile).'.php';
        }
    }

    public function register()
    {
        spl_autoload_register([$this, 'loadClass']);
    }
}

?>