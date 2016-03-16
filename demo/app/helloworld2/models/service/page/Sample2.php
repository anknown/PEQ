<?php
class Service_Page_Sample2 {
	public function execute($arrInput) {
		$arrInput['page'][] = Base_AppEnv::getCurrApp()." - "."Page_Sample2";
        $arrInput['get'][] = $_GET['id'];

        $obj = new Service_Data_Sample2();
		return $obj->execute($arrInput);
	}
}
?>
