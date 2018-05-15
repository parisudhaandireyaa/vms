<?php
/**
 * Copyright (c) 2016.
 * Author  KGISL - IAS
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Licensed under The MIT License
 * Redistributions of files must strictly Prohibited.
 * Copyright Copyright (c) KGISL. (http://www.kgisl.com)
 * link http://ias.kgisl.com KGISL IAS - Unit of KGISL's Project
 */

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Datasource\ConnectionManager;
use Cake\ORM\TableRegistry;
use Cake\Mailer\Email;

class CustomComponent extends Component
{
    public $components = ['Custom'];
    
	public function insertUpdate($table,$data)
	{
		$articles = TableRegistry::get($table);
		$entity = $articles->newEntity($data, ['validate' => false]);
		$ret = $articles->save($entity);
		$status = "fail";
		if(isset($ret['id'])){	
			$status = "success";
		}
		return $status;
	}

	function sendMail($to,$sub,$content,$sub){

    }
	
}
