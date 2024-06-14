<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/contatos', 'Home::contatos');
$routes->get('/sobre-nos', 'Home::sobre_nos');




// **Rotas para Ativos**
$routes->get('/ativos', 'Ativo::index');
$routes->get('/ativos/detalhes/(:num)', 'Ativo::detalhes/$1');
$routes->get('/ativos/novo', 'Ativo::novo');
$routes->post('/ativos/novo', 'Ativo::novo');
$routes->get('/ativos/editar/(:num)', 'Ativo::editar/$1');
$routes->post('/ativos/editar/(:num)', 'Ativo::editar/$1');
$routes->get('/ativos/excluir/(:num)', 'Ativo::excluir/$1');
$routes->post('/ativos/excluir/(:num)', 'Ativo::excluir/$1');


// **Rotas para Carteiras**
$routes->get('/carteiras', 'Carteira::index');
$routes->get('/carteiras/editar/(:num)', 'Carteira::editar/$1');
$routes->post('/carteiras/editar/(:num)', 'Carteira::editar/$1');
$routes->get('/carteiras/detalhes/(:num)', 'Carteira::detalhes/$1');


// **Rotas para Clientes**
$routes->get('/clientes', 'Cliente::index');
$routes->get('/clientes/novo', 'Cliente::novo');
$routes->post('/clientes/novo', 'Cliente::novo');
$routes->get('/clientes/editar/(:num)', 'Cliente::editar/$1');
$routes->post('/clientes/editar/(:num)', 'Cliente::editar/$1');
$routes->get('/clientes/excluir/(:num)', 'Cliente::excluir/$1');
$routes->post('/clientes/excluir/(:num)', 'Cliente::excluir/$1');
$routes->get('/clientes/detalhes/(:num)', 'Cliente::detalhes/$1');

// **Rotas para Corretores**
$routes->get('/corretores', 'Corretor::index');
$routes->get('/corretores/novo', 'Corretor::novo');
$routes->get('/corretores/editar/(:num)', 'Corretor::editar/$1');
$routes->get('/corretores/excluir/(:num)', 'Corretor::excluir/$1');
$routes->post('/corretores/novo', 'Corretor::novo');
$routes->post('/corretores/editar/(:num)', 'Corretor::editar/$1');
$routes->post('/corretores/excluir/(:num)', 'Corretor::excluir/$1');
$routes->get('/corretores/detalhes/(:num)', 'Corretor::detalhes/$1');


// **Rotas para Firmas**
$routes->get('/firmas', 'Firma::index');
$routes->get('/firmas/novo', 'Firma::novo');
$routes->get('/firmas/editar/(:num)', 'Firma::editar/$1');
$routes->get('/firmas/excluir/(:num)', 'Firma::excluir/$1');
$routes->post('/firmas/novo', 'Firma::novo');
$routes->post('/firmas/editar/(:num)', 'Firma::editar/$1');
$routes->post('/firmas/excluir/(:num)', 'Firma::excluir/$1');
$routes->get('/firmas/detalhes/(:num)', 'Firma::detalhes/$1');

// **Rotas para Operacoes**
$routes->get('/operacoes', 'Operacao::index');
$routes->get('/operacoes/novo', 'Operacao::novo');
$routes->post('/operacoes/novo', 'Operacao::novo');
$routes->get('/operacoes/detalhes/(:num)', 'Operacao::detalhes/$1');

// **Rotas para Usuario**
$routes->get('/usuarios', 'Usuario::index');
$routes->get('/usuarios/novo', 'Usuario::novo');
$routes->get('/usuarios/editar/(:num)', 'Usuario::editar/$1');
$routes->get('/usuarios/excluir/(:num)', 'Usuario::excluir/$1');
$routes->post('/usuarios/novo', 'Usuario::novo');
$routes->post('/usuarios/editar/(:num)', 'Usuario::editar/$1');
$routes->post('/usuarios/excluir/(:num)', 'Usuario::excluir/$1');
$routes->get('/usuarios/detalhes/(:num)', 'Usuario::detalhes/$1');

// **Rotas para Autenticacao**
$routes->get('/autenticacao/login', 'Autenticacao::login');
$routes->post('/autenticacao/autenticar', 'Autenticacao::autenticar');
$routes->get('/autenticacao/perfil', 'Autenticacao::perfil');
$routes->post('/autenticacao/perfil', 'Autenticacao::perfil');



