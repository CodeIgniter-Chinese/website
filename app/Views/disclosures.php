<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

<!-- CONTENT -->
<div class="clr"></div>
<section id="content-outer">
    <div id="content-inner">
        <div id="policies-icon-holder">
            <img src="/assets/icons/44521256.png" id="policies-icon"/>
        </div><!--icon ends here-->

            <p class="inner-page-opening-text">以下项目已报告给 CodeIgniter 核心团队，并作为潜在的安全问题加以解决。并非所有这些都会影响您的网站，但您应该定期查看此列表以确定是否存在威胁。
            </p>

            <p class="inner-page-opening-text">这些披露主要针对网站和周边环境。影响框架的安全披露将通过 GitHub 的内置安全顾问功能处理。

            <div class="inner-page-text-box">
                <div class="inner-page-text-box-title">安全信息披露</div>

                <div class="clr"></div>

                <div class="inner-page-text-sub-box">
                    <div class="inner-page-text-sub-box-title">CodeIgniter.com 电子邮件欺骗</div>

                    <p>2021 年 10 月 25 日 <b>MX报告称</b> 由于缺少 DKIM 记录，codeigniter.com 域能够用于电子邮件欺骗。因此，我们更新了 DNS 以包含 DKIM 记录。
                    </p>
                </div>
            </div>

    </div><!--content-inner ends here-->
</section><!--section end -->


    <div class="clr"></div>

<?= $this->endSection() ?>
