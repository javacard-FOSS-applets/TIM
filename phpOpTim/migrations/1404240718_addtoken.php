<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addtoken extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('token', array(
             'id' => 
             array(
              'type' => 'integer',
              'length' => 4,
              'fixed' => false,
              'unsigned' => false,
              'primary' => true,
              'autoincrement' => true,
             ),
             'account_id' => 
             array(
              'type' => 'integer',
              'length' => 4,
              'fixed' => false,
              'unsigned' => false,
              'primary' => false,
              'notnull' => true,
              'autoincrement' => false,
             ),
             'token' => 
             array(
              'type' => 'string',
              'fixed' => false,
              'unsigned' => false,
              'primary' => false,
              'notnull' => true,
              'autoincrement' => false,
              'length' => NULL,
             ),
             'token_type' => 
             array(
              'type' => 'integer',
              'length' => 1,
              'fixed' => false,
              'unsigned' => false,
              'primary' => false,
              'default' => '1',
              'notnull' => false,
              'autoincrement' => false,
             ),
             'client' => 
             array(
              'type' => 'string',
              'length' => 255,
              'fixed' => false,
              'unsigned' => false,
              'primary' => false,
              'notnull' => true,
              'autoincrement' => false,
             ),
             'details' => 
             array(
              'type' => 'string',
              'fixed' => false,
              'unsigned' => false,
              'primary' => false,
              'notnull' => false,
              'autoincrement' => false,
              'length' => NULL,
             ),
             'issued_at' => 
             array(
              'type' => 'timestamp',
              'fixed' => false,
              'unsigned' => false,
              'primary' => false,
              'notnull' => true,
              'autoincrement' => false,
              'length' => 25,
             ),
             'expiration_at' => 
             array(
              'type' => 'timestamp',
              'fixed' => false,
              'unsigned' => false,
              'primary' => false,
              'notnull' => true,
              'autoincrement' => false,
              'length' => 25,
             ),
             'info' => 
             array(
              'type' => 'string',
              'fixed' => false,
              'unsigned' => false,
              'primary' => false,
              'notnull' => false,
              'autoincrement' => false,
              'length' => NULL,
             ),
             ), array(
             'indexes' => 
             array(
              'account_id' => 
              array(
              'fields' => 
              array(
               0 => 'account_id',
              ),
              ),
             ),
             'primary' => 
             array(
              0 => 'id',
             ),
             ));
    }

    public function down()
    {
        $this->dropTable('token');
    }
}