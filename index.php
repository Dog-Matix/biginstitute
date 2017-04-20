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

    <div class="container">
      <div class="row">
        <?php echo (isset($sidebar) ? '<div class="col-md-8">' : '<div class="col-md-12">'); ?>
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
      
        <?php if($this->countModules('bottom')) : ?>
            <jdoc:include type="modules" name="bottom" />
        <?php endif; ?>

        <jdoc:include type="modules" name="debug" />


    <!-- Load JQuery -->
    <script defer src="templates/<?php echo $this->template ?>/js/jquery.min.js"></script>

    <!-- Load Custom JS -->
    <script defer src="templates/<?php echo $this->template ?>/js/biginstitute.js"></script>

    </body>
</html>