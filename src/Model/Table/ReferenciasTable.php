<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Referencias Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Peliculas
 * @property \Cake\ORM\Association\BelongsToMany $Cricticas
 *
 * @method \App\Model\Entity\Referencia get($primaryKey, $options = [])
 * @method \App\Model\Entity\Referencia newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Referencia[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Referencia|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Referencia patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Referencia[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Referencia findOrCreate($search, callable $callback = null)
 */
class ReferenciasTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('referencias');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsToMany('Peliculas', [
            'foreignKey' => 'referencia_id',
            'targetForeignKey' => 'pelicula_id',
            'joinTable' => 'peliculas_referencias'
        ]);
        $this->belongsToMany('Cricticas', [
            'foreignKey' => 'referencia_id',
            'targetForeignKey' => 'crictica_id',
            'joinTable' => 'referencias_cricticas'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('ref_ruta_web');

        $validator
            ->allowEmpty('ref_descripcion');

        $validator
            ->requirePresence('ref_mostrar', 'create')
            ->notEmpty('ref_mostrar');

        return $validator;
    }
}
