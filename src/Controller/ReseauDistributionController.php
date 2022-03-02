<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ReseauDistribution Controller
 *
 * @property \App\Model\Table\ReseauDistributionTable $ReseauDistribution
 * @method \App\Model\Entity\ReseauDistribution[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ReseauDistributionController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $reseauDistribution = $this->paginate($this->ReseauDistribution);

        $this->set(compact('reseauDistribution'));
        $this->viewBuilder()->setLayout('Chef');
    }

    /**
     * View method
     *
     * @param string|null $id Reseau Distribution id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $reseauDistribution = $this->ReseauDistribution->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('reseauDistribution'));
        $this->viewBuilder()->setLayout('Chef');

    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $reseauDistribution = $this->ReseauDistribution->newEmptyEntity();
        if ($this->request->is('post')) {
            $reseauDistribution = $this->ReseauDistribution->patchEntity($reseauDistribution, $this->request->getData());
            if(!$reseauDistribution->getErrors){
                $Fichier = $this->request->getData('Fichier');

                $name  = $Fichier->getClientFilename();

                if( !is_dir(WWW_ROOT.'files'.DS.'fichier-pdf') )
                mkdir(WWW_ROOT.'files'.DS.'fichier-pdf',0775);
                
                $targetPath = WWW_ROOT.'files'.DS.'fichier-pdf'.DS.$name;

                if($name)
                $Fichier->moveTo($targetPath);
                
                $reseauDistribution->Fichier = 'fichier-pdf/'.$name;
            }
            if ($this->ReseauDistribution->save($reseauDistribution)) {
                $this->Flash->success(__('The reseau distribution has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The reseau distribution could not be saved. Please, try again.'));
        }
        $this->set(compact('reseauDistribution'));
        $this->viewBuilder()->setLayout('Chef');

    }

    /**
     * Edit method
     *
     * @param string|null $id Reseau Distribution id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $reseauDistribution = $this->ReseauDistribution->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $reseauDistribution = $this->ReseauDistribution->patchEntity($reseauDistribution, $this->request->getData());
            if (!$reseauDistribution->getErrors) {
                $Fichier = $this->request->getData('change_pdf');
  
                $name  = $Fichier->getClientFilename();
                
                if ($name){
                    if (!is_dir(WWW_ROOT . 'files' . DS . 'fichier-pdf'))
                        mkdir(WWW_ROOT . 'files' . DS . 'fichier-pdf', 0775);

                    $targetPath = WWW_ROOT . 'files' . DS . 'fichier-pdf' . DS . $name;


                    $Fichier->moveTo($targetPath);

                    $docpath = WWW_ROOT . 'files' . DS . $reseauDistribution->Fichier;
                    if (file_exists($docpath)) {
                        unlink($docpath);
                    }
                    
                    $reseauDistribution->Fichier = 'fichier-pdf/' . $name;
                }

            }
            if ($this->ReseauDistribution->save($reseauDistribution)) {
                $this->Flash->success(__('The reseau distribution has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The reseau distribution could not be saved. Please, try again.'));
        }
        $this->set(compact('reseauDistribution'));
        $this->viewBuilder()->setLayout('Chef');

    }

    /**
     * Delete method
     *
     * @param string|null $id Reseau Distribution id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $reseauDistribution = $this->ReseauDistribution->get($id);
        if ($this->ReseauDistribution->delete($reseauDistribution)) {
            $this->Flash->success(__('The reseau distribution has been deleted.'));
        } else {
            $this->Flash->error(__('The reseau distribution could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
        $this->viewBuilder()->setLayout('Chef');

    }
}
