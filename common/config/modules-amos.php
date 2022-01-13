<?php

/**
 * Lombardia Informatica S.p.A.
 * OPEN 2.0
 *
 *
 * @package    lispa\amos\basic\template
 * @category   CategoryName
 */

$modules['admin'] = [
    'class' => 'lispa\amos\admin\AmosAdmin',
    'enableRegister' => true,
    'fieldsConfigurations' => [
        'boxes' => [
            'box_account_data' => ['form' => true, 'view' => true],
            'box_dati_accesso' => ['form' => true, 'view' => true],
            'box_dati_contatto' => ['form' => true, 'view' => true],
            'box_dati_fiscali_amministrativi' => ['form' => false, 'view' => false],
            'box_dati_nascita' => ['form' => true, 'view' => true],
            'box_email_frequency' => ['form' => true, 'view' => true],
            'box_facilitatori' => ['form' => true, 'view' => true],
            'box_foto' => ['form' => true, 'view' => true],
            'box_informazioni_base' => ['form' => true, 'view' => true],
            'box_presentazione_personale' => ['form' => true, 'view' => true],
            'box_prevalent_partnership' => ['form' => true, 'view' => true],
            'box_privacy' => ['form' => true, 'view' => true],
            'box_questio' => ['form' => false, 'view' => false],
            'box_role_and_area' => ['form' => true, 'view' => true],
            'box_social_account' => ['form' => true, 'view' => true],
        ],
        'fields' => [
            'attivo' => ['form' => true, 'view' => true, 'referToBox' => 'box_account_data'],
            'codice_fiscale' => ['form' => false, 'view' => false, 'referToBox' => 'box_dati_fiscali_amministrativi'],
            'cognome' => ['form' => true, 'view' => true, 'referToBox' => 'box_informazioni_base'],
            'default_facilitatore' => ['form' => true, 'view' => true],
            'email' => ['form' => true, 'view' => false, 'referToBox' => 'box_dati_contatto'],
            'email_pec' => ['form' => false, 'view' => false, 'referToBox' => 'box_dati_contatto'],
            'facebook' => ['form' => true, 'view' => true, 'referToBox' => 'box_social_account'],
            'facilitatore_id' => ['form' => true, 'view' => true, 'referToBox' => 'box_facilitatori'],
            'googleplus' => ['form' => true, 'view' => true, 'referToBox' => 'box_social_account'],
            'linkedin' => ['form' => true, 'view' => true, 'referToBox' => 'box_social_account'],
            'nascita_comuni_id' => ['form' => false, 'view' => false, 'referToBox' => 'box_dati_nascita'],
            'nascita_data' => ['form' => false, 'view' => false, 'referToBox' => 'box_dati_nascita'],
            'nascita_nazioni_id' => ['form' => false, 'view' => false, 'referToBox' => 'box_dati_nascita'],
            'nascita_province_id' => ['form' => false, 'view' => false, 'referToBox' => 'box_dati_nascita'],
            'nome' => ['form' => true, 'view' => true, 'referToBox' => 'box_informazioni_base'],
            'note' => ['form' => true, 'view' => false, 'referToBox' => 'box_informazioni_base'],
            'presentazione_breve' => ['form' => true, 'view' => true, 'referToBox' => 'box_informazioni_base'],
            'presentazione_personale' => ['form' => true, 'view' => true, 'referToBox' => 'box_presentazione_personale'],
            'prevalent_partnership_id' => ['form' => true, 'view' => true, 'referToBox' => 'box_prevalent_partnership'],
            'privacy' => ['form' => true, 'view' => true, 'referToBox' => 'box_privacy'],
            'sesso' => ['form' => true, 'view' => false, 'referToBox' => 'box_informazioni_base'],
            'telefono' => ['form' => true, 'view' => false, 'referToBox' => 'box_dati_contatto'],
            'twitter' => ['form' => true, 'view' => true, 'referToBox' => 'box_social_account'],
            'ultimo_accesso' => ['form' => true, 'view' => true, 'referToBox' => 'box_account_data'],
            'ultimo_logout' => ['form' => true, 'view' => true, 'referToBox' => 'box_account_data'],
            'username' => ['form' => true, 'view' => false, 'referToBox' => 'box_dati_accesso'],
            'user_profile_age_group_id' => ['form' => true, 'view' => true, 'referToBox' => 'box_informazioni_base'],
            'user_profile_area_id' => ['form' => true, 'view' => false, 'referToBox' => 'box_role_and_area'],
            'userProfileImage' => ['form' => true, 'view' => true, 'referToBox' => 'box_foto'],
            'user_profile_role_id' => ['form' => true, 'view' => false, 'referToBox' => 'box_role_and_area'],
        ]
    ]
];

$modules['attachments'] = [
    'class' => 'lispa\amos\attachments\FileModule',
    'webDir' => 'files',
    'tempPath' => '@common/uploads/temp',
    'storePath' => '@common/uploads/store',
    'cache_age' => 2592000
];

$modules['community'] = [
    'class' => 'lispa\amos\community\AmosCommunity',
];

$modules['cwh'] = [
    'class' => 'lispa\amos\cwh\AmosCwh',
];

$modules['documenti'] = [
    'class' => 'lispa\amos\documenti\AmosDocumenti',
];

$modules['email'] = [
    'class' => 'lispa\amos\emailmanager\AmosEmail',
    'templatePath' => '@common/mail/emails',
];

$modules['events'] = [
    'class' => 'lispa\amos\events\AmosEvents',
];

$modules['notify'] = [
    'class' => 'lispa\amos\notificationmanager\AmosNotify',
];

$modules['organizzazioni'] = [
    'class' => 'lispa\amos\organizzazioni\Module',
];

$modules['partnershipprofiles'] = [
    'class' => 'lispa\amos\partnershipprofiles\Module',
];

$modules['tag'] = [
    'class' => 'lispa\amos\tag\AmosTag',
];

return $modules;
