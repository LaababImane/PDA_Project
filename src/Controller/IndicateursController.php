<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Indicateurs Controller
 *
 * @property \App\Model\Table\IndicateursTable $Indicateurs
 * @method \App\Model\Entity\Indicateur[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;


 class IndicateursController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */

    public function index()
    {
        $indicateurs = $this->paginate($this->Indicateurs);
        $dsn = 'mysql://root:password@localhost/cake_db';
        ConnectionManager::setConfig( ['url' => $dsn]);
        $connection = ConnectionManager::get('default');
        $cord = ($connection->execute('SELECT *  FROM map')->fetchAll('assoc'));
        $data = json_encode($cord); 
        $this->set(compact('data'));
        $this->set(compact('indicateurs'));

    }

    /**
     * View method
     *
     * @param string|null $id Indicateur id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $indicateur = $this->Indicateurs->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('indicateur'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $indicateur = $this->Indicateurs->newEmptyEntity();
        if ($this->request->is('post')) {
            $indicateur = $this->Indicateurs->patchEntity($indicateur, $this->request->getData());
            if ($this->Indicateurs->save($indicateur)) {
                $this->Flash->success(__('The indicateur has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The indicateur could not be saved. Please, try again.'));
        }
        $this->set(compact('indicateur'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Indicateur id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $indicateur = $this->Indicateurs->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $indicateur = $this->Indicateurs->patchEntity($indicateur, $this->request->getData());
            if ($this->Indicateurs->save($indicateur)) {
                $this->Flash->success(__('The indicateur has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The indicateur could not be saved. Please, try again.'));
        }
        $this->set(compact('indicateur'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Indicateur id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $indicateur = $this->Indicateurs->get($id);
        if ($this->Indicateurs->delete($indicateur)) {
            $this->Flash->success(__('The indicateur has been deleted.'));
        } else {
            $this->Flash->error(__('The indicateur could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function display(){
        $this->viewBuilder()->setLayout('Comite');
        $indicateurs = $this->paginate($this->Indicateurs);
        $this->set(compact('indicateurs'));
    }
    public function deleteAll()
    {
        $this->request->allowMethod(['post', 'delete']);
        $ids = $this->request->getData('ids');

        if($this->Indicateurs->deleteAll(['Indicateurs.id IN'=>$ids])){
            $this->Flash->success(__('The users has been deleted.'));
        }
        return $this->redirect(['action' => 'index']);
    }


  
}
