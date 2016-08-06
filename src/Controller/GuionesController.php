<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Guiones Controller
 *
 * @property \App\Model\Table\GuionesTable $Guiones
 */
class GuionesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $guiones = $this->paginate($this->Guiones);

        $this->set(compact('guiones'));
        $this->set('_serialize', ['guiones']);
    }

    /**
     * View method
     *
     * @param string|null $id Guione id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $guione = $this->Guiones->get($id, [
            'contain' => []
        ]);

        $this->set('guione', $guione);
        $this->set('_serialize', ['guione']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $guione = $this->Guiones->newEntity();
        if ($this->request->is('post')) {
            $guione = $this->Guiones->patchEntity($guione, $this->request->data);
            if ($this->Guiones->save($guione)) {
                $this->Flash->success(__('The guione has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The guione could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('guione'));
        $this->set('_serialize', ['guione']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Guione id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $guione = $this->Guiones->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $guione = $this->Guiones->patchEntity($guione, $this->request->data);
            if ($this->Guiones->save($guione)) {
                $this->Flash->success(__('The guione has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The guione could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('guione'));
        $this->set('_serialize', ['guione']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Guione id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $guione = $this->Guiones->get($id);
        if ($this->Guiones->delete($guione)) {
            $this->Flash->success(__('The guione has been deleted.'));
        } else {
            $this->Flash->error(__('The guione could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
