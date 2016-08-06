<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PeliculasGeneros Controller
 *
 * @property \App\Model\Table\PeliculasGenerosTable $PeliculasGeneros
 */
class PeliculasGenerosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Peliculas', 'Generos']
        ];
        $peliculasGeneros = $this->paginate($this->PeliculasGeneros);

        $this->set(compact('peliculasGeneros'));
        $this->set('_serialize', ['peliculasGeneros']);
    }

    /**
     * View method
     *
     * @param string|null $id Peliculas Genero id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $peliculasGenero = $this->PeliculasGeneros->get($id, [
            'contain' => ['Peliculas', 'Generos']
        ]);

        $this->set('peliculasGenero', $peliculasGenero);
        $this->set('_serialize', ['peliculasGenero']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $peliculasGenero = $this->PeliculasGeneros->newEntity();
        if ($this->request->is('post')) {
            $peliculasGenero = $this->PeliculasGeneros->patchEntity($peliculasGenero, $this->request->data);
            if ($this->PeliculasGeneros->save($peliculasGenero)) {
                $this->Flash->success(__('The peliculas genero has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The peliculas genero could not be saved. Please, try again.'));
            }
        }
        $peliculas = $this->PeliculasGeneros->Peliculas->find('list', ['limit' => 200]);
        $generos = $this->PeliculasGeneros->Generos->find('list', ['limit' => 200]);
        $this->set(compact('peliculasGenero', 'peliculas', 'generos'));
        $this->set('_serialize', ['peliculasGenero']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Peliculas Genero id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $peliculasGenero = $this->PeliculasGeneros->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $peliculasGenero = $this->PeliculasGeneros->patchEntity($peliculasGenero, $this->request->data);
            if ($this->PeliculasGeneros->save($peliculasGenero)) {
                $this->Flash->success(__('The peliculas genero has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The peliculas genero could not be saved. Please, try again.'));
            }
        }
        $peliculas = $this->PeliculasGeneros->Peliculas->find('list', ['limit' => 200]);
        $generos = $this->PeliculasGeneros->Generos->find('list', ['limit' => 200]);
        $this->set(compact('peliculasGenero', 'peliculas', 'generos'));
        $this->set('_serialize', ['peliculasGenero']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Peliculas Genero id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $peliculasGenero = $this->PeliculasGeneros->get($id);
        if ($this->PeliculasGeneros->delete($peliculasGenero)) {
            $this->Flash->success(__('The peliculas genero has been deleted.'));
        } else {
            $this->Flash->error(__('The peliculas genero could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
