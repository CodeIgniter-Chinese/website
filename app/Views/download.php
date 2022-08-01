<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

<div class="clr"></div>
<section id="content-outer">
	<div id="content-inner">
		<div class="ci-version-boxes">
			<div class="cv-boxes-version">
				<div class="version-name">CodeIgniter <br />
					<span class="version-no">4</span>
				</div>
			</div><!--cv-boxes-version end-->
			<div class="cv-boxes-content">
				<p>CodeIgniter 4 是框架的最新版本，专为 PHP 7.3 及以上（包括 8.1）版本打造。</p>
				<p>第一版发布日期是 2020 年 2 月 24 日。当前版本为 <?= $v4name ?>。</p>
				<p>
                    你可以点击下面的按钮此版本的框架, 但是我们推荐你查看《用户手册》的
					<a href="https://codeigniter.org.cn/user_guide/installation/index.html" class="link-primary" target="_blank">安装章节</a>
                    可以选择几种不同的方式来安装框架:)
				</p>
				<div class="clr"></div>
				<div class="cv-boxes-buttons-area">
					<a id="v4link" href="<?= $v4link ?>" class="buttons-reverse download-buttons" target="_blank">下载</a>
					<a href="https://codeigniter.org.cn/forums/forum-answer-1.html" class="buttons-reverse download-buttons" target="_blank">讨论</a>
					<a href="https://github.com/codeigniter4/CodeIgniter4" class="buttons-reverse download-buttons" target="_blank">GitHub</a>
					<a href="https://github.com/codeigniter4/translations" class="buttons-reverse download-buttons" target="_blank">多语言</a>
					<a href="https://codeigniter.org.cn/user_guide/index.html" class="buttons-reverse download-buttons">用户手册</a>
				</div><!--cv-boxes-buttons-area end-->
			</div><!--cv-boxes-content end-->
		</div><!--ci-version-boxes end-->

		<div class="ci-version-boxes">
			<div class="cv-boxes-version">
				<div class="version-name">CodeIgniter <br />
					<span class="version-no">3</span>
				</div>
			</div><!--cv-boxes-version ende-->
			<div class="cv-boxes-content">
				<p>CodeIgniter 3 是该框架的旧版本， 专为 PHP 5.6及以上 打造。</p>
				<p>此版本正在维护中，主要接收安全更新，最新稳定版本为 <?= esc($v3name) ?>。</p>

				<div class="clr"></div>
				<div class="cv-boxes-buttons-area">
					<a href="<?= $v3link ?>" class="buttons-reverse download-buttons" target="_blank">下载</a>
					<a href="https://github.com/bcit-ci/CodeIgniter" class="buttons-reverse download-buttons" target="_blank">GitHub</a>
					<a href="https://github.com/bcit-ci/codeigniter3-translations" class="buttons-reverse download-buttons" target="_blank">多语言</a>
					<a href="/userguide3" class="buttons-reverse download-buttons">用户手册</a>
				</div><!--cv-boxes-buttons-area end-->
			</div><!--cv-boxes-content end-->
		</div><!--ci-version-boxes end-->

	</div><!--content-inner end-->
</section><!--section end-->



<script>
    $(function () {
        $.ajax({
            url: '/api/get-download-data',
            type: 'GET',
            dataType: 'json',
            success: function (res) {
                $('#v4name').text(res.v4name);
                $('#v4link').attr('href', res.v4link);
                $('#v3name').text(res.v3name);
                $('#v3link').attr('href', res.v3link);
            }
        });
    });
</script>
<div class="clr"></div>
<?= $this->endSection() ?>
