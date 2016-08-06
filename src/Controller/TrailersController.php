<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Trailers Controller
 *
 * @property \App\Model\Table\TrailersTable $Trailers
 */
class TrailersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $trailers = $this->paginate($this->Trailers);

        $this->set(compact('trailers'));
        $this->set('_serialize', ['trailers']);
    }

    /**
     * View method
     *
     * @param string|null $id Trailer id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $trailer = $this->Trailers->get($id, [
            'contain' => ['Peliculas']
        ]);

        $this->set('trailer', $trailer);
        $this->set('_serialize', ['trailer']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $trailer = $this->Trailers->newEntity();
        if ($this->request->is('post')) {
            $trailer = $this->Trailers->patchEntity($trailer, $this->request->data);
            if ($this->Trailers->save($trailer)) {
                $this->Flash->success(__('The trailer has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The trailer could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('trailer'));
        $this->set('_serialize', ['trailer']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Trailer id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $trailer = $this->Trailers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $trailer = $this->Trailers->patchEntity($trailer, $this->request->data);
            if ($this->Trailers->save($trailer)) {
                $this->Flash->success(__('The trailer has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The trailer could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('trailer'));
        $this->set('_serialize', ['trailer']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Trailer id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $trailer = $this->Trailers->get($id);
        if ($this->Trailers->delete($trailer)) {
            $this->Flash->success(__('The trailer has been deleted.'));
        } else {
            $this->Flash->error(__('The trailer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
