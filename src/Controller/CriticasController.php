<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cricticas Controller
 *
 * @property \App\Model\Table\CricticasTable $Cricticas
 */
class CriticasController extends AppController
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

        $this->set(compact('criticas'));
        $this->set('_serialize', ['criticas']);
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
        $critica = $this->Cricticas->get($id, [
            'contain' => ['Peliculas', 'Referencias']
        ]);

        $this->set('critica', $critica);
        $this->set('_serialize', ['critica']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $critica = $this->Criticas->newEntity();
        if ($this->request->is('post')) {
            $critica = $this->Criticas->patchEntity($critica, $this->request->data);
            if ($this->Cricticas->save($critica)) {
                $this->Flash->success(__('The crictica has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The crictica could not be saved. Please, try again.'));
            }
        }
        $peliculas = $this->Criticas->Peliculas->find('list', ['limit' => 200]);
        $referencias = $this->Criticas->Referencias->find('list', ['limit' => 200]);
        $this->set(compact('critica', 'peliculas', 'referencias'));
        $this->set('_serialize', ['critica']);
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
        $critica = $this->Criticas->get($id, [
            'contain' => ['Referencias']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $critica = $this->Criticas->patchEntity($critica, $this->request->data);
            if ($this->Criticas->save($critica)) {
                $this->Flash->success(__('The crictica has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The crictica could not be saved. Please, try again.'));
            }
        }
        $peliculas = $this->Criticas->Peliculas->find('list', ['limit' => 200]);
        $referencias = $this->Criticas->Referencias->find('list', ['limit' => 200]);
        $this->set(compact('critica', 'peliculas', 'referencias'));
        $this->set('_serialize', ['critica']);
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
        $critica = $this->Criticas->get($id);
        if ($this->Criticas->delete($critica)) {
            $this->Flash->success(__('The crictica has been deleted.'));
        } else {
            $this->Flash->error(__('The crictica could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
