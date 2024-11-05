<?php
// Fitxer per gestionar les rutes
namespace Core;

use RuntimeException;

class Route
{
    // creem array en les rutes
    protected $routes = [];

    // creem funcio per afegir rutes a l'array
    public function register($route)
    {
        $this->routes[] = $route;
    }

    // funcio per rebre un array de rutes i assignar a la propietat routes
    public function define($route)
    {
        $this->routes = $route;
        return $this;
    }

    // funcio per redirigir la url solicitada a un controlador
    public function redirect($uri)
    {
        // partim la url
        $parts = explode('/', trim($uri, '/'));
        // indiquem ruta del controlador
        $controller = 'App\Controllers\FilmController';
        $clientController = 'App\Controllers\ClientController';

        // Nova ruta per la landing page
        if ($uri === '/landing') {
            return view('landing');
        }

        if ($uri === '/') {
            return view("index");
        }

        // Inici
        if ($uri === '/films') {
            require '../App/Controllers/FilmController.php';
            // creem nova instancia
            $controllerInstance = new $controller();
            return $controllerInstance->index();
        }

        // create
        if ($parts[0] === 'create') {
            require '../App/Controllers/FilmController.php';
            // creem nova instancia
            $controllerInstance = new $controller();
            return $controllerInstance->create();
        }

        // Utilitzant POST guardem
        if ($parts[0] === 'store' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/FilmController.php';
            // creem nova instancia
            $controllerInstance = new $controller();
            // creem variable per agafar les dades de la petició post
            $data = $_POST;
            return $controllerInstance->store($data);
        }

        // delete en GET  mirem que sigue delete en la id
        if ($parts[0] === 'delete' && $parts[1]) {
            require '../App/Controllers/FilmController.php';
            // creem nova instancia
            $controllerInstance = new $controller();
            return $controllerInstance->delete($parts[1]);
        }

        // destroy en POST
        if ($parts[0] === 'destroy' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/FilmController.php';
            // creem nova instancia
            $controllerInstance = new $controller();
            // comprovem si pasen id
            if (!isset($_POST['id'])) {
                throw new RuntimeException('No id provided');
            }
            return $controllerInstance->destroy($_POST['id']);
        }

        // edit en GET
        if ($parts[0] === 'edit' && $parts[1]) {
            require '../App/Controllers/FilmController.php';
            // creem nova instancia
            $controllerInstance = new $controller();
            return $controllerInstance->edit($parts[1]);
        }

        // Actualitzar en POST
        if ($parts[0] === 'update' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/FilmController.php';
            // creem nova instancia
            $controllerInstance = new $controller();
            // creem variable per agafar les dades de la petició post
            $data = $_POST;
            // comprovem si pasen id
            if (!isset($_POST['id'])) {
                throw new RuntimeException('No id provided');
            }
            return $controllerInstance->update($_POST['id'], $data);
        }

        if ($uri === '/clients') {
            require '../App/Controllers/ClientController.php';
            // creem nova instancia
            $controllerInstance = new $clientController();
            return $controllerInstance->index();
        }

        // create
        if ($parts[0] === 'client-create') {
            require '../App/Controllers/ClientController.php';
            // creem nova instancia
            $controllerInstance = new $clientController();
            return $controllerInstance->create();
        }

        // Utilitzant POST guardem
        if ($parts[0] === 'client-store' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/ClientController.php';
            // creem nova instancia
            $controllerInstance = new $clientController();
            // creem variable per agafar les dades de la petició post
            $data = $_POST;
            return $controllerInstance->store($data);
        }

        // delete en GET  mirem que sigue delete en la id
        if ($parts[0] === 'client-delete' && $parts[1]) {
            require '../App/Controllers/ClientController.php';
            // creem nova instancia
            $controllerInstance = new $clientController();
            return $controllerInstance->delete($parts[1]);
        }

        // destroy en POST
        if ($parts[0] === 'client-destroy' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/ClientController.php';
            // creem nova instancia
            $controllerInstance = new $clientController();
            // comprovem si pasen id
            if (!isset($_POST['id'])) {
                throw new RuntimeException('No id provided');
            }
            return $controllerInstance->destroy($_POST['id']);
        }

        // edit en GET
        if ($parts[0] === 'client-edit' && $parts[1]) {
            require '../App/Controllers/ClientController.php';
            // creem nova instancia
            $controllerInstance = new $clientController();
            return $controllerInstance->edit($parts[1]);
        }

        // Actualitzar en POST
        if ($parts[0] === 'client-update' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/ClientController.php';
            // creem nova instancia
            $controllerInstance = new $clientController();
            // creem variable per agafar les dades de la petició post
            $data = $_POST;
            // comprovem si pasen id
            if (!isset($_POST['id'])) {
                throw new RuntimeException('No id provided');
            }
            return $controllerInstance->update($_POST['id'], $data);
        }

        // si no es cap dels anteriors retornem la vista 404
        return require '../resources/views/errors/404.blade.php';
    }
}