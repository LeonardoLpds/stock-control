<?php
namespace app\view;

class View
{
    const VIEW_PATH = __DIR__;
    const HEADER = "blocks/header.php";
    const FOOTER = "blocks/footer.php";

    function __construct()
    {
    }

    public function constructView($view, $model)
    {
        include_once self::VIEW_PATH . DIRECTORY_SEPARATOR . self::HEADER;
        include_once self::VIEW_PATH . DIRECTORY_SEPARATOR . $view . '.php';
        include_once self::VIEW_PATH . DIRECTORY_SEPARATOR . self::FOOTER;
    }
}