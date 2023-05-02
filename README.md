tp6demo
===============

> 运行环境要求PHP7.2+，兼容PHP8.1

## 版本切换
～/.bash_profile 文件中添加Path
> export PATH=usr/local/Cellar/php/8.2.4/bin:$PATH
然后 source ～/.bash_profile 

source filename 作用就是依次执行文件中的语句 并不新建子shell 脚本中新建 改变的变量会保存在当前shell中
好像不起作用 😄

最后发现phpstorm自己有版本选择 打开选项PHP 就可以自己切换了 

## 特性
* 集成jquery
* 使用视图的布局功能 减少无谓的html输入
* 聊天室

## 关于swoole 

想让ide智能提示 需要安装ide助手

> composer require swoole/ide-helper:@dev

## 主要新特性

* 采用`PHP7`强类型（严格模式）
* 支持更多的`PSR`规范
* 原生多应用支持
* 更强大和易用的查询
* 全新的事件系统
* 模型事件和数据库事件统一纳入事件系统
* 模板引擎分离出核心
* 内部功能中间件化
* SESSION/Cookie机制改进
* 对Swoole以及协程支持改进
* 对IDE更加友好
* 统一和精简大量用法

## 安装

~~~
composer create-project topthink/think tp 6.0.*
~~~

如果需要更新框架使用
~~~
composer update topthink/framework
~~~

## 文档

[完全开发手册](https://www.kancloud.cn/manual/thinkphp6_0/content)

## 参与开发

请参阅 [ThinkPHP 核心框架包](https://github.com/top-think/framework)。

## 版权信息

ThinkPHP遵循Apache2开源协议发布，并提供免费使用。

本项目包含的第三方源码和二进制文件之版权信息另行标注。

版权所有Copyright © 2006-2021 by ThinkPHP (http://thinkphp.cn)

All rights reserved。

ThinkPHP® 商标和著作权所有者为上海顶想信息科技有限公司。

更多细节参阅 [LICENSE.txt](LICENSE.txt)


注意：
======================



## 命令行

> php think list
查看支持的命令列表

## 路由

访问地址 需要参考：根目录 route 下的配置

可以直接访问的是

http://localhost:8000/user

## 视图

注意：自定义函数要放在项目应用目录/common/common.php中。  关键点。

default 函数是默认提供的

> {$user.nickname|default="这家伙很懒，什么也没留下"}

默认值和函数可以同时使用，例如：

> {$Think.get.name|getName|default="名称为空"}
