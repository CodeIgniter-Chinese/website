<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CodeIgniter 中国 - PHP 框架 CodeIgniter 中国开发者社区</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('/favicons/apple-touch-icon.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('/favicons/favicon-32x32.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('/favicons/favicon-16x16.png') ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('/favicon.ico') ?>"/>
    <link rel="manifest" href="<?= base_url('/favicons/site.webmanifest') ?>">
    <link rel="mask-icon" href="<?= base_url('/favicons/safari-pinned-tab.svg') ?>" color="#ffffff">
    <meta name="msapplication-config" content="<?= base_url('/favicons/browserconfig.xml') ?>" />
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="/assets/css/ci-theme.css">
    <link rel="stylesheet" href="/assets/css/ci-responsive.css?ver=1.0">
    <link rel="stylesheet" href="/assets/css/animate.css">
    <link rel="stylesheet" href="/assets/js/highlight/styles/dark.css">
</head>
<body>
    <?= $this->include('layouts/_top_nav') ?>

    <div class="clr"></div>
    <section id="content-outer-news">
        <div id="content-inner-news">
            <div id="news-left-column">
                <div class='widget'>
                    <h4>最近的帖子</h4>
                    <a href="https://codeigniter.org.cn/forums/thread-80-1-1.html">
                        CodeIgniter 中国 微信群、微信公众号</a>
                </div>
            </div>

            <div id="news-column">
                <div class="news-box">
                    <div class="news-box-title">
                        <a class="news-box-title-link" href="https://codeigniter.org.cn/forums/thread-80-1-1.html">CodeIgniter 中国 微信群、微信公众号</a>
                    </div>

                    <div class="meta">
                        2007-11-29     Hex
                        <br><br>归档:
                        <ul class="tags">
                            <li><a href="https://codeigniter.org.cn/forums/forum.php">论坛</a></li>
                            <li><a href="https://codeigniter.org.cn/forums/forum-answer-1.html">CodeIgniter 问答求助</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="clr"></div>

        </div><!--content inner ends-->
    </section><!--section ende-->

    <?= $this->include('layouts/_footer') ?>
    <script src="/assets/js/highlight/highlight.pack.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
</body>
</html>
