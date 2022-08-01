<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // Get the latest framework releases
//        try {
//            $repos = $this->github->getRepos();
//
//            $data = [
//                'html_url'         => $repos['framework4']->html_url,
//                'stargazers_count' => number_format($repos['framework4']->stargazers_count),
//                'forks_count'      => number_format($repos['framework4']->forks_count),
//            ];
//        } catch (ExceptionInterface $e) {
//            $data = [
//                'html_url'         => 'https://github.com/codeigniter4/CodeIgniter4',
//                'stargazers_count' => '',
//                'forks_count'      => '',
//            ];
//        }
//        $data = [
//            'html_url'         => 'https://github.com/codeigniter4/CodeIgniter4',
//            'stargazers_count' => '4030',
//            'forks_count'      => '1557',
//        ];

        echo $this->render('home');
    }
}
