<?php

namespace Riclep\StoryblokTypography\Tests;


use Riclep\StoryblokTypography\RequestStory;
use Riclep\StoryblokTypography\Tests\Fixtures\Blocks\CustomPerson;

class BlockTest extends TestCase
{
	/** @test */
	public function can_apply_typography()
	{
		$page = $this->makePage('custom-page.json');

		$this->assertEquals('This is some text to test typography is applied <span class="numbers">10</span>×<span class="numbers">10</span>&nbsp;let’s&nbsp;check', $page->blocks[0]->columns[0]->Text);

		$this->assertEquals('<p>This is some text to test typography is applied <span class="numbers">10</span>×<span class="numbers">10</span>&nbsp;let’s&nbsp;check</p><p>Another <span class="push-double"></span>​<span class="pull-double">“</span>paragraph”. <span class="numbers">3</span>×<span class="numbers">4</span>&nbsp;<span class="caps">CAPITALS</span>.</p>', $page->blocks[0]->columns[0]->Html);
	}

	/** @test */
	public function can_apply_settings_to_typography()
	{
		$page = json_decode(file_get_contents(__DIR__ . '/Fixtures/custom-page.json'), true);
		$block = new CustomPerson($page['story']['content']['blocks'][0]['columns'][0], null);

		$this->assertEquals('This is some text to test typog­ra­phy is applied <span class="numbers">10</span>×<span class="numbers">10</span> let\'s&nbsp;check', $block->Text);

		$this->assertEquals('<p>This is some text to test typog­ra­phy is applied <span class="numbers">10</span>×<span class="numbers">10</span> let\'s&nbsp;check</p><p>Anoth­er <span class="push-double"></span>​<span class="pull-double">"</span>para­graph". <span class="numbers">3</span>×<span class="numbers">4</span> <span class="caps">CAPITALS</span>.</p>', $block->Html);
	}
}
