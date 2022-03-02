<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Autorisations Controller
 *
 * @property \App\Model\Table\AutorisationsTable $Autorisations
 * @method \App\Model\Entity\Autorisation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AutorisationsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $autorisations = $this->paginate($this->Autorisations);

        $this->set(compact('autorisations'));
        $this->viewBuilder()->setLayout('Chef');
    }

    /**
     * View method
     *
     * @param string|null $id Autorisation id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $autorisation = $this->Autorisations->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('autorisation'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $autorisation = $this->Autorisations->newEmptyEntity();
        if ($this->request->is('post')) {
            $autorisation = $this->Autorisations->patchEntity($autorisation, $this->request->getData());
            if ($this->Autorisations->save($autorisation)) {
                $this->Flash->success(__('The autorisation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The autorisation could not be saved. Please, try again.'));
        }
        $this->set(compact('autorisation'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Autorisation id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $autorisation = $this->Autorisations->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $autorisation = $this->Autorisations->patchEntity($autorisation, $this->request->getData());
            if ($this->Autorisations->save($autorisation)) {
                $this->Flash->success(__('The autorisation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The autorisation could not be saved. Please, try again.'));
        }
        $this->set(compact('autorisation'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Autorisation id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $autorisation = $this->Autorisations->get($id);
        if ($this->Autorisations->delete($autorisation)) {
            $this->Flash->success(__('The autorisation has been deleted.'));
        } else {
            $this->Flash->error(__('The autorisation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
