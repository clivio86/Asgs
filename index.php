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
  <body class="principale">
    
    <div class="container">
      
      <div class="header">
        <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/top1.png" class="top1">
        <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/top2.png">
        <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/top3.png" class="top3">
        
        <jdoc:include type="modules" name="header" style="none" />
      </div>
      
      <div class="corpo">
      	<div class="navigationTop">
      		<jdoc:include type="modules" name="menu-top" style="none" />
      	</div>
      	
      	<div class="left">
      		<div class="navigation">
	        <jdoc:include type="modules" name="left1" style="none" />
	        </div>
    	    <jdoc:include type="modules" name="left2" style="none" />
    	    <jdoc:include type="modules" name="left3" style="none" />
      	</div>
    
      	<div class="content">
        	<jdoc:include type="message" />
        	<jdoc:include type="component" />
      	</div>
      </div>
    
      <div class="footer">

        <jdoc:include type="modules" name="footer" style="none" />
      </div>

	  <div class="coda">
	  	ASGS - Associazione Sammarinese Giochi Storici
	  		<div class="credits">
        	Template Realizzato da Clivio Fenili
        	</div>
	  	
	  </div>
  
    </div>
  </body> 
</html>