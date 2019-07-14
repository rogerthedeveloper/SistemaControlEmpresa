<?php

/**
 * Created by PhpStorm.
 * User: RSpro
 * Date: 22/05/16
 * Time: 14:58
 */

class App
{

    static $connection;


    public function __construct()   {


       App::$connection = new PDO("mysql:host=localhost;dbname=miscelanea;charset=utf8", "root", "",[]);


    }

    private static function status() {


        if(App::$connection) {

        echo "Connected!";

        }

        else {

            echo "Not Connected!";
        }


    }



}

new App();

