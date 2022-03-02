<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Indicateurs Model
 *
 * @method \App\Model\Entity\Indicateur newEmptyEntity()
 * @method \App\Model\Entity\Indicateur newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Indicateur[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Indicateur get($primaryKey, $options = [])
 * @method \App\Model\Entity\Indicateur findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Indicateur patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Indicateur[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Indicateur|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Indicateur saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Indicateur[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Indicateur[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Indicateur[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Indicateur[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class IndicateursTable extends Table
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

        $this->setTable('indicateurs');
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
            ->scalar('Nom_indicateur')
            ->maxLength('Nom_indicateur', 255)
            ->requirePresence('Nom_indicateur', 'create')
            ->notEmptyString('Nom_indicateur');

        $validator
            ->scalar('Designation')
            ->maxLength('Designation', 255)
            ->requirePresence('Designation', 'create')
            ->notEmptyString('Designation');

        $validator
            ->scalar('Administrations')
            ->maxLength('Administrations', 255)
            ->requirePresence('Administrations', 'create')
            ->notEmptyString('Administrations');

        $validator
            ->scalar('Contribution')
            ->maxLength('Contribution', 255)
            ->requirePresence('Contribution', 'create')
            ->notEmptyString('Contribution');

        $validator
            ->scalar('responsable')
            ->maxLength('responsable', 255)
            ->notEmptyString('responsable');

        return $validator;
    }
}
