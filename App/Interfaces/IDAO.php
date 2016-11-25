<?php 

namespace App\Iface;

interface IDAO{
    // Erro , método não pode conter conteudo
    public function create($object);

    public function update($object, $idObject);
    
    public function delete($idObject);

    public function find($idObject);

	public function list();

	public function listBy($type, $value);
}