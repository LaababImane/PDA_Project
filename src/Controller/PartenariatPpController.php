<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * PartenariatPp Controller
 *
 * @property \App\Model\Table\PartenariatPpTable $PartenariatPp
 * @method \App\Model\Entity\PartenariatPp[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PartenariatPpController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $partenariatPp = $this->paginate($this->PartenariatPp);

        $this->set(compact('partenariatPp'));
        $this->viewBuilder()->setLayout('Chef');
    }

    /**
     * View method
     *
     * @param string|null $id Partenariat Pp id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $partenariatPp = $this->PartenariatPp->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('partenariatPp'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $partenariatPp = $this->PartenariatPp->newEmptyEntity();
        if ($this->request->is('post')) {
            $partenariatPp = $this->PartenariatPp->patchEntity($partenariatPp, $this->request->getData());
            if ($this->PartenariatPp->save($partenariatPp)) {
                $this->Flash->success(__('The partenariat pp has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The partenariat pp could not be saved. Please, try again.'));
        }
        $this->set(compact('partenariatPp'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Partenariat Pp id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $partenariatPp = $this->PartenariatPp->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $partenariatPp = $this->PartenariatPp->patchEntity($partenariatPp, $this->request->getData());
            if ($this->PartenariatPp->save($partenariatPp)) {
                $this->Flash->success(__('The partenariat pp has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The partenariat pp could not be saved. Please, try again.'));
        }
        $this->set(compact('partenariatPp'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Partenariat Pp id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $partenariatPp = $this->PartenariatPp->get($id);
        if ($this->PartenariatPp->delete($partenariatPp)) {
            $this->Flash->success(__('The partenariat pp has been deleted.'));
        } else {
            $this->Flash->error(__('The partenariat pp could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
