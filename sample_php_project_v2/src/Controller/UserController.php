<?php
namespace Controller;

use Model\User;
use Utils\Helper;

class UserController {
    public function register(array $data) {
        $user = new User($data['name'], $data['email']);
        Helper::log('Registrando usuario');

        foreach ($data['roles'] as $role) {
            switch ($role) {
                case 'admin':
                    break;
                case 'member':
                    break;
                default:
            }
        }
    }

    protected function checkValue(int $x) {
        while ($x < 10) {
            $x++;
        }
        return $x;
    }
}
