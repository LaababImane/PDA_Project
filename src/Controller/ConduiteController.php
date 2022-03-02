<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Conduite Controller
 *
 * @property \App\Model\Table\ConduiteTable $Conduite
 * @method \App\Model\Entity\Conduite[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ConduiteController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $conduite = $this->paginate($this->Conduite);

        $this->set(compact('conduite'));
        $this->viewBuilder()->setLayout('Chef');
    }

    /**
     * View method
     *
     * @param string|null $id Conduite id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $conduite = $this->Conduite->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('conduite'));
        $this->viewBuilder()->setLayout('Chef');

    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $conduite = $this->Conduite->newEmptyEntity();
        if ($this->request->is('post')) {
            $conduite = $this->Conduite->patchEntity($conduite, $this->request->getData());
            if(!$conduite->getErrors){
                $Fichier = $this->request->getData('Fichier');

                $name  = $Fichier->getClientFilename();

                if( !is_dir(WWW_ROOT.'files'.DS.'fichier-pdf') )
                mkdir(WWW_ROOT.'files'.DS.'fichier-pdf',0775);
                
                $targetPath = WWW_ROOT.'files'.DS.'fichier-pdf'.DS.$name;

                if($name)
                $Fichier->moveTo($targetPath);
                
                $conduite->Fichier = 'fichier-pdf/'.$name;
            }
            if ($this->Conduite->save($conduite)) {
                $this->Flash->success(__('The conduite has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The conduite could not be saved. Please, try again.'));
        }
        $this->set(compact('conduite'));
        $this->viewBuilder()->setLayout('Chef');

    }

    /**
     * Edit method
     *
     * @param string|null $id Conduite id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $conduite = $this->Conduite->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $conduite = $this->Conduite->patchEntity($conduite, $this->request->getData());
            if (!$conduite->getErrors) {
                $Fichier = $this->request->getData('change_pdf');
  
                $name  = $Fichier->getClientFilename();
                
                if ($name){
                    if (!is_dir(WWW_ROOT . 'files' . DS . 'fichier-pdf'))
                        mkdir(WWW_ROOT . 'files' . DS . 'fichier-pdf', 0775);

                    $targetPath = WWW_ROOT . 'files' . DS . 'fichier-pdf' . DS . $name;


                    $Fichier->moveTo($targetPath);

                    $docpath = WWW_ROOT . 'files' . DS . $conduite->Fichier;
                    if (file_exists($docpath)) {
                        unlink($docpath);
                    }
                    
                    $conduite->Fichier = 'fichier-pdf/' . $name;
                }

            }
            if ($this->Conduite->save($conduite)) {
                $this->Flash->success(__('The conduite has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The conduite could not be saved. Please, try again.'));
        }
        $this->set(compact('conduite'));
        $this->viewBuilder()->setLayout('Chef');

    }

    /**
     * Delete method
     *
     * @param string|null $id Conduite id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $conduite = $this->Conduite->get($id);
        if ($this->Conduite->delete($conduite)) {
            $this->Flash->success(__('The conduite has been deleted.'));
        } else {
            $this->Flash->error(__('The conduite could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
        $this->viewBuilder()->setLayout('Chef');

    }
}
