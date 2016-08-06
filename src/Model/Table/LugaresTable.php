<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Lugares Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Lugares
 *
 * @method \App\Model\Entity\Lugare get($primaryKey, $options = [])
 * @method \App\Model\Entity\Lugare newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Lugare[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Lugare|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Lugare patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Lugare[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Lugare findOrCreate($search, callable $callback = null)
 */
class LugaresTable extends Table
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

        $this->table('lugares');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Lugares', [
            'foreignKey' => 'lugar_id'
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
            ->requirePresence('lug_tipo', 'create')
            ->notEmpty('lug_tipo');

        $validator
            ->requirePresence('lug_nombre', 'create')
            ->notEmpty('lug_nombre');

        $validator
            ->requirePresence('lug_mostrar', 'create')
            ->notEmpty('lug_mostrar');

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
        $rules->add($rules->existsIn(['lugar_id'], 'Lugares'));

        return $rules;
    }
}
