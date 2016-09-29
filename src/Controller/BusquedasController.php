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


  public function initialize()
{
  parent::initialize();
  $this->loadComponent('RequestHandler');


  //$this->Auth->allow(['index']);
}

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index($id = null)
    {
        $this->loadModel('Personas');
        $this->loadModel('Tematicas');
        $this->loadModel('Peliculas');
        $this->loadModel('Generos');

        echo 'adsadsadasd';

        if ($this->request->is('Ajax')) {

   echo 'safdasd jjjaj j ja j';
            $data =['personas'=>  'ff',
                  'tematicas'=> 'ffadsas',
                  'generos'=>   'faa',
                  'peliculas'=>'wdasda',
                  'fechas_ini'=> 'wadsa',
                  'fechas_fin'=> 'iasd'];



      }
      else {
      // Continue Controller action
/*          $data =['personas'=>$this->Personas->find('all'),
                  'tematicas'=> $this->Tematicas->find('all'),
                  'generos'=> $this->Generos->find('all'),
                  'peliculas'=>$this->Peliculas->find('all'),
                  'fechas_ini'=> $this->Peliculas->find('all'),
                  'fechas_fin'=>$this->Peliculas->find('all')];*/


                  $personas=$this->Personas->find('all');
                  $tematicas= $this->Tematicas->find('all');
                  $generos= $this->Generos->find('all');
                  $peliculas=$this->Peliculas->find('all');
                  $fechas_ini= $this->Peliculas->find('all');
                  $fechas_fin=$this->Peliculas->find('all');


        /*$data =['personas'=>  'hok',
                'tematicas'=> 'a',
                'generos'=>   'w',
                'peliculas'=>'w',
                'fechas_ini'=> 'w',
                'fechas_fin'=> 'i'];*/


       }

       //$peliculas=$this->paginate($this->Peliculas);
       //$peliculas=$this->Peliculas->find('all');
       //$this->set(compact('peliculas'));
       //$this->set('_serialize',['peliculas']);
       $this->set(compact('personas','tematicas','generos','peliculas','fechas_ini','fechas_fin'));
       $this->set('_serialize',['personas']);

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

            $personas=  ['id' =>'ff','id' =>'fs'];
            $tematicas='ffadsas';
            $generos=   'faa';
            $peliculas='wdasda';
            $fechas_ini= 'wadsa';
            $fechas_fin= 'iasd';
            echo 'afdf';
            $this->set(compact('personas','tematicas','generos','peliculas','fechas_ini','fechas_fin'));
            $this->set('_serialize',['personas']);
            $this->autoRender= false;
            //header('Content-type: application/json; charset=utf-8');
          //    echo json_encode($data,JSON_FORCE_OBJECT);


    }

    public function busquedirector($id,$opcion)
    {
          //echo "jol";
          //echo $id;
          //echo $opcion;
          //echo "hola ".$id;
          //$de = json_decode($data);
          //echo "hola ".$de;
          $this->autoRender= false;
          $data =['personas'=>  'hok',
                  'tematicas'=> 'a',
                  'generos'=>   'w',
                  'peliculas'=>'w',
                  'fechas_ini'=> 'w',
                  'fechas_fin'=> 'i'];

        // echo $option;
          if($opcion==null)
          {
              $personas=null;
          }
          else {
            # code...
            $this->loadModel('Personas');
            $this->loadModel('Tematicas');
            $this->loadModel('Peliculas');
            $this->loadModel('Generos');
            $this->loadModel('FichasTecnicas');



            switch($opcion)
            {
              case "pelicula":
              //codigo
              //echo "peliculas ksksksks";
              //echo "id = ",$id;
              $personas = $this->Personas->find('all')->matching('FichasTecnicas',function($q) use($id)
              {
                return $q->where(['FichasTecnicas.pelicula_id'=>$id,'FichasTecnicas.tipo_cargo_id'=>31]);
              })->select(['Personas.id','Personas.per_primer_nombre']);
              break;
              case "genero":
              //codigo
              //echo "genero";
              $personas = $this->Personas->find('all')->matching('FichasTecnicas.Peliculas.Generos',function($q) use($id)
              {
                return $q->where(['Generos.id' =>$id,'FichasTecnicas.tipo_cargo_id'=>31]);
              })->select(['Personas.id','Personas.per_primer_nombre']);
              //$personas = $this->Personas->find('all', ['conditions'=>['Generos.id'=>$id,'FichasTecnicas.tipo_cargo_id'=>31],'fields'=>['Personas.id','Personas.per_primer_nombre']]);
              break;
              case "tematica":
              //codigo
              $personas = $this->Personas->find('all')->matching('FichasTecnicas.Peliculas.Tematicas',function($q) use($id)
              {
                return $q->where(['Tematicas.id' =>$id,'FichasTecnicas.tipo_cargo_id'=>31]);
              })->select(['Personas.id','Personas.per_primer_nombre']);
              //$personas=  $this->Personas->find('all',['conditions'=>['Tematicas.id'=>$id,'FichasTecnicas.tipo_cargo_id'=>31],'fields'=>['Personas.id','Personas.per_primer_nombre'],'contain'=>['Peliculas','FichasTecnicas','Tematicas']]);
              break;
              case "fecha_ini":
              //codigo
              break;
              case "fecha_fin":
              //codigo
              break;

            }
             //foreach ($personas as $persona):
             //echo $persona->per_primer_nombre;
            //  endforeach;
              //echo $personas;
             header('Content-type: application/json; charset=utf-8');
             echo json_encode($personas);

          }

    }


    public function busquepelicula($id,$opcion)
    {
          //echo "jol";
          //echo $id;
          //echo $opcion;
          //echo "hola ".$id;
          //$de = json_decode($data);
          //echo "hola ".$de;
          $this->autoRender= false;
          $data =['personas'=>  'hok',
                  'tematicas'=> 'a',
                  'generos'=>   'w',
                  'peliculas'=>'w',
                  'fechas_ini'=> 'w',
                  'fechas_fin'=> 'i'];


          if($opcion==null)
          {
              $peliculas=null;
          }
          else {
            # code...
            $this->loadModel('Personas');
            $this->loadModel('Tematicas');
            $this->loadModel('Peliculas');
            $this->loadModel('Generos');
            $this->loadModel('FichasTecnicas');

            switch($opcion)
            {
              case "director":
              //codigo
              //echo "peliculas ksksksks";
              //echo "id = ",$id;
              $peliculas = $this->Peliculas->find('all')->matching('FichasTecnicas',function($q) use($id)
              {
                return $q->where(['FichasTecnicas.persona_id'=>$id,'FichasTecnicas.tipo_cargo_id'=>31]);
              })->select(['Peliculas.id','Peliculas.pel_titulo']);
              break;
              case "genero":
              //codigo
            //  echo "genero";
              $peliculas = $this->Peliculas->find('all')->matching('Generos',function($q) use($id)
              {
                return $q->where(['Generos.id'=>$id]);
              })->select(['Peliculas.id','Peliculas.pel_titulo']);
              //$peliculas = $this->Peliculas->Generos->find('all', ['conditions'=>['Generos.id'=>$id],'fields'=>['Peliculas.id','Peliculas.pel_titulo'],'contain'=>['Peliculas']]);
              break;
              case "tematica":
              //codigo
              $peliculas = $this->Peliculas->find('all')->matching('Tematicas',function($q) use($id)
              {
                return $q->where(['Tematicas.id'=>$id]);
              })->select(['Peliculas.id','Peliculas.pel_titulo']);
              break;
              case "fecha_ini":
              //codigo
              break;
              case "fecha_fin":
              //codigo
              break;

            }
             //foreach ($peliculas as $pelicula):
              //echo $pelicula->pel_titulo;
            //  endforeach;
              //echo $personas;
             header('Content-type: application/json; charset=utf-8');
             echo json_encode($peliculas);

          }

    }



    public function busquetematica($id,$opcion)
    {

          $this->autoRender= false;

          if($opcion==null)
          {
              $tematicas=null;
          }
          else {
            # code...

            $this->loadModel('Personas');
            $this->loadModel('Tematicas');
            $this->loadModel('Peliculas');
            $this->loadModel('Generos');
            $this->loadModel('FichasTecnicas');

            switch($opcion)
            {
              case "director":
              //codigo
              $tematicas = $this->Tematicas->find('all')->matching('Peliculas.FichasTecnicas',function($q) use($id)
              {
                return $q->where(['FichasTecnicas.persona_id'=>$id,'FichasTecnicas.tipo_cargo_id'=>31]);
              })->select(['Tematicas.id','Tematicas.tem_nombre']);
              break;
              case "genero":
              //codigo
            //  echo "genero";
              $tematicas = $this->Tematicas->find('all')->matching('Peliculas.Generos',function($q) use($id)
              {
                return $q->where(['Generos.id'=>$id]);
              })->select(['Tematicas.id','Tematicas.tem_nombre']);
              //$peliculas = $this->Peliculas->Generos->find('all', ['conditions'=>['Generos.id'=>$id],'fields'=>['Peliculas.id','Peliculas.pel_titulo'],'contain'=>['Peliculas']]);
              break;
              case "pelicula":
              //codigo
              $tematicas = $this->Tematicas->find('all')->matching('Peliculas',function($q) use($id)
              {
                return $q->where(['Peliculas.id'=>$id]);
              })->select(['Tematicas.id','Tematicas.tem_nombre']);
              break;
              case "fecha_ini":
              //codigo
              break;
              case "fecha_fin":
              //codigo
              break;

            }
             //foreach ($tematicas as $tematica):
            //  echo $tematica->tem_nombre;
            //  endforeach;
              //echo $personas;
             header('Content-type: application/json; charset=utf-8');
             echo json_encode($tematicas);

          }

    }



    public function busquegenero($id,$opcion)
    {

          $this->autoRender= false;

          if($opcion==null)
          {
              $generos=null;
          }
          else {
            # code...
            $this->loadModel('Personas');
            $this->loadModel('Tematicas');
            $this->loadModel('Peliculas');
            $this->loadModel('Generos');
            $this->loadModel('FichasTecnicas');

            switch($opcion)
            {
              case "director":
              //codigo
              $generos = $this->Generos->find('all')->matching('Peliculas.FichasTecnicas',function($q) use($id)
              {
                return $q->where(['FichasTecnicas.persona_id'=>$id,'FichasTecnicas.tipo_cargo_id'=>31]);
              })->select(['Generos.id','Generos.gen_nombre']);
              break;
              case "tematica":
              //codigo
            //  echo "genero";
              $generos = $this->Generos->find('all')->matching('Peliculas.Tematicas',function($q) use($id)
              {
                return $q->where(['Tematicas.id'=>$id]);
              })->select(['Generos.id','Generos.gen_nombre']);
              //$peliculas = $this->Peliculas->Generos->find('all', ['conditions'=>['Generos.id'=>$id],'fields'=>['Peliculas.id','Peliculas.pel_titulo'],'contain'=>['Peliculas']]);
              break;
              case "pelicula":
              //codigo
              $generos = $this->Generos->find('all')->matching('Peliculas',function($q) use($id)
              {
                return $q->where(['Peliculas.id'=>$id]);
              })->select(['Generos.id','Generos.gen_nombre']);
              break;
              case "fecha_ini":
              //codigo
              break;
              case "fecha_fin":
              //codigo
              break;

            }
             //foreach ($tematicas as $tematica):
            //  echo $tematica->tem_nombre;
            //  endforeach;
              //echo $personas;
             header('Content-type: application/json; charset=utf-8');
             echo json_encode($generos);

          }

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
