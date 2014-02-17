<?php /* Smarty version 2.6.28, created on 2014-02-17 15:23:49
         compiled from index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'index.tpl', 2, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => "site.conf"), $this);?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<head>
<title><?php echo $this->_config[0]['vars']['site_title']; ?>
</title>
<link href="hatshop.css" type="text/css" rel="stylesheet" />
</head>
<body>
<div>
<div class="left_box">
Place list of departments here
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="content">
Place contents here
</div>
</div>
</body>
</html>