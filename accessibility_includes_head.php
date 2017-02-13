<?php $cur_template_path = $this->baseurl . "/templates/" . $this->template; ?>
<link rel="stylesheet" type="text/css" media="screen,projection"
      href="<?php echo $cur_template_path; ?>/css/bootstrap.css">
<link rel="stylesheet" type="text/css" media="screen,projection"
      href="<?php echo $cur_template_path; ?>/css/miac_accessibility_template.css">
<link rel="stylesheet" type="text/css" media="screen,projection"
      href="<?php echo $this->baseurl ?>/media/jui/css/icomoon.css">
<!--[if IE]><link rel="stylesheet" type="text/css" media="screen,projection"
      href="<?php echo $cur_template_path; ?>/css/miac_accessibility_template_ie9-and-older.css"><![endif]-->
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="<?php echo $cur_template_path; ?>/js/html5shiv.min.js"></script>
    <script src="<?php echo $cur_template_path; ?>/js/respond.min.js"></script>
<![endif]-->
<!--   Override jQuery version by using jquery-noconflict.js.  It is old method. Code still there for examples -->
<!--<script src="--><?php //echo $this->baseurl ?><!--/templates/--><?php //echo $this->template; ?><!--/js/jquery-noconflict.js"-->
<!--        type="text/javascript"></script>-->
<!--<script src="--><?php //echo $this->baseurl ?><!--/templates/--><?php //echo $this->template; ?><!--/js/jquery.js"-->
<!--        type="text/javascript"></script>-->
<!--<script src="<?php // echo $this->baseurl ?>/templates/<?php // echo $this->template;?>/js/jquery.min.js"></script>-->
<script src="<?php echo $cur_template_path; ?>/js/js.cookie.js"
        type="text/javascript"></script>
<script src="<?php echo $cur_template_path; ?>/js/bootstrap.js"
        type="text/javascript"></script>
<script type="text/javascript"
        src="<?php echo $cur_template_path; ?>/js/miac_accessibility_template.js"></script>
<!--TODO: remove this wheel/crutch (below) ;) It's very bad replacement. But it works ;D (Joomla!'s Bootsrap 2 css is turned down by this template) -->
<script type="text/javascript"
        src="<?php echo $cur_template_path; ?>/js/bootstrap_migrate_2to3.js"></script>
