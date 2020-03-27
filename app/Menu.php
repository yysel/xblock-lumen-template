<?php
/**
 * Created by PhpStorm.
 * User: jim
 * Date: 20-3-27
 * Time: 下午6:37
 */

namespace App;


use XBlock\Kernel\MenuRegister;

use XBlock\Kernel\Elements\Menu as XBlockMenu;

class Menu extends MenuRegister
{
    public function register()
    {
        $this->make('test', '演示菜单')
            ->icon('home')
            ->children(function (XBlockMenu $menu) {
                $menu->make('item1', '二级菜单');
            });
    }
}