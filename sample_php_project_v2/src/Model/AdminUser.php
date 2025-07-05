<?php
namespace Model;

class AdminUser extends User {
    public $level;

    public function setLevel(int $l) {
        $this->level = $l;
    }
}
