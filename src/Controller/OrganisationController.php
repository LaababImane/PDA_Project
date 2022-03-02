<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Organisation Controller
 *
 * @property \App\Model\Table\OrganisationTable $Organisation
 * @method \App\Model\Entity\Organisation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OrganisationController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $organisation = $this->paginate($this->Organisation);

        $this->set(compact('organisation'));
        $this->viewBuilder()->setLayout('Chef');

    }

    /**
     * View method
     *
     * @param string|null $id Organisation id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $organisation = $this->Organisation->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('organisation'));
        $this->viewBuilder()->setLayout('Chef');
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $organisation = $this->Organisation->newEmptyEntity();
        if ($this->request->is('post')) {
            $organisation = $this->Organisation->patchEntity($organisation, $this->request->getData());
            if(!$organisation->getErrors){
                $Fichier = $this->request->getData('Fichier');

                $name  = $Fichier->getClientFilename();

                if( !is_dir(WWW_ROOT.'files'.DS.'fichier-pdf') )
                mkdir(WWW_ROOT.'files'.DS.'fichier-pdf',0775);
                
                $targetPath = WWW_ROOT.'files'.DS.'fichier-pdf'.DS.$name;

                if($name)
                $Fichier->moveTo($targetPath);
                
                $organisation->Fichier = 'fichier-pdf/'.$name;
            }
            if ($this->Organisation->save($organisation)) {
                $this->Flash->success(__('The organisation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The organisation could not be saved. Please, try again.'));
        }
        $this->set(compact('organisation'));
        $this->viewBuilder()->setLayout('Chef');

    }

    /**
     * Edit method
     *
     * @param string|null $id Organisation id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $organisation = $this->Organisation->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $organisation = $this->Organisation->patchEntity($organisation, $this->request->getData());
            if (!$organisation->getErrors) {
                $Fichier = $this->request->getData('change_pdf');
  
                $name  = $Fichier->getClientFilename();
                
                if ($name){
                    if (!is_dir(WWW_ROOT . 'files' . DS . 'fichier-pdf'))
                        mkdir(WWW_ROOT . 'files' . DS . 'fichier-pdf', 0775);

                    $targetPath = WWW_ROOT . 'files' . DS . 'fichier-pdf' . DS . $name;


                    $Fichier->moveTo($targetPath);

                    $docpath = WWW_ROOT . 'files' . DS . $organisation->Fichier;
                    if (file_exists($docpath)) {
                        unlink($docpath);
                    }
                    
                    $organisation->Fichier = 'fichier-pdf/' . $name;
                }

            }
            if ($this->Organisation->save($organisation)) {
                $this->Flash->success(__('The organisation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The organisation could not be saved. Please, try again.'));
        }
        $this->set(compact('organisation'));
        $this->viewBuilder()->setLayout('Chef');

    }

    /**
     * Delete method
     *
     * @param string|null $id Organisation id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $organisation = $this->Organisation->get($id);
        if ($this->Organisation->delete($organisation)) {
            $this->Flash->success(__('The organisation has been deleted.'));
        } else {
            $this->Flash->error(__('The organisation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
        $this->viewBuilder()->setLayout('Chef');

    }
    
}
