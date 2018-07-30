<?php
// src/Controller/ArticlesController.php

namespace App\Controller;

class UsersController extends AppController
{
	public function index()
	{
		$this->loadComponent('Paginator');
		$users = $this->Paginator->paginate($this->Users->find());
		$this->set(compact('users'));
	}
	public function view($email = null)
	{
		$article = $this->Users->findByEmail($email)->firstOrFail();
		$this->set(compact('user'));
	}
	public function add()
	{
		$user = $this->Users->newEntity();
		if ($this->request->is('post')) {
			$user = $this->Users->patchEntity($user, $this->request->getData());
			
			// Hardcoding the user_id is temporary, and will be removed later
			// when we build authentication out.
			$user->id = 1;
			
			if ($this->Users->save($user)) {
				$this->Flash->success(__('Your user has been added'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__("Your user can't be added"));
		}
		$this->set('user', $user);
	}
	public function edit($email)
	{
		$article = $this->Users->findByEmail($email)->firstOrFail();
		if ($this->request->is(['post', 'put'])) {
			$this->Users->patchEntity($user, $this->request->getData());
			if ($this->Users->save($user)) {
				$this->Flash->success(__('Your user is updated.'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('User can\'t be updated.'));
		}
		
		$this->set('user', $user);
	}
	public function delete($email)
	{
		$this->request->allowMethod(['post', 'delete']);
		
		$article = $this->Users->findByEmail($email)->firstOrFail();
		if ($this->Users->delete($user)) {
			$this->Flash->success(__('The user {0} has been deleted.', $user->email));
			return $this->redirect(['action' => 'index']);
		}
	}
}
?>
