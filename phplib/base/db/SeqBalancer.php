<?php
class Base_Db_SeqBalancer implements Base_Db_IBalancer
{
    /**
    * @brief 选择host
    *
    * @param $allHosts 全部Host
    * @param $key 选择key
    *
    * @return 
    */
    public function select($allHosts, $key = NULL)
    {
        if(!count($allHosts['valid_hosts']))
        {
            return false;
        }
        reset($allHosts['valid_hosts']);
        return key($allHosts['valid_hosts']);
    }
}
/* vim: set expandtab ts=4 sw=4 sts=4 tw=100: */
