<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * BanqueProjet Controller
 *
 * @property \App\Model\Table\BanqueProjetTable $BanqueProjet
 * @method \App\Model\Entity\BanqueProjet[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BanqueProjetController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $banqueProjet = $this->paginate($this->BanqueProjet);

        $this->set(compact('banqueProjet'));
        $this->viewBuilder()->setLayout('Chef');
    }

    /**
     * View method
     *
     * @param string|null $id Banque Projet id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $banqueProjet = $this->BanqueProjet->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('banqueProjet'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $banqueProjet = $this->BanqueProjet->newEmptyEntity();
        if ($this->request->is('post')) {
            $banqueProjet = $this->BanqueProjet->patchEntity($banqueProjet, $this->request->getData());
            if ($this->BanqueProjet->save($banqueProjet)) {
                $this->Flash->success(__('The banque projet has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The banque projet could not be saved. Please, try again.'));
        }
        $this->set(compact('banqueProjet'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Banque Projet id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $banqueProjet = $this->BanqueProjet->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $banqueProjet = $this->BanqueProjet->patchEntity($banqueProjet, $this->request->getData());
            if ($this->BanqueProjet->save($banqueProjet)) {
                $this->Flash->success(__('The banque projet has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The banque projet could not be saved. Please, try again.'));
        }
        $this->set(compact('banqueProjet'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Banque Projet id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $banqueProjet = $this->BanqueProjet->get($id);
        if ($this->BanqueProjet->delete($banqueProjet)) {
            $this->Flash->success(__('The banque projet has been deleted.'));
        } else {
            $this->Flash->error(__('The banque projet could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
