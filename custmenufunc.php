<?php
function my_menu()
{
 	echo '<script type="text/javascript" src="' .plugins_url( 'colorpic/jscolor.js', __FILE__ ). '" ></script>';
	echo "<h2 style='padding-left:20px;'>Manage Your Admin menu layout.</h2>";
	?>
	<form method="post" name="cmfrm" id="cmfrm">
	<table><tbody>
	<tr><td>Write your complete admin menu logo URL:</td><td><input type='text' name='adlogo' style='width:400px;' value='<?php echo get_option('adminlogo');?>'></td></tr>
	<!-- <tr><td>Write Your menu log complete URL:</td><td><input type='text' name='menulogo' value='<?php //echo get_option('menulogourl');?>'  style='width:400px;'></td></tr> -->
	<tr><td>Choose body background color:</td><td><input type='text' name='bodybgcolor' class='color' value='<?php echo get_option('bdbgcolor')?>' ></td></tr>
	<tr><td>Choose Admin menubar background color:</td><td><input type='text' name='admnmenucolor' class='color'  value='<?php echo get_option('adminmenucolor')?>' ></td></tr>
	<tr><td>Choose Admin menu font color:</td><td><input type='text' name='menufont' class='color'  value='<?php echo get_option('adminmenufontcolor')?>'></td></tr>
	<tr><td>Choose menu Dashboard background color:</td><td><input type='text' name='menubgcolor' class='color'  value='<?php echo get_option('menubgcolor')?>'></td></tr>
	<tr><td>Choose menu list background color:</td><td><input type='text' name='menulistbg' class='color'  value='<?php echo get_option('menulistbg')?>'></td></tr>
	
	<tr><td colspan='2'>&nbsp;</td></tr>
	<tr><td colspan='2' align='center'><input type='submit' name='updateopt' value='Update' class='button-secondary'></td></tr>
	</tbody></table></form>
<?php
}
function fb_move_admin_bar() {
 $siteurl=site_url();
   ?>
    <style type="text/css">
	  #wpwrap {
	font-family: sans-serif;
	font-size: 12px;
	line-height: 1.4em;
	background:<?php echo get_option('bdbgcolor');?>;
	}
    #wpadminbar {  
		 background:black;
		 color:green;
    }
    
	#adminmenuwrap {
	background-color:<?php echo get_option('menubgcolor');?>;
	}
	#adminmenu li.wp-menu-open {
		border-width: 0 0 1px;
		}
		
		#adminmenu li.wp-has-current-submenu a.wp-has-current-submenu, #adminmenu li.current a.menu-top, .folded #adminmenu li.wp-has-current-submenu, .folded #adminmenu li.current.menu-top, #adminmenu .wp-menu-arrow, #adminmenu .wp-has-current-submenu .wp-submenu .wp-submenu-head {
		background-image:-webkit-gradient(linear,left bottom,left top,from(#6D6D6D),to(<?php echo get_option('menulistbg');?>));
		}
		#adminmenu .wp-menu-arrow div {		 
		background-image:-webkit-gradient(linear,left bottom,left top,from(#6D6D6D),to(<?php echo get_option('menulistbg');?>));      
		
		}
		
		.icon16.icon-dashboard, #adminmenu .menu-icon-dashboard div.wp-menu-image {
		 background: transparent url("<?php echo $siteurl;?>/wp-content/plugins/mw-custommenu/images/application-split-tile.png") no-repeat scroll 8px;
		
		}
		#wp-admin-bar-wp-logo .ab-item .ab-icon {
		
		background: url("<?php echo get_option('adminlogo');?>") no-repeat scroll 5px;
		width:50px;		
				}
		#wpadminbar.nojs #wp-admin-bar-wp-logo:hover .ab-item .ab-icon, #wpadminbar #wp-admin-bar-wp-logo.hover .ab-item .ab-icon {
		background-position: 0 -4px;
		}
		body, #wpbody, .form-table .pre, .ui-autocomplete li a {	
			background-color:<?php echo get_option('bdbgcolor');?>;
			}
			.widefat{
			border-spacing: 0;
			width: 100%;
			clear: both;
			margin: 0;
			background-color:#C7E2E2;                
			}
		.alternate, .alt {
		background-color:#FFEEDD;
		}
		#adminmenu .wp-submenu-wrap, #adminmenu .wp-submenu ul {
		background:#FFEAFF;
		}
		#wpadminbar .quicklinks ul li  a, #wpadminbar .quicklinks  ul  li  .ab-empty-item,#wpadminbar .ab-label{
		border-right: 1px solid 
		#333;
		color:<?php echo get_option('adminmenufontcolor')?>;
		}
	 </style>
<?php
}
?>