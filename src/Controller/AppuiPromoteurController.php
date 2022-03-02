<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * AppuiPromoteur Controller
 *
 * @property \App\Model\Table\AppuiPromoteurTable $AppuiPromoteur
 * @method \App\Model\Entity\AppuiPromoteur[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AppuiPromoteurController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $appuiPromoteur = $this->paginate($this->AppuiPromoteur);

        $this->set(compact('appuiPromoteur'));
        $this->viewBuilder()->setLayout('Chef');
    }

    /**
     * View method
     *
     * @param string|null $id Appui Promoteur id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $appuiPromoteur = $this->AppuiPromoteur->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('appuiPromoteur'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $appuiPromoteur = $this->AppuiPromoteur->newEmptyEntity();
        if ($this->request->is('post')) {
            $appuiPromoteur = $this->AppuiPromoteur->patchEntity($appuiPromoteur, $this->request->getData());
            if ($this->AppuiPromoteur->save($appuiPromoteur)) {
                $this->Flash->success(__('The appui promoteur has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The appui promoteur could not be saved. Please, try again.'));
        }
        $this->set(compact('appuiPromoteur'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Appui Promoteur id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $appuiPromoteur = $this->AppuiPromoteur->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $appuiPromoteur = $this->AppuiPromoteur->patchEntity($appuiPromoteur, $this->request->getData());
            if ($this->AppuiPromoteur->save($appuiPromoteur)) {
                $this->Flash->success(__('The appui promoteur has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The appui promoteur could not be saved. Please, try again.'));
        }
        $this->set(compact('appuiPromoteur'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Appui Promoteur id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $appuiPromoteur = $this->AppuiPromoteur->get($id);
        if ($this->AppuiPromoteur->delete($appuiPromoteur)) {
            $this->Flash->success(__('The appui promoteur has been deleted.'));
        } else {
            $this->Flash->error(__('The appui promoteur could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
