<?php 
    function test(){
        print_r($_SERVER['REQUEST_URI']);
        print_r(" - ");
        print_r($_SERVER['PHP_SELF']);
        print_r(" - ");
        print_r('http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']);
    }

    function urlIs($url){       

        // kijk of de gegeven url overeekomt met de huidige url.
        // geef true of false terug anfhangend van het antwoord.
        return $url === 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
    }

    function dd($data) {
        echo "<pre>";
        print_r(var_dump($data));
        echo "</pre>";
        exit();
    }
?>