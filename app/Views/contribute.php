<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

<div class="clr"></div>
<section id="content-outer">
    <div id="content-inner">
        <div id="contribute-heart-holder">
            <img src="/assets/icons/heart.png" id="contribute-heart" alt="heart icon"/>
            <p>为 CodeIgniter 贡献力量</p>
        </div><!--heart ends here-->

        <div class="clr"></div>

        <div class="inner-page-opening-text">
            <p>
                CodeIgniter 是一个社区驱动的项目，社区可以为项目提供代码和文档两方面的帮助。如果想为项目提供帮助，请在 GitHub 上的 <a href="https://github.com/codeigniter4/CodeIgniter4" target="_blank" class="link-primary">CodeIgniter4 代码仓库</a>中以 <a href="https://github.com/codeigniter4/CodeIgniter4/issues" target="_blank" class="link-primary">Issue</a> 或 <a href="https://github.com/codeigniter4/CodeIgniter4/pulls" target="_blank" class="link-primary">Pull Request</a> 的形式提交。
            </p>

            <div class="inner-page-text-box">
                <p>
                    The CodeIgniter 4 roadmap is explained on <a href="https://forum.codeigniter.com/forum-28.html" target="_blank" class="link-primary">our forum</a>.
                </p>
            </div>

            <p>
                提交 Issue 是指出 BUG 最好的方式。如果你找到 CodeIgniter 的一个程序 BUG 或文档错误，那么请首先检查下面几件事：
            </p>
            <p>
            <ul>
                <li>尚未有人提交过相同的 Issue</li>
                <li>你提交的问题是否已被修复（查看 develop 分支或搜索已关闭的 Issue）</li>
                <li>你提交的问题是否清楚明确？你可以自己修复它吗？</li>
                <li>如果你不确认自己是否找到了一个 BUG，那么你可以在论坛的 <a href="https://codeigniter.org.cn/forums/forum-answer-1.html" target="_blank" class="link-primary">问答求助</a>板块发帖讨论！</li>
            </ul>
            </p>
            <p>
                提交 Issue 对 CodeIgniter 项目很有帮助，但更好的方法是先 Fork 项目然后在自己的代码库中开发，然后提交 Pull Request。完成这些事情需要你使用 Git 版本控制系统。
            </p>
        </div><!--inner-page-opening-text ends here-->

        <div class="clr"></div>

        <div class="inner-page-text-box">
            <div class="inner-page-text-box-title">CodeIgniter 3</div>
            <p>
                CodeIgniter 3 有独立的 <a href="https://github.com/bcit-ci/CodeIgniter" target="_blank" class="link-primary">Github 代码库</a>.
            </p>
        </div><!--contribute boxes ende-->

        <div class="clr"></div>

        <div class="warning">
            <p>
                安全问题应该发送邮件给我们的安全团队，而不是在论坛上发帖或提交一个 Github Issue，谢谢！
                详细内容请访问负责任的漏洞披露页面。
            </p>
        </div><!--warning ende-->

        <div class="clr"></div>

        <div class="inner-page-text-box">
            <div class="inner-page-text-box-title">非开发人员？</div>
            <div class="clr"></div>

            <div class="inner-page-text-sub-box">
                <div class="inner-page-text-sub-box-title">测试人员</div>
                <p>
                    我们非常想了解哪些功能正常哪些功能不正常！因为目前 4.x 版的功能开发是最主要的工作，所以测试人员是项目最需要的。如果你确信自己找到了一个 BUG，并且你是 Github 用户，那么请提交一个“Issue“。如果你不是 Github 用户，或者不确信是否找到了 BUG，那么请在论坛的<a href="https://codeigniter.org.cn/forums/forum-answer-1.html" target="_blank" class="link-primary">问答求助</a>板块发帖讨论！
                </p>
               <p>
                   CodeIgniter 3 讨论也可以访问<a href="https://codeigniter.org.cn/forums/forum-answer-1.html" target="_blank" class="link-primary boldy600">问答求助</a>版块。
               </p>
            </div><!--inner-page-text-sub-box ende-->

            <div class="clr"></div>

            <div class="inner-page-text-sub-box">
                <div class="inner-page-text-sub-box-title">文字工作者</div>
                <p>
                    无论什么项目都需要完善的文档！《用户手册》是 <a href="https://github.com/codeigniter4/CodeIgniter4" target="_blank" class="link-primary">CodeIgniter 项目</a>的一部分，用户永远不会觉得教程太多。
                </p>
                <p>
                    CodeIgniter 3 的用户手册是其<a href="https://github.com/bcit-ci/CodeIgniter" target="_blank" class="link-primary">代码库</a>的一部分。
                </p>
            </div><!--inner-page-text-sub-box ende-->

            <div class="clr"></div>

            <div class="inner-page-text-sub-box">
                <div class="inner-page-text-sub-box-title">布道者</div>
                <p>
                    我们认为应该让更多的项目使用 CodeIgniter 框架 :) 你可以通过活跃在论坛来帮助解答大家的疑问，也可以在自己的好友或社区中帮助宣传 CodeIgniter 框架。
                </p>
            </div><!--inner-page-text-sub-box ende-->

            <div class="clr"></div>

            <div class="inner-page-text-sub-box">
                <div class="inner-page-text-sub-box-title">版主</div>
                <p>
                    版主对于论坛非常重要，他们可以确保论坛的讨论始终围绕主题，也可以把恶意的用户或帖子拒之门外！
                </p>
            </div><!--inner-page-text-sub-box ende-->

            <div class="clr"></div>

            <div class="inner-page-text-sub-box">
                <div class="inner-page-text-sub-box-title">设计师</div>
                <p>
                    非常欢迎为官网、《用户手册》或论坛的设计提出宝贵建议和帮助！我们已把官网和《用户手册》等在 Github 上开源，你可以随时帮助修改页面风格。
                </p>
            </div><!--inner-page-text-sub-box ende-->

        </div><!--inner-page-text-box ende-->

        <div class="clr"></div>

        <div class="inner-page-text-box">
            <div class="inner-page-text-box-title">开发人员？</div>
            <div class="clr"></div>

            <div class="inner-page-text-sub-box">
                <div class="inner-page-text-sub-box-title">程序员</div>
                <p>
                    如果你想参与 CodeIgniter4 新版本的开发，请加入我们的<a href="https://github.com/codeigniter4/" target="_blank" class="link-primary">项目</a>!
                    《用户手册》中有详细的如何为 CodeIgniter 贡献力量的<a href="https://github.com/codeigniter4/CodeIgniter4/blob/develop/contributing/README.md" target="_blank">指导</a>，
                    但需要注意的是确保你的代码符合我们的开发规范，也要撰写合适的文档，并请使用 <a href="https://nvie.com/posts/a-successful-git-branching-model/" target="_blank" class="link-primary">Git-Flow 分支模型</a>。
                </p>
                <p>
                    CodeIgniter 3 版本：它的 <a href="https://github.com/bcit-ci/CodeIgniter/" target="_blank" class="link-primary boldy600">Github</a>。
                </p>
            </div><!--inner-page-text-sub-box ende-->

            <div class="clr"></div>

            <div class="inner-page-text-sub-box">
                <div class="inner-page-text-sub-box-title">审稿人</div>
                <p>
                    每个项目都需要一组熟悉项目标准和约定的核心开发人员来审查提议的增强和修复。到目前为止，我们真的很幸运拥有我们的审稿人小组，并希望能招募更多的审稿人。
                </p>
            </div><!--inner-page-text-sub-box ende-->
        </div><!--inner-page-text-box ende-->

        <div class="clr"></div>

        <div class="inner-page-text-box">
            <div class="inner-page-text-box-title">感谢我们的杰出贡献者</div>
            <div class="clr"></div>

            <div class="inner-page-text-sub-box">
                <div class="inner-page-text-sub-box-title">CodeIgniter 4</div>

                <div id="target-framework4">...</div>

            </div><!--inner-page-text-sub-box ends here-->

            <div class="clr"></div>

            <div class="inner-page-text-sub-box">
                <div class="inner-page-text-sub-box-title">CodeIgniter 4 多语言</div>

                <div id="target-translations4">...</div>

            </div><!--inner-page-text-sub-box ends here-->

            <div class="clr"></div>

            <div class="inner-page-text-sub-box">
                <div class="inner-page-text-sub-box-title">CodeIgniter 3</div>

                <div id="target-framework3">...</div>

            </div><!--inner-page-text-sub-box ends here-->

            <div class="clr"></div>

            <div class="inner-page-text-sub-box">
                <div class="inner-page-text-sub-box-title">CodeIgniter 3 多语言</div>

                <div id="target-translations3">...</div>

            </div><!--inner-page-text-sub-box ends here-->

            <div class="clr"></div>

            <div class="inner-page-text-sub-box">
                <div class="inner-page-text-sub-box-title">新版官网</div>

                <div id="target-website4">...</div>

            </div><!--inner-page-text-sub-box ends here-->

            <div class="clr"></div>

            <div class="inner-page-text-sub-box">
                <div class="inner-page-text-sub-box-title">旧版官网</div>

                <div id="target-website3">...</div>

            </div><!--inner-page-text-sub-box ends here-->

            <div class="clr"></div>

            <div class="inner-page-text-sub-box">
                <div class="inner-page-text-sub-box-title">中国官网</div>

                <div id="target-chinese">...</div>

            </div><!--inner-page-text-sub-box ends here-->

        </div><!--inner-page-text-box ende-->

    </div><!--content-inner ends here-->
