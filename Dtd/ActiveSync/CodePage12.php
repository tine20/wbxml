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
 
class Wbxml_Dtd_ActiveSync_CodePage12 extends Wbxml_Dtd_ActiveSync_Abstract
{
    protected $_codePageNumber  = 12;
    
    protected $_codePageName    = 'Contacts2';
        
    protected $_tags = array(     
        'CustomerId'              => 0x05,
        'GovernmentId'            => 0x06,
        'IMAddress'               => 0x07,
        'IMAddress2'              => 0x08,
        'IMAddress3'              => 0x09,
        'ManagerName'             => 0x0a,
        'CompanyMainPhone'        => 0x0b,
        'AccountName'             => 0x0c,
        'NickName'                => 0x0d,
        'MMS'                     => 0x0e
    );
}