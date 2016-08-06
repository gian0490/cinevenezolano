<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FichasTecnicas Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Peliculas
 * @property \Cake\ORM\Association\BelongsTo $Personas
 * @property \Cake\ORM\Association\BelongsTo $CasasProductoras
 * @property \Cake\ORM\Association\BelongsTo $Guiones
 *
 * @method \App\Model\Entity\FichasTecnica get($primaryKey, $options = [])
 * @method \App\Model\Entity\FichasTecnica newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\FichasTecnica[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FichasTecnica|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FichasTecnica patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FichasTecnica[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\FichasTecnica findOrCreate($search, callable $callback = null)
 */
class FichasTecnicasTable extends Table
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

        $this->table('fichas_tecnicas');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Peliculas', [
            'foreignKey' => 'pelicula_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Personas', [
            'foreignKey' => 'persona_id'
        ]);
        $this->belongsTo('CasasProductoras', [
            'foreignKey' => 'casa_productora_id'
        ]);
        $this->belongsTo('Guiones', [
            'foreignKey' => 'tipo_cargo_id'
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
            ->requirePresence('fic_tec_mostrar', 'create')
            ->notEmpty('fic_tec_mostrar');

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
        $rules->add($rules->existsIn(['persona_id'], 'Personas'));
        $rules->add($rules->existsIn(['casa_productora_id'], 'CasasProductoras'));
        $rules->add($rules->existsIn(['tipo_cargo_id'], 'Guiones'));

        return $rules;
    }
}