</section><!--section ende-->

<div class="clr"></div>

<script type="text/html" id="template-heroes">
<% foreach (item in listing) %>
<div class="contributor-profiles">
    <a href="<%=item.html_url%>" class="contributors-profile-link" target="_blank">
        <img src="<%=item.avatar_url%>"
                class="contributor-profile-image"
                alt="<%=item.login%>"
                title="<%=item.login%>" /> <br />
        <div class="contributors-stars"><%=item.stars%></div>
    </a>
</div>
<% /foreach %>
</script>

<script src="https://res.cdn.changbaimg.com/-/8d98e208cfa36594/cbT.js"></script>
<script>
$.ajax({
    url: '/api/get-contributors',
    type: 'GET',
    dataType: 'json',
    success: function (res) {
        var template = cbT.compile('template-heroes');
        $('#target-framework3').html(template({listing: res.data.framework3}));
        $('#target-translations3').html(template({listing: res.data.translations3}));
        $('#target-framework4').html(template({listing: res.data.codeigniter4}));
        $('#target-translations4').html(template({listing: res.data.translations4}));
        $('#target-website3').html(template({listing: res.data.website3}));
        $('#target-website4').html(template({listing: res.data.website4}));
        $('#target-chinese').html(template({listing: res.data.chinese}));
    }
});
</script>

<?= $this->endSection() ?>
