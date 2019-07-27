<?php

use yii\db\Migration;

/**
 * Class m190727_180152_addColumn_owner_notas
 */
class m190727_180152_addColumn_owner_notas extends Migration
{

    public $table = 'notas';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn($this->table, 'owner', $this->integer()->after('id'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn($this->table, 'owner');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190727_180152_addColumn_owner_notas cannot be reverted.\n";

        return false;
    }
    */
}
