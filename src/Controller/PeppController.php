<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Pepp Controller
 *
 * @property \App\Model\Table\PeppTable $Pepp
 * @method \App\Model\Entity\Pepp[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PeppController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $pepp = $this->paginate($this->Pepp);

        $this->set(compact('pepp'));
        $this->viewBuilder()->setLayout('Chef');
    }

    /**
     * View method
     *
     * @param string|null $id Pepp id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pepp = $this->Pepp->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('pepp'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pepp = $this->Pepp->newEmptyEntity();
        if ($this->request->is('post')) {
            $pepp = $this->Pepp->patchEntity($pepp, $this->request->getData());
            if ($this->Pepp->save($pepp)) {
                $this->Flash->success(__('The pepp has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pepp could not be saved. Please, try again.'));
        }
        $this->set(compact('pepp'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pepp id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pepp = $this->Pepp->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pepp = $this->Pepp->patchEntity($pepp, $this->request->getData());
            if ($this->Pepp->save($pepp)) {
                $this->Flash->success(__('The pepp has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pepp could not be saved. Please, try again.'));
        }
        $this->set(compact('pepp'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pepp id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pepp = $this->Pepp->get($id);
        if ($this->Pepp->delete($pepp)) {
            $this->Flash->success(__('The pepp has been deleted.'));
        } else {
            $this->Flash->error(__('The pepp could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
