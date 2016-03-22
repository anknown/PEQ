<?php
class Base_Conf {
    public static function getConf($path) {
        $path = CONF_PATH."/".$path;

        if(!file_exists($path)){
            return false;
        }

        return \Yosymfony\Toml\Toml::parse($path);
    }

    public static function getAppConf($path, $app = ''){
        if(empty($app)){
            $app = Base_AppEnv::getCurrApp();
        }

        $path = CONF_PATH."/app/".$app."/".$path;       

        if(!file_exists($path)){
            return false;
        }

        return \Yosymfony\Toml\Toml::parse($path);
    }

    public static function getConfEx($section){
        $path = $section.".toml";

        return self::getConf($path);
    }

    public static function getAppConfEx($section, $app=''){
        $path = $section.".toml";

        return self::getAppConf($path, $app);
    }
}

/* vim: set ft=php expandtab ts=4 sw=4 sts=4 tw=0: */
