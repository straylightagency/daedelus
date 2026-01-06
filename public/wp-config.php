<?php

use Illuminate\Http\Request;

if ( basename( $_SERVER['SCRIPT_NAME'] ) === basename( __FILE__ ) ) {
    die(); /** trying to access directly from /wp-config.php */
}

(require_once dirname( __DIR__ ) . '/bootstrap/app.php')
	->handleRequest( Request::capture() );