<?php
namespace Model;

class User {
    public $name;
    protected $email;

    public function __construct(string $name, string $email) {
        $this->name = $name;
        $this->email = $email;
    }

    public function getName(): string {
        if ($this->name !== '') {
            return $this->name;
        } else {
            return 'Invitado';
        }
    }
}
