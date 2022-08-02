<?php

namespace App\Controllers;

use App\Libraries\GitHub;
use Github\Exception\ExceptionInterface;

class Api extends BaseController
{
    /**
     * @var GitHub
     */
    protected $github;

    public function __construct()
    {
        $this->github = service('github');
    }

    // 获取下载版本信息
    public function getDownloadData()
    {
        try {
            $cache_key = 'github_download_data';

            if (! $releases_data = cache($cache_key)) {
                $releases = $this->github->getReleases();

                $releases_data = [
                    'v3name' => end($releases['framework3'])->tag,
                    'v4name' => end($releases['framework4'])->tag,
                    'v3link' => (string) end($releases['framework3'])->download_url,
                    'v4link' => (string) end($releases['framework4'])->download_url,
                ];

                cache()->save($cache_key, $releases_data, 86400);
            }
        } catch (ExceptionInterface $e) {
            $releases_data = [
                'v3name' => 'v3.1.13',
                'v4name' => 'v4.1.9',
                'v3link' => 'https://api.github.com/repos/bcit-ci/CodeIgniter/zipball/3.1.13',
                'v4link' => 'https://codeload.github.com/codeigniter4/CodeIgniter4/zip/refs/tags/v4.1.9',
            ];
        }

        echo $this->render('json', ['output' => $releases_data]);
    }

    public function getContributors()
    {
        try {
            $cache_key = 'github_contributors_data';

            if (! $contributors_data = cache($cache_key)) {
                $contributors = $this->github->getContributors();

                $contributors_data = [];

                // Get the top 12 contributors for each repo
                foreach ($this->github->getContributors() as $id => $contributors) {
                    // Contributors are already sorted, so grab the first 12
                    $temp = array_slice($contributors, 0, 12);

                    foreach ($temp as $index => $item) {
                        $temp[$index] = [
                            'html_url' => (string)$item->html_url,
                            'avatar_url' => (string)$item->avatar_url,
                            'login' => (string)$item->login,
                            'stars' => (string)$item->stars,
                        ];
                    }

                    $contributors_data[$id] = $temp;
                }

                cache()->save($cache_key, $contributors_data, 86400);
            }
        } catch (ExceptionInterface $e) {
            $contributors_data = null;
        }

        $contributors_data['chinese'] = [
            [
                'html_url' => 'https://github.com/wangdezhong',
                'avatar_url' => 'https://avatars.githubusercontent.com/u/14903402?v=4',
                'login' => 'wangdezhong',
                'stars' => '★★',
            ],
            [
                'html_url' => 'https://github.com/hex-ci',
                'avatar_url' => 'https://avatars.githubusercontent.com/u/13709?v=4',
                'login' => 'hex-ci',
                'stars' => '★★',
            ]
        ];

        echo $this->render('json', ['output' => $contributors_data]);
    }

    // Get the latest framework releases
    public function getRepos()
    {
        try {
            $cache_key = 'github_repos_data';

            if (! $repos_data = cache($cache_key)) {
                $repos = $this->github->getRepos();

                $repos_data = [
                    'html_url'         => $repos['framework4']->html_url,
                    'stargazers_count' => number_format($repos['framework4']->stargazers_count),
                    'forks_count'      => number_format($repos['framework4']->forks_count),
                ];

                cache()->save($cache_key, $repos_data, 86400);
            }
        } catch (ExceptionInterface $e) {
            $repos_data = [
                'html_url'         => 'https://github.com/codeigniter4/CodeIgniter4',
                'stargazers_count' => '',
                'forks_count'      => '',
            ];
        }

        echo $this->render('json', ['output' => $repos_data]);
    }
}
