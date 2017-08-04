<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "welcome";
$route['404_override'] = 'Notfound';
$route['^home/trang-chu$'] = '/home/index';
$route['^home/tin-tuc$'] = '/home/index2';
$route['baiviet/(:any)'] = "home/baiviet"  ;
$route['home/tin-tuc/(:any)'] = "home/index2/$1";
$route['admin/thu-muc-con/(:any)'] = "admin/loadSubCatalogy/$1";
$route['^home/an-toan-thuc-pham$'] = '/home/antoanthucpham';
$route['^home/cong-bo-thuc-pham$'] = '/home/congbothucpham';
$route['^home/van-ban-phap-luat$'] = '/home/vanbanphapluat';
$route['^home/dich-vu-khac$'] = '/home/dichvukhac';
$route['home/tin-tuc-danh-muc/(:any)'] = "home/tin_tuc_theo_danh_muc/$1";
$route['^home/giay-phep-lao-dong$'] = '/home/giayphep';
$route['home/giay-phep/(:any)'] = 'home/giayphep';
$route['^home/giay-phep$'] = 'home/giayphep/$1';




/* End of file routes.php */
/* Location: ./application/config/routes.php */