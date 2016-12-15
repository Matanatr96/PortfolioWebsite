<?php

/**
 * Created by PhpStorm.
 * User: Anush
 * Date: 10/31/2016
 * Time: 8:37 PM
 */
namespace App\Model\Table;
use Cake\ORM\Table;

class Logs extends Table {
    public function initialize(array $config) {
        $this -> table('logs');
        $this -> primaryKey('id');
    }
}