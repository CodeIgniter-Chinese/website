<?php

namespace App\Controllers;

use Github\Exception\ExceptionInterface;

class Download extends BaseController
{
    public function index()
    {
        // Get the latest framework releases
        try {
            $releases = $this->github->getReleases();

            $data = [
                'v3name' => end($releases['framework3'])->tag,
                'v4name' => end($releases['framework4'])->tag,
                'v3link' => end($releases['framework3'])->download_url,
                'v4link' => end($releases['framework4'])->download_url,
            ];
        } catch (ExceptionInterface $e) {
            $data = [
                'v3name' => 'v3.1.13',
                'v4name' => 'v4.1.9',
                'v3link' => 'https://api.github.com/repos/bcit-ci/CodeIgniter/zipball/3.1.13',
                'v4link' => 'https://codeload.github.com/codeigniter4/CodeIgniter4/zip/refs/tags/v4.1.9',
            ];
        }

        echo $this->render('download', $data);
    }
}
