#Bin/junit-laravel

#基于laravel框架开发的组件

laravel >=5.1 & php>7.1.3

```yml
composer require "Bin/junit-laravel"

```

# 配置方式
5.5手动配置laravel对于``Bin\JunitLaravel\Providers\JunitServiceProvider::class``服务放到config/app.php中

解释路由
```php
<?php
Route::get('/', 'JunitController@index');
Route::post('/', 'JunitController@store')->name('junit.store');
?>
```