<?php
/**
 * Tine 2.0
 *
 * @package     Wbxml
 * @subpackage  Wbxml
 * @license     http://www.gnu.org/licenses/agpl.html AGPL Version 3
 * @copyright   Copyright (c) 2008-2009 Metaways Infosystems GmbH (http://www.metaways.de)
 * @author      Lars Kneschke <l.kneschke@metaways.de>
 * @version     $Id:Abstract.php 4968 2008-10-17 09:09:33Z l.kneschke@metaways.de $
 */

/**
 * class documentation
 *
 * @package     Wbxml
 * @subpackage  Wbxml
 */
 
abstract class Wbxml_Abstract
{
    /**
     * stream containing the wbxml encoded data
     *
     * @var resource
     */
    protected $_stream;
    
    /**
     * the wbxml version
     *
     * @var string
     */
    protected $_version;
    
    /**
     * the Document Public Identifier 
     *
     * @var string
     */
    protected $_dpi;
    
    /**
     * the current active dtd
     *
     * @var Wbxml_Dtd_Syncml_Abstract
     */
    protected $_dtd;
    
    /**
     * the charSet used in the wbxml file
     *
     * @var string
     */
    protected $_charSet;
    
    /**
     * currently active code page
     *
     * @var array
     */
    protected $_codePage;
    
    /**
     * see section 5.5
     *
     */
    const DPI_WELLKNOWN = 'WELLKNOWN';
    
    /**
     * see section 5.5
     *
     */
    const DPI_STRINGTABLE = 'STRINGTABLE';
    
    const SWITCH_PAGE   = 0x00;
    const END           = 0x01;
    const ENTITY        = 0x02;
    const STR_I         = 0x03;
    const LITERAL       = 0x04;
    const EXT_I_0       = 0x40;
    const EXT_I_1       = 0x41;
    const EXT_I_2       = 0x42;
    const PI            = 0x43;
    const LITERAL_C     = 0x44;
    const EXT_T_0       = 0x80;
    const EXT_T_1       = 0x81;
    const EXT_T_2       = 0x82;
    const STR_T         = 0x83;
    const LITERAL_A     = 0x84;
    const EXT_0         = 0xC0;
    const EXT_1         = 0xC1;
    const EXT_2         = 0xC2;
    const OPAQUE        = 0xC3;
    const LITERAL_AC    = 0xC4;
    
    /**
     * the real name for this DPI is "unknown"
     * But Microsoft is using them for their ActiveSync stuff
     * instead defining their own DPI like the sycnml creators did
     *
     */
    const DPI_1         = '-//AIRSYNC//DTD AirSync//EN';
    
    /**
     * return wellknown identifiers
     *
     * @param integer $_uInt
     * @todo add well known identifiers from section 7.2
     * @return string
     */
    public function getDPI($_uInt)
    {
        if(($dpi = constant('Wbxml_Abstract::DPI_' . $_uInt)) === NULL) {
            throw new Exception('unknown wellknown identifier: ' . $_uInt);
        }

        return $dpi;
    }
    
    /**
     * return multibyte integer
     *
     * @return integer
     */
    protected function _getMultibyteUInt()
    {
        $uInt = 0;
        
        do {
            $byte = $this->_getByte();
            $uInt <<= 7;
            $uInt += ($byte & 127);
        } while (($byte & 128) != 0);
         
        return $uInt;
    }
        
    protected function _getByte()
    {
        $byte = fread($this->_stream, 1);
        
        if($byte === false) {
            throw new Exception("failed reading one byte");
        }
        
        return ord($byte);
    }
    
    protected function _getOpaque($_length)
    {
        $string = fread($this->_stream, $_length);
        
        if($string === false) {
            throw new Exception("failed reading opaque data");
        }
        
        return $string;
    }
    
    /**
     * get a 0 terminated string
     *
     * @return string
     */
    protected function _getTerminatedString()
    {
        $string = '';
        
        while (($byte = $this->_getByte()) != 0) {
            $string .= chr($byte);
        }        
        
        return $string;
    }
    
    protected function _writeByte($_byte)
    {
        fwrite($this->_stream, chr($_byte));
    }
    
    protected function _writeMultibyteUInt($_integer)
    {
        $multibyte = NULL;
        $remainder = $_integer;
        
        do {
            $byte = ($remainder & 127);
            $remainder >>= 7;
            if($multibyte === NULL) {
                $multibyte = chr($byte);
            } else {
                $multibyte = chr($byte | 128) . $multibyte;
            }
        } while ($remainder != 0);

        fwrite($this->_stream, $multibyte);
    }
    
    protected function _writeString($_string)
    {
        fwrite($this->_stream, $_string);
    }
    
    protected function _writeTerminatedString($_string)
    {
        fwrite($this->_stream, $_string);
        fwrite($this->_stream, chr(0));
    }
}