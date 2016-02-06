<?php
namespace app\view;

class View
{
    const HEADER = "/blocks/header.php";
    const FOOTER = "/blocks/footer.php";

    function __construct()
    {
    }

    public function constructView($view)
    {
        include_once __DIR__ . DIRECTORY_SEPARATOR . self::HEADER;
        include_once __DIR__ . DIRECTORY_SEPARATOR . $view . '.php';
        include_once __DIR__ . DIRECTORY_SEPARATOR . self::FOOTER;
    }
}