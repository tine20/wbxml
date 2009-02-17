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
 
class Wbxml_Dtd_ActiveSync_CodePage15 extends Wbxml_Dtd_ActiveSync_Abstract
{
    protected $_codePageNumber  = 15;
    
    protected $_codePageName    = 'Search';
        
    protected $_tags = array(     
        'Search'            => 0x05,
        'Store'             => 0x07,
        'Name'              => 0x08,
        'Query'             => 0x09,
        'Options'           => 0x0a,
        'Range'             => 0x0b,
        'Status'            => 0x0c,
        'Response'          => 0x0d,
        'Result'            => 0x0e,
        'Properties'        => 0x0f,
        'Total'             => 0x10,
        'EqualTo'           => 0x11,
        'Value'             => 0x12,
        'And'               => 0x13,
        'Or'                => 0x14,
        'FreeText'          => 0x15,
        'DeepTraversal'     => 0x17,
        'LongId'            => 0x18,
        'RebuildResults'    => 0x19,
        'LessThan'          => 0x1a,
        'GreaterThan'       => 0x1b,
        'Schema'            => 0x1c,
        'Supported'         => 0x1d
    );
}