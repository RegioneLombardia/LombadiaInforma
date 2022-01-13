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
    'email-assistenza' => 'help@example.com',
    'icon-framework' => 'am',
    'googleMapsLibraries'=> null,
    'googleMapsLanguage' =>'en',
    
    // Enable Amos Exclusive features
    'template-amos' => FALSE,
    
    // Enable template slideshow
    'slideshow' => TRUE,
    'slideshow-label' => 'Mostra introduzione', // TODO translate and amos-XXX::[t()|tHtml()] ?

    // Enable Localization menu
    'languageSelector' => TRUE,
    'allLanguages' => ['Italiano' => 'it-IT', 'English' => 'en-GB'],

    //enable btn dashboard to frontend
    'toFrontendLink' => false,
    
    //diable wizard in create content models (News, Documents, Discussions)
    'noWizardNewLayout' => true,
];
