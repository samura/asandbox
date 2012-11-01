<?php

/**
 * BaseaMediaItemToASearchDocument
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $a_search_document_id
 * @property integer $a_media_item_id
 * @property aSearchDocument $aSearchDocument
 * @property aMediaItem $aMediaItem
 * 
 * @method integer                     getASearchDocumentId()    Returns the current record's "a_search_document_id" value
 * @method integer                     getAMediaItemId()         Returns the current record's "a_media_item_id" value
 * @method aSearchDocument             getASearchDocument()      Returns the current record's "aSearchDocument" value
 * @method aMediaItem                  getAMediaItem()           Returns the current record's "aMediaItem" value
 * @method aMediaItemToASearchDocument setASearchDocumentId()    Sets the current record's "a_search_document_id" value
 * @method aMediaItemToASearchDocument setAMediaItemId()         Sets the current record's "a_media_item_id" value
 * @method aMediaItemToASearchDocument setASearchDocument()      Sets the current record's "aSearchDocument" value
 * @method aMediaItemToASearchDocument setAMediaItem()           Sets the current record's "aMediaItem" value
 * 
 * @package    symfony
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseaMediaItemToASearchDocument extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('a_media_item_to_a_search_document');
        $this->hasColumn('a_search_document_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('a_media_item_id', 'integer', null, array(
             'type' => 'integer',
             ));

        $this->option('symfony', array(
             'form' => false,
             'filter' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('aSearchDocument', array(
             'local' => 'a_search_document_id',
             'foreign' => 'id',
             'onDelete' => 'cascade'));

        $this->hasOne('aMediaItem', array(
             'local' => 'a_media_item_id',
             'foreign' => 'id',
             'onDelete' => 'cascade'));
    }
}