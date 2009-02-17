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
 
class Wbxml_Dtd_ActiveSync_CodePage3 extends Wbxml_Dtd_ActiveSync_Abstract
{
    protected $_codePageNumber  = 3;
    
    protected $_codePageName    = 'AirNotify';
        
    protected $_tags = array(     
        'Notify'                    => 0x05,
        'Notification'              => 0x06,
        'Version'                   => 0x07,
        'Lifetime'                  => 0x08,
        'DeviceInfo'                => 0x09,
        'Enable'                    => 0x0a,
        'Folder'                    => 0x0b,
        'ServerId'                  => 0x0c,
        'DeviceAddress'             => 0x0d,
        'ValidCarrierProfiles'      => 0x0e,
        'CarrierProfile'            => 0x0f,
        'Status'                    => 0x10,
        'Responses'                 => 0x11,
        'Devices'                   => 0x12,
        'Device'                    => 0x13,
        'Id'                        => 0x14,
        'Expiry'                    => 0x15,
        'NotifyGUID'                => 0x16,
        'DeivceFriendlyName'        => 0x17
    );

    // attribute page
    #"Version='1.1'"           => 0x05,
}