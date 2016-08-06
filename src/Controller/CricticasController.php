<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cricticas Controller
 *
 * @property \App\Model\Table\CricticasTable $Cricticas
 */
class CricticasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Peliculas']
        ];
        $cricticas = $this->paginate($this->Cricticas);

        $this->set(compact('cricticas'));
        $this->set('_serialize', ['cricticas']);
    }

    /**
     * View method
     *
     * @param string|null $id Crictica id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $crictica = $this->Cricticas->get($id, [
            'contain' => ['Peliculas', 'Referencias']
        ]);

        $this->set('crictica', $crictica);
        $this->set('_serialize', ['crictica']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $crictica = $this->Cricticas->newEntity();
        if ($this->request->is('post')) {
            $crictica = $this->Cricticas->patchEntity($crictica, $this->request->data);
            if ($this->Cricticas->save($crictica)) {
                $this->Flash->success(__('The crictica has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The crictica could not be saved. Please, try again.'));
            }
        }
        $peliculas = $this->Cricticas->Peliculas->find('list', ['limit' => 200]);
        $referencias = $this->Cricticas->Referencias->find('list', ['limit' => 200]);
        $this->set(compact('crictica', 'peliculas', 'referencias'));
        $this->set('_serialize', ['crictica']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Crictica id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $crictica = $this->Cricticas->get($id, [
            'contain' => ['Referencias']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $crictica = $this->Cricticas->patchEntity($crictica, $this->request->data);
            if ($this->Cricticas->save($crictica)) {
                $this->Flash->success(__('The crictica has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The crictica could not be saved. Please, try again.'));
            }
        }
        $peliculas = $this->Cricticas->Peliculas->find('list', ['limit' => 200]);
        $referencias = $this->Cricticas->Referencias->find('list', ['limit' => 200]);
        $this->set(compact('crictica', 'peliculas', 'referencias'));
        $this->set('_serialize', ['crictica']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Crictica id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $crictica = $this->Cricticas->get($id);
        if ($this->Cricticas->delete($crictica)) {
            $this->Flash->success(__('The crictica has been deleted.'));
        } else {
            $this->Flash->error(__('The crictica could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
