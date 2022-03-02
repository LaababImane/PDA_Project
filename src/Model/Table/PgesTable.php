<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pges Model
 *
 * @method \App\Model\Entity\Pge newEmptyEntity()
 * @method \App\Model\Entity\Pge newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Pge[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pge get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pge findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Pge patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pge[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pge|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pge saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pge[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pge[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pge[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pge[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class PgesTable extends Table
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

        $this->setTable('pges');
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
            ->scalar('Designation')
            ->maxLength('Designation', 255)
            ->requirePresence('Designation', 'create')
            ->notEmptyString('Designation');

        $validator
            ->requirePresence('Fichier', 'create')
            ->notEmptyString('Fichier');

        return $validator;
    }
}
