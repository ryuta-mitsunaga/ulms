<?php

namespace App\Domain\Entities;

class StudentEntity
{
    public function __construct(
        private int $id,
        private string $name_sei,
        private string $name_mei,
        private string $email,
    ) {}

    public function getId(): int
    {
        return $this->id;
    }

    public function getNameSei(): string
    {
        return $this->name_sei;
    }

    public function getNameMei(): string
    {
        return $this->name_mei;
    }

    public function getEmail(): string
    {
        return $this->email;
    }


    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'nameSei' => $this->name_sei,
            'nameMei' => $this->name_mei,
            'email' => $this->email,

        ];
    }
}
