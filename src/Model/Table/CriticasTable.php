<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cricticas Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Peliculas
 * @property \Cake\ORM\Association\BelongsToMany $Referencias
 *
 * @method \App\Model\Entity\Crictica get($primaryKey, $options = [])
 * @method \App\Model\Entity\Crictica newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Crictica[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Crictica|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Crictica patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Crictica[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Crictica findOrCreate($search, callable $callback = null)
 */
class CriticasTable extends Table
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

        $this->table('criticas');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Peliculas', [
            'foreignKey' => 'pelicula_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsToMany('Referencias', [
            'foreignKey' => 'critica_id',
            'targetForeignKey' => 'referencia_id',
            'joinTable' => 'referencias_criticas'
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
            ->requirePresence('cri_descripcion', 'create')
            ->notEmpty('cri_descripcion');

        $validator
            ->requirePresence('cri_mostrar', 'create')
            ->notEmpty('cri_mostrar');

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

        return $rules;
    }
}
