<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Profils Controller
 *
 * @property \App\Model\Table\ProfilsTable $Profils
 * @method \App\Model\Entity\Profil[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProfilsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $profils = $this->paginate($this->Profils);

        $this->set(compact('profils'));
        
    }

    /**
     * View method
     *
     * @param string|null $id Profil id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $profil = $this->Profils->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('profil'));
       
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $profil = $this->Profils->newEmptyEntity();
        if ($this->request->is('post')) {
            $profil = $this->Profils->patchEntity($profil, $this->request->getData());
            if(!$profil->getErrors){
                $image = $this->request->getData('image');

                $name  = $image->getClientFilename();

                if( !is_dir(WWW_ROOT.'img'.DS.'profil-img') )
                mkdir(WWW_ROOT.'img'.DS.'profil-img',0775);
                
                $targetPath = WWW_ROOT.'img'.DS.'profil-img'.DS.$name;

                if($name)
                $image->moveTo($targetPath);
                
                $profil->image = 'profil-img/'.$name;
            }
            if ($this->Profils->save($profil)) {
                $this->Flash->success(__('The profil has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The profil could not be saved. Please, try again.'));
        }
        $this->set(compact('profil'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Profil id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $profil = $this->Profils->get($id);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $profil = $this->Profils->patchEntity($profil, $this->request->getData());
            
            if (!$profil->getErrors) {
                $image = $this->request->getData('change_image');
  
                $name  = $image->getClientFilename();
                
                if ($name){
                    if (!is_dir(WWW_ROOT . 'img' . DS . 'profil-img'))
                        mkdir(WWW_ROOT . 'img' . DS . 'profil-img', 0775);

                    $targetPath = WWW_ROOT . 'img' . DS . 'profil-img' . DS . $name;


                    $image->moveTo($targetPath);

                    $imgpath = WWW_ROOT . 'img' . DS . $profil->image;
                    if (file_exists($imgpath)) {
                        unlink($imgpath);
                    }
                    
                    $profil->image = 'profil-img/' . $name;
                }

                
            }
            if ($this->Profils->save($profil)) {
                $this->Flash->success(__('The profil has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The profil could not be saved. Please, try again.'));
        }
        $this->set(compact('profil'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Profil id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $profil = $this->Profils->get($id);
        if ($this->Profils->delete($profil)) {
            $this->Flash->success(__('The profil has been deleted.'));
        } else {
            $this->Flash->error(__('The profil could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
