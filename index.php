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
	        	<jdoc:include type="modules" name="left1" style="none" /></div>
    	    <div class="subnavigation">
    	    	<jdoc:include type="modules" name="left1bis" style="none" /></div>
    	    <jdoc:include type="modules" name="left2" style="none" />
    	    <div class="navigation">
    			<jdoc:include type="modules" name="left3" style="none" /></div>
    		<div class="social">
    			<a href="https://www.facebook.com/associazionesammarinesegiochistorici" class="facebook" target=”_blank”>Facebook</a>
    			<a href="http://www.youtube.com/channel/UCILGPuL0X0eoYe3DsGSqU7g" class="youtube" target=”_blank”>Youtube</a>
    		</div>
    		<div class="left4">
    			<jdoc:include type="modules" name="left4" style="none" /></div>
      	</div>
      	
    
      	<div class="content">
        	<jdoc:include type="message" />
        	<jdoc:include type="component" />
      	</div>

      
    	  <!-- FOOTER ALL'INTERNO DEL CONTENUTO -->
	      <div class="footer">
	      		<jdoc:include type="modules" name="footer-left" style="none" />
		   		<jdoc:include type="modules" name="footer-centrale" style="none" />
    			<jdoc:include type="modules" name="footer1" style="none" />
    			<jdoc:include type="modules" name="footer2" style="none" />
    			<jdoc:include type="modules" name="footer3" style="none" />
    			<jdoc:include type="modules" name="footer4" style="none" />
		  </div>
     </div>
    </div>
    
    <div class="bottom">
	  	ASGS - Associazione Sammarinese Giochi Storici
	  		<div class="credits">
        	Created by <a href="http://www.contattoinformatico.com">Contatto Informatico</a> &amp; <a href="http://www.3studio.sm/">Graphic Design 3STUDIO</a> 
        	</div>
	  	
	  </div>

<!-- SCRIPT GOOGLE ANALYTICS -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-36224513-5', 'asgs.sm');
  ga('send', 'pageview');

</script>
  </body> 
</html>