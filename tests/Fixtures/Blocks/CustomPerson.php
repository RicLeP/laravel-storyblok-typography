<?php


namespace Riclep\StoryblokTypography\Tests\Fixtures\Blocks;


use Riclep\StoryblokTypography\Tests\Fixtures\Block;
use Riclep\StoryblokTypography\Traits\AppliesTypography;
use PHP_Typography\Settings as TypographySettings;

class CustomPerson extends Block
{
	use AppliesTypography;

	protected $applyTypography = ['Text', 'Html'];

	public function init() {
		$settings = new TypographySettings();
		$settings->set_smart_quotes(false);

		$this->setTypographySettings($settings);
	}
}