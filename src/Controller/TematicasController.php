<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tematicas Controller
 *
 * @property \App\Model\Table\TematicasTable $Tematicas
 */
class TematicasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $tematicas = $this->paginate($this->Tematicas);

        $this->set(compact('tematicas'));
        $this->set('_serialize', ['tematicas']);
    }

    /**
     * View method
     *
     * @param string|null $id Tematica id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tematica = $this->Tematicas->get($id, [
            'contain' => ['Peliculas']
        ]);

        $this->set('tematica', $tematica);
        $this->set('_serialize', ['tematica']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tematica = $this->Tematicas->newEntity();
        if ($this->request->is('post')) {
            $tematica = $this->Tematicas->patchEntity($tematica, $this->request->data);
            if ($this->Tematicas->save($tematica)) {
                $this->Flash->success(__('The tematica has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tematica could not be saved. Please, try again.'));
            }
        }
        $peliculas = $this->Tematicas->Peliculas->find('list', ['limit' => 200]);
        $this->set(compact('tematica', 'peliculas'));
        $this->set('_serialize', ['tematica']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tematica id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tematica = $this->Tematicas->get($id, [
            'contain' => ['Peliculas']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tematica = $this->Tematicas->patchEntity($tematica, $this->request->data);
            if ($this->Tematicas->save($tematica)) {
                $this->Flash->success(__('The tematica has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tematica could not be saved. Please, try again.'));
            }
        }
        $peliculas = $this->Tematicas->Peliculas->find('list', ['limit' => 200]);
        $this->set(compact('tematica', 'peliculas'));
        $this->set('_serialize', ['tematica']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tematica id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tematica = $this->Tematicas->get($id);
        if ($this->Tematicas->delete($tematica)) {
            $this->Flash->success(__('The tematica has been deleted.'));
        } else {
            $this->Flash->error(__('The tematica could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
