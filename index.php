<?php
defined('_JEXEC') or die('Restricted access');
//JFactory::getCache("mod_articles_news")->clean();
//JFactory::getCache("mod_search")->clean();

?>

<!-- TODO: Do I need to create params.php file (for code below)? -->
<?php
$doc = JFactory::getDocument();
$this->setGenerator('');
// Disable Joomla's Bootstrap version (js and css)
unset($doc->_styleSheets[$this->baseurl .'/media/jui/css/bootstrap.min.css']);
unset($doc->_scripts[JURI::root(true).'/media/jui/js/bootstrap.min.js']);
/* TODO: Uncomment block below for load jQuery from template ./js dir (for using newer jQuery version), BUT (!) Joomla! webkits has some fails with newer version */
// Disable Joomla's JQuery version (js and css)
//unset($doc->_scripts[JURI::root(true).'/media/jui/js/jquery.min.js']);
//unset($doc->_scripts[JURI::root(true).'/media/jui/js/jquery-noconflict.js']);
//unset($doc->_scripts[JURI::root(true).'/media/jui/js/jquery-migrate.min.js']);
//$doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/jquery.js');
?>

<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
<!--  <script src="--><?php //echo $this->baseurl . '/templates/' . $this->template . "/js/jquery.js"; ?><!--" type="text/javascript"></script>-->
  <jdoc:include type="head"/>
  <?php include 'accessibility_includes_head.php';?>
</head>

<?
$page_container_md_width = "8";
$page_container_md_offset = "2";
$content_column_width = "12";
if (($this->countModules('left')) || ($this->countModules('position-8')) ||
    ($this->countModules('left_column_top')) || ($this->countModules('left_column_bottom')) ||
    ($this->countModules('gallery'))
) {
    $content_column_width = "9";
}
if (($this->countModules('right')) || ($this->countModules('position-7'))) {
    if ($content_column_width === "9") {
        $content_column_width = "6";
        $page_container_md_offset = "1";
        $page_container_md_offset = "10";
    } else {
        $content_column_width = "9";
    }
}
?>

<body class="fontsize-normal images-on color-white sans-serif spacing-normal">
<?php include 'accessibility_settings_toolbar.php';?>
<div id="page_content" class="container col-md-<?=$page_container_md_width?> col-md-offset-<?=$page_container_md_offset?> col-sm-10 col-sm-offset-1 col-xs-12">
  <!-- BEGIN <header> -->
  <header class="header" role="banner">
    <div class="clearfix">
      <div class="page-header container-fluid text-center">
        <a class="brand" href="<?php echo $this->baseurl; ?>/">
          <?php
          /*
           * Note: Choose in code below what will be site header - site meta-data description (default) or site name
          */
          $header_title_text = $doc->getMetaData("description");
          if (!$header_title_text) {
              $header_title_text = JFactory::getConfig()->get("sitename");
          }
          ?>
          <h1><?=$header_title_text;?></h1>
        </a>
      </div>
      <!-- BEGIN search box -->
      <div class="header-search container-fluid pull-right">
        <jdoc:include type="modules" name="position-0"/>
        <jdoc:include type="modules" name="search"/>
        <?php if($this->countModules('search_box')):?>
          <div id="search-box">
            <jdoc:include type="modules" name="search_box"/>
          </div>
        <?php endif;?>
      </div>
      <!-- END search box -->
    </div>
  </header>
  <!-- END <header> -->
  <?php if ($this->countModules('menu_top')):?>
  <jdoc:include type="modules" name="banner"/>
  <?php endif; ?>
  <?php if (($this->countModules('menu_top')) || ($this->countModules('position-1'))): ?>
    <!-- BEGIN navigation -->
    <nav class="navbar container-fluid" role="navigation" style="border: none">
      <div class="nav-bar">
        <jdoc:include type="modules" name="menu_top"/>
        <jdoc:include type="modules" name="position-1"/>
      </div>
    </nav>
    <!-- END navigation -->
  <?php endif; ?>
  <?php if($this->countModules('top')):?>
    <!-- BEGIN #top -->
    <jdoc:include type="modules" name="top" />
    <!-- END #top -->
  <?php endif;?>
  <div id="main_content">
    <?php
    if (($this->countModules('left')) || ($this->countModules('position-8')) ||
        ($this->countModules('left_column_top')) || ($this->countModules('left_column_bottom')) ||
        ($this->countModules('gallery'))
    ):
      ?>
      <!-- BEGIN _left -->
      <div id="left_container" class="pull-left col-md-3 col-sm-3 wordwrap">
        <jdoc:include type="modules" name="left"/>
        <jdoc:include type="modules" name="position-8"/>
        <jdoc:include type="modules" name="left_column_top"/>
        <jdoc:include type="modules" name="left_column_bottom"/>
        <jdoc:include type="modules" name="gallery"/>
      </div>
      <!-- END _left -->
    <?php endif; ?>

    <!-- BEGIN #page -->
    <div id="page" class="pull-left col-md-<?=$content_column_width;?> col-sm-<?=$content_column_width;?>">
      <?php if ($this->countModules('content_column_top')):?>
      <div>
        <jdoc:include type="modules" name="content_column_top"/>
      </div>
      <?php endif;?>
      <jdoc:include type="modules" name="position-3" style="xhtml" />
      <jdoc:include type="message" />
      <jdoc:include type="component" />
      <jdoc:include type="modules" name="position-2"/>
      <?php if ($this->countModules('content_column_bottom')):?>
        <div>
          <jdoc:include type="modules" name="content_column_bottom"/>
        </div>
      <?php endif;?>
    </div>
    <!-- END #page -->

    <?php if (($this->countModules('right')) || ($this->countModules('position-7'))): ?>
      <!-- BEGIN _right -->
      <div id="right_container" class="pull-right col-md-3 wordwrap" style="width: 25%; padding-left: 10px;">
        <jdoc:include type="modules" name="right"/>
        <jdoc:include type="modules" name="position-7"/>
      </div>
      <!-- END _right -->
    <?php endif; ?>
  </div>

  <!-- BEGIN .footer -->
  <div class="footer">
    <jdoc:include type="modules" name="footer"/>
    <div class="text-center">
      <?php if ($this->countModules('copyright')):?>
        <div id="copyright"  style="display:inline-block; margin: 0 auto;">
          <jdoc:include type="modules" name="copyright"/>
        </div>
      <?php endif;?>
      <?php if ($this->countModules('menu_footer')):?>
        <nav class="navbar container-fluid" style="border: none">
          <div id="nav-footer" class="nav-bar">
            <jdoc:include type="modules" name="menu_footer"/>
          </div>
        </nav>
      <?php endif;?>
    </div>
  </div>
  <!-- END .footer -->
</div>
<div class="clearfix"></div>
<!-- END #page_content -->
<?php if ($this->countModules('debug')):?>
  <!-- BEGIN #debug -->
  <jdoc:include type="modules" name="debug"/>
  <!-- END #debug -->
<?php endif; ?>
</body>
</html>
