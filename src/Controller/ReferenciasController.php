<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Referencias Controller
 *
 * @property \App\Model\Table\ReferenciasTable $Referencias
 */
class ReferenciasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $referencias = $this->paginate($this->Referencias);

        $this->set(compact('referencias'));
        $this->set('_serialize', ['referencias']);
    }

    /**
     * View method
     *
     * @param string|null $id Referencia id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $referencia = $this->Referencias->get($id, [
            'contain' => ['Peliculas', 'Cricticas']
        ]);

        $this->set('referencia', $referencia);
        $this->set('_serialize', ['referencia']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $referencia = $this->Referencias->newEntity();
        if ($this->request->is('post')) {
            $referencia = $this->Referencias->patchEntity($referencia, $this->request->data);
            if ($this->Referencias->save($referencia)) {
                $this->Flash->success(__('The referencia has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The referencia could not be saved. Please, try again.'));
            }
        }
        $peliculas = $this->Referencias->Peliculas->find('list', ['limit' => 200]);
        $cricticas = $this->Referencias->Cricticas->find('list', ['limit' => 200]);
        $this->set(compact('referencia', 'peliculas', 'cricticas'));
        $this->set('_serialize', ['referencia']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Referencia id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $referencia = $this->Referencias->get($id, [
            'contain' => ['Peliculas', 'Cricticas']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $referencia = $this->Referencias->patchEntity($referencia, $this->request->data);
            if ($this->Referencias->save($referencia)) {
                $this->Flash->success(__('The referencia has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The referencia could not be saved. Please, try again.'));
            }
        }
        $peliculas = $this->Referencias->Peliculas->find('list', ['limit' => 200]);
        $cricticas = $this->Referencias->Cricticas->find('list', ['limit' => 200]);
        $this->set(compact('referencia', 'peliculas', 'cricticas'));
        $this->set('_serialize', ['referencia']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Referencia id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $referencia = $this->Referencias->get($id);
        if ($this->Referencias->delete($referencia)) {
            $this->Flash->success(__('The referencia has been deleted.'));
        } else {
            $this->Flash->error(__('The referencia could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
