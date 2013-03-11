<?php

/**
 * @author Benjamin Barbier
 *
 */
class ConfigBean {
	
	/**
	 * @var bool
	 */
	private $splash_active;
	
	/**
	 * @var bool
	 */
	private $wsi_first_load_mode_active;
	
	/**
	 * Getters & Setters
	 * Generated by http://www.shuchow.com/gettersetter.html
	 */
	public function isSplash_active() { return $this->splash_active; }
	public function isWsi_first_load_mode_active() { return $this->wsi_first_load_mode_active; }
	public function setSplash_active($x) { $this->splash_active = $x; }
	public function setWsi_first_load_mode_active($x) { $this->wsi_first_load_mode_active = $x; }
	
	/**
	 * @return string : the ConfigBean detail values
	 */
	public function __toString() {
		return "ConfigBean {".
			"\"splash_active\": \"".$splash_active."\",".
			"\"wsi_first_load_mode_active\": \"".$wsi_first_load_mode_active."\"".
		"}";
	}
	
}