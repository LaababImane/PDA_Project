<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Conduite Model
 *
 * @method \App\Model\Entity\Conduite newEmptyEntity()
 * @method \App\Model\Entity\Conduite newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Conduite[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Conduite get($primaryKey, $options = [])
 * @method \App\Model\Entity\Conduite findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Conduite patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Conduite[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Conduite|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Conduite saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Conduite[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Conduite[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Conduite[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Conduite[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ConduiteTable extends Table
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

        $this->setTable('conduite');
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
            ->integer('Fichier')
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
