<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\ORM\TableRegistry;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link https://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class MastersController extends AppController
{

    /**
     * Displays a view
     *
     * @param array ...$path Path segments.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Network\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\Network\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */
    public function users($action='list')
    {
		if($action=="list"){
			$table = TableRegistry::get('Users');
			$res = $table->find('all')->toList();
			$this->set('res',$res);
		}
		else{
			$post = $this->request->getData();
			if(!empty($post)){
				$insId = $this->Custom->insertUpdate('Users',$post);
				if($insId=='success'){
					$this->redirect(["action"=>"users/list"]);
				}
				else{
					$this->redirect(["action"=>"users/add"]);
				}
			}
			$action = "add";
		}
		$this->set('action',$action);
    }

    public function visitorType($action='list')
    {
		if($action=="list"){
			$table = TableRegistry::get('visitor_type');
			$res = $table->find('all')->toList();
			$this->set('res',$res);
		}
		else{
			$post = $this->request->getData();
			if(!empty($post)){
                $insId = $this->Custom->insertUpdate('visitor_type',$post);
				if($insId=='success'){
					$this->redirect(["action"=>"visitor-type/list"]);
				}
				else{
					$this->redirect(["action"=>"visitor-type/add"]);
				}
			}
			$action = "add";
		}
		$this->set('action',$action);
    }

    public function roles($action='list')
    {
		if($action=="list"){
			$table = TableRegistry::get('roles');
			$res = $table->find('all')->toList();
			$this->set('res',$res);
		}
		else{
			$post = $this->request->getData();
			if(!empty($post)){
                $insId = $this->Custom->insertUpdate('roles',$post);
				if($insId=='success'){
					$this->redirect(["action"=>"roles/list"]);
				}
				else{
					$this->redirect(["action"=>"roles/add"]);
				}
			}
			$action = "add";
		}
		$this->set('action',$action);
    }
}
