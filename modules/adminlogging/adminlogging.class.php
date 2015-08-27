<?php
/* Copyright (C) NAVER <http://www.navercorp.com> */

/**
 * adminlogging class
 * Base class of adminlogging module
 *
 * @author NAVER (developers@xpressengine.com)
 * @package /modules/adminlogging
 * @version 0.1
 */
class adminlogging extends ModuleObject
{

	/**
	 * Install adminlogging module
	 * @return XEObject
	 */
	function moduleInstall()
	{
		return new XEObject();
	}

	/**
	 * If update is necessary it returns true
	 * @return bool
	 */
	function checkUpdate()
	{
		return FALSE;
	}

	/**
	 * Update module
	 * @return XEObject
	 */
	function moduleUpdate()
	{
		return new XEObject();
	}

	/**
	 * Regenerate cache file
	 * @return void
	 */
	function recompileCache()
	{
		
	}

}
/* End of file adminlogging.class.php */
/* Location: ./modules/adminlogging/adminlogging.class.php */
