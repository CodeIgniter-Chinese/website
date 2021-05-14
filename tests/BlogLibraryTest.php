<?php

use App\Exceptions\BlogException;
use App\Libraries\Blog;
use org\bovigo\vfs\vfsStream;
use CodeIgniter\Config\Factories;
use CodeIgniter\Test\CIUnitTestCase;
use Config\Blog as BlogConfig;

class BlogLibraryTest extends CIUnitTestCase
{
	/**
	 * Our fake filesystem
	 * @var vfsStream
	 */
	protected $root;

	/**
	 * @var Blog
	 */
	protected $blog;

	public function setUp(): void
	{
		parent::setUp();

		$this->blog = new Blog();
		$config = config(BlogConfig::class);
		$config->contentPath = TESTPATH.'_support/blog/';
		Factories::injectMock('Config', BlogConfig::class, $config);

		cache()->clean();
	}

	public function testGetPostsNoData()
	{
		$config = config(BlogConfig::class);
		$config->contentPath = WRITEPATH.'uploads';
		Factories::injectMock('Config', BlogConfig::class, $config);

		$this->expectException(BlogException::class);
		$this->expectExceptionMessage(lang('Blog.invalidContent'));

		$this->assertEquals([], $this->blog->getRecentPosts());
	}

	public function testGetPostsSuccess()
	{
		helper('filesystem');
		$posts = $this->blog->getRecentPosts();

		// Should only read the one file in top-level, not in sub-folder.
		$this->assertCount(1, $posts);
		$this->assertEquals('CodeIgniter 4.0.4 Released', $posts[0]->title);
		$this->assertEquals('codeigniter-404-released', $posts[0]->slug);
		$this->assertEquals('2020-07-15', $posts[0]->date);
		$this->assertEquals(['news' , 'releases'], $posts[0]->tags);
		$this->assertEquals('Lonnie Ezell', $posts[0]->author);
		$this->assertNotEmpty($posts[0]->body);
		$this->assertNotEmpty($posts[0]->html);
	}

	public function testGetPostSuccess()
	{
		helper('filesystem');
		$post = $this->blog->getPost('codeigniter-404-released');

		// Should only read the one file in top-level, not in sub-folder.
		$this->assertEquals('CodeIgniter 4.0.4 Released', $post->title);
		$this->assertEquals('codeigniter-404-released', $post->slug);
		$this->assertEquals('2020-07-15', $post->date);
		$this->assertEquals(['news' , 'releases'], $post->tags);
		$this->assertEquals('Lonnie Ezell', $post->author);
		$this->assertNotEmpty($post->body);
		$this->assertNotEmpty($post->html);
	}

	public function testRecordVisit()
	{
		@unlink(WRITEPATH .'blog_visits.txt');

		$this->blog->recordVisit('codeigniter-404-released');

		$this->assertTrue(is_file(WRITEPATH .'blog_visits.txt'));

		$records = unserialize(file_get_contents(WRITEPATH .'blog_visits.txt'));
		$this->assertTrue(array_key_exists('codeigniter-404-released', $records));
		$this->assertEquals(1, $records['codeigniter-404-released']);
	}

	public function testRecentPostsWidget()
	{
		$widget = $this->blog->recentPostsWidget(1);

		$this->assertTrue(strpos($widget, 'Recent Posts') !== false);
		$this->assertTrue(strpos($widget, 'CodeIgniter 4.0.4 Released') !== false);
	}
/**
 * Temporarily disabled.
 *
 *	public function testPopularPostsWidget()
 *	{
 *		$widget = $this->blog->popularPostsWidget(1);
 *
 *		$this->assertTrue(strpos($widget, 'Popular Posts') !== false);
 *		$this->assertTrue(strpos($widget, 'CodeIgniter 4.0.4 Released') !== false);
 *	}
 */
}
