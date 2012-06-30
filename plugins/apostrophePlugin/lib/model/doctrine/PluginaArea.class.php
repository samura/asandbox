<?php
/**
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * @package    apostrophePlugin
 * @subpackage    model
 * @author     P'unk Avenue <apostrophe@punkave.com>
 */
abstract class PluginaArea extends BaseaArea
{

  /**
  * DOCUMENT ME
  * @param string $slotType
  * @return boolean
  */  
  public function hasSlotType($slotType)
  {
    $page = $this->getPage();
    $slots = $page->getSlotsByAreaName($this->getName());
    
    foreach($slots as $slot)
    {
      if ($slot->getType() == $slotType) {
        return true;
      }
    }
    
    return false;
  }

}