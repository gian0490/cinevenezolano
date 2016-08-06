<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PeliculasGeneros Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Peliculas
 * @property \Cake\ORM\Association\BelongsTo $Generos
 *
 * @method \App\Model\Entity\PeliculasGenero get($primaryKey, $options = [])
 * @method \App\Model\Entity\PeliculasGenero newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PeliculasGenero[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PeliculasGenero|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PeliculasGenero patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PeliculasGenero[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PeliculasGenero findOrCreate($search, callable $callback = null)
 */
class PeliculasGenerosTable extends Table
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

        $this->table('peliculas_generos');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Peliculas', [
            'foreignKey' => 'pelicula_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Generos', [
            'foreignKey' => 'genero_id',
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
            ->requirePresence('pel_gen_mostrar', 'create')
            ->notEmpty('pel_gen_mostrar');

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
        $rules->add($rules->existsIn(['genero_id'], 'Generos'));

        return $rules;
    }
}
