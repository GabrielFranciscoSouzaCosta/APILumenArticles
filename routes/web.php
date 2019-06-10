<?php

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function($router)
{
    $router->get('articles', 'ArticleController@showAllArticles');
    $router->get('articles/{id}', 'ArticleController@showOneArticle');
    $router->post('articles/', 'ArticleController@create');
    $router->put('articles/{id}', 'ArticleController@update');
    $router->delete('articles/{id}', 'ArticleController@delete');

});
