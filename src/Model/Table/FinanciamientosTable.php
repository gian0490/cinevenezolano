<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Financiamientos Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Peliculas
 * @property \Cake\ORM\Association\BelongsTo $Institutos
 *
 * @method \App\Model\Entity\Financiamiento get($primaryKey, $options = [])
 * @method \App\Model\Entity\Financiamiento newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Financiamiento[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Financiamiento|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Financiamiento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Financiamiento[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Financiamiento findOrCreate($search, callable $callback = null)
 */
class FinanciamientosTable extends Table
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

        $this->table('financiamientos');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Peliculas', [
            'foreignKey' => 'pelicula_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Institutos', [
            'foreignKey' => 'instituto_id',
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
            ->decimal('fin_monto')
            ->requirePresence('fin_monto', 'create')
            ->notEmpty('fin_monto');

        $validator
            ->requirePresence('fin_mostrar', 'create')
            ->notEmpty('fin_mostrar');

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
        $rules->add($rules->existsIn(['instituto_id'], 'Institutos'));

        return $rules;
    }
}
