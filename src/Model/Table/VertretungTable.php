<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Vertretung Model
 *
 * @method \App\Model\Entity\Vertretung get($primaryKey, $options = [])
 * @method \App\Model\Entity\Vertretung newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Vertretung[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Vertretung|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Vertretung patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Vertretung[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Vertretung findOrCreate($search, callable $callback = null)
 */
class VertretungTable extends Table
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

        $this->table('vertretung');
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
            ->integer('id_klasse')
            ->requirePresence('id_klasse', 'create')
            ->notEmpty('id_klasse');

        $validator
            ->requirePresence('stunde', 'create')
            ->notEmpty('stunde');

        $validator
            ->date('datum')
            ->requirePresence('datum', 'create')
            ->notEmpty('datum');

        $validator
            ->requirePresence('art', 'create')
            ->notEmpty('art');

        $validator
            ->requirePresence('fach', 'create')
            ->notEmpty('fach');

        $validator
            ->requirePresence('raum', 'create')
            ->notEmpty('raum');

        $validator
            ->requirePresence('txt', 'create')
            ->notEmpty('txt');

        $validator
            ->requirePresence('grund', 'create')
            ->notEmpty('grund');

        $validator
            ->dateTime('created_at')
            ->requirePresence('created_at', 'create')
            ->notEmpty('created_at');

        return $validator;
    }
}
