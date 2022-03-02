<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Avancement Controller
 *
 * @property \App\Model\Table\AvancementTable $Avancement
 * @method \App\Model\Entity\Avancement[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AvancementController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $avancement = $this->paginate($this->Avancement);

        $this->set(compact('avancement'));
        $this->viewBuilder()->setLayout('Chef');

    }

    /**
     * View method
     *
     * @param string|null $id Avancement id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $avancement = $this->Avancement->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('avancement'));
        $this->viewBuilder()->setLayout('Chef');

    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $avancement = $this->Avancement->newEmptyEntity();
        if ($this->request->is('post')) {
            $avancement = $this->Avancement->patchEntity($avancement, $this->request->getData());
            if(!$avancement->getErrors){
                $Fichier = $this->request->getData('Fichier');

                $name  = $Fichier->getClientFilename();

                if( !is_dir(WWW_ROOT.'files'.DS.'fichier-pdf') )
                mkdir(WWW_ROOT.'files'.DS.'fichier-pdf',0775);
                
                $targetPath = WWW_ROOT.'files'.DS.'fichier-pdf'.DS.$name;

                if($name)
                $Fichier->moveTo($targetPath);
                
                $avancement->Fichier = 'fichier-pdf/'.$name;
            }
            if ($this->Avancement->save($avancement)) {
                $this->Flash->success(__('The avancement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The avancement could not be saved. Please, try again.'));
        }
        $this->set(compact('avancement'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Avancement id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $avancement = $this->Avancement->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $avancement = $this->Avancement->patchEntity($avancement, $this->request->getData());
            if (!$avancement->getErrors) {
                $Fichier = $this->request->getData('change_pdf');
  
                $name  = $Fichier->getClientFilename();
                
                if ($name){
                    if (!is_dir(WWW_ROOT . 'files' . DS . 'fichier-pdf'))
                        mkdir(WWW_ROOT . 'files' . DS . 'fichier-pdf', 0775);

                    $targetPath = WWW_ROOT . 'files' . DS . 'fichier-pdf' . DS . $name;


                    $Fichier->moveTo($targetPath);

                    $docpath = WWW_ROOT . 'files' . DS . $avancement->Fichier;
                    if (file_exists($docpath)) {
                        unlink($docpath);
                    }
                    
                    $avancement->Fichier = 'fichier-pdf/' . $name;
                }

            }
            if ($this->Avancement->save($avancement)) {
                $this->Flash->success(__('The avancement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The avancement could not be saved. Please, try again.'));
        }
        $this->set(compact('avancement'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Avancement id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $avancement = $this->Avancement->get($id);
        if ($this->Avancement->delete($avancement)) {
            $this->Flash->success(__('The avancement has been deleted.'));
        } else {
            $this->Flash->error(__('The avancement could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
