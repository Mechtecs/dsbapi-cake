<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DayMessage Model
 *
 * @method \App\Model\Entity\DayMessage get($primaryKey, $options = [])
 * @method \App\Model\Entity\DayMessage newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DayMessage[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DayMessage|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DayMessage patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DayMessage[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DayMessage findOrCreate($search, callable $callback = null)
 */
class DayMessageTable extends Table
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

        $this->table('day_message');
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
            ->date('datum')
            ->requirePresence('datum', 'create')
            ->notEmpty('datum');

        $validator
            ->integer('row')
            ->requirePresence('row', 'create')
            ->notEmpty('row');

        $validator
            ->requirePresence('txt', 'create')
            ->notEmpty('txt');

        return $validator;
    }
}
