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


if(defined('ORG_ID')) $route['default_controller'] = "product";
else $route['default_controller'] = "landing";
$route['404_override'] = '';

// custom routes
$route['(:num)'] = 'product/view/$1';
$route['(:num)/(:any)'] = 'product/view/$1';
$route['product/(:num)'] = 'product/view/$1';
$route['produto/(:num)'] = 'product/view/$1';
$route['vitrine'] = 'product';
$route['vitrineIframe'] = 'product/vitrineIframe';
$route['products'] = 'product/manage';
$route['produtos'] = 'product/manage';

$route['mail/(:num)'] = 'mail/read/$1';

$route['orcamento'] = 'budget';
$route['budgetIframe'] = 'budget/budgetIframe';

$route['resetPassword'] = 'user/resetPassword';
$route['resetarSenha'] = 'user/resetPassword';

$route['changePassword'] = 'user/changePassword';
$route['alterarSenha'] = 'user/changePassword';

$route['cotacao'] = 'currency';
$route['currencyIframe'] = 'currency/currencyIframe';

$route['interests'] = 'user/interests';
$route['interesses'] = 'user/interests';
$route['proposals'] = 'user/proposals';
$route['propostas'] = 'user/proposals';

$route['profile'] = 'user/profile';
$route['perfil'] = 'user/profile';

$route['login'] = 'user/login';
$route['entrar'] = 'user/login';

$route['logout'] = 'user/logout';
$route['sair'] = 'user/logout';

$route['sobre'] = 'about';

$route['contato'] = 'contact';

$route['colaborador'] = 'collaborator';

$route['signup'] = 'user/signup';
$route['cadastro'] = 'user/signup';

$route['fornecedor'] = 'supplier';

$route['cliente'] = 'customer';

$route['customer/(:num)'] = 'customer/view/$1';
$route['customer/(:num)/(:any)'] = 'customer/view/$1';
$route['cliente/(:num)'] = 'customer/view/$1';
$route['cliente/(:num)/(:any)'] = 'customer/view/$1';
// tivemos que criar o controller como privacy pois estava dando erro em produção com privacypolicy
// depois criamos o alias pra rota privacypolicy
$route['privacypolicy'] = 'privacy';
$route['politicadeprivacidade'] = 'privacy';

$route['termosdeuso'] = 'termsofuse';

$route['blog/editar/(:any)'] = 'blog/edit/$1';
$route['blog/edit/(:any)'] = 'blog/edit/$1';
$route['blog/escrever'] = 'blog/write';
$route['blog/write'] = 'blog/write';
$route['blog/artigos'] = 'blog/posts';
$route['blog/posts'] = 'blog/posts';
$route['blog/drop'] = 'blog/drop';
$route['blog/(:any)'] = 'blog/view/$1';


$route['agency/configuracoes'] = 'agency/settings';
$route['pagamento/conf'] = 'payment/conf';
$route['tema'] = 'theme';

/* End of file routes.php */
/* Location: ./application/config/routes.php */