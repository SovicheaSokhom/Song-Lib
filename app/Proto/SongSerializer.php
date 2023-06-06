<?php
namespace App\Proto;

use Mypackage\SongProto;

class SongSerializer extends SongProto
{
    public function fromArray(array $data)
    {
        $this->setId($data['id']);
        $this->setName($data['name']);
        $this->setSinger($data['singer']);
    }

    public function toArray()
    {
        return [
            'id' => $this->getId(),
            'name' => $this->getName(),
            'singer' => $this->getSinger(),
        ];
    }
}