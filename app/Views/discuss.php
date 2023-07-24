<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

<div class="clr"></div>

<section id="content-outer">
    <div id="content-inner">
        <div id="discuss-icon-holder">
            <img src="/assets/icons/forum-new.png" id="discuss-icon" alt="discuss icon"/>
            <p>
                CodeIgniter 是一个社区开发的开源项目，在社区中有各种版块供开发者收集和交换意见。
            </p>
        </div><!--icon ends here-->

        <div class="clr"></div>

        <div class="warning">
            <p>
                安全问题应该发送邮件给我们的 <a href="mailto:security@codeigniter.com" class="link-reverse">安全团队</a>，而不是在论坛上发帖或提交一个 Github Issue，谢谢！
            </p>
        </div><!--warning ends here-->

        <div class="clr"></div>

        <div class="inner-page-text-box">
            <div class="inner-page-text-box-title">论坛</div>
            <p>
                我们的论坛使用 Discuz! 搭建，有 5 个主要部分：  <br />
            </p>
            <ul>
                <li>问答求助</li>
                <li>代码共享与下载</li>
                <li>进阶讨论</li>
                <li>教程发布与分享</li>
                <li>其他资源（中文化、招聘和工作、项目展示等）</li>
            </ul>
            <p>
                在论坛里你可以寻求帮助或讨论在框架使用中遇到的问题。<br />
                <a href="https://codeigniter.org.cn/forums/" class="buttons" target="_blank">访问论坛</a>
            </p>
            <br /><br />
        </div><!--inner-page-text-box ende-->

        <div class="clr"></div>

        <div class="inner-page-text-box">
            <div class="inner-page-text-box-title">Github</div>
            <p>
                所有开发行为都记录在 Github。更多细节请查看贡献页面
            </p>
            <p class="boldy600">
                你可以在 Github 的 Issue 页面提交 BUG 报告，或者提交 pull 请求为框架添砖加瓦。我们【不在】 Github 上提供框架相关的技术支持和帮助，请使用论坛。
            </p>
            <p>
                我们也使用 Github Issue 页面跟进开发计划和采纳功能增强的建议，这些会合并到特定的发布版本中。
            </p>
            <p>
                <a href="https://github.com/bcit-ci/CodeIgniter/" class="buttons" target="_blank">CodeIgniter 3</a>
                <a href="https://github.com/codeigniter4/codeigniter4/" class="buttons" target="_blank">CodeIgniter 4</a>
            </p>
            <br /><br />
        </div><!--inner-page-text-box ends here-->

        <div class="clr"></div>

    </div><!--content-inner ends here-->
</section><!--section ende-->

<div class="clr"></div>

<?= $this->endSection() ?>
