<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Guiones Model
 *
 * @method \App\Model\Entity\Guione get($primaryKey, $options = [])
 * @method \App\Model\Entity\Guione newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Guione[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Guione|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Guione patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Guione[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Guione findOrCreate($search, callable $callback = null)
 */
class GuionesTable extends Table
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

        $this->table('guiones');
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
            ->allowEmpty('gui_tipo');

        $validator
            ->allowEmpty('gui_obra');

        $validator
            ->allowEmpty('gui_autor_obra');

        $validator
            ->allowEmpty('tip_car_nombre');

        $validator
            ->requirePresence('tip_car_mostrar', 'create')
            ->notEmpty('tip_car_mostrar');

        return $validator;
    }
}
