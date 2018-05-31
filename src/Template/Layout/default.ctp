<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
$session = $this->request->getSession();
		if(!($session->read('UserData.login.islogedin'))){
?>
<!DOCTYPE html>
<html lang="en">

<!--================================================================================
<!--================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 3.1
	Author: GeeksLabs
	Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
  <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
  <title>Login Page | Materialize - Material Design Admin Template</title>

  <!-- Favicons-->
  <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->
  
  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->    
    
<?php echo $this->HTML->css('style.min.css');?>
<?php echo $this->HTML->css('custom/custom.min.css');?>
<?php echo $this->HTML->css('layouts/page-center');?>
  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <?php echo $this->HTML->css('prism');?>
  <?php echo $this->HTML->css('perfect-scrollbar');?>
  <?php echo $this->HTML->css('js/plugins/jvectormap/jquery-jvectormap');?>
  
</head>

<body class="cyan">
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->


  <!-- ================================================
    Scripts
    ================================================ -->

  <!-- jQuery Library -->
  <script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>
  <!--materialize js-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <!--prism-->
  <script type="text/javascript" src="js/plugins/prism/prism.js"></script>
  <!--scrollbar-->
  <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

      <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js/custom-script.js"></script>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
<?php
}
 else{?>

<!DOCTYPE html>
<html lang="en">

<!--================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 3.1
	Author: GeeksLabs
	Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->

<html lang="en">

<!--================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 3.1
	Author: GeeksLabs
	Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
  <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
  <title>Page Blank | Materialize - Material Design Admin Template</title>

  <!-- Favicons-->
  <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
  <?= $this->Html->meta(
    'apple-touch-icon-152x152.png',
    'images/favicon/apple-touch-icon-152x152.png',
    ['type' => 'icon']
);
?>
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->
  <?php echo $this->Html->css('materialize.min');?>
  <?php echo $this->Html->css('style.min');?>
  <!-- Custome CSS-->    
  <?php echo $this->Html->css('custom/custom.min');?>

  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <?php echo $this->Html->css('prism');?>
  <?php echo $this->Html->css('perfect-scrollbar');?>
  <?php echo $this->Html->css('jquery.dataTables.min');?>
</head>

<body>
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START HEADER -->
  <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="navbar-color">
                <div class="nav-wrapper">
                    <ul class="left">                      
                      <li><h1 class="logo-wrapper"><a href="index.html" class="brand-logo darken-1">
					  
					  
					  <?php echo $this->Html->image('materialize-logo.png',array('alt'=>'myimage','class'=>'img-responsive'));
?></a> <span class="logo-text">Materialize</span></h1></li>
                    </ul>
                    <div class="header-search-wrapper hide-on-med-and-down">
                        <i class="mdi-action-search"></i>
                        <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize"/>
                    </div>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light translation-button"  data-activates="translation-dropdown"><?php
echo $this->Html->image('flag-icons/United-States.png',array('alt'=>'myimage','class'=>'img-responsive'));
?></a>
                        </li>
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                        </li>
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light notification-button" data-activates="notifications-dropdown"><i class="mdi-social-notifications"><small class="notification-badge">5</small></i>
                        
                        </a>
                        </li>                        
                        <li><a href="#" data-activates="chat-out" class="waves-effect waves-block waves-light chat-collapse"><i class="mdi-communication-chat"></i></a>
                        </li>
                    </ul>
                    <!-- translation-button -->
                    <ul id="translation-dropdown" class="dropdown-content">
                      <li>
                        <a href="#!">
						<?php echo $this->Html->image('flag-icons/United-States.png',array('alt'=>'English','class'=>'img-responsive'));?>
						<span class="language-select">English</span></a>
                      </li>
                      <li>
                        <a href="#!">
						<?php echo $this->Html->image('flag-icons/France.png',array('alt'=>'French','class'=>'img-responsive'));?><span class="language-select">French</span></a>
                      </li>
                      <li>
                        <a href="#!"><?php echo $this->Html->image('flag-icons/China.png',array('alt'=>'Chinese','class'=>'img-responsive'));?><span class="language-select">Chinese</span></a>
                      </li>
                      <li>
					  <a href="#!"><?php echo $this->Html->image('flag-icons/Germany.png',array('alt'=>'German','class'=>'img-responsive'));?> <span class="language-select">German</span></a>
                      </li>
                      </li>
                      
                    </ul>
                    <!-- notifications-dropdown -->
                    <ul id="notifications-dropdown" class="dropdown-content">
                      <li>
                        <h5>NOTIFICATIONS <span class="new badge">5</span></h5>
                      </li>
                      <li class="divider"></li>
                      <li>
                        <a href="#!"><i class="mdi-action-add-shopping-cart"></i> A new order has been placed!</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
                      </li>
                      <li>
                        <a href="#!"><i class="mdi-action-stars"></i> Completed the task</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
                      </li>
                      <li>
                        <a href="#!"><i class="mdi-action-settings"></i> Settings updated</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">4 days ago</time>
                      </li>
                      <li>
                        <a href="#!"><i class="mdi-editor-insert-invitation"></i> Director meeting started</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">6 days ago</time>
                      </li>
                      <li>
                        <a href="#!"><i class="mdi-action-trending-up"></i> Generate monthly report</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">1 week ago</time>
                      </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- end header nav-->
  </header>
  <!-- END HEADER -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START MAIN -->
  <div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">

      <!-- START LEFT SIDEBAR NAV-->
      <aside id="left-sidebar-nav">
        <ul id="slide-out" class="side-nav fixed leftside-navigation">
            <li class="user-details cyan darken-2">
            <div class="row">
                <div class="col col s4 m4 l4">
				<?php echo $this->Html->image('avatar.jpg',array('alt'=>'English','class'=>'circle responsive-img valign profile-image'));?>
                    
					
                </div>
                <div class="col col s8 m8 l8">
                    <ul id="profile-dropdown" class="dropdown-content">
                        <li><a href="#"><i class="mdi-action-face-unlock"></i> Profile</a>
                        </li>
                        <li><a href="#"><i class="mdi-action-settings"></i> Settings</a>
                        </li>
                        <li><a href="#"><i class="mdi-communication-live-help"></i> Help</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="mdi-action-lock-outline"></i> Lock</a>
                        </li>
                        <li><a href="<?php echo $this->Url->build(array('controller'=>'Users','action'=>'logout')); ?>"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                        </li>
                    </ul>
                    <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">John Doe<i class="mdi-navigation-arrow-drop-down right"></i></a>
                    <p class="user-roal">Administrator</p>
                </div>
            </div>
            </li>
            <li class="bold"><a href="<?php echo $this->Url->build(array('controller'=>'Dashboard','action'=>'index')); ?>" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Dashboard</a>
            </li>
			<li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-view-carousel"></i> Entry</a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="<?php echo $this->Url->build(array('controller'=>'Entry','action'=>'visitor-entry'));?>">Visitor Entry</a>
                                </li>
                                <li><a href="layout-horizontal-menu.html">Horizontal Menu</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
			<li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-view-carousel"></i> Masters</a>
                        <div class="collapsible-body">
                            <ul>
							    <li><a href="<?php echo $this->Url->build(array('controller'=>'Masters','action'=>'users/add')); ?>">Users</a></li>
							    <li><a href="<?php echo $this->Url->build(array('controller'=>'Masters','action'=>'visitor-type/add')); ?>">Visitor Type</a></li>
                                <li><a href="<?php echo $this->Url->build(array('controller'=>'Masters','action'=>'employees/add')); ?>">Employees</a></li>
                                <li><a href="<?php echo $this->Url->build(array('controller'=>'Masters','action'=>'roles/add')); ?>">Roles</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
			<li class="bold"><a href="<?php echo $this->Url->build(array('controller'=>'Entry','action'=>'visitor-in'));?>" class="waves-effect waves-cyan"><i class="mdi-editor-insert-invitation"></i> Visitors In</a>
            </li>
			<li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-view-carousel"></i> Reports</a>
                        <div class="collapsible-body">
                            <ul>
							    <li><a href="<?php echo $this->Url->build(array('controller'=>'Reports','action'=>'visitorsReport')); ?>">Visitors List</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
        </aside>
      <!-- END LEFT SIDEBAR NAV-->

      <!-- //////////////////////////////////////////////////////////////////////////// -->

      



  <!-- //////////////////////////////////////////////////////////////////////////// -->

  
  <!-- END FOOTER -->



    <!-- ================================================
    Scripts
    ================================================ -->
    
    <!-- jQuery Library -->
	<?php echo $this->Html->script('plugins/jquery-1.11.2.min');?>
    <!--materialize js-->
	<?php echo $this->Html->script('materialize.min');?>
    <!--prism
    <script type="text/javascript" src="js/prism/prism.js"></script>-->
    <!--scrollbar-->
	<?php echo $this->Html->script('plugins/perfect-scrollbar/perfect-scrollbar.min');?>
    <!-- chartist -->
	<?php /*echo $this->Html->script('plugins/chartist-js/chartist.min');*/?>
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
	<?php echo $this->Html->script('plugins.min');?>
    <!--custom-script.js - Add your own theme custom JS-->
	<?php echo $this->Html->script('custom-script');?>
	
	<?php echo $this->Html->script('jquery.dataTables.min');?>
    
</body>

</html>
<?php }?>	
	

    <?= $this->Flash->render() ?>

        <?= $this->fetch('content') ?>

		
	<style>
		.tempcolor{
			color:#00BCD4;
			font-weight:bold;
		}
	</style>
