<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Administrations Controller
 *
 * @property \App\Model\Table\AdministrationsTable $Administrations
 * @method \App\Model\Entity\Administration[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AdministrationsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $administrations = $this->paginate($this->Administrations);

        $this->set(compact('administrations'));
    }

    /**
     * View method
     *
     * @param string|null $id Administration id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $administration = $this->Administrations->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('administration'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $administration = $this->Administrations->newEmptyEntity();
        if ($this->request->is('post')) {
            $administration = $this->Administrations->patchEntity($administration, $this->request->getData());
            if ($this->Administrations->save($administration)) {
                $this->Flash->success(__('The administration has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The administration could not be saved. Please, try again.'));
        }
        $this->set(compact('administration'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Administration id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $administration = $this->Administrations->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $administration = $this->Administrations->patchEntity($administration, $this->request->getData());
            if ($this->Administrations->save($administration)) {
                $this->Flash->success(__('The administration has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The administration could not be saved. Please, try again.'));
        }
        $this->set(compact('administration'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Administration id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $administration = $this->Administrations->get($id);
        if ($this->Administrations->delete($administration)) {
            $this->Flash->success(__('The administration has been deleted.'));
        } else {
            $this->Flash->error(__('The administration could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
