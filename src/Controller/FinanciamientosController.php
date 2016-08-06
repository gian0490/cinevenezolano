<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Financiamientos Controller
 *
 * @property \App\Model\Table\FinanciamientosTable $Financiamientos
 */
class FinanciamientosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Peliculas', 'Institutos']
        ];
        $financiamientos = $this->paginate($this->Financiamientos);

        $this->set(compact('financiamientos'));
        $this->set('_serialize', ['financiamientos']);
    }

    /**
     * View method
     *
     * @param string|null $id Financiamiento id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $financiamiento = $this->Financiamientos->get($id, [
            'contain' => ['Peliculas', 'Institutos']
        ]);

        $this->set('financiamiento', $financiamiento);
        $this->set('_serialize', ['financiamiento']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $financiamiento = $this->Financiamientos->newEntity();
        if ($this->request->is('post')) {
            $financiamiento = $this->Financiamientos->patchEntity($financiamiento, $this->request->data);
            if ($this->Financiamientos->save($financiamiento)) {
                $this->Flash->success(__('The financiamiento has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The financiamiento could not be saved. Please, try again.'));
            }
        }
        $peliculas = $this->Financiamientos->Peliculas->find('list', ['limit' => 200]);
        $institutos = $this->Financiamientos->Institutos->find('list', ['limit' => 200]);
        $this->set(compact('financiamiento', 'peliculas', 'institutos'));
        $this->set('_serialize', ['financiamiento']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Financiamiento id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $financiamiento = $this->Financiamientos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $financiamiento = $this->Financiamientos->patchEntity($financiamiento, $this->request->data);
            if ($this->Financiamientos->save($financiamiento)) {
                $this->Flash->success(__('The financiamiento has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The financiamiento could not be saved. Please, try again.'));
            }
        }
        $peliculas = $this->Financiamientos->Peliculas->find('list', ['limit' => 200]);
        $institutos = $this->Financiamientos->Institutos->find('list', ['limit' => 200]);
        $this->set(compact('financiamiento', 'peliculas', 'institutos'));
        $this->set('_serialize', ['financiamiento']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Financiamiento id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $financiamiento = $this->Financiamientos->get($id);
        if ($this->Financiamientos->delete($financiamiento)) {
            $this->Flash->success(__('The financiamiento has been deleted.'));
        } else {
            $this->Flash->error(__('The financiamiento could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
