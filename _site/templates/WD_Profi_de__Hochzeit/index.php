<?php
defined('_JEXEC') or die('Restricted access'); // no direct access
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'functions.php';
$document = isset($this) ? $this : null;
$baseUrl = $this->baseurl;
$templateUrl = $this->baseurl . '/templates/' . $this->template;
artxComponentWrapper($document);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
 <head>
  <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<jdoc:include type="head" />
  <link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/system/css/system.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/system/css/general.css" type="text/css" />

  <link rel="stylesheet" type="text/css" href="<?php echo $templateUrl; ?>/css/template.css" />
  <!--[if IE 6]><link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.ie6.css" type="text/css" media="screen" /><![endif]-->
  <!--[if IE 7]><link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.ie7.css" type="text/css" media="screen" /><![endif]-->
  <script type="text/javascript" src="<?php echo $templateUrl; ?>/script.js"></script>






<!-- www.WD-Profi.de - Your Template Specialist -->

<!-- This template is under a creative commons licence! Please let the backlink of the author into the template or make a donation of 10,- EUR per PayPal on our account: info@wd-profi.de !!! -->





 </head>
<body>
<div id="art-page-background-simple-gradient">
    <div id="art-page-background-gradient"></div>
</div>
<div id="art-page-background-glare">
    <div id="art-page-background-glare-image"></div>
</div>
<div id="art-main">
<div class="art-Sheet">
    <div class="pic"></div>
    <div class="art-Sheet-tl"></div>
    <div class="art-Sheet-tr"></div>
    <div class="art-Sheet-bl"></div>
    <div class="art-Sheet-br"></div>
    <div class="art-Sheet-tc"></div>
    <div class="art-Sheet-bc"></div>
    <div class="art-Sheet-cl"></div>
    <div class="art-Sheet-cr"></div>
    <div class="art-Sheet-cc"></div>
    <div class="art-Sheet-body">
<div class="art-Header">
    <div class="art-Header-png"></div>
    <div class="art-Header-jpeg"></div>

</div>
<jdoc:include type="modules" name="user3" />
<jdoc:include type="modules" name="banner1" style="artstyle" artstyle="art-nostyle" />
<?php echo artxPositions($document, array('top1', 'top2', 'top3'), 'art-block'); ?>
<div class="art-contentLayout">
<?php if (artxCountModules($document, 'left')) : ?>
<div class="art-sidebar1"><?php echo artxModules($document, 'left', 'art-block'); ?>
</div>
<?php endif; ?>
<div class="art-<?php echo artxGetContentCellStyle($document); ?>">

<?php
  echo artxModules($document, 'banner2', 'art-nostyle');
  if (artxCountModules($document, 'breadcrumb'))
    echo artxPost(null, artxModules($document, 'breadcrumb'));
  echo artxPositions($document, array('user1', 'user2'), 'art-article');
  echo artxModules($document, 'banner3', 'art-nostyle');
?>
<?php if (artxHasMessages()) : ?><div class="art-Post">
    <div class="art-Post-body">
<div class="art-Post-inner">
<div class="art-PostContent">

<jdoc:include type="message" />

</div>
<div class="cleared"></div>

</div>

    </div>
</div>
<?php endif; ?>
<jdoc:include type="component" />

<?php echo artxModules($document, 'banner4', 'art-nostyle'); ?>
<?php echo artxPositions($document, array('user4', 'user5'), 'art-article'); ?>
<?php echo artxModules($document, 'banner5', 'art-nostyle'); ?>
</div>
<?php if (artxCountModules($document, 'right')) : ?>
<div class="art-sidebar2"><?php echo artxModules($document, 'right', 'art-block'); ?>
</div>
<?php endif; ?>

</div>
<div class="cleared"></div>

<?php echo artxPositions($document, array('bottom1', 'bottom2', 'bottom3'), 'art-block'); ?>
<jdoc:include type="modules" name="banner6" style="artstyle" artstyle="art-nostyle" />
<div class="art-Footer">
 <div class="art-Footer-inner">
  <?php echo artxModules($document, 'syndicate'); ?>
  <div class="art-Footer-text">
  <?php if (artxCountModules($document, 'copyright') == 0): ?>
<center><p><a href="http://creativecommons.org/licenses/by-nc-nd/3.0/de/" target="_blank" title="Creative Commons Lizenz - www.WD-Profi.de - Ottonenweg 6 - D-98530 Rohr / Th&uuml;r."><img border="0" alt="Creative Commons Lizenz" src="http://i.creativecommons.org/l/by-nc-nd/3.0/de/80x15.png" /></a><br/>&copy; <?php echo date("Y");?></p></center>
  <?php else: ?>
  <?php echo artxModules($document, 'copyright', 'art-nostyle'); ?>
  <?php endif; ?>
  </div>
 </div>
 <div class="art-Footer-background"></div>
</div>

    </div>
</div>
<div class="cleared"></div>
<p class="art-page-footer"><a href="http://www.wd-profi.de">Designed by WD-Profi</a></p>
</div>

</body>
</html>