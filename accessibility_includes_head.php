<!-- Import miac_accessibility's css-->
<?php
$cur_template_path = JUri::root() . "/templates/" . $this->template;
if (mb_substr(JVERSION, 0, 1, 'utf-8') == '3') {
  $doc->addStyleSheet('/media/jui/css/icomoon.css');
} else {
  $doc->addStyleSheet($cur_template_path.'/css/icomoon-free.css');
}
$doc->addStyleSheet($cur_template_path.'/css/bootstrap.css');
$doc->addStyleSheet($cur_template_path.'/css/miac_accessibility_template.css');
?>
<!--[if IE]><link rel="stylesheet" type="text/css" media="screen,projection"
      href="<?php echo $cur_template_path; ?>/css/miac_accessibility_template_ie9-and-older.css"><![endif]-->
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="<?php echo $cur_template_path; ?>/js/html5shiv.min.js"></script>
    <script src="<?php echo $cur_template_path; ?>/js/respond.min.js"></script>
<![endif]-->
<!-- Import miac_accessibility's js-->
<?php
$doc->addScript($cur_template_path.'/js/js.cookie.js');
$doc->addScript($cur_template_path.'/js/bootstrap.js');
$doc->addScript($cur_template_path.'/js/miac_accessibility_template.js');
$doc->addScript($cur_template_path.'/js/bootstrap_migrate_2to3.js');
?>
