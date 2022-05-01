<?php

namespace App\Entitys;

use App\DB\Database;
use PDO;

class Vaga
{

    public $id;
    public $titulo;
    public $descricao;
    public $ativo;
    public $data;

    public function cadastrar()
    {
        $this->data = date('Y-m-d H:i:s');
        
        $obDatabase = new Database('vagas');
        $this->id = $obDatabase->insert([
                                            "titulo" => $this->titulo,
                                            "descricao" => $this->descricao,
                                            "ativo" => $this->ativo,
                                            "data" => $this->data
                                        ]);
        
        return true;
    }
    
    public function atualizar()
    {
        return (new Database('vagas'))->update('id = '.$this->id,[
                                                                    "titulo" => $this->titulo,
                                                                    "descricao" => $this->descricao,
                                                                    "ativo" => $this->ativo
                                                                ]);
        return true;
    }

    public function excluir()
    {
        return (new Database('vagas'))->delete('id = '.$this->id);
    }
    
    public static function getVagas($where = null, $order = null, $limit = null)
    {
        return (new Database('vagas'))->select($where,$order,$limit)
                                      ->fetchAll(PDO::FETCH_CLASS);
    }

    public static function getSingleVaga($id)
    {
        return (new Database('vagas'))->select('id = '.$id)
                                      ->fetchObject(self::class);
    }
}