<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CasasProductoras Controller
 *
 * @property \App\Model\Table\CasasProductorasTable $CasasProductoras
 */
class CasasProductorasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $casasProductoras = $this->paginate($this->CasasProductoras);

        $this->set(compact('casasProductoras'));
        $this->set('_serialize', ['casasProductoras']);
    }

    /**
     * View method
     *
     * @param string|null $id Casas Productora id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $casasProductora = $this->CasasProductoras->get($id, [
            'contain' => []
        ]);

        $this->set('casasProductora', $casasProductora);
        $this->set('_serialize', ['casasProductora']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $casasProductora = $this->CasasProductoras->newEntity();
        if ($this->request->is('post')) {
            $casasProductora = $this->CasasProductoras->patchEntity($casasProductora, $this->request->data);
            if ($this->CasasProductoras->save($casasProductora)) {
                $this->Flash->success(__('The casas productora has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The casas productora could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('casasProductora'));
        $this->set('_serialize', ['casasProductora']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Casas Productora id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $casasProductora = $this->CasasProductoras->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $casasProductora = $this->CasasProductoras->patchEntity($casasProductora, $this->request->data);
            if ($this->CasasProductoras->save($casasProductora)) {
                $this->Flash->success(__('The casas productora has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The casas productora could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('casasProductora'));
        $this->set('_serialize', ['casasProductora']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Casas Productora id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $casasProductora = $this->CasasProductoras->get($id);
        if ($this->CasasProductoras->delete($casasProductora)) {
            $this->Flash->success(__('The casas productora has been deleted.'));
        } else {
            $this->Flash->error(__('The casas productora could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
