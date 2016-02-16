<?php
/**
 * Created by PhpStorm.
 * User: w8
 * Date: 16/02/2016
 * Time: 14:10
 */


require_once __DIR__."/../vendor/autoload.php";

$app = new Silex\Application();

$app['debug'] = true;

$app->register(new Silex\Provider\TwigServiceProvider(), array(

    'twig.path'=>__DIR__."/../views"
));

$app->get("/ola/{nome}",function($nome) use ($app){
    return $app['twig']->render('ola.twig',array('nome'=>$nome));
});

$app->get("/register",function() use($app){
    return $app['twig']->render('register.twig');
});


$app->run();