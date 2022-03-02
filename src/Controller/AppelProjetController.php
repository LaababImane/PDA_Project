<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * AppelProjet Controller
 *
 * @property \App\Model\Table\AppelProjetTable $AppelProjet
 * @method \App\Model\Entity\AppelProjet[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AppelProjetController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $appelProjet = $this->paginate($this->AppelProjet);

        $this->set(compact('appelProjet'));
        $this->viewBuilder()->setLayout('Chef');
    }

    /**
     * View method
     *
     * @param string|null $id Appel Projet id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $appelProjet = $this->AppelProjet->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('appelProjet'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $appelProjet = $this->AppelProjet->newEmptyEntity();
        if ($this->request->is('post')) {
            $appelProjet = $this->AppelProjet->patchEntity($appelProjet, $this->request->getData());
            if ($this->AppelProjet->save($appelProjet)) {
                $this->Flash->success(__('The appel projet has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The appel projet could not be saved. Please, try again.'));
        }
        $this->set(compact('appelProjet'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Appel Projet id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $appelProjet = $this->AppelProjet->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $appelProjet = $this->AppelProjet->patchEntity($appelProjet, $this->request->getData());
            if ($this->AppelProjet->save($appelProjet)) {
                $this->Flash->success(__('The appel projet has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The appel projet could not be saved. Please, try again.'));
        }
        $this->set(compact('appelProjet'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Appel Projet id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $appelProjet = $this->AppelProjet->get($id);
        if ($this->AppelProjet->delete($appelProjet)) {
            $this->Flash->success(__('The appel projet has been deleted.'));
        } else {
            $this->Flash->error(__('The appel projet could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
