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

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link https://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class UsersController extends AppController
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
	 
	 public function index($logdin = true)
    {
        $post = $this->request->getData();
        $error = false;
		
        if (!empty($post)) {
            $joins = array(
                'roles' => array
                (
                    'table' => 'roles',
                    'type' => 'left',
                    'conditions' => 'roles.id = users.role_id'
                )
            );

            $qryRes = $this->Users->find('all')->join($joins)->select(["users.id", "users.display_name", "roles.permissions", "roles.role"])->where(['users.user_name' => $post['user_name'], 'password' => md5($post['password']), 'users.status::text' => 'active'])->enableHydration(false);
			
            $data = $qryRes->toArray();
			

            if (!empty($data)) {
				//if (!empty($data) && !empty($data[0]['roles']['permissions'])) {
                $session = $this->request->getSession();
                $session->write('UserData.login.islogedin', true);
                $session->write('UserData.login.user_id', $data[0]['users']['id']);
                $session->write('UserData.login.user_role', $data[0]['roles']['role']);
                $session->write('UserData.login.permission', $data[0]['roles']['permissions']);
                $session->write('UserData.login.user_name', $post['user_name']);
                $session->write('UserData.login.display_name', $data[0]['users']['display_name']);
                $session->write('UserData.login.isonline', 'true');
				

                /* $tried = $this->session->read('UserData.login.tried_to_land');

				if (isset($tried) && !empty($tried))
				{
					if(strpos($tried, 'Custom/error404') !== false)
					{
						$has_tried = false;
                    }
					else $has_tried = true;
				}
				else $has_tried = true; */
                /* if (!empty($has_tried))
				{
                    $this->redirect($tried);
                } else
				{
                    $this->redToAccess();
                } */
				return $this->redirect(array("controller"=>"Entry","action"=>"index"));
				exit;
                $error = false;
            } else {
                $error = true;
                //$this->redirect(array("controller"=>"users","action"=>"index/false"));
            }
        }

        $this->set("login_error", $error);
    }
	 
	 
    public function login()
    {
		$session = $this->request->getSession();
		if($session->read('UserData.login.islogedin')){
			return $this->redirect(array("controller"=>"Entry","action"=>"index"));
		}
		else{
			
		}	
    }
	
	public function logout()
    {
		$session = $this->request->getSession();
        $session->destroy("UserData");

        $this->redirect(array("controller" => "Users", "action" => "login"));
    }
}
