<?php
/**
 * Tine 2.0
 *
 * @package     Wbxml
 * @subpackage  ActiveSync
 * @license     http://www.gnu.org/licenses/agpl.html AGPL Version 3
 * @copyright   Copyright (c) 2008-2009 Metaways Infosystems GmbH (http://www.metaways.de)
 * @author      Lars Kneschke <l.kneschke@metaways.de>
 * @version     $Id:AirSync.php 4968 2008-10-17 09:09:33Z l.kneschke@metaways.de $
 */

/**
 * class documentation
 *
 * @package     Wbxml
 * @subpackage  ActiveSync
 */
 
class Wbxml_Dtd_ActiveSync_CodePage13 extends Wbxml_Dtd_ActiveSync_Abstract
{
    protected $_codePageNumber  = 13;
    
    protected $_codePageName    = 'Ping';
        
    protected $_tags = array(     
        'Ping'                   => 0x05,
        'AutdState'              => 0x06,   //unused
        'Status'                 => 0x07,
        'HeartBeatInterval'      => 0x08, 
        'Folders'                => 0x09,
        'Folder'                 => 0x0a,
        'Id'                     => 0x0b,
        'Class'                  => 0x0c,
        'MaxFolders'             => 0x0d
    );
}