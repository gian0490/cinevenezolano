<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Personas Model
 *
 * @property \Cake\ORM\Association\HasMany $FichasTecnicas
 * @property \Cake\ORM\Association\HasMany $Repartos
 *
 * @method \App\Model\Entity\Persona get($primaryKey, $options = [])
 * @method \App\Model\Entity\Persona newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Persona[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Persona|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Persona patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Persona[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Persona findOrCreate($search, callable $callback = null)
 */
class PersonasTable extends Table
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

        $this->table('personas');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->hasMany('FichasTecnicas', [
            'foreignKey' => 'persona_id'
        ]);
        $this->hasMany('Repartos', [
            'foreignKey' => 'persona_id'
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
            ->requirePresence('per_primer_nombre', 'create')
            ->notEmpty('per_primer_nombre');

        $validator
            ->allowEmpty('per_segundo_nombre');

        $validator
            ->requirePresence('per_primer_apellido', 'create')
            ->notEmpty('per_primer_apellido');

        $validator
            ->allowEmpty('per_segundo_apellido');

        $validator
            ->requirePresence('per_sexo', 'create')
            ->notEmpty('per_sexo');

        $validator
            ->date('per_fecha_nac')
            ->allowEmpty('per_fecha_nac');

        $validator
            ->date('per_fecha_falle')
            ->allowEmpty('per_fecha_falle');

        $validator
            ->allowEmpty('per_ruta_foto');

        $validator
            ->allowEmpty('per_biografia');

        $validator
            ->requirePresence('per_mostrar', 'create')
            ->notEmpty('per_mostrar');

        return $validator;
    }
}
