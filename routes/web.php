<?php

$router->get('api/usuarios', 'UsuariosController@index');
$router->get('api/usuarios/{id}', 'UsuariosController@find');
$router->post('api/usuarios', 'UsuariosController@create');
$router->put('api/usuarios/{id}', 'UsuariosController@update');
$router->delete('api/usuarios/{id}', 'UsuariosController@delete');

$router->get('api/eventos', 'EventosController@index');
$router->get('api/eventos/{id}', 'EventosController@find');
$router->post('api/eventos', 'EventosController@create');
$router->put('api/eventos/{id}', 'EventosController@update');
$router->delete('api/eventos/{id}', 'EventosController@delete');

$router->get('api/participante', 'ParticipanteController@index');
$router->get('api/participante/{id}', 'ParticipanteController@find');
$router->post('api/participante', 'ParticipanteController@create');
$router->put('api/participante/{id}', 'ParticipanteController@update');
$router->delete('api/participante/{id}', 'ParticipanteController@delete');