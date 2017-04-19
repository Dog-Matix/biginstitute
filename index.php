<?php
/**
 * @package biginstitute
 * @version 0.01
 * @author Antony Dickens
 * @link http://apdickens.co.uk/
 * @license GNU General Public License version 2 or later; see LICENSE.txt
 **/

    // Loading Bootstrap 3.3.7
    JHtml::stylesheet(Juri::base() . 'templates/biginstitute/css/jui/bootstrap.min.css');
    JHtml::script(Juri::base() . 'templates/biginstitute/js/jui/bootstrap.min.js', 'bootstrap', true, false, true, true);

    //No Direct Access
    defined('_JEXEC') or die ('Restricted access');
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
    
    <head>

        <jdoc:include type="head" />

        <!-- Load Custom CSS -->
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/biginstitute.css" type="text/css" />

    </head>

    <body>

		
        <jdoc:include type="modules" name="top" />

        <jdoc:include type="modules" name="showcase" />

        <div data-spy="affix" data-offset-top="396"><jdoc:include type="modules" name="navigation" /></div>

		<div class="container">
        	<jdoc:include type="component" />
      	</div>
      
        <jdoc:include type="modules" name="bottom" />

        <jdoc:include type="modules" name="debug" />


    <!-- Load JQuery -->
    <script defer src="templates/<?php echo $this->template ?>/js/jquery.min.js"></script>

    <!-- Load Custom JS -->
    <script defer src="templates/<?php echo $this->template ?>/js/biginstitute.js"></script>

    </body>
</html>