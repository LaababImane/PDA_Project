<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Pges Controller
 *
 * @property \App\Model\Table\PgesTable $Pges
 * @method \App\Model\Entity\Pge[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PgesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $pges = $this->paginate($this->Pges);

        $this->set(compact('pges'));
        $this->viewBuilder()->setLayout('Chef');
    }

    /**
     * View method
     *
     * @param string|null $id Pge id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pge = $this->Pges->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('pge'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pge = $this->Pges->newEmptyEntity();
        if ($this->request->is('post')) {
            $pge = $this->Pges->patchEntity($pge, $this->request->getData());
            if ($this->Pges->save($pge)) {
                $this->Flash->success(__('The pge has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pge could not be saved. Please, try again.'));
        }
        $this->set(compact('pge'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pge id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pge = $this->Pges->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pge = $this->Pges->patchEntity($pge, $this->request->getData());
            if ($this->Pges->save($pge)) {
                $this->Flash->success(__('The pge has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pge could not be saved. Please, try again.'));
        }
        $this->set(compact('pge'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pge id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pge = $this->Pges->get($id);
        if ($this->Pges->delete($pge)) {
            $this->Flash->success(__('The pge has been deleted.'));
        } else {
            $this->Flash->error(__('The pge could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
