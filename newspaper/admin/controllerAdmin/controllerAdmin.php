<?php
class ControllerAdmin
{
    public static function formLoginSite()
    {
        include_once('viewAdmin/formLogin.php');
    }

    public static function loginAction()
    {
        $logIn = ModelAdmin::userAuthentication();
        if (isset($logIn) and $logIn == true) {
            include_once('viewAdmin/startAdmin.php');
        } else {
            $_SESSION['errorString'] = 'Invalid username or password';
            include_once('viewAdmin/formLogin.php');
        }
    }

    public static function logoutAction()
    {
        ModelAdmin::userLogout();
        include_once('viewAdmin/formLogin.php');
    }
    public static function error404()
    {
        include_once('viewAdmin/error404.php');
    }
}  // end class
