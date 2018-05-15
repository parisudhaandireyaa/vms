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
class EntryController extends AppController
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
    public function index()
    {
	
        $this->render('entry');
    }
	
	public function visitorEntry(){
		$post = $this->request->getData();
        $visitor_type = TableRegistry::get('visitor_type');
        $visitor_type = $visitor_type->find('all')->toList();
        $this->set('visitor_type',$visitor_type);
		if(!empty($post)){
			$insId = $this->Custom->insertUpdate('Visitors',$post);
				if($insId=='success'){
					$this->redirect(["action"=>"visitorEntry"]);
				}
				else{
					$this->redirect(["action"=>"users/add"]);
				}
		}
		$this->render('entry');
		
	}
	
	function getData(){
        $visitor = TableRegistry::get('visitors');
        $ret = $visitor->find('all')->select(["id","visitor_name","company","purpose","visitor_type"]);//->toList();
        $data = [];
        if($ret->count()){
            $data = $ret->toList()[0];
        }
        print_r(json_encode($data));exit;
	}
}
