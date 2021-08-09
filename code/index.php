<?php 
    require __DIR__ . '/vendor/autoload.php';
    #use Symfony\Component\Routing\Route;
    #use Symfony\Component\Routing\RouteCollection;
    use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;
    $routes = new RoutingConfigurator();
    //$routes->add('hello', new Route('/hello/{name}', ['name' => 'World']));
    //$routes->add('bye', new Route('/bye'));
    if (is_file($path = \dirname(__DIR__).'/config/routes.php')) {
        (require $path)($routes->withPath($path), $this);
    }else{
        echo "Error loading routes";
    }

?>
