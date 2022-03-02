<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\Datasource\ConnectionManager;

/**
 * Profils Controller
 *
 * @property \App\Model\Table\ProfilsTable $Profils
 * @method \App\Model\Entity\Profil[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DashController extends AppController
{
      public function home(){
       $dsn = 'mysql://root:password@localhost/cake_db';
      ConnectionManager::setConfig( ['url' => $dsn]);
      $connection = ConnectionManager::get('default');
      $results = ($connection->execute('SELECT COUNT(*) AS somme FROM users')->fetchAll('assoc'));
      $rst = json_encode($results);
      $this->set(compact('rst'));
      $profiles = ($connection->execute('SELECT COUNT(*) AS profiles FROM profils')->fetchAll('assoc'));
      $rst1 = json_encode($profiles);
      $this->set(compact('rst1'));
      $administrations = ($connection->execute('SELECT COUNT(*) AS administrations FROM administrations')->fetchAll('assoc'));
      $rst2 = json_encode($administrations);
      $this->set(compact('rst2'));

      $indicateurs = ($connection->execute('SELECT COUNT(*) AS indicateurs FROM indicateurs')->fetchAll('assoc'));
      $rst3 = json_encode($indicateurs);
      $this->set(compact('rst3'));
 
      $valeurs = ($connection->execute('SELECT Valeur FROM indicateurs')->fetchAll('assoc'));
     $res = json_encode($valeurs); 
      //debug($res);
      $this->set(compact('res'));
      $indi = ($connection->execute('SELECT id, Nom_indicateur, Designation, responsable, Contribution, Valeur  FROM indicateurs')->fetchAll('assoc'));
     $res1 = json_encode($indi); 
     $this->set(compact('res1'));
      
     $cord = ($connection->execute('SELECT *  FROM map')->fetchAll('assoc'));
     $data = json_encode($cord); 
     
     $this->set(compact('data'));


      }

      public function test(){

      }

      public function brand1(){
            $this->viewBuilder()->setLayout('Chef');
      }

      public function brand2(){
            $this->viewBuilder()->setLayout('Comite');
            $dsn = 'mysql://root:password@localhost/cake_db';
            ConnectionManager::setConfig( ['url' => $dsn]);
            $connection = ConnectionManager::get('default');
            $cord = ($connection->execute('SELECT *  FROM map')->fetchAll('assoc'));
            $data = json_encode($cord); 
     
           $this->set(compact('data'));
      }
      public function potentiel(){
            $this->viewBuilder()->setLayout('Comite');
            $dsn = 'mysql://root:password@localhost/cake_db';
            ConnectionManager::setConfig( ['url' => $dsn]);
            $connection = ConnectionManager::get('default');
            $cord = ($connection->execute('SELECT *  FROM map')->fetchAll('assoc'));
            $data = json_encode($cord); 
     
           $this->set(compact('data'));
      }
      public function indicateurs(){
            $this->viewBuilder()->setLayout('chef');
            $dsn = 'mysql://root:password@localhost/cake_db';
            ConnectionManager::setConfig( ['url' => $dsn]);
            $connection = ConnectionManager::get('default');
            $indi = ($connection->execute('SELECT id, Nom_indicateur, Designation, Administrations, responsable, Contribution,Valeur  FROM indicateurs')->fetchAll('assoc'));
            $res1 = json_encode($indi); 
            $this->set(compact('res1'));
      }
      public function indiComite(){
            $this->viewBuilder()->setLayout('comite');
            $dsn = 'mysql://root:password@localhost/cake_db';
            ConnectionManager::setConfig( ['url' => $dsn]);
            $connection = ConnectionManager::get('default');
            $indi = ($connection->execute('SELECT id, Nom_indicateur, Designation, Administrations, responsable, Contribution,Valeur  FROM indicateurs')->fetchAll('assoc'));
            $res1 = json_encode($indi); 
            $this->set(compact('res1'));
      }
      public function piezo(){
            $this->viewBuilder()->setLayout('Comite');
            $dsn = 'mysql://root:password@localhost/cake_db';
            ConnectionManager::setConfig( ['url' => $dsn]);
            $connection = ConnectionManager::get('default');
            $cord = ($connection->execute('SELECT *  FROM map')->fetchAll('assoc'));
            $data = json_encode($cord); 
     
           $this->set(compact('data'));
            
      }
}
  