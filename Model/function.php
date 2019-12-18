<?php
    function nomPage()
    {
        $path=$_SERVER['SCRIPT_FILENAME'];


        $pathparties=explode("/", $path);


        $page=str_replace(".php", "", end($pathparties));
        return $page;
    }

    function active($a)
    {
        if($a==nomPage())
        {
            return "active bg-dark";
        }
        else
        {
            return "";
        }
    }



?>