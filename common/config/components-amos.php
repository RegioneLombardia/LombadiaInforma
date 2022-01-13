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
    'view' => [
        'class' => 'lispa\amos\core\components\AmosView',
        'theme' => [
            'pathMap' => [
                '@vendor/lajax/yii2-translate-manager/views/language/' => '@vendor/lispa/amos-translation/src/views/translatemanager/'
            ],
        ],
    ],
    'wizflowManagerNewProject' => ['class' => 'lispa\amos\wizflow\WizflowManager', 'workflowName' => 'NewProjectWizardWorkflow',
        'workflowSourceName' => 'workflowSource', 'skeyName' => '_new_project'],
    'workflowSource' => [
        'class' => 'lispa\amos\core\workflow\ContentDefaultWorkflowDbSource',
    ],
    'imageUtility' => [
        'class' => 'lispa\amos\core\components\ImageUtility',
    ],
];
