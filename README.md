### PEQ -- A light LAMP Development Framework

#### Intro

路径结构

    root_path
            + app //子系统/服务/应用
                + helloworld //测试应用
                    + actions //action文件夹
                    - Bootstrap.php
                    + controllers //控制器文件夹
                    + models //model文件夹
                        + dao //DAO文件夹
                        + service //service文件夹
                            + page //page service 文件夹
                            + data //data service 文件夹
                    + library
                    + plugins
                    + views
            + conf //配置
                + app
                    + helloworld //helloworld 相关配置目录
                        - log.toml //日志库配置
                        - db.toml //数据库配置
                        - yaf.ini //yaf配置
            + data
                + app
                    + helloworld //helloworld 相关数据目录
            + log
                - php-error.log //PHP日志
                - access.log //nginx access日志
                - error.log //nginx error日志
                - helloworld //helloworld 相关日志 
            + php
            + webroot
                + helloworld
                    - index.php //helloworld 入口文件
                + static //静态文件 
            + webserver
            + var
                + nginx
                + php
    

##### Env

* PHP `5.4`
* Nginx `1.9`

Tested on `Centos 6.4`

#### BaseLibrary

`Base_AppEnv` 环境库，用户获取当前应用名称，路径等
`Base_Conf`
读取配置文件库，PEQ使用toml格式作为配置文件格式，[toml@github](https://github.com/toml-lang/toml)
`Base_Log` 日志文件库
`Base_DB` 数据库访问库，支持多集群，多机器配置
`Base_AppCall` 跨子系统访问库，允许一个app调用其它app的接口

#### Usage

*install*   
    
    bash install --prefix=$PEG_ROOT_PATH

*start nginx*

    bash $PEG_ROOT_PATH/webserver/nginx_control start

*start php*
    
    bash $PEG_ROOT_PATH/php/php-fpm_control start

默认使用8081接口，启动完成后，浏览器输入 http://ip:port/helloworld/sample，即访问*helloworld*
app中的*sample* action
