<?php


namespace SundaySim\View;

use Illuminate\View\FileViewFinder;

class ThemeViewFinder extends FileViewFinder
{
	
	public $activeTheme;
	
	public $basePath;

	public function setBasePath($path)
	{
		$this->basePath = $path;
	}

	public function setActiveTheme($theme)
	{
		$this->activeTheme = $theme;
		array_unshift($this->paths, $this->basePath . '/' . $theme . '/views');
	}
}