<?php

namespace App\Controllers;

use App\Models\Client;

class ClientController
{
    //funcio index
    public function index()
    {
        //obtenim totes les pelis
        $clients = Client::getAll();

        //pasem les pelis a la vista
        return view('clients/index', ['clients' => $clients]);
    }

    //funcio per anar a la vista create
    public function create()
    {
        return view('clients/create');
    }

    //funcio per guardar les dades i tornar a la vista principal
    public function store($data)
    {
        //cridem funcio create del model
        Client::create($data);
        //retornar a la vista principal
        header('location: /clients');
        exit;
    }

   //funcio per a la vista edit
    public function edit($id)
    {
        //si no ens passen la id fem redirect
        if ($id === null) {
            header('location: /clients');
            exit;
        }

        //busquem la peli
        $client = Client::find($id);

        //si no ens passen cap peli mostrar 404
        if (!$client) {
            require '../../resources/views/errors/404.blade.php';
            return;
        }

        //retornem la vista i li passem la peli indicada
        return view('clients/edit', ['client' => $client]);
    }

    //funcio update per a modificar la peli a la base de dades
    public function update($id, $data)
    {
        //modifiquem
        Client::update($id, $data);

        //retonem a la pàgina principal
        header('location: /clients');
        exit;
    }

    //funcio per anar a la vista delete
    public function delete($id)
    {
        //si no ens passen la id fem redirect
        if ($id === null) {
            header('location: /clients');
            exit;
        }

        //busquem la peli
        $client = Client::find($id);
        //retornem la vista en la peli
        return view('clients/delete', ['client' => $client]);

    }

    //funcio per eliminar la peli de la base de dades
    public function destroy($id)
    {
        //utilizem la funcio delete del model
        Client::delete($id);

        //retornar a la vista
        header('location: /clients');
    }


}