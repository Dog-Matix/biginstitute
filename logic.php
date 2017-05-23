<?php
//No Direct Access
defined('_JEXEC') or die ('Restricted access');
// Loading Bootstrap 3.3.7
JHtml::stylesheet(Juri::base() . 'templates/biginstitute/css/jui/bootstrap.min.css');
JHtml::script(Juri::base() . 'templates/biginstitute/js/jui/bootstrap.min.js', 'bootstrap', true, false, true, true);
// Loading animate.css
JHtml::stylesheet(Juri::base() . 'templates/biginstitute/css/animate.min.css');

//Get Params & Settings
$logo = $this->params->get('logo');
$logotext = $this->params->get('logotext','Big Institute');
$copyright = $this->params->get('copyright');
$show_frontpage_component = $this->params->get('show_frontpage_component', 1);
$includejquery = $this->params->get('includejquery', 1);

//Get Application Object
$app = JFactory::getApplication();
//Get Document Object
$doc = JFactory::getDocument();
//Get Params Object
$templateparams = $app->getTemplate(true)->params;
//Get Menu Object
$menu = &JSite::getMenu();
//Get User Object
$user = &JFactory::getUser();
//Get Task
$task = JRequest::getCmd('task');
//Get Option
$option = JRequest::getCmd('option');

//Include Sidebar?
if ($this->countModules('sidebar'))
	$sidebar = true;
?>