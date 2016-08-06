<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tematicas Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Peliculas
 *
 * @method \App\Model\Entity\Tematica get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tematica newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Tematica[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tematica|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tematica patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tematica[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tematica findOrCreate($search, callable $callback = null)
 */
class TematicasTable extends Table
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

        $this->table('tematicas');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsToMany('Peliculas', [
            'foreignKey' => 'tematica_id',
            'targetForeignKey' => 'pelicula_id',
            'joinTable' => 'peliculas_tematicas'
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
            ->requirePresence('tem_nombre', 'create')
            ->notEmpty('tem_nombre');

        $validator
            ->requirePresence('tem_mostrar', 'create')
            ->notEmpty('tem_mostrar');

        return $validator;
    }
}
