<?php

/**
 * Lombardia Informatica S.p.A.
 * OPEN 2.0
 *
 *
 * @package    lispa\amos\basic\template
 * @category   CategoryName
 */

class m191129_125801_init_tag_and_widgets extends \yii\db\Migration
{
    public function safeUp()
    {
        $this->insert('tag',['id' => 1, 'root' => 1, 'lft' => 1, 'rgt' => 1, 'lvl' => 0, 'nome' => 'Ramo 1 Tag' ]);
        $this->insert('tag',['id' => 2, 'root' => 1, 'lft' => 2, 'rgt' => 3, 'lvl' => 1, 'nome' => 'tag 1.1' ]);

       $this->insert('tag_models_auth_items_mm',['tag_id' => 1, 'classname' => 'lispa\amos\community\models\Community', 'auth_item' => 'ADMIN' ]);
       $this->insert('tag_models_auth_items_mm',['tag_id' => 1, 'classname' => 'lispa\amos\community\models\Community', 'auth_item' => 'BASIC_USER' ]);
       $this->insert('tag_models_auth_items_mm',['tag_id' => 1, 'classname' => 'lispa\amos\discussioni\models\DiscussioniTopic', 'auth_item' => 'ADMIN' ]);
       $this->insert('tag_models_auth_items_mm',['tag_id' => 1, 'classname' => 'lispa\amos\discussioni\models\DiscussioniTopic', 'auth_item' => 'BASIC_USER' ]);
       $this->insert('tag_models_auth_items_mm',['tag_id' => 1, 'classname' => 'lispa\amos\documenti\models\Documenti', 'auth_item' => 'ADMIN' ]);
       $this->insert('tag_models_auth_items_mm',['tag_id' => 1, 'classname' => 'lispa\amos\documenti\models\Documenti', 'auth_item' => 'BASIC_USER' ]);
       $this->insert('tag_models_auth_items_mm',['tag_id' => 1, 'classname' => 'lispa\amos\events\models\Event', 'auth_item' => 'ADMIN' ]);
       $this->insert('tag_models_auth_items_mm',['tag_id' => 1, 'classname' => 'lispa\amos\events\models\Event', 'auth_item' => 'BASIC_USER' ]);
       $this->insert('tag_models_auth_items_mm',['tag_id' => 1, 'classname' => 'lispa\amos\news\models\News', 'auth_item' => 'ADMIN' ]);
       $this->insert('tag_models_auth_items_mm',['tag_id' => 1, 'classname' => 'lispa\amos\news\models\News', 'auth_item' => 'BASIC_USER' ]);
       $this->insert('tag_models_auth_items_mm',['tag_id' => 1, 'classname' => 'lispa\amos\organizzazioni\models\Profilo', 'auth_item' => 'ADMIN' ]);
       $this->insert('tag_models_auth_items_mm',['tag_id' => 1, 'classname' => 'lispa\amos\organizzazioni\models\Profilo', 'auth_item' => 'BASIC_USER' ]);
       $this->insert('tag_models_auth_items_mm',['tag_id' => 1, 'classname' => 'lispa\amos\organizzazioni\models\ProfiloSedi', 'auth_item' => 'ADMIN' ]);
       $this->insert('tag_models_auth_items_mm',['tag_id' => 1, 'classname' => 'lispa\amos\organizzazioni\models\ProfiloSedi', 'auth_item' => 'BASIC_USER' ]);

       $this->update('amos_widgets', ['status' => 0], ['classname' => 'lispa\amos\documenti\widgets\graphics\WidgetGraphicsDocumentsExplorer']);




    }

    public function safeDown()
    {
        $this->delete('tag_models_auth_items_mm',['tag_id' => 1, 'classname' => 'lispa\amos\community\models\Community', 'auth_item' => 'ADMIN' ]);
        $this->delete('tag_models_auth_items_mm',['tag_id' => 1, 'classname' => 'lispa\amos\community\models\Community', 'auth_item' => 'BASIC_USER' ]);
        $this->delete('tag_models_auth_items_mm',['tag_id' => 1, 'classname' => 'lispa\amos\discussioni\models\DiscussioniTopic', 'auth_item' => 'ADMIN' ]);
        $this->delete('tag_models_auth_items_mm',['tag_id' => 1, 'classname' => 'lispa\amos\discussioni\models\DiscussioniTopic', 'auth_item' => 'BASIC_USER' ]);
        $this->delete('tag_models_auth_items_mm',['tag_id' => 1, 'classname' => 'lispa\amos\documenti\models\Documenti', 'auth_item' => 'ADMIN' ]);
        $this->delete('tag_models_auth_items_mm',['tag_id' => 1, 'classname' => 'lispa\amos\documenti\models\Documenti', 'auth_item' => 'BASIC_USER' ]);
        $this->delete('tag_models_auth_items_mm',['tag_id' => 1, 'classname' => 'lispa\amos\events\models\Event', 'auth_item' => 'ADMIN' ]);
        $this->delete('tag_models_auth_items_mm',['tag_id' => 1, 'classname' => 'lispa\amos\events\models\Event', 'auth_item' => 'BASIC_USER' ]);
        $this->delete('tag_models_auth_items_mm',['tag_id' => 1, 'classname' => 'lispa\amos\news\models\News', 'auth_item' => 'ADMIN' ]);
        $this->delete('tag_models_auth_items_mm',['tag_id' => 1, 'classname' => 'lispa\amos\news\models\News', 'auth_item' => 'BASIC_USER' ]);
        $this->delete('tag_models_auth_items_mm',['tag_id' => 1, 'classname' => 'lispa\amos\organizzazioni\models\Profilo', 'auth_item' => 'ADMIN' ]);
        $this->delete('tag_models_auth_items_mm',['tag_id' => 1, 'classname' => 'lispa\amos\organizzazioni\models\Profilo', 'auth_item' => 'BASIC_USER' ]);
        $this->delete('tag_models_auth_items_mm',['tag_id' => 1, 'classname' => 'lispa\amos\organizzazioni\models\ProfiloSedi', 'auth_item' => 'ADMIN' ]);
        $this->delete('tag_models_auth_items_mm',['tag_id' => 1, 'classname' => 'lispa\amos\organizzazioni\models\ProfiloSedi', 'auth_item' => 'BASIC_USER' ]);

        $this->update('amos_widgets', ['status' => 1], ['classname' => 'lispa\amos\documenti\widgets\graphics\WidgetGraphicsDocumentsExplorer']);

    }
}

