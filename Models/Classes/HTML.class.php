<?php
class HTML
{
	private $_title = '';
	private $_content = '';
	
	public function setTitle($new)
	{
		$this->_title = $new;
	}
	public function getTitle()
	{
		return $this->_title;
	}
	
	public function addToContent($new)
	{
		$this->_content .= $new;
	}
	public function getContent()
	{
		return $this->_content;
	}
}