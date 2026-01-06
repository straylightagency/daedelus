<?php
/** Absolute path to the root of the project */

use Daedelus\Framework\Application;
use Daedelus\Framework\Configuration\Hooks;
use Daedelus\Framework\Configuration\Configure;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

define( 'ROOT_PATH', $_ENV['APP_BASE_PATH'] ?? dirname( __DIR__ ) );

$autoload = ROOT_PATH . '/vendor/autoload.php';

/** Composer Autoload */
if ( !file_exists( $autoload ) ) {
	?>
    <p style="font-family:monospace;margin:20px 10px;">
        <strong style="color:red;">ERROR:</strong> Missing <code style="padding:5px;border:1px solid #CCC;background:#EEE;"><?= basename( dirname( $autoload ) ) ?>/<?= basename( $autoload ) ?></code>, please run <code style="padding:5px;border:1px solid #CCC;background:#EEE;">composer install</code>
    </p>
	<?php
	exit;
}

require_once $autoload;

return Application::configure( ROOT_PATH )
                  ->withRouting(
	                  web: __DIR__.'/../routes/web.php',
	                  commands: __DIR__.'/../routes/console.php',
	                  health: '/up',
                  )
                  ->withMiddleware( function ( Middleware $middleware ) {
	                  //
                  })
                  ->withExceptions( function ( Exceptions $exceptions ) {
	                  //
                  })
                  ->withConfig( function ( Configure $config ) {
	                  /** Set your WordPress configuration here */
	                  $config->define('WP_DEFAULT_THEME', 'daedelus');
                  } )
                  ->withHooks( Hooks::default()->merge( [
	                  /**
	                   * Features Hooks
	                   */
	                  Daedelus\Framework\Hooks\DisableTrackbacks::class,
	                  Daedelus\Framework\Hooks\DisableRestApi::class,
	                  Daedelus\Framework\Hooks\DisableAssetsVersioning::class,
	                  Daedelus\Framework\Hooks\DisableComments::class,
	                  Daedelus\Framework\Hooks\DisableAutoUpdate::class,
	                  Daedelus\Framework\Hooks\DisableAutoUpdateEmails::class,
	                  Daedelus\Framework\Hooks\CleanupHtml::class,
	                  Daedelus\Framework\Hooks\NiceSearch::class,
	                  Daedelus\Framework\Hooks\JsToFooter::class,
	                  Daedelus\Framework\Hooks\RelativeUrls::class,

	                  /**
	                   * Application Hooks
	                   */
	                  App\Hooks\ThemeHook::class,
	                  App\Hooks\FieldsHook::class,
                      App\Hooks\AjaxHook::class,
                  ] )->toArray() )
                  ->withVite()
                  ->create();