<?php
class Base_Conf {

    public static function getConf($path) {
        $path = CONF_PATH."/".$path;
        return \Yosymfony\Toml\Toml::parse($path);
    }

    public static function getAppConf($path, $app = ''){
        if(empty($app)){
            $app = Base_AppEnv::getCurrApp();
        }

        
        return \Yosymfony\Toml\Toml::parse(CONF_PATH."/app/".$app."/".$path);
    }
}

/* vim: set ft=php expandtab ts=4 sw=4 sts=4 tw=0: */
