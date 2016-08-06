<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PeliculasReferencias Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Peliculas
 * @property \Cake\ORM\Association\BelongsTo $Referencias
 *
 * @method \App\Model\Entity\PeliculasReferencia get($primaryKey, $options = [])
 * @method \App\Model\Entity\PeliculasReferencia newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PeliculasReferencia[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PeliculasReferencia|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PeliculasReferencia patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PeliculasReferencia[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PeliculasReferencia findOrCreate($search, callable $callback = null)
 */
class PeliculasReferenciasTable extends Table
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

        $this->table('peliculas_referencias');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Peliculas', [
            'foreignKey' => 'pelicula_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Referencias', [
            'foreignKey' => 'referencia_id',
            'joinType' => 'INNER'
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
            ->requirePresence('pel_ref_mostrar', 'create')
            ->notEmpty('pel_ref_mostrar');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['pelicula_id'], 'Peliculas'));
        $rules->add($rules->existsIn(['referencia_id'], 'Referencias'));

        return $rules;
    }
}
