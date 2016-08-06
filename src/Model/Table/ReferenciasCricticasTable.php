<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ReferenciasCricticas Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Cricticas
 * @property \Cake\ORM\Association\BelongsTo $Referencias
 *
 * @method \App\Model\Entity\ReferenciasCrictica get($primaryKey, $options = [])
 * @method \App\Model\Entity\ReferenciasCrictica newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ReferenciasCrictica[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ReferenciasCrictica|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ReferenciasCrictica patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ReferenciasCrictica[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ReferenciasCrictica findOrCreate($search, callable $callback = null)
 */
class ReferenciasCricticasTable extends Table
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

        $this->table('referencias_cricticas');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Cricticas', [
            'foreignKey' => 'crictica_id',
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
            ->requirePresence('ref_cri_mostrar', 'create')
            ->notEmpty('ref_cri_mostrar');

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
        $rules->add($rules->existsIn(['crictica_id'], 'Cricticas'));
        $rules->add($rules->existsIn(['referencia_id'], 'Referencias'));

        return $rules;
    }
}
