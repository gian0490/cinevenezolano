<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PeliculasReferencias Controller
 *
 * @property \App\Model\Table\PeliculasReferenciasTable $PeliculasReferencias
 */
class PeliculasReferenciasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Peliculas', 'Referencias']
        ];
        $peliculasReferencias = $this->paginate($this->PeliculasReferencias);

        $this->set(compact('peliculasReferencias'));
        $this->set('_serialize', ['peliculasReferencias']);
    }

    /**
     * View method
     *
     * @param string|null $id Peliculas Referencia id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $peliculasReferencia = $this->PeliculasReferencias->get($id, [
            'contain' => ['Peliculas', 'Referencias']
        ]);

        $this->set('peliculasReferencia', $peliculasReferencia);
        $this->set('_serialize', ['peliculasReferencia']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $peliculasReferencia = $this->PeliculasReferencias->newEntity();
        if ($this->request->is('post')) {
            $peliculasReferencia = $this->PeliculasReferencias->patchEntity($peliculasReferencia, $this->request->data);
            if ($this->PeliculasReferencias->save($peliculasReferencia)) {
                $this->Flash->success(__('The peliculas referencia has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The peliculas referencia could not be saved. Please, try again.'));
            }
        }
        $peliculas = $this->PeliculasReferencias->Peliculas->find('list', ['limit' => 200]);
        $referencias = $this->PeliculasReferencias->Referencias->find('list', ['limit' => 200]);
        $this->set(compact('peliculasReferencia', 'peliculas', 'referencias'));
        $this->set('_serialize', ['peliculasReferencia']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Peliculas Referencia id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $peliculasReferencia = $this->PeliculasReferencias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $peliculasReferencia = $this->PeliculasReferencias->patchEntity($peliculasReferencia, $this->request->data);
            if ($this->PeliculasReferencias->save($peliculasReferencia)) {
                $this->Flash->success(__('The peliculas referencia has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The peliculas referencia could not be saved. Please, try again.'));
            }
        }
        $peliculas = $this->PeliculasReferencias->Peliculas->find('list', ['limit' => 200]);
        $referencias = $this->PeliculasReferencias->Referencias->find('list', ['limit' => 200]);
        $this->set(compact('peliculasReferencia', 'peliculas', 'referencias'));
        $this->set('_serialize', ['peliculasReferencia']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Peliculas Referencia id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $peliculasReferencia = $this->PeliculasReferencias->get($id);
        if ($this->PeliculasReferencias->delete($peliculasReferencia)) {
            $this->Flash->success(__('The peliculas referencia has been deleted.'));
        } else {
            $this->Flash->error(__('The peliculas referencia could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
