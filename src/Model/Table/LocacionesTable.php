<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Locaciones Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Lugares
 * @property \Cake\ORM\Association\BelongsTo $Peliculas
 *
 * @method \App\Model\Entity\Locacione get($primaryKey, $options = [])
 * @method \App\Model\Entity\Locacione newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Locacione[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Locacione|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Locacione patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Locacione[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Locacione findOrCreate($search, callable $callback = null)
 */
class LocacionesTable extends Table
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

        $this->table('locaciones');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Lugares', [
            'foreignKey' => 'lugar_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Peliculas', [
            'foreignKey' => 'pelicula_id',
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
            ->requirePresence('log_mostrar', 'create')
            ->notEmpty('log_mostrar');

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
        $rules->add($rules->existsIn(['pelicula_id'], 'Peliculas'));

        return $rules;
    }
}
