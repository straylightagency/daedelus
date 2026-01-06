<?php

use Daedelus\Framework\Application;
use Daedelus\Theme\Theme;

if ( !class_exists( Application::class ) ) {
	?>
	<p style="font-family:monospace;margin:20px 10px;">
		<strong style="color:red;">ERROR:</strong> You need to install Majestic to use this theme. Please follow instructions
		<a href="https://github.com/straylightagency/majestic">here</a>
	</p>
	<?php
	exit;
}

/** @var Theme $theme */
$theme = app( Theme::class );

$theme->setup();