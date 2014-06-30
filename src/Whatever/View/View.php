<?php

namespace Whatever\View;

/**
* 
*/
class View 
{
	
	function __construct($file)
	{
		include TEMPLATE.DS.$file;
	}
}