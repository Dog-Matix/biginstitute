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

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width,initial-scale=1">

        <jdoc:include type="head" />

        <!-- Load Custom CSS -->
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/biginstitute.css" type="text/css" />

    </head>

    <body>

        
        <jdoc:include type="modules" name="top" />

        <jdoc:include type="modules" name="showcase" />

        <nav data-spy="affix" data-offset-top="396"><jdoc:include type="modules" name="navigation" /></nav>

        <div class="container">
            <div style="row">

                <div style="col-md-8">
                    <jdoc:include type="component" />
                </div>

                <div style="col-md-4">
                    <jdoc:include type="modules" name="sidebar" />
                </div>

            </div>
        </div>
      
        <jdoc:include type="modules" name="bottom" />

        <jdoc:include type="modules" name="debug" />


    <!-- Load JQuery -->
    <script defer src="templates/<?php echo $this->template ?>/js/jquery.js"></script>

    <!-- Load Custom JS -->
    <script defer src="templates/<?php echo $this->template ?>/js/biginstitute.js"></script>

    </body>
</html>