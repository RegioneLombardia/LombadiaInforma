<?php

/**
 * Lombardia Informatica S.p.A.
 * OPEN 2.0
 *
 *
 * @package    lispa\amos\basic\template
 * @category   CategoryName
 */

return [
    'assistance' => [
        'enabled' => true, //Enable the assistance button
        'type' => 'email', //Assistance button mode: url or email
        'email' => 'info@example.com', //Assistance mail
        'url' => '/path/to/assistance/page' //Url to the assistance page
    ],
    'google_places_api_key' => '',
    'google_recaptcha_site_key' => '',
    'platform' => [
        'frontendUrl' => 'FRONTEND_URL',
        'backendUrl' => 'FRONTEND_URL',
    ],
];
