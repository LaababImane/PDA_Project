<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * RehabilitationPalmeraies Controller
 *
 * @property \App\Model\Table\RehabilitationPalmeraiesTable $RehabilitationPalmeraies
 * @method \App\Model\Entity\RehabilitationPalmeraie[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RehabilitationPalmeraiesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $rehabilitationPalmeraies = $this->paginate($this->RehabilitationPalmeraies);

        $this->set(compact('rehabilitationPalmeraies'));
        $this->viewBuilder()->setLayout('Chef');
    }

    /**
     * View method
     *
     * @param string|null $id Rehabilitation Palmeraie id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $rehabilitationPalmeraie = $this->RehabilitationPalmeraies->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('rehabilitationPalmeraie'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $rehabilitationPalmeraie = $this->RehabilitationPalmeraies->newEmptyEntity();
        if ($this->request->is('post')) {
            $rehabilitationPalmeraie = $this->RehabilitationPalmeraies->patchEntity($rehabilitationPalmeraie, $this->request->getData());
            if ($this->RehabilitationPalmeraies->save($rehabilitationPalmeraie)) {
                $this->Flash->success(__('The rehabilitation palmeraie has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rehabilitation palmeraie could not be saved. Please, try again.'));
        }
        $this->set(compact('rehabilitationPalmeraie'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Rehabilitation Palmeraie id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $rehabilitationPalmeraie = $this->RehabilitationPalmeraies->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rehabilitationPalmeraie = $this->RehabilitationPalmeraies->patchEntity($rehabilitationPalmeraie, $this->request->getData());
            if ($this->RehabilitationPalmeraies->save($rehabilitationPalmeraie)) {
                $this->Flash->success(__('The rehabilitation palmeraie has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rehabilitation palmeraie could not be saved. Please, try again.'));
        }
        $this->set(compact('rehabilitationPalmeraie'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Rehabilitation Palmeraie id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $rehabilitationPalmeraie = $this->RehabilitationPalmeraies->get($id);
        if ($this->RehabilitationPalmeraies->delete($rehabilitationPalmeraie)) {
            $this->Flash->success(__('The rehabilitation palmeraie has been deleted.'));
        } else {
            $this->Flash->error(__('The rehabilitation palmeraie could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
