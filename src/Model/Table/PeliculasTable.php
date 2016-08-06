<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Peliculas Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Trailers
 * @property \Cake\ORM\Association\HasMany $Cricticas
 * @property \Cake\ORM\Association\HasMany $FichasTecnicas
 * @property \Cake\ORM\Association\HasMany $Financiamientos
 * @property \Cake\ORM\Association\HasMany $Locaciones
 * @property \Cake\ORM\Association\HasMany $Repartos
 * @property \Cake\ORM\Association\HasMany $Trailers
 * @property \Cake\ORM\Association\BelongsToMany $Generos
 * @property \Cake\ORM\Association\BelongsToMany $Referencias
 * @property \Cake\ORM\Association\BelongsToMany $Tematicas
 *
 * @method \App\Model\Entity\Pelicula get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pelicula newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Pelicula[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pelicula|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pelicula patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pelicula[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pelicula findOrCreate($search, callable $callback = null)
 */
class PeliculasTable extends Table
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

        $this->table('peliculas');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Trailers', [
            'foreignKey' => 'trailer_id'
        ]);
        $this->hasMany('Cricticas', [
            'foreignKey' => 'pelicula_id'
        ]);
        $this->hasMany('FichasTecnicas', [
            'foreignKey' => 'pelicula_id'
        ]);
        $this->hasMany('Financiamientos', [
            'foreignKey' => 'pelicula_id'
        ]);
        $this->hasMany('Locaciones', [
            'foreignKey' => 'pelicula_id'
        ]);
        $this->hasMany('Repartos', [
            'foreignKey' => 'pelicula_id'
        ]);
        $this->hasMany('Trailers', [
            'foreignKey' => 'pelicula_id'
        ]);
        $this->belongsToMany('Generos', [
            'foreignKey' => 'pelicula_id',
            'targetForeignKey' => 'genero_id',
            'joinTable' => 'peliculas_generos'
        ]);
        $this->belongsToMany('Referencias', [
            'foreignKey' => 'pelicula_id',
            'targetForeignKey' => 'referencia_id',
            'joinTable' => 'peliculas_referencias'
        ]);
        $this->belongsToMany('Tematicas', [
            'foreignKey' => 'pelicula_id',
            'targetForeignKey' => 'tematica_id',
            'joinTable' => 'peliculas_tematicas'
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
            ->requirePresence('pel_titulo', 'create')
            ->notEmpty('pel_titulo');

        $validator
            ->date('pel_ano')
            ->requirePresence('pel_ano', 'create')
            ->notEmpty('pel_ano');

        $validator
            ->allowEmpty('pel_sinopsis');

        $validator
            ->decimal('pel_recaudo_estreno')
            ->allowEmpty('pel_recaudo_estreno');

        $validator
            ->decimal('pel_recaudo_acumulado')
            ->allowEmpty('pel_recaudo_acumulado');

        $validator
            ->decimal('pel_espectadoresestreno')
            ->allowEmpty('pel_espectadoresestreno');

        $validator
            ->decimal('pel_espectadores_acumulado')
            ->allowEmpty('pel_espectadores_acumulado');

        $validator
            ->allowEmpty('pel_ruta_ima_captura');

        $validator
            ->allowEmpty('pel_ruta_ima_poster');

        $validator
            ->allowEmpty('pel_ruta_pelicula');

        $validator
            ->requirePresence('pel_mostrar', 'create')
            ->notEmpty('pel_mostrar');

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
        $rules->add($rules->existsIn(['trailer_id'], 'Trailers'));

        return $rules;
    }
}
