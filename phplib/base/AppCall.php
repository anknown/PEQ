<?php
final class Base_AppCall {
    protected static $baseApp;

    private static function _switchToApp($app){
        $newApp = strtolower($app);
        Base_AppEnv::setCurrApp($newApp);

        $yafApp    = Yaf_Application::app();
        $appDir    = Base_AppEnv::getEnv('code');
        $yafApp->setAppDirectory($appDir);

        $yafLoader = Yaf_Loader::getInstance();
        $appLib    = Base_AppEnv::getEnv('code')."/library";
        $yafLoader->setLibraryPath($appLib);
    }

    public static function switchToApp($app){
        self::$baseApp = Base_AppEnv::getCurrApp();
        
        self::_switchToApp($app);
    }

    public static function switchBack(){
        self::_switchToApp(self::$baseApp);
    }
}
?>
