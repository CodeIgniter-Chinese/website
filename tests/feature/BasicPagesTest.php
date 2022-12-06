<?php

use CodeIgniter\Test\DatabaseTestTrait;
use CodeIgniter\Test\FeatureTestTrait;
use Tests\Support\ProjectTestCase;

/**
 * @internal
 */
final class BasicPagesTest extends ProjectTestCase
{
    use DatabaseTestTrait;
    use FeatureTestTrait;

    public function testCanViewHome()
    {
        $result = $this->get('/');

        $result->assertStatus(200);
        $result->assertSee('小巧而功能强大');
    }

    public function testCanViewDiscuss()
    {
        $result = $this->get('/discuss');

        $result->assertStatus(200);
        $result->assertSee('安全问题应该发送邮件给我们');
    }

    public function testCanViewContribute()
    {
        $result = $this->get('/contribute');

        $result->assertStatus(200);
        $result->assertSee('为 CodeIgniter 贡献力量');
    }

    public function testCanViewDownload()
    {
        $result = $this->get('/download');

        $result->assertStatus(200);
        $result->assertSee('下载');
    }

    public function testCanViewPolicies()
    {
        $result = $this->get('/policies');

        $result->assertStatus(200);
        $result->assertSee('服务条款');
    }

    public function testCanViewFinePrint()
    {
        $result = $this->get('/the-fine-print');

        $result->assertStatus(200);
        $result->assertSee('商标');
    }
}
