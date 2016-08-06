<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PeliculasTematicas Controller
 *
 * @property \App\Model\Table\PeliculasTematicasTable $PeliculasTematicas
 */
class PeliculasTematicasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Peliculas', 'Tematicas']
        ];
        $peliculasTematicas = $this->paginate($this->PeliculasTematicas);

        $this->set(compact('peliculasTematicas'));
        $this->set('_serialize', ['peliculasTematicas']);
    }

    /**
     * View method
     *
     * @param string|null $id Peliculas Tematica id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $peliculasTematica = $this->PeliculasTematicas->get($id, [
            'contain' => ['Peliculas', 'Tematicas']
        ]);

        $this->set('peliculasTematica', $peliculasTematica);
        $this->set('_serialize', ['peliculasTematica']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $peliculasTematica = $this->PeliculasTematicas->newEntity();
        if ($this->request->is('post')) {
            $peliculasTematica = $this->PeliculasTematicas->patchEntity($peliculasTematica, $this->request->data);
            if ($this->PeliculasTematicas->save($peliculasTematica)) {
                $this->Flash->success(__('The peliculas tematica has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The peliculas tematica could not be saved. Please, try again.'));
            }
        }
        $peliculas = $this->PeliculasTematicas->Peliculas->find('list', ['limit' => 200]);
        $tematicas = $this->PeliculasTematicas->Tematicas->find('list', ['limit' => 200]);
        $pelTems = $this->PeliculasTematicas->PelTems->find('list', ['limit' => 200]);
        $this->set(compact('peliculasTematica', 'peliculas', 'tematicas'));
        $this->set('_serialize', ['peliculasTematica']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Peliculas Tematica id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $peliculasTematica = $this->PeliculasTematicas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $peliculasTematica = $this->PeliculasTematicas->patchEntity($peliculasTematica, $this->request->data);
            if ($this->PeliculasTematicas->save($peliculasTematica)) {
                $this->Flash->success(__('The peliculas tematica has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The peliculas tematica could not be saved. Please, try again.'));
            }
        }
        $peliculas = $this->PeliculasTematicas->Peliculas->find('list', ['limit' => 200]);
        $tematicas = $this->PeliculasTematicas->Tematicas->find('list', ['limit' => 200]);
        $pelTems = $this->PeliculasTematicas->PelTems->find('list', ['limit' => 200]);
        $this->set(compact('peliculasTematica', 'peliculas', 'tematicas'));
        $this->set('_serialize', ['peliculasTematica']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Peliculas Tematica id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $peliculasTematica = $this->PeliculasTematicas->get($id);
        if ($this->PeliculasTematicas->delete($peliculasTematica)) {
            $this->Flash->success(__('The peliculas tematica has been deleted.'));
        } else {
            $this->Flash->error(__('The peliculas tematica could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
