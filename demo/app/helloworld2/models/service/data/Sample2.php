<?php
class Service_Data_Sample2 {
    public function execute($arrInput) {
        $arrInput['data'][] = Base_AppEnv::getCurrApp()." - "."Data_Sample2";

        return $arrInput;
    }
}
?>
