<?php

include_once 'business.class.php';

class View {

    public static function header() {

        $html = 
        "
        <!-- header -->
        <header>
            <div class='logo'>
                <img src='imagenes/logo.png' alt ='GCActiva Logo'>
            </div>
            <div class='menu'>
                <div class='burger' data-toggler='#navbar_sup'>
                    <i class='fas fa-bars' onclick='burguer_navbar_sup()'></i>
                </div>
                <ul class='navbar' id='navbar_sup'>
                    <li class='nav-item nav-item-1'>
                        <a class='nav-link active' href='index.php'>Home</a></li>
                    <li class='nav-item'>
                        <a class='nav-link' href='activities.php'>Actividades</a></li>
                    <li class='nav-item'>
                        <a class='nav-link' href='contact.php'>Contacto</a></li>
                </ul>
            </div>
            <div class='login'>
                <a href='login.php'>Login</a>
                <a href='register.php'>Resgistrarse</a>
            </div>
        </header>
        ";

        echo $html;
    }

    public static function imgtobase64($img) {
        
        $b64 = base64_encode($img);
        $signature = substr($b64, 0, 3);
        
        if ( $signature == '/9j') {
            $mime = 'data:image/jpeg;base64,';
        } else if ( $signature == 'iVB') {
            $mime = 'data:image/png;base64,';
        }
        
        return $mime . $b64;
    }
}
?>