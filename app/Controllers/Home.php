<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $news = [
            [
                'title' => 'CodeIgniter 社区 2023 年终总结',
                'url'   => 'https://zhuanlan.zhihu.com/p/680509625',
                'date'  => '2024.01.27',
            ],
            [
                'title' => 'CodeIgniter v4.3.7 - v4.4.3 版本发布简报 & 中文手册更新',
                'url'   => 'https://zhuanlan.zhihu.com/p/663892250',
                'date'  => '2023.10.30',
            ],
            [
                'title' => '全文重新翻译的 CodeIgniter 4.3.6 中文手册发布',
                'url'   => 'https://zhuanlan.zhihu.com/p/645477079',
                'date'  => '2023.07.24',
            ],
            [
                'title' => 'CodeIgniter 发布 4.3 版',
                'url'   => 'https://zhuanlan.zhihu.com/p/604862961',
                'date'  => '2023.02.09',
            ],
            [
                'title' => 'CodeIgniter 4.0 正式版发布了！',
                'url'   => 'https://zhuanlan.zhihu.com/p/108894797',
                'date'  => '2020.02.24',
            ],
            // [
            //    'title' => 'CodeIgniter 使用技巧系列文章',
            //    'url'   => 'https://zhuanlan.zhihu.com/p/68800595',
            //    'date'  => '2019.06.12',
            // ],
            // [
            //     'title' => 'CodeIgniter 4 alpha 1 版发布了',
            //     'url'   => 'https://zhuanlan.zhihu.com/p/45641550',
            //     'date'  => '2018.09.29',
            // ],
            // [
            //     'title' => 'CodeIgniter 4 中文手册翻译计划',
            //     'url'   => 'https://zhuanlan.zhihu.com/p/28911539',
            //     'date'  => '2017.08.30',
            // ],
        ];

        echo $this->render('home', ['news' => $news]);
    }
}
