<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * AcquisitionTerres Controller
 *
 * @property \App\Model\Table\AcquisitionTerresTable $AcquisitionTerres
 * @method \App\Model\Entity\AcquisitionTerre[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AcquisitionTerresController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $acquisitionTerres = $this->paginate($this->AcquisitionTerres);

        $this->set(compact('acquisitionTerres'));
        $this->viewBuilder()->setLayout('Chef');
    }

    /**
     * View method
     *
     * @param string|null $id Acquisition Terre id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $acquisitionTerre = $this->AcquisitionTerres->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('acquisitionTerre'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $acquisitionTerre = $this->AcquisitionTerres->newEmptyEntity();
        if ($this->request->is('post')) {
            $acquisitionTerre = $this->AcquisitionTerres->patchEntity($acquisitionTerre, $this->request->getData());
            if ($this->AcquisitionTerres->save($acquisitionTerre)) {
                $this->Flash->success(__('The acquisition terre has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The acquisition terre could not be saved. Please, try again.'));
        }
        $this->set(compact('acquisitionTerre'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Acquisition Terre id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $acquisitionTerre = $this->AcquisitionTerres->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $acquisitionTerre = $this->AcquisitionTerres->patchEntity($acquisitionTerre, $this->request->getData());
            if ($this->AcquisitionTerres->save($acquisitionTerre)) {
                $this->Flash->success(__('The acquisition terre has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The acquisition terre could not be saved. Please, try again.'));
        }
        $this->set(compact('acquisitionTerre'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Acquisition Terre id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $acquisitionTerre = $this->AcquisitionTerres->get($id);
        if ($this->AcquisitionTerres->delete($acquisitionTerre)) {
            $this->Flash->success(__('The acquisition terre has been deleted.'));
        } else {
            $this->Flash->error(__('The acquisition terre could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
