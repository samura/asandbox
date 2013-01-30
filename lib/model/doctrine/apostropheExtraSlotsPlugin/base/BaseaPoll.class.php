<?php

/**
 * BaseaPoll
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $media_item_id
 * @property string $question
 * @property Doctrine_Collection $Choices
 * @property aMediaItem $MediaItem
 * 
 * @method integer             getMediaItemId()   Returns the current record's "media_item_id" value
 * @method string              getQuestion()      Returns the current record's "question" value
 * @method Doctrine_Collection getChoices()       Returns the current record's "Choices" collection
 * @method aMediaItem          getMediaItem()     Returns the current record's "MediaItem" value
 * @method aPoll               setMediaItemId()   Sets the current record's "media_item_id" value
 * @method aPoll               setQuestion()      Sets the current record's "question" value
 * @method aPoll               setChoices()       Sets the current record's "Choices" collection
 * @method aPoll               setMediaItem()     Sets the current record's "MediaItem" value
 * 
 * @package    asandbox
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseaPoll extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('a_poll');
        $this->hasColumn('media_item_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('question', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('aPollChoice as Choices', array(
             'local' => 'id',
             'foreign' => 'poll_id'));

        $this->hasOne('aMediaItem as MediaItem', array(
             'local' => 'media_item_id',
             'foreign' => 'id',
             'onDelete' => 'SET NULL'));
    }
}