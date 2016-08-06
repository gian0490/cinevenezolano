<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Repartos Controller
 *
 * @property \App\Model\Table\RepartosTable $Repartos
 */
class RepartosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Personas', 'Peliculas']
        ];
        $repartos = $this->paginate($this->Repartos);

        $this->set(compact('repartos'));
        $this->set('_serialize', ['repartos']);
    }

    /**
     * View method
     *
     * @param string|null $id Reparto id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $reparto = $this->Repartos->get($id, [
            'contain' => ['Personas', 'Peliculas']
        ]);

        $this->set('reparto', $reparto);
        $this->set('_serialize', ['reparto']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $reparto = $this->Repartos->newEntity();
        if ($this->request->is('post')) {
            $reparto = $this->Repartos->patchEntity($reparto, $this->request->data);
            if ($this->Repartos->save($reparto)) {
                $this->Flash->success(__('The reparto has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The reparto could not be saved. Please, try again.'));
            }
        }
        $personas = $this->Repartos->Personas->find('list', ['limit' => 200]);
        $peliculas = $this->Repartos->Peliculas->find('list', ['limit' => 200]);
        $this->set(compact('reparto', 'personas', 'peliculas'));
        $this->set('_serialize', ['reparto']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Reparto id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $reparto = $this->Repartos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $reparto = $this->Repartos->patchEntity($reparto, $this->request->data);
            if ($this->Repartos->save($reparto)) {
                $this->Flash->success(__('The reparto has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The reparto could not be saved. Please, try again.'));
            }
        }
        $personas = $this->Repartos->Personas->find('list', ['limit' => 200]);
        $peliculas = $this->Repartos->Peliculas->find('list', ['limit' => 200]);
        $this->set(compact('reparto', 'personas', 'peliculas'));
        $this->set('_serialize', ['reparto']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Reparto id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $reparto = $this->Repartos->get($id);
        if ($this->Repartos->delete($reparto)) {
            $this->Flash->success(__('The reparto has been deleted.'));
        } else {
            $this->Flash->error(__('The reparto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
