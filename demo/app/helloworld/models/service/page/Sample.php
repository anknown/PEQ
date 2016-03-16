<?php
class Service_Page_Sample {
	public function execute($arrInput) {
		$arrInput['page'][] = Base_AppEnv::getCurrApp()." - "."Page_Sample";

		$obj = new Service_Data_Sample($arrInput);
		return $obj->execute($arrInput);
	}
}
?>
