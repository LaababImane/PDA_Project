<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ReseauDistribution Model
 *
 * @method \App\Model\Entity\ReseauDistribution newEmptyEntity()
 * @method \App\Model\Entity\ReseauDistribution newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ReseauDistribution[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ReseauDistribution get($primaryKey, $options = [])
 * @method \App\Model\Entity\ReseauDistribution findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ReseauDistribution patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ReseauDistribution[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ReseauDistribution|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ReseauDistribution saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ReseauDistribution[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ReseauDistribution[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ReseauDistribution[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ReseauDistribution[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ReseauDistributionTable extends Table
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

        $this->setTable('reseau_distribution');
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
            ->notEmptyString('Fichier')
            ->add('Fichier', [
                'validExtension' => [
                'rule' => ['extension',['pdf']], // default  ['gif', 'jpeg', 'png', 'jpg']
                'message' => 'These files extension are allowed: .pdf'
            ]]);

        return $validator;
    }
}
