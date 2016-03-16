<?php
class Dao_Sample {
	public function execute($arrInput) {
		$arrInput['dao'][] = Base_AppEnv::getCurrApp()." - "."Dao_Sample";

		return $arrInput;
	}
}
?>
