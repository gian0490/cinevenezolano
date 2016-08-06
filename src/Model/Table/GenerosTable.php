<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Generos Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Peliculas
 *
 * @method \App\Model\Entity\Genero get($primaryKey, $options = [])
 * @method \App\Model\Entity\Genero newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Genero[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Genero|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Genero patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Genero[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Genero findOrCreate($search, callable $callback = null)
 */
class GenerosTable extends Table
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

        $this->table('generos');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsToMany('Peliculas', [
            'foreignKey' => 'genero_id',
            'targetForeignKey' => 'pelicula_id',
            'joinTable' => 'peliculas_generos'
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
            ->requirePresence('gen_nombre', 'create')
            ->notEmpty('gen_nombre');

        $validator
            ->requirePresence('gen_mostrar', 'create')
            ->notEmpty('gen_mostrar');

        return $validator;
    }
}
