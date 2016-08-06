<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * FichasTecnicas Controller
 *
 * @property \App\Model\Table\FichasTecnicasTable $FichasTecnicas
 */
class FichasTecnicasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Peliculas', 'Personas', 'CasasProductoras', 'Guiones']
        ];
        $fichasTecnicas = $this->paginate($this->FichasTecnicas);

        $this->set(compact('fichasTecnicas'));
        $this->set('_serialize', ['fichasTecnicas']);
    }

    /**
     * View method
     *
     * @param string|null $id Fichas Tecnica id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fichasTecnica = $this->FichasTecnicas->get($id, [
            'contain' => ['Peliculas', 'Personas', 'CasasProductoras', 'Guiones']
        ]);

        $this->set('fichasTecnica', $fichasTecnica);
        $this->set('_serialize', ['fichasTecnica']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fichasTecnica = $this->FichasTecnicas->newEntity();
        if ($this->request->is('post')) {
            $fichasTecnica = $this->FichasTecnicas->patchEntity($fichasTecnica, $this->request->data);
            if ($this->FichasTecnicas->save($fichasTecnica)) {
                $this->Flash->success(__('The fichas tecnica has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The fichas tecnica could not be saved. Please, try again.'));
            }
        }
        $peliculas = $this->FichasTecnicas->Peliculas->find('list', ['limit' => 200]);
        $personas = $this->FichasTecnicas->Personas->find('list', ['limit' => 200]);
        $casasProductoras = $this->FichasTecnicas->CasasProductoras->find('list', ['limit' => 200]);
        $guiones = $this->FichasTecnicas->Guiones->find('list', ['limit' => 200]);
        $this->set(compact('fichasTecnica', 'peliculas', 'personas', 'casasProductoras', 'guiones'));
        $this->set('_serialize', ['fichasTecnica']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Fichas Tecnica id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fichasTecnica = $this->FichasTecnicas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fichasTecnica = $this->FichasTecnicas->patchEntity($fichasTecnica, $this->request->data);
            if ($this->FichasTecnicas->save($fichasTecnica)) {
                $this->Flash->success(__('The fichas tecnica has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The fichas tecnica could not be saved. Please, try again.'));
            }
        }
        $peliculas = $this->FichasTecnicas->Peliculas->find('list', ['limit' => 200]);
        $personas = $this->FichasTecnicas->Personas->find('list', ['limit' => 200]);
        $casasProductoras = $this->FichasTecnicas->CasasProductoras->find('list', ['limit' => 200]);
        $guiones = $this->FichasTecnicas->Guiones->find('list', ['limit' => 200]);
        $this->set(compact('fichasTecnica', 'peliculas', 'personas', 'casasProductoras', 'guiones'));
        $this->set('_serialize', ['fichasTecnica']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Fichas Tecnica id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fichasTecnica = $this->FichasTecnicas->get($id);
        if ($this->FichasTecnicas->delete($fichasTecnica)) {
            $this->Flash->success(__('The fichas tecnica has been deleted.'));
        } else {
            $this->Flash->error(__('The fichas tecnica could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
