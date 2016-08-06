<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Institutos Controller
 *
 * @property \App\Model\Table\InstitutosTable $Institutos
 */
class InstitutosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $institutos = $this->paginate($this->Institutos);

        $this->set(compact('institutos'));
        $this->set('_serialize', ['institutos']);
    }

    /**
     * View method
     *
     * @param string|null $id Instituto id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $instituto = $this->Institutos->get($id, [
            'contain' => ['Financiamientos']
        ]);

        $this->set('instituto', $instituto);
        $this->set('_serialize', ['instituto']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $instituto = $this->Institutos->newEntity();
        if ($this->request->is('post')) {
            $instituto = $this->Institutos->patchEntity($instituto, $this->request->data);
            if ($this->Institutos->save($instituto)) {
                $this->Flash->success(__('The instituto has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The instituto could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('instituto'));
        $this->set('_serialize', ['instituto']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Instituto id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $instituto = $this->Institutos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $instituto = $this->Institutos->patchEntity($instituto, $this->request->data);
            if ($this->Institutos->save($instituto)) {
                $this->Flash->success(__('The instituto has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The instituto could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('instituto'));
        $this->set('_serialize', ['instituto']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Instituto id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $instituto = $this->Institutos->get($id);
        if ($this->Institutos->delete($instituto)) {
            $this->Flash->success(__('The instituto has been deleted.'));
        } else {
            $this->Flash->error(__('The instituto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
