<?php
/**
 * @name Bootstrap
 * @author work
 * @desc 所有在Bootstrap类中, 以_init开头的方法, 都会被Yaf调用,
 * @see http://www.php.net/manual/en/class.yaf-bootstrap-abstract.php
 * 这些方法, 都接受一个参数:Yaf_Dispatcher $dispatcher
 * 调用的次序, 和申明的次序相同
 */
class Bootstrap extends Yaf_Bootstrap_Abstract{
    public function _initConf(){
        $yafNS     = Base_Conf::getAppConf("yaf.toml");
        if(isset($yafNS['local_namespace'])){
            $yafNS = $yafNS['local_namespace'];
        } else {
            $yafNS = array();
        }
        $loader = Yaf_Loader::getInstance();
        $loader->registerLocalNamespace($yafNS);
    }

	public function _initRoute(Yaf_Dispatcher $dispatcher) {
		//在这里注册自己的路由协议,默认使用简单路由
	}
	
	public function _initView(Yaf_Dispatcher $dispatcher){
		//在这里注册自己的view控制器，例如smarty,firekylin
		$dispatcher->disableView();
	}
}
