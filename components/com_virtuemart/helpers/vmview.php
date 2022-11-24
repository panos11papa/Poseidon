<?php
defined('_JEXEC') or die('');
/**
 * abstract controller class containing get,store,delete,publish and pagination
 *
 *
 * This class provides the functions for the calculatoins
 *
 * @package	VirtueMart
 * @subpackage Helpers
 * @author Max Milbers
 * @copyright Copyright (c) 2011 - 2022 VirtueMart Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * VirtueMart is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
 * @copyright  (C) 2006 Open Source Matters, Inc. <https://www.joomla.org>
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * http://virtuemart.net
 */
// Load the view framework
jimport( 'joomla.application.component.view');
// Load default helpers

class VmView extends JViewLegacy{

	var $isMail = false;
	var $isPdf = false;
	var $writeJs = true;
	var $useSSL = 0;
	static protected $bs = null;
	static protected $override = null;

	function __construct($config = array()){

		if(!isset(VmView::$bs)){
			VmView::$bs = VmConfig::get('bootstrap','');
			VmView::$override = VmConfig::get('useLayoutOverrides',1);
			vmdebug('VmView loaded with override and bootstrap version',(int) VmView::$override, VmView::$bs);
		}
		parent::__construct($config);
	}

	/**
	 * @depreacted
	 * @param string $key
	 * @param mixed $val
	 * @return bool|void
	 */
	public function assignRef($key, &$val) {
		$this->{$key} =& $val; 
	}
	
	public function display($tpl = null) {

		if($this->isMail or $this->isPdf){
			$this->writeJs = false;
		}
		$this->useSSL = vmURI::useSSL();


		if(!VmView::$override){
			//we just add the default again, so it is first in queque
			$this->addTemplatePath(VMPATH_ROOT .'/components/com_virtuemart/views/'.$this->_name.'/tmpl');
		}

		$result = $this->loadTemplate($tpl);
		if ($result instanceof Exception) {
			return $result;
		}

		echo $result;
		if($this->writeJs){
			self::withKeepAlive();
			if(get_class($this)!='VirtueMartViewProductdetails'){
				echo vmJsApi::writeJS();
			}
		}

	}

	public function withKeepAlive(){

		$cart = VirtueMartCart::getCart();
		if(!empty($cart->cartProductsData)){
			vmJsApi::keepAlive(1,4);
		}
	}

	/**
	 * Renders sublayouts
	 *
	 * @author Max Milbers
	 * @param $name
	 * @param int $viewData viewdata for the rendered sublayout, do not remove
	 * @return string
	 */
	public function renderVmSubLayout($name=0,$viewData=0){

		if ($name === 0) {
			$name = $this->_name;
		}

		$lPath = self::getVmSubLayoutPath ($name);

		if($lPath){
			if($viewData!==0 and is_array($viewData)){
				foreach($viewData as $k => $v){
					if ('_' != substr($k, 0, 1) and !isset($this->{$k})) {
						$this->{$k} = $v;
					}
				}
			}
			ob_start ();
			include ($lPath);
			return ob_get_clean();
		} else {
			vmdebug('renderVmSubLayout layout not found '.$name);
			return 'Sublayout not found '.$name;
		}

	}



	static public function getVmSubLayoutPath($name) {

		static $layouts = array();

		if(isset($layouts[$name])){
			return $layouts[$name];
		} else {
			$vmStyle = VmTemplate::loadVmTemplateStyle();
			$template = $vmStyle['template'];

			// get the template and default paths for the layout if the site template has a layout override, use it


			$tP = VMPATH_ROOT .'/templates/'. $template .'/html/com_virtuemart/sublayouts/';//. $name .'.php';
			$nP = VMPATH_SITE .'/sublayouts/';

			if(!isset(VmView::$bs)){
				VmView::$bs = VmConfig::get('bootstrap','');
				VmView::$override = VmConfig::get('useLayoutOverrides',1);
				vmdebug('VmView loaded with override and bootstrap version',(int) VmView::$override, VmView::$bs);
			}

			if(VmView::$bs!=='') {
				$bsLayout = VmView::$bs . '-' . $name;
				if (VmView::$override and JFile::exists($tP . $bsLayout . '.php')) {
					$layouts[$name] = $tP . $bsLayout . '.php';
					//vmdebug(' getVmSubLayoutPath using '.VmView::$bs.' tmpl layout override ',$layouts[$name]);
					return $layouts[$name];
				}
			}

			//If a normal template overrides exists, use the template override
			if ( VmView::$override and JFile::exists ($tP. $name .'.php')) {
				$layouts[$name] = $tP . $name . '.php';
				//vmdebug(' getVmSubLayoutPath using tmpl layout override ',$layouts[$name]);
				return $layouts[$name];
			}

			if(VmView::$bs!=='') {
				if (JFile::exists ($nP. $bsLayout . '.php')) {
					$layouts[$name] = $nP. $bsLayout . '.php';
					//vmdebug(' getVmSubLayoutPath using '.VmView::$bs.' core layout ',$layouts[$name]);
					return $layouts[$name];
				}
			}

			if(JFile::exists ($nP. $name . '.php')) {
				$layouts[$name] = $nP. $name .'.php';
				//vmdebug(' getVmSubLayoutPath using standard core ',$layouts[$name]);
			} else {
				$layouts[$name] = false;
				//VmConfig::$echoDebug = true;
				//vmdebug(' getVmSubLayoutPath layout NOOOT found ',$lName);
				vmError('getVmSubLayoutPath layout '.$name.' not found ');
			}

			return $layouts[$name];
		}
	}

