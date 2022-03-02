<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * PlanAction Controller
 *
 * @property \App\Model\Table\PlanActionTable $PlanAction
 * @method \App\Model\Entity\PlanAction[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PlanActionController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $planAction = $this->paginate($this->PlanAction);

        $this->set(compact('planAction'));
        $this->viewBuilder()->setLayout('Chef');
    }

    /**
     * View method
     *
     * @param string|null $id Plan Action id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $planAction = $this->PlanAction->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('planAction'));
        $this->viewBuilder()->setLayout('Chef');

    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $planAction = $this->PlanAction->newEmptyEntity();
        if ($this->request->is('post')) {
            $planAction = $this->PlanAction->patchEntity($planAction, $this->request->getData());
            if(!$planAction->getErrors){
                $Fichier = $this->request->getData('Fichier');

                $name  = $Fichier->getClientFilename();

                if( !is_dir(WWW_ROOT.'files'.DS.'fichier-pdf') )
                mkdir(WWW_ROOT.'files'.DS.'fichier-pdf',0775);
                
                $targetPath = WWW_ROOT.'files'.DS.'fichier-pdf'.DS.$name;

                if($name)
                $Fichier->moveTo($targetPath);
                
                $planAction->Fichier = 'fichier-pdf/'.$name;
            }
            if ($this->PlanAction->save($planAction)) {
                $this->Flash->success(__('The plan action has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The plan action could not be saved. Please, try again.'));
        }
        $this->set(compact('planAction'));
        $this->viewBuilder()->setLayout('Chef');

    }

    /**
     * Edit method
     *
     * @param string|null $id Plan Action id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $planAction = $this->PlanAction->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $planAction = $this->PlanAction->patchEntity($planAction, $this->request->getData());
            if (!$presentation->getErrors) {
                $Fichier = $this->request->getData('change_pdf');
  
                $name  = $Fichier->getClientFilename();
                
                if ($name){
                    if (!is_dir(WWW_ROOT . 'files' . DS . 'fichier-pdf'))
                        mkdir(WWW_ROOT . 'files' . DS . 'fichier-pdf', 0775);

                    $targetPath = WWW_ROOT . 'files' . DS . 'fichier-pdf' . DS . $name;


                    $Fichier->moveTo($targetPath);

                    $docpath = WWW_ROOT . 'files' . DS . $planAction->Fichier;
                    if (file_exists($docpath)) {
                        unlink($docpath);
                    }
                    
                    $planAction->Fichier = 'fichier-pdf/' . $name;
                }

            }
            if ($this->PlanAction->save($planAction)) {
                $this->Flash->success(__('The plan action has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The plan action could not be saved. Please, try again.'));
        }
        $this->set(compact('planAction'));
        $this->viewBuilder()->setLayout('Chef');

    }

    /**
     * Delete method
     *
     * @param string|null $id Plan Action id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $planAction = $this->PlanAction->get($id);
        if ($this->PlanAction->delete($planAction)) {
            $this->Flash->success(__('The plan action has been deleted.'));
        } else {
            $this->Flash->error(__('The plan action could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
        $this->viewBuilder()->setLayout('Chef');

    }
}
