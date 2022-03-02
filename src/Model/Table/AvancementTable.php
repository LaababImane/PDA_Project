<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Avancement Model
 *
 * @method \App\Model\Entity\Avancement newEmptyEntity()
 * @method \App\Model\Entity\Avancement newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Avancement[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Avancement get($primaryKey, $options = [])
 * @method \App\Model\Entity\Avancement findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Avancement patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Avancement[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Avancement|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Avancement saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Avancement[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Avancement[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Avancement[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Avancement[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class AvancementTable extends Table
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

        $this->setTable('avancement');
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
        ->scalar('Fichier')
        ->maxLength('Fichier', 255)
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
