<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Pv Controller
 *
 * @property \App\Model\Table\PvTable $Pv
 * @method \App\Model\Entity\Pv[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PvController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $pv = $this->paginate($this->Pv);

        $this->set(compact('pv'));
        $this->viewBuilder()->setLayout('Chef');
    }

    /**
     * View method
     *
     * @param string|null $id Pv id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pv = $this->Pv->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('pv'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pv = $this->Pv->newEmptyEntity();
        if ($this->request->is('post')) {
            $pv = $this->Pv->patchEntity($pv, $this->request->getData());
            if(!$pv->getErrors){
                $Fichier = $this->request->getData('Fichier');

                $name  = $Fichier->getClientFilename();

                if( !is_dir(WWW_ROOT.'files'.DS.'fichier-pdf') )
                mkdir(WWW_ROOT.'files'.DS.'fichier-pdf',0775);
                
                $targetPath = WWW_ROOT.'files'.DS.'fichier-pdf'.DS.$name;

                if($name)
                $Fichier->moveTo($targetPath);
                
                $pv->Fichier = 'fichier-pdf/'.$name;
            }
            if ($this->Pv->save($pv)) {
                $this->Flash->success(__('The pv has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pv could not be saved. Please, try again.'));
        }
        $this->set(compact('pv'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pv id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pv = $this->Pv->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pv = $this->Pv->patchEntity($pv, $this->request->getData());
            if (!$pv->getErrors) {
                $Fichier = $this->request->getData('change_pdf');
  
                $name  = $Fichier->getClientFilename();
                
                if ($name){
                    if (!is_dir(WWW_ROOT . 'files' . DS . 'fichier-pdf'))
                        mkdir(WWW_ROOT . 'files' . DS . 'fichier-pdf', 0775);

                    $targetPath = WWW_ROOT . 'files' . DS . 'fichier-pdf' . DS . $name;


                    $Fichier->moveTo($targetPath);

                    $docpath = WWW_ROOT . 'files' . DS . $pv->Fichier;
                    if (file_exists($docpath)) {
                        unlink($docpath);
                    }
                    
                    $pv->Fichier = 'fichier-pdf/' . $name;
                }

            }
            if ($this->Pv->save($pv)) {
                $this->Flash->success(__('The pv has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pv could not be saved. Please, try again.'));
        }
        $this->set(compact('pv'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pv id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pv = $this->Pv->get($id);
        if ($this->Pv->delete($pv)) {
            $this->Flash->success(__('The pv has been deleted.'));
        } else {
            $this->Flash->error(__('The pv could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
