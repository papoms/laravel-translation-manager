<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Routes group config
    |--------------------------------------------------------------------------
    |
    | The default group settings for the elFinder routes.
    |
    */
    'route' => [
        'prefix' => 'translations',
        'middleware' => 'auth',
    ],

	/**
	 * Enable deletion of translations
	 *
	 * @type boolean
	 */
	'delete_enabled' => true,

	/**
	 * Exclude specific groups from Laravel Translation Manager. 
	 * This is useful if, for example, you want to avoid editing the official Laravel language files.
	 *
	 * @type array
	 *
	 * 	array(
	 *		'pagination',
	 *		'reminders',
	 *		'validation',
	 *	)
	 */
	'exclude_groups' => array(),

	/**
	 * When Exporting from Database to the language files
	 * choose to omit expanding the dot notation to a nested array.
	 *
	 * Example:
	 * By Default
	 * "some.longer.key" will be expanded to 
	 * "some" => ["longer" => ["key" => "value"]]
	 *
	 * set this param to false to use dot notation in the language file
	 *
	 * "some.longer.key" => 'value'
	 *
	 * @type boolean
	 */
	'export_nested_arrays' => true,

);
