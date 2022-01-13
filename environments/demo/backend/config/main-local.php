<?php

/**
 * Lombardia Informatica S.p.A.
 * OPEN 2.0
 *
 *
 * @package    lispa\amos\basic\template
 * @category   CategoryName
 */

/*---------- begin: BOOTSTRAP --------*/
$bootstrap[] = 'comments';
/*---------- end: BOOTSTRAP --------*/

/*---------- begin: COMPONENTS AMOS --------*/
/*---------- end: COMPONENTS AMOS --------*/

/*---------- begin: COMPONENTS OTHERS --------*/
$components = [
    'request' => [
        // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
        'cookieValidationKey' => '',
    ],
];
/*---------- end: COMPONENTS OTHERS --------*/

/*---------- begin: MODULES AMOS --------*/
$modules['chat'] = [
    'class' => 'lispa\amos\chat\AmosChat',
];
$modules['comments'] = [
    'class' => 'lispa\amos\comments\AmosComments',
    'enableMailsNotification' => false,
    'modelsEnabled' => [
        'lispa\amos\discussioni\models\DiscussioniTopic',
        'lispa\amos\documenti\models\Documenti',
        'lispa\amos\events\models\Event',
        'lispa\amos\news\models\News',
    ],
];
$modules['cwh'] = [
    'cached' => false,
];
$modules['dashboard'] = [
        'useWidgetGraphicDashboardVisible' => true,
        'useWidgetGraphicOrder' => true,
];
$modules['discussioni'] = [
    'class' => 'lispa\amos\discussioni\AmosDiscussioni',
];
$modules['documenti'] = [
    'class' => 'lispa\amos\documenti\AmosDocumenti',
    'params' => [
        'site_publish_enabled' => true,
        'site_featured_enabled' => true
    ],
];
$modules['events'] = [
    'class' => 'lispa\amos\events\AmosEvents',
];
$modules['faq'] = [
    'class' => 'lispa\amos\faq\AmosFaq',
];
$modules['favorites'] = [
    'class' => 'lispa\amos\favorites\AmosFavorites',
    'modelsEnabled' => [
        'lispa\amos\discussioni\models\DiscussioniTopic',
        'lispa\amos\documenti\models\Documenti',
        'lispa\amos\news\models\News',
    ]
];
$modules['inforeq'] = [
    'class' => 'lispa\amos\inforeq\AmosInforeq',
];
$modules['news'] = [
    'class' => 'lispa\amos\news\AmosNews',
    'params' => [
        'site_publish_enabled' => true,
        'site_featured_enabled' => true
    ]
];
$modules['privileges'] = [
    'class' => 'lispa\amos\privileges\AmosPrivileges',
];
$modules['report'] = [
    'class' => 'lispa\amos\report\AmosReport',
    'modelsEnabled' => [
        'lispa\amos\discussioni\models\DiscussioniTopic',
        'lispa\amos\documenti\models\Documenti',
        'lispa\amos\events\models\Event',
        'lispa\amos\news\models\News',
    ],
];
if (isset($modules['tag'])) {
    if (isset($modules['community'])) {
        $modules['tag']['modelsEnabled'][] = 'common\models\Community';
    }
}
/*---------- end: MODULES AMOS --------*/

/*---------- begin: MODULES OTHERS --------*/
/*---------- end: MODULES OTHERS --------*/

$config = [
    'name' => 'Amos Basic Template DEMO',
    'bootstrap' => $bootstrap,
    'components' => $components,
    'modules' => $modules,
];

return $config;
