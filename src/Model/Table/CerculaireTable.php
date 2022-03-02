<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cerculaire Model
 *
 * @method \App\Model\Entity\Cerculaire newEmptyEntity()
 * @method \App\Model\Entity\Cerculaire newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Cerculaire[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cerculaire get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cerculaire findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Cerculaire patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cerculaire[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cerculaire|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cerculaire saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cerculaire[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Cerculaire[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Cerculaire[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Cerculaire[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CerculaireTable extends Table
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

        $this->setTable('cerculaire');
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
