<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Vhindicateurs Controller
 *
 * @property \App\Model\Table\VhindicateursTable $Vhindicateurs
 * @method \App\Model\Entity\Vhindicateur[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VhindicateursController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $vhindicateurs = $this->paginate($this->Vhindicateurs);

        $this->set(compact('vhindicateurs'));
    }

    /**
     * View method
     *
     * @param string|null $id Vhindicateur id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $vhindicateur = $this->Vhindicateurs->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('vhindicateur'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $vhindicateur = $this->Vhindicateurs->newEmptyEntity();
        if ($this->request->is('post')) {
            $vhindicateur = $this->Vhindicateurs->patchEntity($vhindicateur, $this->request->getData());
            if ($this->Vhindicateurs->save($vhindicateur)) {
                $this->Flash->success(__('The vhindicateur has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The vhindicateur could not be saved. Please, try again.'));
        }
        $this->set(compact('vhindicateur'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Vhindicateur id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $vhindicateur = $this->Vhindicateurs->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $vhindicateur = $this->Vhindicateurs->patchEntity($vhindicateur, $this->request->getData());
            if ($this->Vhindicateurs->save($vhindicateur)) {
                $this->Flash->success(__('The vhindicateur has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The vhindicateur could not be saved. Please, try again.'));
        }
        $this->set(compact('vhindicateur'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Vhindicateur id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $vhindicateur = $this->Vhindicateurs->get($id);
        if ($this->Vhindicateurs->delete($vhindicateur)) {
            $this->Flash->success(__('The vhindicateur has been deleted.'));
        } else {
            $this->Flash->error(__('The vhindicateur could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
