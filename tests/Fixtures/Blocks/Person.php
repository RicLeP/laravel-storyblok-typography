<?php


namespace Riclep\StoryblokTypography\Tests\Fixtures\Blocks;


use Riclep\StoryblokTypography\Tests\Fixtures\Block;
use Riclep\StoryblokTypography\Traits\AppliesTypography;

class Person extends Block
{
	use AppliesTypography;

	protected $applyTypography = ['Text', 'Html'];
}