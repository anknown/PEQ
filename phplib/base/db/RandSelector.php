<?php
class Base_Db_RandSelector implements Base_Db_IHostSelector
{
    /**
    * @brief 随机选择接口
    *
    * @param $dbman dbman对象
    * @param $key 选择key
    *
    * @return 
    */
    public function select(Base_Db_DBMan $dbman, $key = NULL)
    {
        if(!count($dbman->validHosts))
        {
            return false;
        }
        return array_rand($dbman->validHosts);
    }
}
/* vim: set expandtab ts=4 sw=4 sts=4 tw=100: */
