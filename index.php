<?php
defined('_JEXEC') or die('Restricted access');
//
// Use variable below for set default template name (it is selected when disabling this template)
//
//$DEFAULT_NORM_TEMLATE_NAME = 'miac_lpu_theme';
$DEFAULT_NORM_TEMLATE_NAME = 'ptd-4';
//JFactory::getCache("mod_articles_news")->clean();
//JFactory::getCache("mod_search")->clean();
?>

<!-- TODO: Create params.php file (for code below)? -->
<?php
$doc = JFactory::getDocument();
$this->setGenerator('');
// Disable Joomla's Bootstrap version (js and css)
unset($doc->_styleSheets[$this->baseurl .'/media/jui/css/bootstrap.min.css']);
unset($doc->_scripts[JURI::root(true).'/media/jui/js/bootstrap.min.js']);
// Disable Joomla's JQuery version (js and css)
//unset($doc->_scripts[JURI::root(true).'/media/jui/js/jquery.min.js']);
//unset($doc->_scripts[JURI::root(true).'/media/jui/js/jquery-noconflict.js']);
//unset($doc->_scripts[JURI::root(true).'/media/jui/js/jquery-migrate.min.js']);
//$doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/jquery.js');
?>

<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
  <script src="<?php echo $this->baseurl . '/templates/' . $this->template . "/js/jquery.js"; ?>" type="text/javascript"></script>
  <jdoc:include type="head"/>
  <?php include 'accessibility_includes_head.php';?>
</head>

<body class="fontsize-normal images-on color-white sans-serif spacing-normal">
<?php include 'accessibility_settings_toolbar.php';?>
<div id="page_content" class="container col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
  <!-- BEGIN #header -->
<!--  <pre><?php //print_r($doc);?><!--</pre>-->
  <header class="header" role="banner">
    <div class="clearfix">
      <!-- Site logo [ and description] -->
      <div class="page-header container-fluid text-center">
        <a class="brand" href="<?php echo $this->baseurl; ?>/">
          <!--         --><?php //echo $logo; ?>
          <!--         --><?php //if ($this->params->get('sitedescription')) : ?>
          <!--           --><?php //echo '<div class="site-description">' . htmlspecialchars($this->params->get('sitedescription'), ENT_COMPAT, 'UTF-8') . '</div>'; ?>
          <!--         --><?php //endif; ?>
           <?php
           $header_title_text = $doc->getMetaData("description");
           if (!$header_title_text) {
               $header_title_text = JFactory::getConfig()->get("sitename");
           }
           ?>
<!--          <h1>--><?php //echo '' . /* htmlspecialchars(*/$doc->getMetaData("description")/*, ENT_COMPAT, 'UTF-8')*/ /*. '</strong>'*/; ?><!--</h1>-->
          <h1><?=$header_title_text;?></h1>
        </a>
      </div>
      <!-- Search, language selector - position-0 -->
      <div class="header-search container-fluid pull-right">
        <jdoc:include type="modules" name="position-0" style="none"/>
        <div id="search-box">
          <jdoc:include type="modules" name="search_box" style="themeHtml5"/>
        </div>
        <!--        <div id="contrast-box">-->
        <!--            <jdoc:include type="modules" name="mod_contrast" style="themeHtml5" />-->
        <!--        </div>-->
      </div>
    </div>
  </header>
  <!-- END #header -->
  <!-- BEGIN navigation -->
  <jdoc:include type="modules" name="banner" style="none"/>
  <?php if ($this->countModules('position-1')) : ?>
    <nav class="navigation container-fluid " role="navigation">
      <div class="navbar navbar-collapse" style="border: none">
        <jdoc:include type="modules" name="position-1" style="none" />
      </div>
    </nav>
  <?php endif; ?>
  <nav class="navbar container-fluid" style="border: none">
    <div class="nav-bar">
      <jdoc:include type="modules" name="menu_top" style="themeHtml5" />
      <?php if($this->countModules('mainmenu')):?>
        <jdoc:include type="modules" name="mainmenu" style="xhtml" />
      <?php endif;?>
    </div>
  </nav>
  <!-- END navigation -->

  <div id="main_content">
    <!-- BEGIN #left -->
    <?php
    $content_width_num = "12";
    if (($this->countModules('position-8')) || ($this->countModules('left_column_top')) ||
            ($this->countModules('left_column_bottom')) || ($this->countModules('gallery'))):
        $content_width_num = "9";
        ?>
      <div id="left_container" class="pull-left col-md-3 col-sm-3">
        <div id="left_container" class="pull-left">
          <jdoc:include type="modules" name="position-8" style="xhtml"/>
        </div>
        <div>
          <jdoc:include type="modules" name="left_column_top" style="themeHtml5"/>
        </div>
        <div>
          <jdoc:include type="modules" name="left_column_bottom" style="themeHtml5"/>
        </div>
        <div>
          <jdoc:include type="modules" name="gallery" style="XHTML"/>
        </div>
      </div>
    <?php endif; ?>
    <!-- END #left -->
    <?php
    if ($this->countModules('position-7')) {
        $content_width_num = "6";
    }
    ?>

    <!-- BEGIN #page -->
<!--    <div class="page" style=width:<?php //echo $content_width; ?>-->
    <div id="page" class="pull-left col-md-<?=$content_width_num;?> col-sm-<?=$content_width_num;?>">
      <div>
        <jdoc:include type="modules" name="content_column_top" style="themeHtml5" />
      </div>
      <jdoc:include type="modules" name="position-3" style="xhtml" />
      <jdoc:include type="message" />
      <jdoc:include type="component" />
      <jdoc:include type="modules" name="position-2" style="none" />
      <div>
        <jdoc:include type="modules" name="content_column_bottom" style="themeHtml5" />
      </div>
    </div>
    <!-- END #page -->

    <!-- BEGIN #right -->
      <?php
      if ($this->countModules('position-7')):
        ?>
        <div id="right_container" class="pull-right col-md-3" style="width: 25%; padding-left: 10px;">
          <jdoc:include type="modules" name="position-7" style="xhtml"/>
        </div>
      <?php endif; ?>
    <!-- END #right -->

    <div style="clear:both;">
      &nbsp;
    </div>
  </div>

  <!-- BEGIN #footer -->
  <div class="footer">
    <jdoc:include type="modules" name="footer" style="none"/>
    <div class="text-center">
      <div id="copyright"  style="display:inline-block; margin: 0 auto;">
        <jdoc:include type="modules" name="copyright" style="themeHtml5" />
      </div>
      <nav class="navbar container-fluid" style="border: none">
        <div id="nav-footer" class="nav-bar">
          <jdoc:include type="modules" name="menu_footer" style="themeHtml5" />
        </div>
      </nav>
    </div>
  </div>
  <!-- END #footer -->
</div>
<!-- END #page_content -->

<jdoc:include type="modules" name="debug" style="none"/>

</body>
</html>