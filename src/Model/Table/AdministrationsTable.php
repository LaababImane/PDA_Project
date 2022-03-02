<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Administrations Model
 *
 * @method \App\Model\Entity\Administration newEmptyEntity()
 * @method \App\Model\Entity\Administration newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Administration[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Administration get($primaryKey, $options = [])
 * @method \App\Model\Entity\Administration findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Administration patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Administration[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Administration|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Administration saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Administration[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Administration[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Administration[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Administration[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class AdministrationsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('administrations');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('Nom')
            ->maxLength('Nom', 255)
            ->requirePresence('Nom', 'create')
            ->notEmptyString('Nom');

        $validator
            ->scalar('Adresse')
            ->maxLength('Adresse', 255)
            ->requirePresence('Adresse', 'create')
            ->notEmptyString('Adresse');

        $validator
            ->integer('Telephone')
            ->requirePresence('Telephone', 'create')
            ->notEmptyString('Telephone');

        return $validator;
    }
}
