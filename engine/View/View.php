<?php

namespace Engine\View;

class View
{
    private $folder;
    private $page;

    public function __construct($folder, $page)
    {
        $this->folder = $folder;
        $this->page = $page;
    }

    public function render()
    {
        $page = __DIR__. "/../../view/{$this->folder}/{$this->page}/index.php";
        ob_start();
        require $page;
        $page = ob_get_clean();

        return require __DIR__. "/../../view/layout.php";
    }

    public function libsCss()
    {
        $items = scandir(LIBS_DIR . '/css');
        $items = array_diff($items, ['.','..']);

        $links = "";

        foreach ($items as $item) {
            $links .= "<link rel=\"stylesheet\" href=\"/libs/css/{$item}\">";
        }
        return $links;
    }

    public function libsJs()
    {
        $items = scandir(LIBS_DIR . '/js');
        $items = array_diff($items, ['.','..']);

        $scripts = "";

        foreach ($items as $item) {
            $scripts .= "<script src=\"/libs/js/{$item}\"></script>";
        }
        return $scripts;
    }

    public function fileCss()
    {
        $css = "<link rel='stylesheet' href='/view/{$this->folder}/{$this->page}/styles.css'>";
        return $css;
    }

    public function fileJs()
    {
        $js = "<script src='/view/{$this->folder}/{$this->page}/scripts.js'></script>";
        return $js;
    }
}