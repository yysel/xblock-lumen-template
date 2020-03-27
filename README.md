# XBloc 后端项目模板

`XBlock`框架的详细内容，请查阅[XBlock文档](http://doc.mylarave.cn)
```bash
//克隆项目
git clone https://github.com/yysel/xblock-lumen-template.git

//进入项目目录
cd xblock-lumen-template
 
//修改你的.env中的数据库配置

//安装依赖
composer install

//运行数据库迁移
php artisan migrate

//运行数据填充
php artisan db:seed  --class=UsersTableSeeder

//安装认证用的秘钥对
php artisan xblock:key
```
