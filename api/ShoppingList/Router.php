<?php
namespace ShoppingList;

/**
 *
 * @author Sebastian H�ni <haeni.sebastian@gmail.com>
 */
class Router
{

    public function constructRoutes(\Silex\Application $app)
    {
        $app->get('v1/', 'ShoppingList\\Entity\\Home::info');
    }
}