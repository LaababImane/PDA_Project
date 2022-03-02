<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Rapports Controller
 *
 * @property \App\Model\Table\RapportsTable $Rapports
 * @method \App\Model\Entity\Rapport[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RapportsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $rapports = $this->paginate($this->Rapports);

        $this->set(compact('rapports'));
        $this->viewBuilder()->setLayout('Chef');
    }

    /**
     * View method
     *
     * @param string|null $id Rapport id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $rapport = $this->Rapports->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('rapport'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $rapport = $this->Rapports->newEmptyEntity();
        if ($this->request->is('post')) {
            $rapport = $this->Rapports->patchEntity($rapport, $this->request->getData());
            if ($this->Rapports->save($rapport)) {
                $this->Flash->success(__('The rapport has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rapport could not be saved. Please, try again.'));
        }
        $this->set(compact('rapport'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Rapport id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $rapport = $this->Rapports->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rapport = $this->Rapports->patchEntity($rapport, $this->request->getData());
            if ($this->Rapports->save($rapport)) {
                $this->Flash->success(__('The rapport has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rapport could not be saved. Please, try again.'));
        }
        $this->set(compact('rapport'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Rapport id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $rapport = $this->Rapports->get($id);
        if ($this->Rapports->delete($rapport)) {
            $this->Flash->success(__('The rapport has been deleted.'));
        } else {
            $this->Flash->error(__('The rapport could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
