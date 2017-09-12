<?php
// source: C:\webserver\www\pig-latin-translator\app/templates/HomePage.latte

use Latte\Runtime as LR;

class Template0b67d9242c extends Latte\Runtime\Template
{
	public $blocks = [
		'scripts' => 'blockScripts',
	];

	public $blockTypes = [
		'scripts' => 'html',
	];


	function main()
	{
		extract($this->params);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	
        <title>Pig Latin Translator</title>
        
        <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <p>Pig Latin Translator</p>
    <form action="" method="POST">
        <textarea<?php
		$_tmp = ['name' => 'input','class' => 'input','rows' => '8', 'placeholder' => 'please write any text'];
		echo LR\Filters::htmlAttributes(isset($_tmp[0]) && is_array($_tmp[0]) ? $_tmp[0] : $_tmp);
		?>><?php echo LR\Filters::escapeHtmlText($posts) /* line 16 */ ?></textarea>
        <input type="hidden" id="template" value="HomePage">
        <input type="submit" value="Translate">
        <input id="toogle-auotranslate" type="checkbox">
        <label for="toogle-auotranslate">Auto-translate</label>
    </form>
<?php
		if ($this->getParentName()) return get_defined_vars();
		$this->renderBlock('scripts', get_defined_vars());
?>
</body>
</html><?php
		return get_defined_vars();
	}


	function blockScripts($_args)
	{
?>	<script src="js/jquery.min.js"></script>
	<script src="js/main.js" ></script>
<?php
	}

}
