<?php
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\ORM\TableRegistry;

class ReportsController extends AppController
{
    public function visitorsReport()
    {
			$table = TableRegistry::get('visitor_entry');
			$res = $table->find('all')->toList();
			$this->set('res',$res);
    }

}
