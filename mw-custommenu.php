<?php
/*Plugin Name:millionwatts-customadminmenu
Author:Amarjeet
Version:2.0
*/
include"custmenufunc.php";
add_action('admin_menu', 'mw_custommenu');
function mw_custommenu()
{
add_options_page('menu setting', 'mw-customemenu', 'manage_options', 'mw-custmenu', 'my_menu');
}
//////////////////////////////////function to  change  admin panel menu layout//////////////
$bodybgcolor=trim(mysql_escape_string($_REQUEST['bodybgcolor']));
$menubgcolor=trim(mysql_escape_string($_REQUEST['menubgcolor']));
$admnmenucolor=trim(mysql_escape_string($_REQUEST['admnmenucolor'])); 
$menulistbg=trim(mysql_escape_string($_REQUEST['menulistbg']));
$adlogo=trim(mysql_escape_string($_REQUEST['adlogo']));   
$menulogo=trim(mysql_escape_string($_REQUEST['menulogo']));       
$menufont=trim(mysql_escape_string($_REQUEST['menufont'])); 
// on backend area
add_action('admin_head','fb_move_admin_bar');
// on frontend area
add_action('wp_head','fb_move_admin_bar');
	if($_REQUEST['updateopt'])  {
	update_option("bdbgcolor",$bodybgcolor);	
	update_option("menubgcolor",$menubgcolor);		
	update_option("adminmenucolor",$admnmenucolor);		
	update_option("adminmenufontcolor",$menufont);	
	update_option("menulistbg",$menulistbg);	
	update_option("adminlogo",$adlogo);	
	update_option("menulogourl",$menulogo);	
	echo "<div class='updated'><p>Options update</p></div>";
} 
?>