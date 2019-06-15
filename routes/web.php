<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('login');
});

//oute::view('/login', "auth.login")->name('login');
Route::get('/login', 'Auth\LoginController@isLogged')->name('login');
Route::post('/authentication', 'Auth\LoginController@authentication')->name('authentication');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::group( [ 'middleware' => 'auth'], function()
{
    //Equipamentos
    Route::view('/home', 'home')->name('home');   
    Route::view('/equipamentos', 'equipaments.register')->name('equipaments.register');
    Route::post('/equipamentos/cadastro', 'EquipamentController@create')->name('equipaments.cadastrar');
    Route::get('/equipamentos/index', 'EquipamentController@index')->name('equipaments.index');


});

//Medicos e Pacientes
Route::get('/Medicos', ['uses'=>'PeopleController@indexMedicos', 'as' => 'people.indexMedicos']);
Route::get('/Pacientes', ['uses'=>'PeopleController@indexPacientes', 'as' => 'people.indexPacientes']);


//Especialidade
Route::Post('/people/add/specialty', ['uses'=>'specialtyController@save', 'as' => 'specialty.save']);

//Usuários
Route::Post('/people/add/user', ['uses'=>'UserController@save', 'as' => 'user.save']);

//Routes people
Route::get('/people', ['uses'=>'PeopleController@index', 'as' => 'people.index']);
Route::get('/people/menu', ['uses'=>'PeopleController@menu', 'as' => 'people.menu']);
Route::get('/people/add', ['uses'=>'PeopleController@add', 'as' => 'people.add']);
Route::post('/people/save', ['uses'=>'PeopleController@save', 'as' => 'people.save']);
Route::get('/people/edit/{id}', ['uses'=>'PeopleController@edit', 'as' => 'people.edit']);
Route::put('/people/update/{id}', ['uses'=>'PeopleController@update', 'as' => 'people.update']);
Route::get('/people/delete/{id}', ['uses'=>'PeopleController@delete', 'as' => 'people.delete']);


    
Route::get('/people/detail/{id}', ['uses'=>'PeopleController@detail', 'as' => 'people.detail']);
Route::get('/telefone/add/{id}', ['uses'=>'TelefoneController@add', 'as' => 'telefone.add']);
Route::post('/telefone/save/{id}', ['uses'=>'TelefoneController@save', 'as' => 'telefone.save']);

Route::get('/telefone/edit/{id}', ['uses'=>'TelefoneController@edit', 'as' => 'telefone.edit']);
Route::put('/telefone/update/{id}', ['uses'=>'TelefoneController@update', 'as' => 'telefone.update']);
Route::get('/telefone/delete/{id}', ['uses'=>'TelefoneController@delete', 'as' => 'telefone.delete']);


Route::get('/agenda', 'EventController@index')->name('events.index');
Route::get('/agendamento', 'EventController@index')->name('events.agenda');

Route::post('/agenda', 'EventController@addEvent')->name('events.agenda');