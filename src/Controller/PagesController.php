<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link http://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{

    var $name = 'Pages';

    var $uses = array();

    var $components = array('RequestHandler');

    var $cacheDuration = '+3 hours';

    /**
     * Displays a view
     *
     * @return void|\Cake\Network\Response
     * @throws \Cake\Network\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */
    public function display()
    {
        $path = func_get_args();

        $count = count($path);
        if (!$count) {
            return $this->redirect('/');
        }
        $page = $subpage = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        $this->set(compact('page', 'subpage'));

        try {
            $this->render(implode('/', $path));
        } catch (MissingTemplateException $e) {
            if (Configure::read('debug')) {
                throw $e;
            }
            throw new NotFoundException();
        }
    }
}


// continuación de /app/controllers/pages_controller.php
function beforeFilter()
{
	// Desactivamos debug para todo el controlador
	Configure::write('debug',0);
	// En caso de utilizar el componente Auth, damos permiso a las secciones necesarias
	//$this->Auth->allowedActions = array('rss');
	parent::beforeFilter();
}


 function _getFeeds($url)
{
	// Configuramos la conexión curl
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 2);
	curl_setopt($ch, CURLOPT_URL, $url);
	// Ejecutamos la conexión
	$feed = curl_exec($ch);
	curl_close($ch);
	// En caso de error detenemos ejecución
	if(!$feed)  return false;
	// Creamos objeto SimpleXmlElement
	$xml = new SimpleXmlElement($feed);
	// Leemos el hilo RSS y lo guardamos en la variable $out
	foreach($xml->channel->item as $item){
		$out[] = array(
			'title' 		=> (string)$item->title,
			'description' 	=> (string)$item->description,
			'pubDate' 		=> strtotime($item->pubDate),
			'link' 			=> (string)$item->link
		);
	}
	// Devolvemos el hilo
	return $out;
  }


function rss($name = null, $limit = 8, $cache = true)
{
	// Desactivamos auto render de las vistas
	$this->autoRender = false;
	$options = compact('limit','cache');
	// Si la solicitud es Ajax
	if($this->RequestHandler->isAjax()){
		// Cargamos layout ajax.ctp
		$this->layout = 'ajax';
		// Url según nombre recibido por parámetro
		switch($name){
			case 'psico':
				$url = 'http://psicoactividad.underave.net/feed';
				break;
			case 'zeta':
				$url = 'http://planzeta.underave.net/feed';
				break;
			case 'raco':
				$url = 'http://www.racotecnic.com/feed';
				break;
			case 'underave':
			default:
				$url = 'http://blog.underave.net/feed';
		}
		// Obtenemos los hilos
		if((isset($options['cache']) && $options['cache'] == false) || ($feeds = Cache::read("$name.feed")) == false){
			$feeds = $this->_getFeeds($url);
			// Si el parámetro cache es true guardamos en caché
			if($options['cache'] == true){
				Cache::set(array('duration' => $this->cacheDuration));
				Cache::write("$name.feed",$feeds);
			}
		}
		// Limitamos los resultados
		if(isset($options['limit']) && count($feeds) > $options['limit'])
			$feeds = array_slice($feeds, 0, $options['limit']);
		// Guardamos la variable $data
	//	$this->set('data', $feeds);
		// Cargamos fichero json.ctp
    echo json_encode($feeds);
		//$this->render('/src/Template/ajax/json');
	}else $this->redirect('/');
}
