<?php
// source: C:\webserver\www\pig-latin-translator\app/templates/AutoTranslate.latte

use Latte\Runtime as LR;

class Templatebeaa038776 extends Latte\Runtime\Template
{

	function main()
	{
		extract($this->params);
		echo LR\Filters::escapeHtmlText($posts) /* line 2 */;
		return get_defined_vars();
	}

}
