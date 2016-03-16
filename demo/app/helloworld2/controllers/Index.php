<?php
class Controller_Index extends Yaf_Controller_Abstract {
    public function indexAction($name = "Stranger") {
        //1. fetch query
        $get = $this->getRequest()->getQuery("get", "default value");

        //2. fetch model
        $model = new Model_Sample();

        //3. assign
        $this->getView()->assign("content", $model->selectSample());
        $this->getView()->assign("name", $name);

        //4. render by Yaf, 如果这里返回FALSE, Yaf将不会调用自动视图引擎Render模板
        return TRUE;
    }

}

/* vim: set ft=php expandtab ts=4 sw=4 sts=4 tw=0: */
