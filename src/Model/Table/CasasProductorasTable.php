<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CasasProductoras Model
 * 
 * @method \App\Model\Entity\CasasProductora get($primaryKey, $options = [])
 * @method \App\Model\Entity\CasasProductora newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CasasProductora[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CasasProductora|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CasasProductora patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CasasProductora[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CasasProductora findOrCreate($search, callable $callback = null)
 */
class CasasProductorasTable extends Table
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

        $this->table('casas_productoras');
        $this->displayField('id');
        $this->primaryKey('id');
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
            ->requirePresence('cas_pro_nombre', 'create')
            ->notEmpty('cas_pro_nombre');

        $validator
            ->requirePresence('cas_pro_mostrar', 'create')
            ->notEmpty('cas_pro_mostrar');

        return $validator;
    }
}
