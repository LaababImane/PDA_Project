<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ContratLocation Controller
 *
 * @property \App\Model\Table\ContratLocationTable $ContratLocation
 * @method \App\Model\Entity\ContratLocation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ContratLocationController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $contratLocation = $this->paginate($this->ContratLocation);

        $this->set(compact('contratLocation'));
        $this->viewBuilder()->setLayout('Chef');
    }

    /**
     * View method
     *
     * @param string|null $id Contrat Location id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contratLocation = $this->ContratLocation->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('contratLocation'));
        $this->viewBuilder()->setLayout('Chef');

    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contratLocation = $this->ContratLocation->newEmptyEntity();
        if ($this->request->is('post')) {
            $contratLocation = $this->ContratLocation->patchEntity($contratLocation, $this->request->getData());
            if(!$contratLocation->getErrors){
                $Fichier = $this->request->getData('Fichier');

                $name  = $Fichier->getClientFilename();

                if( !is_dir(WWW_ROOT.'files'.DS.'fichier-pdf') )
                mkdir(WWW_ROOT.'files'.DS.'fichier-pdf',0775);
                
                $targetPath = WWW_ROOT.'files'.DS.'fichier-pdf'.DS.$name;

                if($name)
                $Fichier->moveTo($targetPath);
                
                $contratLocation->Fichier = 'fichier-pdf/'.$name;
            }
            if ($this->ContratLocation->save($contratLocation)) {
                $this->Flash->success(__('The contrat location has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contrat location could not be saved. Please, try again.'));
        }
        $this->set(compact('contratLocation'));
        $this->viewBuilder()->setLayout('Chef');

    }

    /**
     * Edit method
     *
     * @param string|null $id Contrat Location id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contratLocation = $this->ContratLocation->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contratLocation = $this->ContratLocation->patchEntity($contratLocation, $this->request->getData());
            if (!$contratLocation->getErrors) {
                $Fichier = $this->request->getData('change_pdf');
  
                $name  = $Fichier->getClientFilename();
                
                if ($name){
                    if (!is_dir(WWW_ROOT . 'files' . DS . 'fichier-pdf'))
                        mkdir(WWW_ROOT . 'files' . DS . 'fichier-pdf', 0775);

                    $targetPath = WWW_ROOT . 'files' . DS . 'fichier-pdf' . DS . $name;


                    $Fichier->moveTo($targetPath);

                    $docpath = WWW_ROOT . 'files' . DS . $contratLocation->Fichier;
                    if (file_exists($docpath)) {
                        unlink($docpath);
                    }
                    
                    $contratLocation->Fichier = 'fichier-pdf/' . $name;
                }

            }
            if ($this->ContratLocation->save($contratLocation)) {
                $this->Flash->success(__('The contrat location has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contrat location could not be saved. Please, try again.'));
        }
        $this->set(compact('contratLocation'));
        $this->viewBuilder()->setLayout('Chef');

    }

    /**
     * Delete method
     *
     * @param string|null $id Contrat Location id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contratLocation = $this->ContratLocation->get($id);
        if ($this->ContratLocation->delete($contratLocation)) {
            $this->Flash->success(__('The contrat location has been deleted.'));
        } else {
            $this->Flash->error(__('The contrat location could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
        $this->viewBuilder()->setLayout('Chef');

    }
}
