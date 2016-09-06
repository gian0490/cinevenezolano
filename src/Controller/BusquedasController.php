<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CasasProductoras Controller
 *
 * @property \App\Model\Table\CasasProductorasTable $CasasProductoras
 */
class BusquedasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index($inden = null)
    {
        $this->loadModel('Personas');
        $this->loadModel('Tematicas');
        $this->loadModel('Peliculas');
        $this->loadModel('Generos');

      /*  $data =['personas'=>$this->Personas->find('all'),
                'tematicas'=> $this->Tematicas->find('all'),
                'generos'=> $this->Generos->find('all'),
                'pelicualas'=>$this->Peliculas->find('all'),
                'fecha_ini'=>$this->Peliculas->find('all'),
                'fecha_fin'=>$this->Peliculas->find('all')];
*/

      $data =['personas'=>  'hok',
              'tematicas'=> 'a',
              'generos'=>   'w',
              'peliculas'=>'w',
              'fecha_ini'=> 'w',
              'fecha_fin'=> 'i'];

        $this->set($data);

    }

    /**
     * View method
     *
     * @param string|null $id Casas Productora id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {

    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {

    }

    /**
     * Edit method
     *
     * @param string|null $id Casas Productora id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {

    }

    /**
     * Delete method
     *
     * @param string|null $id Casas Productora id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {

    }
}
