<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CadreLogique Model
 *
 * @method \App\Model\Entity\CadreLogique newEmptyEntity()
 * @method \App\Model\Entity\CadreLogique newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\CadreLogique[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CadreLogique get($primaryKey, $options = [])
 * @method \App\Model\Entity\CadreLogique findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\CadreLogique patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CadreLogique[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\CadreLogique|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CadreLogique saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CadreLogique[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CadreLogique[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\CadreLogique[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CadreLogique[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CadreLogiqueTable extends Table
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

        $this->setTable('cadre_logique');
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
