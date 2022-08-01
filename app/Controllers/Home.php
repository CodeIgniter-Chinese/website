<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $news = [
            [
                'title' => 'CodeIgniter 4.0 正式版发布了！',
                'url' => 'https://zhuanlan.zhihu.com/p/108894797',
                'date' => '2020.02.24',
            ],
            [
                'title' => 'CodeIgniter 使用技巧系列文章',
                'url' => 'https://zhuanlan.zhihu.com/p/68800595',
                'date' => '2019.06.12',
            ],
            [
                'title' => 'CodeIgniter 4 alpha 1 版发布了',
                'url' => 'https://zhuanlan.zhihu.com/p/45641550',
                'date' => '2018.09.29',
            ],
            [
                'title' => 'CodeIgniter 4 中文手册翻译计划',
                'url' => 'https://zhuanlan.zhihu.com/p/28911539',
                'date' => '2017.08.30',
            ],
            [
                'title' => 'CodeIgniter 4 Milestone 1 版发布了',
                'url' => 'https://zhuanlan.zhihu.com/p/21482815',
                'date' => '2016.07.04',
            ],
        ];

        echo $this->render('home', ['news' => $news]);
    }
}
