<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Institutos Model
 *
 * @property \Cake\ORM\Association\HasMany $Financiamientos
 *
 * @method \App\Model\Entity\Instituto get($primaryKey, $options = [])
 * @method \App\Model\Entity\Instituto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Instituto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Instituto|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Instituto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Instituto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Instituto findOrCreate($search, callable $callback = null)
 */
class InstitutosTable extends Table
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

        $this->table('institutos');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->hasMany('Financiamientos', [
            'foreignKey' => 'instituto_id'
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
            ->requirePresence('ins_tipo', 'create')
            ->notEmpty('ins_tipo');

        $validator
            ->requirePresence('ins_nombre', 'create')
            ->notEmpty('ins_nombre');

        $validator
            ->requirePresence('ins_mostrar', 'create')
            ->notEmpty('ins_mostrar');

        return $validator;
    }
}
