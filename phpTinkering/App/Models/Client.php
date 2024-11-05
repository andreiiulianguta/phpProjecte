<?php

namespace App\Models;

use Core\App;

class Client
{
    protected static $table = 'clients';

    //funcio per a que torne totes les pelis
    public static function getAll()
    {
        $db = App::get('database');
        $statement = $db->getConnection()->prepare('SELECT * FROM ' . self::$table);
        $statement->execute();
        return $statement->fetchAll();
    }

    //funcio per a buscar una peli
    public static function find($id)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('SELECT * FROM ' . self::$table . ' WHERE id = :id');
        $statement->execute(array('id' => $id));
        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    //funcio create
    public static function create($data)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('INSERT INTO '. static::$table . "(nombre, telefono, direccion, apellidos) VALUES (:nombre, :telefono, :direccion, :apellidos)");
        $statement->bindValue(':nombre', $data['nombre']);
        $statement->bindValue(':telefono', $data['telefono']);
        $statement->bindValue(':direccion', $data['direccion']);
        $statement->bindValue(':apellidos', $data['apellidos']);

        $statement->execute();
    }

    //funcio update
    public static function update($id, $data)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare("UPDATE ". static::$table . " SET nombre = :nombre, telefono = :telefono, direccion = :direccion, apellidos = :apellidos WHERE id = :id");
        $statement->bindValue(':id', $id);
        $statement->bindValue(':nombre', $data['nombre']);
        $statement->bindValue(':telefono', $data['telefono']);
        $statement->bindValue(':direccion', $data['direccion']);
        $statement->bindValue(':apellidos', $data['apellidos']);
        $statement->execute();
    }

    //funcio delete
    public static function delete($id)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('DELETE FROM '. static::$table . ' WHERE id = :id');
        $statement->bindValue(':id', $id);
        $statement->execute();
    }

}