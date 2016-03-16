<?php
class Service_Data_Sample {
	public function execute($arrInput) {
		$arrInput['data'][] = Base_AppEnv::getCurrApp()." - "."Data_Sample";

		$obj = new Dao_Sample($arrInput);
		return $obj->execute($arrInput);
	}
}
?>
