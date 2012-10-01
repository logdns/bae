bae
===
在BAE上部署WordPress：
准备工作.
===
*BAE：http://developer.baidu.com/ 
*在BAE上面创建一个应用，再创建一个版本，比如版本1.
*访问云数据库，创建一个数据库.
*访问消息服务，创建一个消息队列（单模式多模式都行），那个队列的邮件配额（调节看自己的需求）.
*访问云存储，创建一个 bucket。bucket名字随便您自己，bucket是用来存储图片和文件的！（配额自己调节）
*安装过程：
===
*建议用TortoiseSVN，提交代码！
*访问APP 地址跳转到 WordPress 的安装界面。会提示没找到 wp-config.php 文件，开始创建一个吧。
*点创建
*然后写入如下：
===
*Database Name ：  云数据库名

*Table Prefix  ：  wp-

*BCMS Queue name： 云消息队列名

*然后直接下一步，会提示没有写入权限！自己复制代码，创建wp-config.php文件，上传！
*其他的安装就和WP正常安装一样！
*插件BCS Support 设置你刚刚创建的bucket就好了！
*伪静态规则在app.conf里面！

最后一点：访问管理后台，要加 /wp-admin/index.php.
===
程序修改作者hjin-me，部署logdns

程序演示：
===
http://blog.xiaofengsky.com/
===