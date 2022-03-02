<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CadreLogique Controller
 *
 * @property \App\Model\Table\CadreLogiqueTable $CadreLogique
 * @method \App\Model\Entity\CadreLogique[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CadreLogiqueController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $cadreLogique = $this->paginate($this->CadreLogique);

        $this->set(compact('cadreLogique'));
        $this->viewBuilder()->setLayout('Chef');
    }

    /**
     * View method
     *
     * @param string|null $id Cadre Logique id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cadreLogique = $this->CadreLogique->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('cadreLogique'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cadreLogique = $this->CadreLogique->newEmptyEntity();
        if ($this->request->is('post')) {
            $cadreLogique = $this->CadreLogique->patchEntity($cadreLogique, $this->request->getData());
            if ($this->CadreLogique->save($cadreLogique)) {
                $this->Flash->success(__('The cadre logique has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cadre logique could not be saved. Please, try again.'));
        }
        $this->set(compact('cadreLogique'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cadre Logique id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cadreLogique = $this->CadreLogique->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cadreLogique = $this->CadreLogique->patchEntity($cadreLogique, $this->request->getData());
            if ($this->CadreLogique->save($cadreLogique)) {
                $this->Flash->success(__('The cadre logique has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cadre logique could not be saved. Please, try again.'));
        }
        $this->set(compact('cadreLogique'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cadre Logique id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cadreLogique = $this->CadreLogique->get($id);
        if ($this->CadreLogique->delete($cadreLogique)) {
            $this->Flash->success(__('The cadre logique has been deleted.'));
        } else {
            $this->Flash->error(__('The cadre logique could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
