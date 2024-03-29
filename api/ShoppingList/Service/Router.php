<?php
namespace ShoppingList\Service;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Silex\Application;

/**
 *
 * @author Sebastian Häni <haeni.sebastian@gmail.com>
 */
class Router
{

    /**
     * Set up routes of the API.
     *
     * @param \Silex\Application $app            
     */
    public function constructRoutes(\Silex\Application $app)
    {
        // API documentation
        $app->get('/', 'ShoppingList\\Router::redirectToDev');
        
        // Home
        $app->get('/v1/', 'ShoppingList\\Controller\\HomeController::info');
        
        // Product
        // TODO
        
        // Statistics
        // TODO
        
        // Transaction
        // TODO
        
        // User
        $app->post('/v1/user/register', 'ShoppingList\\Controller\\UserController::register');
        $app->post('/v1/user/login', 'ShoppingList\\Controller\\UserController::login');
        $app->get('/v1/user/logout', 'ShoppingList\\Controller\\UserController::logout');
        $app->get('/v1/user/isLoggedIn', 'ShoppingList\\Controller\\UserController::isLoggedIn');
        $app->put('/v1/user/password', 'ShoppingList\\Controller\\UserController::changePassword');
    }

    /**
     * Redirect requests to the api without any params to the API documentation paeg.
     *
     * @param Request $request            
     * @param Application $app            
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function redirectToDev(Request $request, Application $app)
    {
        return $app->redirect($app['config']['site_url'] . 'developers');
    }
}