<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ReferenciasCricticas Controller
 *
 * @property \App\Model\Table\ReferenciasCricticasTable $ReferenciasCricticas
 */
class ReferenciasCricticasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Cricticas', 'Referencias']
        ];
        $referenciasCricticas = $this->paginate($this->ReferenciasCricticas);

        $this->set(compact('referenciasCricticas'));
        $this->set('_serialize', ['referenciasCricticas']);
    }

    /**
     * View method
     *
     * @param string|null $id Referencias Crictica id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $referenciasCrictica = $this->ReferenciasCricticas->get($id, [
            'contain' => ['Cricticas', 'Referencias']
        ]);

        $this->set('referenciasCrictica', $referenciasCrictica);
        $this->set('_serialize', ['referenciasCrictica']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $referenciasCrictica = $this->ReferenciasCricticas->newEntity();
        if ($this->request->is('post')) {
            $referenciasCrictica = $this->ReferenciasCricticas->patchEntity($referenciasCrictica, $this->request->data);
            if ($this->ReferenciasCricticas->save($referenciasCrictica)) {
                $this->Flash->success(__('The referencias crictica has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The referencias crictica could not be saved. Please, try again.'));
            }
        }
        $cricticas = $this->ReferenciasCricticas->Cricticas->find('list', ['limit' => 200]);
        $referencias = $this->ReferenciasCricticas->Referencias->find('list', ['limit' => 200]);
        $this->set(compact('referenciasCrictica', 'cricticas', 'referencias'));
        $this->set('_serialize', ['referenciasCrictica']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Referencias Crictica id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $referenciasCrictica = $this->ReferenciasCricticas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $referenciasCrictica = $this->ReferenciasCricticas->patchEntity($referenciasCrictica, $this->request->data);
            if ($this->ReferenciasCricticas->save($referenciasCrictica)) {
                $this->Flash->success(__('The referencias crictica has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The referencias crictica could not be saved. Please, try again.'));
            }
        }
        $cricticas = $this->ReferenciasCricticas->Cricticas->find('list', ['limit' => 200]);
        $referencias = $this->ReferenciasCricticas->Referencias->find('list', ['limit' => 200]);
        $this->set(compact('referenciasCrictica', 'cricticas', 'referencias'));
        $this->set('_serialize', ['referenciasCrictica']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Referencias Crictica id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $referenciasCrictica = $this->ReferenciasCricticas->get($id);
        if ($this->ReferenciasCricticas->delete($referenciasCrictica)) {
            $this->Flash->success(__('The referencias crictica has been deleted.'));
        } else {
            $this->Flash->error(__('The referencias crictica could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
