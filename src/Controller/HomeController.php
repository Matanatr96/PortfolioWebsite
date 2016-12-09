<?php
/**
 * Created by PhpStorm.
 * User: Anush
 * Date: 9/21/2016
 * Time: 9:41 PM
 */

namespace App\Controller;

use App\Controller\AppController;
use App\Model\Entity\Log;
use Cake\Controller\Controller;
use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\ORM\TableRegistry;

class HomeController extends AppController  {
    public function index() {
        $session = $this->request->session();
        $this->set('name', 'name');
    }

    public function aboutMe() {
    }

    public function submit() {
    }

    public function printr($printout) {
        echo "<pre>";
        print_r($printout);
        exit;
    }

    public function saveLog($name, $age) {
        $logsTable = TableRegistry::get('Logs');
        $log = new Log();
        $log -> name = $name;
        $log -> age = $age;
        $logsTable -> save($log);
        return $log -> id;
    }
}