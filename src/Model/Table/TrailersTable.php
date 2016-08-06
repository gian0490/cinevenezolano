<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Trailers Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Peliculas
 * @property \Cake\ORM\Association\HasMany $Peliculas
 *
 * @method \App\Model\Entity\Trailer get($primaryKey, $options = [])
 * @method \App\Model\Entity\Trailer newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Trailer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Trailer|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Trailer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Trailer[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Trailer findOrCreate($search, callable $callback = null)
 */
class TrailersTable extends Table
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

        $this->table('trailers');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Peliculas', [
            'foreignKey' => 'pelicula_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Peliculas', [
            'foreignKey' => 'trailer_id'
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
            ->requirePresence('tra_ruta_trailer', 'create')
            ->notEmpty('tra_ruta_trailer');

        $validator
            ->requirePresence('tra_mostrar', 'create')
            ->notEmpty('tra_mostrar');

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
