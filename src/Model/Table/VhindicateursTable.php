<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Vhindicateurs Model
 *
 * @method \App\Model\Entity\Vhindicateur newEmptyEntity()
 * @method \App\Model\Entity\Vhindicateur newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Vhindicateur[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Vhindicateur get($primaryKey, $options = [])
 * @method \App\Model\Entity\Vhindicateur findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Vhindicateur patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Vhindicateur[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Vhindicateur|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Vhindicateur saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Vhindicateur[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Vhindicateur[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Vhindicateur[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Vhindicateur[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class VhindicateursTable extends Table
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

        $this->setTable('vhindicateurs');
        $this->setDisplayField('Id');
        $this->setPrimaryKey('Id');
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
            ->integer('Id')
            ->allowEmptyString('Id', null, 'create');

        $validator
            ->scalar('Designation')
            ->maxLength('Designation', 255)
            ->requirePresence('Designation', 'create')
            ->notEmptyString('Designation');

        $validator
            ->boolean('Actif')
            ->requirePresence('Actif', 'create')
            ->notEmptyString('Actif');

        $validator
            ->date('DateArchivage')
            ->requirePresence('DateArchivage', 'create')
            ->notEmptyDate('DateArchivage');

        return $validator;
    }
}
