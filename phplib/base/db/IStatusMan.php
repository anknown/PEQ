<?php
interface Base_Db_IStatusMan
{
    public function load($host, $port);
    public function save($host, $port, $status);
    public function clean($host, $port);
    public function cleanAll();
}
/* vim: set expandtab ts=4 sw=4 sts=4 tw=100: */
