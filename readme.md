大道至简 · 原生框架
--
framework 是一个基于 ThinkPHP5.1 开发的后台管理系统，集成常用功能及封装。

项目安装及二次开发可以参考 ThinkPHP 官方文档，数据库文件摆放在项目根目录下。

#### 注意事项
* 项目测试需要自行搭建环境导入数据库( framework.sql )并修改配置( config/database.php )；
* 若操作提示“测试系统禁止操作”等字样，需要删除演示路由配置( route/demo.php )或清空路由文件；
* 当前版本使用 ThinkPHP5.1.x，对 PHP 版本标注不低于 PHP5.6，具体请阅读 ThinkPHP 官方文档；
* 环境需开启 PATHINFO，不再支持 ThinkPHP 的 URL 兼容模式运行（源于如何优雅的展示）；

技术支持
--
开发前认真阅读 ThinkPHP 官方文档会对您有帮助哦！

 
特别感谢
--
|名称|版本|描述|链接|
|---|---|---|---|
|Layui|2.4.5|UI组件库|https://github.com/sentsin/layui|
|Ckeditor|4.10.1|富文件编辑器|https://github.com/ckeditor/ckeditor-dev|
|PluPloader|3.1.2|文件上传工具1|https://github.com/fex-team/webuploader|
|WebUploader|0.1.5|文件上传工具2|https://github.com/fex-team/webuploader|
|Font-Awesome|4.7.0|字体图标库|https://github.com/FortAwesome/Font-Awesome|
|ThinkPHP|5.1.28|PHP基础框架|https://github.com/top-think/framework|
|ThinkLibrary|1.2.2|ThinkPHP扩展组件|https://github.com/zoujingli/ThinkLibrary|
|WeChatDeveloper|1.2.2|微信公众号组件|https://github.com/zoujingli/WeChatDeveloper|
|WeOpenDeveloper|1.1.3|微信开放平台组件|https://github.com/zoujingli/WeOpenDeveloper|
