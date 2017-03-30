<!-- Import css miac_accessibility's dir-->
<?php
$cur_template_path = JUri::root() . "templates/" . $this->template;
if (mb_substr(JVERSION, 0, 1, 'utf-8') == '3') {
  $doc->addStyleSheet('/media/jui/css/icomoon.css');
} else {
  $doc->addStyleSheet($cur_template_path.'/css/icomoon-free.css');
}
$doc->addStyleSheet($cur_template_path.'/css/bootstrap.css');
$doc->addStyleSheet($cur_template_path.'/css/miac_accessibility_template.css');
?>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="<?php echo $cur_template_path; ?>/js/html5shiv.min.js"></script>
    <script src="<?php echo $cur_template_path; ?>/js/respond.min.js"></script>
<![endif]-->
