<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PeliculasTematicas Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Peliculas
 * @property \Cake\ORM\Association\BelongsTo $Tematicas
 * @property \Cake\ORM\Association\BelongsTo $PelTems
 *
 * @method \App\Model\Entity\PeliculasTematica get($primaryKey, $options = [])
 * @method \App\Model\Entity\PeliculasTematica newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PeliculasTematica[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PeliculasTematica|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PeliculasTematica patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PeliculasTematica[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PeliculasTematica findOrCreate($search, callable $callback = null)
 */
class PeliculasTematicasTable extends Table
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

        $this->table('peliculas_tematicas');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Peliculas', [
            'foreignKey' => 'pelicula_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Tematicas', [
            'foreignKey' => 'tematica_id',
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
        $rules->add($rules->existsIn(['tematica_id'], 'Tematicas'));
      //  $rules->add($rules->existsIn(['pel_tem_id'], 'PelTems'));

        return $rules;
    }
}
