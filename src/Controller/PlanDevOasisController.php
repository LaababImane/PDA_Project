<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * PlanDevOasis Controller
 *
 * @property \App\Model\Table\PlanDevOasisTable $PlanDevOasis
 * @method \App\Model\Entity\PlanDevOasi[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PlanDevOasisController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $planDevOasis = $this->paginate($this->PlanDevOasis);

        $this->set(compact('planDevOasis'));
        $this->viewBuilder()->setLayout('Chef');
    }

    /**
     * View method
     *
     * @param string|null $id Plan Dev Oasi id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $planDevOasi = $this->PlanDevOasis->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('planDevOasi'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $planDevOasi = $this->PlanDevOasis->newEmptyEntity();
        if ($this->request->is('post')) {
            $planDevOasi = $this->PlanDevOasis->patchEntity($planDevOasi, $this->request->getData());
            if ($this->PlanDevOasis->save($planDevOasi)) {
                $this->Flash->success(__('The plan dev oasi has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The plan dev oasi could not be saved. Please, try again.'));
        }
        $this->set(compact('planDevOasi'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Plan Dev Oasi id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $planDevOasi = $this->PlanDevOasis->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $planDevOasi = $this->PlanDevOasis->patchEntity($planDevOasi, $this->request->getData());
            if ($this->PlanDevOasis->save($planDevOasi)) {
                $this->Flash->success(__('The plan dev oasi has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The plan dev oasi could not be saved. Please, try again.'));
        }
        $this->set(compact('planDevOasi'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Plan Dev Oasi id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $planDevOasi = $this->PlanDevOasis->get($id);
        if ($this->PlanDevOasis->delete($planDevOasi)) {
            $this->Flash->success(__('The plan dev oasi has been deleted.'));
        } else {
            $this->Flash->error(__('The plan dev oasi could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
