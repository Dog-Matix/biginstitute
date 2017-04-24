<?php
/**
 * @package biginstitute
 * @version 0.01
 * @author Antony Dickens
 * @link http://apdickens.co.uk/
 * @license GNU General Public License version 2 or later; see LICENSE.txt
 **/

    //No Direct Access
    defined('_JEXEC') or die ('Restricted access');
    //Include Logic
    include('logic.php');
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
    
    <head>

        <jdoc:include type="head" />

        <!-- Load Custom CSS -->
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/biginstitute.css" type="text/css" />

    </head>

    <body>
        <?php if($this->countModules('top')) : ?>
            <jdoc:include type="modules" name="top" style="none" />
        <?php endif; ?>

        <?php if($this->countModules('showcase')) : ?>
            <jdoc:include type="modules" name="showcase" style="none" />
        <?php endif; ?>

        <div class="nav-wrapper">
            <nav data-spy="affix" data-offset-top="444"><jdoc:include type="modules" name="navigation" /></nav>
        </div>

    <div class="container"><!-- container 1 -->
        <div class="row">
        <?php echo (isset($sidebar) ? '<div class="col-md-8 col-sm-8">' : '<div class="col-md-12">'); ?>
            <!-- Messages -->
            <jdoc:include type="message" />
            <?php if($show_frontpage_component == 0 && $menu->getActive() == $menu->getDefault()) : ?>
                <!-- Do not show component -->
            <?php else : ?>
                <!-- Main Component -->
                <jdoc:include type="component" />
            <?php endif; ?>
        </div><!--/. col-md-12 or .col-md-8 -->

        <!-- Sidebar -->
        <?php if(isset($sidebar)) : ?>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <jdoc:include type="modules" name="sidebar" style="xhtml" />
            </div>
        <?php endif; ?>
        </div><!--./ row -->

    </div><!-- /.container 1 -->


    <div class="spotlights">
        <div class="container"><!-- container 2 -->
        <?php if($this->countModules('spotlight1') || $this->countModules('spotlight2') || $this->countModules('spotlight3')) : ?>
            <!-- Example row of columns -->
            <div class="row">
            <?php if($this->countModules('spotlight1')) : ?>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <jdoc:include type="modules" name="spotlight1" style="none" />
                </div>
            <?php endif; ?>
            <?php if($this->countModules('spotlight2')) : ?>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <jdoc:include type="modules" name="spotlight2" style="none" />
                </div>
            <?php endif; ?>
            <?php if($this->countModules('spotlight3')) : ?>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <jdoc:include type="modules" name="spotlight3" style="none" />
                </div>
            <?php endif; ?>
            </div>
        <?php endif; ?>
        </div><!-- /. container 2 -->
    </div><!-- /.spotlights -->

    <div class="bottom">       
            <?php if($this->countModules('bottom')) : ?>
                <jdoc:include type="modules" name="bottom" />
            <?php endif; ?>
    </div><!-- /.bottom -->

    <div class="footer">
        <div class="container"><!-- container 3 -->
        <?php if($this->countModules('footer1') || $this->countModules('footer2') || $this->countModules('footer3')) : ?>
            <!-- Example row of columns -->
            <div class="row">
            <?php if($this->countModules('footer1')) : ?>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <jdoc:include type="modules" name="footer1" style="xhtml" />
                </div>
            <?php endif; ?>
            <?php if($this->countModules('footer2')) : ?>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <jdoc:include type="modules" name="footer2" style="xhtml" />
                </div>
            <?php endif; ?>
            <?php if($this->countModules('footer3')) : ?>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <jdoc:include type="modules" name="footer3" style="xhtml" />
                </div>
            <?php endif; ?>
            </div>
        <?php endif; ?>
      
        <?php if($this->countModules('footer4')) : ?>
            <div class="col-md-12">
                <jdoc:include type="modules" name="footer4" style="xhtml" />
            </div>
        <?php endif; ?>

        </div><!-- /. container 3 -->
    </div><!-- /.footer -->

    <jdoc:include type="modules" name="debug" />

    



    <!-- Load JQuery -->
    <script defer src="templates/<?php echo $this->template ?>/js/jquery.min.js"></script>

    <!-- Load Custom JS -->
    <script defer src="templates/<?php echo $this->template ?>/js/biginstitute.js"></script>

    </body>
</html>