<?php

/**
 * BaseaReusableSlot
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $label
 * @property clob $blurb
 * @property string $type
 * @property integer $page_id
 * @property string $area_name
 * @property integer $permid
 * 
 * @method string        getLabel()     Returns the current record's "label" value
 * @method clob          getBlurb()     Returns the current record's "blurb" value
 * @method string        getType()      Returns the current record's "type" value
 * @method integer       getPageId()    Returns the current record's "page_id" value
 * @method string        getAreaName()  Returns the current record's "area_name" value
 * @method integer       getPermid()    Returns the current record's "permid" value
 * @method aReusableSlot setLabel()     Sets the current record's "label" value
 * @method aReusableSlot setBlurb()     Sets the current record's "blurb" value
 * @method aReusableSlot setType()      Sets the current record's "type" value
 * @method aReusableSlot setPageId()    Sets the current record's "page_id" value
 * @method aReusableSlot setAreaName()  Sets the current record's "area_name" value
 * @method aReusableSlot setPermid()    Sets the current record's "permid" value
 * 
 * @package    asandbox
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseaReusableSlot extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('a_reusable_slot');
        $this->hasColumn('label', 'string', 100, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 100,
             ));
        $this->hasColumn('blurb', 'clob', null, array(
             'type' => 'clob',
             ));
        $this->hasColumn('type', 'string', 100, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 100,
             ));
        $this->hasColumn('page_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('area_name', 'string', null, array(
             'type' => 'string',
             'notnull' => true,
             ));
        $this->hasColumn('permid', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));

        $this->option('symfony', array(
             'form' => false,
             'filter' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}