	public function setLayoutAndSub($layout, $sub){

		$previous = $this->_layout;

		if (strpos($layout, ':') === false)
		{
			$this->_layout = $layout;
		}
		else
		{
			// Convert parameter to array based on :
			$temp = explode(':', $layout);
			$this->_layout = $temp[1];

			// Set layout template
			$this->_layoutTemplate = $temp[0];
		}

		if(VmView::$bs!==''){
			if(substr($this->_layout,0,4) == VmView::$bs.'-'){
				//$this->_layout = VmView::$bs.'-'.$this->_layout;
				$this->_layout = substr($this->_layout,4);
			} /*else {

			}*/
			$l = $this->_layout .'_'. $sub;//$this->_layout;//$this->getLayout();

			$bsLayout = VmView::$bs.'-'.$l;
			$vmStyle = VmTemplate::loadVmTemplateStyle();
			$template = $vmStyle['template'];
			//VmConfig::$echoDebug = 1;
			vmdebug('my bootstrap layout here ',$bsLayout, $l);
			$tP = VMPATH_ROOT .'/templates/'. $template .'/html/com_virtuemart/'.$this->_name.'/';//. $bsLayout .'.php';
			$nP = VMPATH_SITE .'/views/'.$this->_name.'/tmpl/'. $bsLayout . '.php';

			if( VmView::$override and JFile::exists($tP. $bsLayout .'.php') ){
				$this->_layout =  VmView::$bs.'-'.$this->_layout;
				vmdebug('I use a layout BOOTSTRAP '.VmView::$bs.' by template override',$bsLayout);
			} else if ( VmView::$override and JFile::exists ($tP. $l .'.php') ) {
				//$this->setLayout($l);
				vmdebug('I use a layout by template override',$l);
			} else if ( JFile::exists ($nP) ){
				vmdebug('I use a CORE Bootstrap layout my layout here ',$bsLayout);
				$this->_layout = VmView::$bs.'-'.$this->_layout;
			} else {
				$this->_layout = VmView::$bs.'-'.$this->_layout;
				vmdebug('No layout found, that should not happen '.$this->_name,$bsLayout);
			}

		}

		return $previous;
	}

	public function getLayout()
	{
		if(!empty(VmView::$bs)){
			if(substr($this->_layout,0,4) == VmView::$bs.'-'){
				return substr($this->_layout,4);
			}
		}

		return $this->_layout;
	}

	/**
	 * Sets the layout name to use. Adjusted to the vm system to load bsX layouts
	 * @copyright  (C) 2006 Open Source Matters, Inc. <https://www.joomla.org>
	 * @license    GNU General Public License version 2 or later; see LICENSE.txt
	 * @param   string  $layout  The layout name or a string in format <template>:<layout file>
	 *
	 * @return  string  Previous value.
	 *
	 * @since   3.0
	 */
	public function setLayout($layout)
	{
		$previous = $this->_layout;

		if (strpos($layout, ':') === false)
		{
			$this->_layout = $layout;
		}
		else
		{
			// Convert parameter to array based on :
			$temp = explode(':', $layout);
			$this->_layout = $temp[1];

			// Set layout template
			$this->_layoutTemplate = $temp[0];
		}

		if(VmView::$bs!==''){
			$l = $this->getLayout();
			//if(substr($l,0,4) != VmView::$bs.'-'){
				$bsLayout = VmView::$bs.'-'.$l;
			/*} else {
				$bsLayout = $l;
				$l = substr($l,4);
			}*/

			$vmStyle = VmTemplate::loadVmTemplateStyle();
			$template = $vmStyle['template'];
			vmdebug('my bootstrap layout here ',$bsLayout, $l);
			$tP = VMPATH_ROOT .'/templates/'. $template .'/html/com_virtuemart/'.$this->_name.'/';//. $bsLayout .'.php';
			$nP = VMPATH_SITE .'/views/'.$this->_name.'/tmpl/'. $bsLayout . '.php';

			if( VmView::$override and JFile::exists($tP. $bsLayout .'.php') ){
				$this->_layout = $bsLayout;
				vmdebug('I use a layout BOOTSTRAP '.VmView::$bs.' by template override',$bsLayout);
			} else if ( VmView::$override and JFile::exists ($tP. $l .'.php') ) {
				//$this->setLayout($l);
				vmdebug('I use a layout by template override',$l);
			} else if ( JFile::exists ($nP) ){
				vmdebug('I use a CORE Bootstrap layout my layout here ',$bsLayout);
				$this->_layout = $bsLayout;
			} else {
				$this->_layout = $bsLayout;
				vmdebug('No layout found, that should not happen '.$this->_name,$bsLayout);
			}

		}

		return $previous;
	}


