<?php

/**
 * Lombardia Informatica S.p.A.
 * OPEN 2.0
 *
 *
 * @package    lispa\amos\basic\template
 * @category   CategoryName
 */

class m171120_160001_bypass_cwhconfiguration extends \yii\db\Migration
{
    public function up()
    {
        $sql = '
        INSERT INTO `cwh_config_contents` (`id`, `tablename`, `classname`, `label`, `status_attribute`, `status_value`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(3,	\'news\',	\'lispa\\\amos\\\news\\\models\\\News\',	\'News\',	\'status\',	\'NewsWorkflow/BOZZA\',	\'2017-06-12 09:58:40\',	\'2017-06-12 09:58:40\',	NULL,	1,	1,	NULL),
(4,	\'discussioni_topic\',	\'lispa\\\amos\\\discussioni\\\models\\\DiscussioniTopic\',	\'DiscussioniTopic\',	\'status\',	\'DiscussioniTopicWorkflow/BOZZA\',	\'2017-06-12 09:58:53\',	\'2017-06-12 09:58:53\',	NULL,	1,	1,	NULL),
(5,	\'documenti\',	\'lispa\\\amos\\\documenti\\\models\\\Documenti\',	\'Documenti\',	\'status\',	\'DocumentiWorkflow/BOZZA\',	\'2017-06-12 09:59:09\',	\'2017-06-12 09:59:09\',	NULL,	1,	1,	NULL),
(6,	\'event\',	\'lispa\\\amos\\\events\\\models\\\Event\',	\'Event\',	\'status\',	\'EventWorkflow/DRAFT\',	\'2019-11-29 16:05:17\',	\'2019-11-29 16:05:17\',	NULL,	1,	1,	NULL),
(7,	\'partnership_profiles\',	\'lispa\\\amos\\\partnershipprofiles\\\models\\\PartnershipProfiles\',	\'PartnershipProfiles\',	\'status\',	\'PartnershipProfilesWorkflow/DRAFT\',	\'2019-11-29 16:05:30\',	\'2019-11-29 16:05:30\',	NULL,	1,	1,	NULL),
(8,	\'sondaggi\',	\'lispa\\\amos\\\sondaggi\\\models\\\Sondaggi\',	\'Sondaggi\',	\'status\',	\'SondaggiWorkflow/BOZZA\',	\'2019-11-29 16:05:44\',	\'2019-11-29 16:05:44\',	NULL,	1,	1,	NULL);
		';
        
        $this->execute($sql);


    }

    public function down()
    {


    }
}

