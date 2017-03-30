<?php
$cur_template_relative_path = "templates/" . $this->template;
$cur_template_path = JUri::root() . $cur_template_relative_path;
?>
<!-- Impory last miac_accessibility's css -->
<link rel="stylesheet" href="<?php echo $cur_template_path,'/css/miac_accessibility_template.css';?>" type="text/css">
<?php if (file_exists($cur_template_relative_path.'/css/site_content_styles_overrides.css')): ?>
  <link rel="stylesheet" href="<?php echo $cur_template_path,'/css/site_content_styles_overrides.css';?>" type="text/css">
<?php endif;?>
<!--[if IE]><link rel="stylesheet" type="text/css" media="screen,projection"
      href="<?php echo $cur_template_path; ?>/css/miac_accessibility_template_ie9-and-older.css">
<![endif]-->
<!-- Import last miac_accessibility's js-->
<script type="text/javascript" src="<?php echo $cur_template_path,'/js/js.cookie.js';?>"></script>
<script type="text/javascript" src="<?php echo $cur_template_path,'/js/jquery-noconflict.js';?>"></script>
<script type="text/javascript" src="<?php echo $cur_template_path,'/js/jquery-1.12.4.min.js';?>"></script>
<script type="text/javascript" src="<?php echo $cur_template_path,'/js/bootstrap.js';?>"></script>
<script type="text/javascript" src="<?php echo $cur_template_path,'/js/miac_accessibility_template.js';?>"></script>
<script type="text/javascript" src="<?php echo $cur_template_path,'/js/bootstrap_migrate_2to3.js';?>"></script>
