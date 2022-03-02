<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BanqueProjet Model
 *
 * @method \App\Model\Entity\BanqueProjet newEmptyEntity()
 * @method \App\Model\Entity\BanqueProjet newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\BanqueProjet[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BanqueProjet get($primaryKey, $options = [])
 * @method \App\Model\Entity\BanqueProjet findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\BanqueProjet patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\BanqueProjet[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\BanqueProjet|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BanqueProjet saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BanqueProjet[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\BanqueProjet[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\BanqueProjet[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\BanqueProjet[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class BanqueProjetTable extends Table
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

        $this->setTable('banque_projet');
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