	function prepareContinueLink($product=false){

		$virtuemart_category_id = shopFunctionsF::getLastVisitedCategoryId ();
		$categoryStr = '';

		if (empty($virtuemart_category_id) and $product) {
			$virtuemart_category_id = $product->canonCatId;
			vmdebug('Using product canon cat ',$virtuemart_category_id);
		}

		if ($virtuemart_category_id) {
			$categoryStr = '&virtuemart_category_id=' . $virtuemart_category_id;
		}

		$ItemidStr = '';
		$Itemid = shopFunctionsF::getLastVisitedItemId();
		if(!empty($Itemid)){
			$ItemidStr = '&Itemid='.$Itemid;
		}

		if(VmConfig::get('sef_for_cart_links', false)){
			$this->useSSL = vmURI::useSSL();
			$this->continue_link = JRoute::_('index.php?option=com_virtuemart&view=category' . $categoryStr.$ItemidStr);
			$this->cart_link = JRoute::_('index.php?option=com_virtuemart&view=cart',false,$this->useSSL);
		} else {
			$lang = '';
			if(VmLanguage::$jLangCount>1 and !empty(VmConfig::$vmlangSef)){
				$lang = '&lang='.VmConfig::$vmlangSef;
			}

			$this->continue_link = JURI::root() .'index.php?option=com_virtuemart&view=category' . $categoryStr.$lang.$ItemidStr;

			$juri = JUri::getInstance();
			$uri = $juri->toString(array( 'host', 'port'));

			$scheme = $juri->toString(array( 'scheme'));
			$scheme = substr($scheme,0,-3);
			if($scheme!='https' and $this->useSSL){
				$scheme .='s';
			}
			$this->cart_link = $scheme.'://'.$uri. JURI::root(true).'/index.php?option=com_virtuemart&view=cart'.$lang;
		}

		$this->continue_link_html = '<a class="continue_link" href="' . $this->continue_link . '">' . vmText::_ ('COM_VIRTUEMART_CONTINUE_SHOPPING') . '</a>';

		return;
	}

	function linkIcon( $link, $altText, $boutonName, $verifyConfigValue = false, $modal = true, $use_icon = true, $use_text = false, $class = ''){
		if ($verifyConfigValue) {
			if ( !VmConfig::get($verifyConfigValue, 0) ) return '';
		}
		$folder = 'media/system/images/'; //shouldn't be root slash before media, as it automatically tells to look in root directory, for media/system/ which is wrong it should append to root directory.
		$text='';
		if ( $use_icon ) $text .= JHtml::_('image', $folder.$boutonName.'.png',  vmText::_($altText), null, false, false); //$folder shouldn't be as alt text, here it is: image(string $file, string $alt, mixed $attribs = null, boolean $relative = false, mixed $path_rel = false) : string, you should change first false to true if images are in templates media folder
		if ( $use_text ) $text .= '&nbsp;'. vmText::_($altText);
		if ( $text=='' )  $text .= '&nbsp;'. vmText::_($altText);
		if ($modal) return '<a '.$class.' class="modal" rel="{handler: \'iframe\', size: {x: 700, y: 550}}" title="'. vmText::_($altText).'" href="'.JRoute::_($link, FALSE).'">'.$text.'</a>';
		else 		return '<a '.$class.' title="'. vmText::_($altText).'" href="'.JRoute::_($link, FALSE).'">'.$text.'</a>';
	}

	public function escape($var)
	{
		if (in_array($this->_escape, array('htmlspecialchars', 'htmlentities')))
		{
			$result = call_user_func($this->_escape, $var, ENT_COMPAT, $this->_charset);
		} else {
			$result =  call_user_func($this->_escape, $var);
		}

		return $result;
	}

}