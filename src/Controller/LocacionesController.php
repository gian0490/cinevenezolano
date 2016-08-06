<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Locaciones Controller
 *
 * @property \App\Model\Table\LocacionesTable $Locaciones
 */
class LocacionesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Lugares', 'Peliculas']
        ];
        $locaciones = $this->paginate($this->Locaciones);

        $this->set(compact('locaciones'));
        $this->set('_serialize', ['locaciones']);
    }

    /**
     * View method
     *
     * @param string|null $id Locacione id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $locacione = $this->Locaciones->get($id, [
            'contain' => ['Lugares', 'Peliculas']
        ]);

        $this->set('locacione', $locacione);
        $this->set('_serialize', ['locacione']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $locacione = $this->Locaciones->newEntity();
        if ($this->request->is('post')) {
            $locacione = $this->Locaciones->patchEntity($locacione, $this->request->data);
            if ($this->Locaciones->save($locacione)) {
                $this->Flash->success(__('The locacione has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The locacione could not be saved. Please, try again.'));
            }
        }
        $lugares = $this->Locaciones->Lugares->find('list', ['limit' => 200]);
        $peliculas = $this->Locaciones->Peliculas->find('list', ['limit' => 200]);
        $this->set(compact('locacione', 'lugares', 'peliculas'));
        $this->set('_serialize', ['locacione']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Locacione id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $locacione = $this->Locaciones->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $locacione = $this->Locaciones->patchEntity($locacione, $this->request->data);
            if ($this->Locaciones->save($locacione)) {
                $this->Flash->success(__('The locacione has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The locacione could not be saved. Please, try again.'));
            }
        }
        $lugares = $this->Locaciones->Lugares->find('list', ['limit' => 200]);
        $peliculas = $this->Locaciones->Peliculas->find('list', ['limit' => 200]);
        $this->set(compact('locacione', 'lugares', 'peliculas'));
        $this->set('_serialize', ['locacione']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Locacione id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $locacione = $this->Locaciones->get($id);
        if ($this->Locaciones->delete($locacione)) {
            $this->Flash->success(__('The locacione has been deleted.'));
        } else {
            $this->Flash->error(__('The locacione could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
