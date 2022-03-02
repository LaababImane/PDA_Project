<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Auea Controller
 *
 * @property \App\Model\Table\AueaTable $Auea
 * @method \App\Model\Entity\Auea[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AueaController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $auea = $this->paginate($this->Auea);

        $this->set(compact('auea'));
        $this->viewBuilder()->setLayout('Chef');
    }

    /**
     * View method
     *
     * @param string|null $id Auea id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $auea = $this->Auea->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('auea'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $auea = $this->Auea->newEmptyEntity();
        if ($this->request->is('post')) {
            $auea = $this->Auea->patchEntity($auea, $this->request->getData());
            if ($this->Auea->save($auea)) {
                $this->Flash->success(__('The auea has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The auea could not be saved. Please, try again.'));
        }
        $this->set(compact('auea'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Auea id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $auea = $this->Auea->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $auea = $this->Auea->patchEntity($auea, $this->request->getData());
            if ($this->Auea->save($auea)) {
                $this->Flash->success(__('The auea has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The auea could not be saved. Please, try again.'));
        }
        $this->set(compact('auea'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Auea id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $auea = $this->Auea->get($id);
        if ($this->Auea->delete($auea)) {
            $this->Flash->success(__('The auea has been deleted.'));
        } else {
            $this->Flash->error(__('The auea could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
