<?php

namespace App\Controllers;

use Github\Exception\ExceptionInterface;

class Api extends BaseController
{
    //获取下载版本信息
    public function getDownloadData()
    {
        try {
            $releases = $this->github->getReleases();
            $data = [
                'v3name' => end($releases['framework3'])->tag,
                'v4name' => end($releases['framework4'])->tag,
                'v3link' => (string)end($releases['framework3'])->download_url,
                'v4link' => (string)end($releases['framework4'])->download_url,
            ];

        } catch (ExceptionInterface $e) {
            $data = [
                'v3name' => 'v3.1.13',
                'v4name' => 'v4.1.9',
                'v3link' => 'https://api.github.com/repos/bcit-ci/CodeIgniter/zipball/3.1.13',
                'v4link' => 'https://codeload.github.com/codeigniter4/CodeIgniter4/zip/refs/tags/v4.1.9',
            ];
        }

        echo json_encode($data);
    }

    public function getContributors()
    {
        $html = "<div class=\"inner-page-text-box-title\">感谢我们的杰出贡献者</div><div class=\"clr\"></div><!--inner-page-text-sub-box ends here-->";

        $enums = [
            'framework3' => 'CodeIgniter 3',
            'framework4' => 'CodeIgniter 4',
            'translations3' => 'CodeIgniter 3 翻译',
            'translations4' => 'CodeIgniter 4 翻译',
            'website3' => 'CodeIgniter 3 网站',
            'website4' => 'CodeIgniter 4 网站',
        ];
        // Get the top 12 contributors for each repo
        foreach ($this->github->getContributors() as $id => $contributors) {
            $id = $enums[$id];
            // Contributors are already sorted, so grab the first 12
            $html .= "<div class=\"inner-page-text-sub-box\"><div class=\"inner-page-text-sub-box-title\">".$id."</div>";
            //$data = array_slice($contributors, 0, 12);
            $html .= $this->getHeroesHtml($contributors);
            $html .= "</div><!--inner-page-text-sub-box ends here--><div class=\"clr\"></div>";
            unset($data);
        }


        echo $html;
    }

    //获取贡献者信息

    public function getHeroesHtml($heroes): string
    {
        $hero_html = '';
        if (isset($heroes) && count($heroes)) {
            foreach ($heroes as $hero) {
                $hero_html .= "<div class=\"contributor-profiles\"><a href=\"" . $hero->html_url . "\" class=\"contributors-profile-link\" target=\"_blank\">
<img src=\"" . $hero->avatar_url . "\" class=\"contributor-profile-image\"  alt=\"" . esc($hero->login, 'attr') . "\" title=\"" . esc($hero->login, 'attr') . "\" /> <br /> <div class=\"contributors-stars\">" . $hero->stars . "</div> </a> </div>";
            }
        }
        return $hero_html;
    }
}