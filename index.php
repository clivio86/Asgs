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
        <div class=centrato>
        	<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/top2.png" class="top2">
        </div>
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
        
        <!-- FOOTER ALL'INTERNO DEL CONTENUTO -->
        <div class="footer">
    		<div class=fleft>
    		    <jdoc:include type="modules" name="footer-left" style="none" />
    		</div>
		    <div class=fcenter>
		    	<jdoc:include type="modules" name="footer-centrale" style="none" />
		    </div>
    		<div class="fB">
    			<jdoc:include type="modules" name="footer1" style="none" />
    		</div>
    		<div class="fB">
    			<jdoc:include type="modules" name="footer2" style="none" />
    		</div>
    		<div class="fB">
    			<jdoc:include type="modules" name="footer3" style="none" />
    		</div>
    		<div class="fB">
    			<jdoc:include type="modules" name="footer4" style="none" />
    		</div>
      </div>
      </div>

	
	  <div class="bottom">
	  	ASGS - Associazione Sammarinese Giochi Storici
	  		<div class="credits">
        	Created by <a href="http://www.contattoinformatico.com">Contatto Informatico</a>
        	</div>
	  	
	  </div>
  
    </div>
  </body> 
</html>