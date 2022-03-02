<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Presentations Controller
 *
 * @property \App\Model\Table\PresentationsTable $Presentations
 * @method \App\Model\Entity\Presentation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PresentationsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $presentations = $this->paginate($this->Presentations);

        $this->set(compact('presentations'));
        $this->viewBuilder()->setLayout('Chef');
    }

    /**
     * View method
     *
     * @param string|null $id Presentation id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $presentation = $this->Presentations->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('presentation'));
        $this->viewBuilder()->setLayout('Chef');

        
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $presentation = $this->Presentations->newEmptyEntity();
        if ($this->request->is('post')) {
            $presentation = $this->Presentations->patchEntity($presentation, $this->request->getData());
            if(!$presentation->getErrors){
                $Fichier = $this->request->getData('Fichier');

                $name  = $Fichier->getClientFilename();

                if( !is_dir(WWW_ROOT.'files'.DS.'fichier-pdf') )
                mkdir(WWW_ROOT.'files'.DS.'fichier-pdf',0775);
                
                $targetPath = WWW_ROOT.'files'.DS.'fichier-pdf'.DS.$name;

                if($name)
                $Fichier->moveTo($targetPath);
                
                $presentation->Fichier = 'fichier-pdf/'.$name;
            }
            if ($this->Presentations->save($presentation)) {
                $this->Flash->success(__('The presentation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The presentation could not be saved. Please, try again.'));
        }
        $this->set(compact('presentation'));
        $this->viewBuilder()->setLayout('Chef');

    }

    /**
     * Edit method
     *
     * @param string|null $id Presentation id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $presentation = $this->Presentations->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $presentation = $this->Presentations->patchEntity($presentation, $this->request->getData());

            if (!$presentation->getErrors) {
                $Fichier = $this->request->getData('change_pdf');
  
                $name  = $Fichier->getClientFilename();
                
                if ($name){
                    if (!is_dir(WWW_ROOT . 'files' . DS . 'fichier-pdf'))
                        mkdir(WWW_ROOT . 'files' . DS . 'fichier-pdf', 0775);

                    $targetPath = WWW_ROOT . 'files' . DS . 'fichier-pdf' . DS . $name;


                    $Fichier->moveTo($targetPath);

                    $docpath = WWW_ROOT . 'files' . DS . $presentation->Fichier;
                    if (file_exists($docpath)) {
                        unlink($docpath);
                    }
                    
                    $presentation->Fichier = 'fichier-pdf/' . $name;
                }

            }
            if ($this->Presentations->save($presentation)) {
                $this->Flash->success(__('The presentation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The presentation could not be saved. Please, try again.'));
        }
        $this->set(compact('presentation'));
        $this->viewBuilder()->setLayout('Chef');

    }

    /**
     * Delete method
     *
     * @param string|null $id Presentation id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $presentation = $this->Presentations->get($id);
        if ($this->Presentations->delete($presentation)) {
            $this->Flash->success(__('The presentation has been deleted.'));
        } else {
            $this->Flash->error(__('The presentation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
        $this->viewBuilder()->setLayout('Chef');

    }
}


