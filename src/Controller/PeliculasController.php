<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Peliculas Controller
 *
 * @property \App\Model\Table\PeliculasTable $Peliculas
 */
class PeliculasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $peliculas = $this->paginate($this->Peliculas);

        $this->set(compact('peliculas'));
        $this->set('_serialize', ['peliculas']);
    }

    /**
     * View method
     *
     * @param string|null $id Pelicula id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pelicula = $this->Peliculas->get($id, [
            'contain' => ['Generos', 'Referencias', 'Tematicas', 'Trailers', 'Criticas', 'FichasTecnicas', 'Financiamientos', 'Locaciones', 'Repartos']
        ]);

        $this->set('pelicula', $pelicula);
        $this->set('_serialize', ['pelicula']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pelicula = $this->Peliculas->newEntity();
        if ($this->request->is('post')) {
            $pelicula = $this->Peliculas->patchEntity($pelicula, $this->request->data);
            if ($this->Peliculas->save($pelicula)) {
                $this->Flash->success(__('The pelicula has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pelicula could not be saved. Please, try again.'));
            }
        }
        $generos = $this->Peliculas->Generos->find('list', ['limit' => 200]);
        $referencias = $this->Peliculas->Referencias->find('list', ['limit' => 200]);
        $tematicas = $this->Peliculas->Tematicas->find('list', ['limit' => 200]);
        $this->set(compact('pelicula', 'generos', 'referencias', 'tematicas'));
        $this->set('_serialize', ['pelicula']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Pelicula id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pelicula = $this->Peliculas->get($id, [
            'contain' => ['Generos', 'Referencias', 'Tematicas']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pelicula = $this->Peliculas->patchEntity($pelicula, $this->request->data);
            if ($this->Peliculas->save($pelicula)) {
                $this->Flash->success(__('The pelicula has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pelicula could not be saved. Please, try again.'));
            }
        }
        $generos = $this->Peliculas->Generos->find('list', ['limit' => 200]);
        $referencias = $this->Peliculas->Referencias->find('list', ['limit' => 200]);
        $tematicas = $this->Peliculas->Tematicas->find('list', ['limit' => 200]);
        $this->set(compact('pelicula', 'generos', 'referencias', 'tematicas'));
        $this->set('_serialize', ['pelicula']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Pelicula id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pelicula = $this->Peliculas->get($id);
        if ($this->Peliculas->delete($pelicula)) {
            $this->Flash->success(__('The pelicula has been deleted.'));
        } else {
            $this->Flash->error(__('The pelicula could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
