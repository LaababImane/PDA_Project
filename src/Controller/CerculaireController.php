<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Cerculaire Controller
 *
 * @property \App\Model\Table\CerculaireTable $Cerculaire
 * @method \App\Model\Entity\Cerculaire[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CerculaireController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $cerculaire = $this->paginate($this->Cerculaire);

        $this->set(compact('cerculaire'));
        $this->viewBuilder()->setLayout('Chef');
    }

    /**
     * View method
     *
     * @param string|null $id Cerculaire id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cerculaire = $this->Cerculaire->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('cerculaire'));
        $this->viewBuilder()->setLayout('Chef');


    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cerculaire = $this->Cerculaire->newEmptyEntity();
        if ($this->request->is('post')) {
            $cerculaire = $this->Cerculaire->patchEntity($cerculaire, $this->request->getData());
            if(!$cerculaire->getErrors){
                $Fichier = $this->request->getData('Fichier');

                $name  = $Fichier->getClientFilename();

                if( !is_dir(WWW_ROOT.'files'.DS.'fichier-pdf') )
                mkdir(WWW_ROOT.'files'.DS.'fichier-pdf',0775);
                
                $targetPath = WWW_ROOT.'files'.DS.'fichier-pdf'.DS.$name;

                if($name)
                $Fichier->moveTo($targetPath);
                
                $cerculaire->Fichier = 'fichier-pdf/'.$name;
            }
            if ($this->Cerculaire->save($cerculaire)) {
                $this->Flash->success(__('The cerculaire has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cerculaire could not be saved. Please, try again.'));
        }
        $this->set(compact('cerculaire'));
        $this->viewBuilder()->setLayout('Chef');

    }

    /**
     * Edit method
     *
     * @param string|null $id Cerculaire id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cerculaire = $this->Cerculaire->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cerculaire = $this->Cerculaire->patchEntity($cerculaire, $this->request->getData());
            if (!$cerculaire->getErrors) {
                $Fichier = $this->request->getData('change_pdf');
  
                $name  = $Fichier->getClientFilename();
                
                if ($name){
                    if (!is_dir(WWW_ROOT . 'files' . DS . 'fichier-pdf'))
                        mkdir(WWW_ROOT . 'files' . DS . 'fichier-pdf', 0775);

                    $targetPath = WWW_ROOT . 'files' . DS . 'fichier-pdf' . DS . $name;


                    $Fichier->moveTo($targetPath);

                    $docpath = WWW_ROOT . 'files' . DS . $cerculaire->Fichier;
                    if (file_exists($docpath)) {
                        unlink($docpath);
                    }
                    
                    $cerculaire->Fichier = 'fichier-pdf/' . $name;
                }

            }
            if ($this->Cerculaire->save($cerculaire)) {
                $this->Flash->success(__('The cerculaire has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cerculaire could not be saved. Please, try again.'));
        }
        $this->set(compact('cerculaire'));
        $this->viewBuilder()->setLayout('Chef');

    }

    /**
     * Delete method
     *
     * @param string|null $id Cerculaire id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cerculaire = $this->Cerculaire->get($id);
        if ($this->Cerculaire->delete($cerculaire)) {
            $this->Flash->success(__('The cerculaire has been deleted.'));
        } else {
            $this->Flash->error(__('The cerculaire could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
        $this->viewBuilder()->setLayout('Chef');

    }
}
