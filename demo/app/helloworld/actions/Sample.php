<?php
class Action_Sample extends Yaf_Action_Abstract {
	public function execute() {
        //read conf
		$conf = Base_Conf::getAppConf("test.toml");
        //get db connect
		$db = Base_DB_ConnMgr::getConn("Test", NULL, true);
        //logging
		Base_Log::debug("well done!");

		$arrInput['action'][] = Base_AppEnv::getCurrApp()." - "."Action_Sample";
        $arrInput['get'][] = $_GET['id'];
        //call another app
        Base_AppCall::switchToApp("helloworld2");
        $page2 = new Service_Page_Sample2();
        $arrInput = $page2->execute($arrInput);
        Base_AppCall::switchBack();
        
        //call self app
		$page = new Service_Page_Sample();
        $ret = $page->execute($arrInput);
        
        //print result
		var_dump($ret);
		return $ret;
	}
}
?>
