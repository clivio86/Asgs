<?php

defined('_JEXEC') or die;
JHtml::_('behavior.framework', true);

$app = JFactory::getApplication();
?>
<?php echo '<?'; ?>xml version="1.0" encoding="<?php echo $this->_charset ?>"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
  <head>
    <jdoc:include type="head" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
  </head>
  <body>
    <div class="container">
      <div class="header">
        <h1>ASGS</h1>
        <jdoc:include type="modules" name="header" style="none" />
      </div>
      <div class="left">
        <jdoc:include type="modules" name="left1" style="none" />
        <jdoc:include type="modules" name="left2" style="none" />
      </div>
      <div class="content">
        <jdoc:include type="message" />
        <jdoc:include type="component" />
      </div>
      <div class="footer">
        Template Realizzato da Clivio Fenili
        <jdoc:include type="modules" name="footer" style="none" />
      </div>
    </div>
  </body> 
</html>