<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * User Model
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 */
class UserTable extends Table
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

        $this->setTable('user');
        $this->setDisplayField('Id');
        $this->setPrimaryKey('Id');
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
            ->integer('Id')
            ->allowEmptyString('Id', null, 'create');

        $validator
            ->scalar('Username')
            ->maxLength('Username', 50)
            ->requirePresence('Username', 'create')
            ->notEmptyString('Username');

        $validator
            ->scalar('Password')
            ->maxLength('Password', 255)
            ->requirePresence('Password', 'create')
            ->notEmptyString('Password');

        $validator
            ->integer('RoleId')
            ->requirePresence('RoleId', 'create')
            ->notEmptyString('RoleId');

        $validator
            ->dateTime('CreatedAt')
            ->notEmptyDateTime('CreatedAt');

        $validator
            ->dateTime('UpdatedAt')
            ->notEmptyDateTime('UpdatedAt');

        return $validator;
    }
}
