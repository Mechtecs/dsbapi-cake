<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Klasse Model
 *
 * @method \App\Model\Entity\Klasse get($primaryKey, $options = [])
 * @method \App\Model\Entity\Klasse newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Klasse[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Klasse|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Klasse patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Klasse[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Klasse findOrCreate($search, callable $callback = null)
 */
class KlasseTable extends Table
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

        $this->table('klasse');
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
            ->requirePresence('bezeichnung', 'create')
            ->notEmpty('bezeichnung')
            ->add('bezeichnung', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->requirePresence('lehrer', 'create')
            ->notEmpty('lehrer');

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
        $rules->add($rules->isUnique(['bezeichnung']));
        return $rules;
    }
}
