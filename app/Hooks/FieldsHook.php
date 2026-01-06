<?php
namespace App\Hooks;

use Daedelus\Fields\Fields;
use Daedelus\Theme\Hooks\ConfigureFields;

class FieldsHook extends ConfigureFields
{
	/**
	 * @return void
	 */
    public function register():void
    {
		Fields::disableAdmin(); /** Prevent ACF from being modified on admin panel */
	    Fields::disableRestApi(); /** Prevent ACF from being visible on REST API */
    }
}