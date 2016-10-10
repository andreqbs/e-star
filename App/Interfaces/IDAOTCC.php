<?php 

namespace App\Iface;

interface IDAOTCC{
    // Erro , método não pode conter conteudo
    public function create($Tcc);

    public function update($Tcc, $idTcc);
    
    public function delete($idTcc);

    public function find($idTcc);
}