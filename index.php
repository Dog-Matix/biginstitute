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

    <body id="page-top" data-spy="scroll" data-target=".navbar">
        <?php if($this->countModules('top')) : ?>
            <jdoc:include type="modules" name="top" style="none" />
        <?php endif; ?>

        <?php if($this->countModules('showcase')) : ?>
            <jdoc:include type="modules" name="showcase" style="none" />
        <?php endif; ?>


        <!--Navigation-->
        <?php if ($this->countModules('navigation')) : ?>
            <div class="nav-wrapper">    
                <div data-spy="affix" data-offset-top="550" id="mainnav">
                    <div class="container">
                        <div class="navbar navbar-default" role="navigation">
                            
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#targetedestination">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>

                                <div id="brand">
                                    <a class="navbar-brand" href="#"><img src="images/BI_LOGO_50.png"></a>
                                </div>
                            </div>

                            <div class="navbar-collapse collapse" id="targetedestination">
                            
                                <nav class="navigation" role="navigation">
                                    <jdoc:include type="modules" name="navigation" style="none" />
                                </nav>
                            
                            </div>

                        </div>
                    </div>
                </div> 
            </div><!-- /.nav-wrapper -->
        <?php endif; ?>      
        <!--Navigation-->


        <?php if($this->countModules('topspotlight1') || $this->countModules('topspotlight2') || $this->countModules('topspotlight3') || $this->countModules('topspotlight4')) : ?>
            <div class="topspotlights">
                <div class="container"><!-- container 1 -->
                
                    <!-- Example row of columns -->
                    <div class="row">
                        <?php if($this->countModules('topspotlight1')) : ?>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <jdoc:include type="modules" name="topspotlight1" style="none" />
                            </div>
                        <?php endif; ?>
                        <?php if($this->countModules('topspotlight2')) : ?>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <jdoc:include type="modules" name="topspotlight2" style="none" />
                            </div>
                        <?php endif; ?>
                        <?php if($this->countModules('topspotlight3')) : ?>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <jdoc:include type="modules" name="topspotlight3" style="none" />
                            </div>
                        <?php endif; ?>
                        <?php if($this->countModules('topspotlight4')) : ?>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <jdoc:include type="modules" name="topspotlight4" style="none" />
                            </div>
                        <?php endif; ?>

                    </div><!-- /.row -->
                
                </div><!-- /. container 1 -->
            </div><!-- /.topspotlights -->
        <?php endif; ?>


        <div id="maincontent" class="container"><!-- container 2 -->
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

        </div><!-- /.container 2 -->

        <?php if($this->countModules('UpperFullWidth') || $this->countModules('UpperColLeft') || $this->countModules('UpperColRight')) : ?>
            <div id="UpperFullWidth" class="content">
                <div class="container"><!-- container 3 -->

                    <?php if ($this->countModules('UpperFullWidth')) : ?>
                        <div class="row">
                            <div class="col-md-12 col-xs-12">
                                <jdoc:include type="modules" name="UpperFullWidth" style="xhtml" />
                            </div><!-- /.columnLeft -->
                        </div><!-- /.row -->
                    <?php endif; ?>

                    <div class="row">
                        <?php if ($this->countModules('UpperColLeft')) : ?>
                            <div class="col-md-6 col-xs-12">
                                <jdoc:include type="modules" name="UpperColLeft" style="xhtml" />
                            </div><!-- /.columnLeft -->
                        <?php endif; ?>
                        <?php if ($this->countModules('UpperColRight')) : ?>    
                            <div class="col-md-6 col-xs-12">
                                <jdoc:include type="modules" name="UpperColRight" style="xhtml" />
                            </div><!-- /.columnRight -->
                        <?php endif; ?>
                    </div><!-- /.row -->
                    
                </div><!-- /.container 3 -->
            </div><!-- /.content -->
        <?php endif; ?>

        <?php if($this->countModules('spotlight1') || $this->countModules('spotlight2') || $this->countModules('spotlight3')) : ?>
            <div class="spotlights">
                <div class="container"><!-- container 4 -->
                
                    <!-- Example row of columns -->
                    <div class="row">
                        <?php if($this->countModules('spotlight1')) : ?>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <jdoc:include type="modules" name="spotlight1" style="none" />
                            </div>
                        <?php endif; ?>
                        <?php if($this->countModules('spotlight2')) : ?>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <jdoc:include type="modules" name="spotlight2" style="none" />
                            </div>
                        <?php endif; ?>
                        <?php if($this->countModules('spotlight3')) : ?>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <jdoc:include type="modules" name="spotlight3" style="none" />
                            </div>
                        <?php endif; ?>
                    </div><!-- /.row -->
                
                </div><!-- /. container 4 -->
            </div><!-- /.spotlights1 -->
        <?php endif; ?>

        <?php if($this->countModules('MidFullWidth') || $this->countModules('MidColLeft') || $this->countModules('MidColRight')) : ?>
            <div id="MidFullWidth" class="midcontent">
                <div class="container"><!-- container 5 -->

                    <?php if ($this->countModules('MidFullWidth')) : ?>
                        <div class="row">
                            <div class="col-md-12 col-xs-12">
                                <jdoc:include type="modules" name="MidFullWidth" style="xhtml" />
                            </div><!-- /.MidFullWidth -->
                        </div>
                    <?php endif; ?>


                    <div class="row">
                        <?php if ($this->countModules('MidColLeft')) : ?>
                            <div class="col-md-6 col-xs-12">
                                <jdoc:include type="modules" name="MidColLeft" style="xhtml" />
                            </div><!-- /.columnLeft -->
                        <?php endif; ?>
                        <?php if ($this->countModules('MidColRight')) : ?>    
                            <div class="col-md-6 col-xs-12">
                                <jdoc:include type="modules" name="MidColRight" style="xhtml" />
                            </div><!-- /.columnRight -->
                        <?php endif; ?>
                    </div><!-- /.row -->

                </div><!-- /.container 5 -->
            </div><!-- /.content -->
        <?php endif; ?>

        <?php if($this->countModules('spotlight4') || $this->countModules('spotlight5') || $this->countModules('spotlight6')) : ?>
            <div class="spotlights">
                <div class="container"><!-- container 6 -->
                
                    <!-- Example row of columns -->
                    <div class="row">
                    <?php if($this->countModules('spotlight4')) : ?>
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <jdoc:include type="modules" name="spotlight4" style="xhtml" />
                        </div>
                    <?php endif; ?>
                    <?php if($this->countModules('spotlight5')) : ?>
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <jdoc:include type="modules" name="spotlight5" style="xhtml" />
                        </div>
                    <?php endif; ?>
                    <?php if($this->countModules('spotlight6')) : ?>
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <jdoc:include type="modules" name="spotlight6" style="xhtml" />
                        </div>
                    <?php endif; ?>
                    </div>

                </div><!-- /. container 6 -->
            </div><!-- /.spotlights2 -->
        <?php endif; ?>

        <?php if($this->countModules('LowerFullWidth') || $this->countModules('LowerColLeft') || $this->countModules('LowerColRight')) : ?>
            <div id="LowerFullWidth" class="lowercontent">
                <div class="container"><!-- container 7 -->

                    <?php if ($this->countModules('LowerFullWidth')) : ?>
                        <div class="row">
                            <div class="col-md-12 col-xs-12">
                                <jdoc:include type="modules" name="LowerFullWidth" style="xhtml" />
                            </div><!-- /.MidFullWidth -->
                        </div>
                    <?php endif; ?>
                    
                    <div class="row">
                        <?php if ($this->countModules('LowerColLeft')) : ?>
                            <div class="col-md-6 col-xs-12">
                                <jdoc:include type="modules" name="LowerColLeft" style="xhtml" />
                            </div><!-- /.columnLeft -->
                        <?php endif; ?>
                        <?php if ($this->countModules('LowerColRight')) : ?>    
                            <div class="col-md-6 col-xs-12">
                                <jdoc:include type="modules" name="LowerColRight" style="xhtml" />
                            </div><!-- /.columnRight -->
                        <?php endif; ?>
                    </div><!-- /.row -->

                </div><!-- /.container 7 -->
            </div><!-- /.content -->
        <?php endif; ?>

        <?php if($this->countModules('bottom')) : ?>
            <div class="bottom">             
                <jdoc:include type="modules" name="bottom" />
            </div><!-- /.bottom -->
        <?php endif; ?>

        <div class="footer">
            <div class="container"><!-- container 8 -->
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

            </div><!-- /. container 8 -->
        </div><!-- /.footer -->

        <jdoc:include type="modules" name="debug" />

        <!-- Load JQuery
        <script defer src="templates/<?php // echo $this->template ?>/js/jquery.min.js"></script>  -->

        <!-- Load Custom JS -->
        <script defer src="templates/<?php echo $this->template ?>/js/biginstitute.js"></script>

    </body>
</html>