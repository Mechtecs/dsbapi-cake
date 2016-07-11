<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Model\Table\DayMessageTable;
use App\Model\Table\VertretungTable;
/*
 * Api Controller
 *
 * @property \App\Model\Table\VertretungTable $Vertretung
 * @property \App\Model\Table\DayMessageTable $DayMessage
 */
class ApiController extends AppController
{

    public function index(){
        return $this->redirect('/');
    }

    public function vertretung(){
        $date = $this->request->query('date');
        $this->loadModel('Vertretung');
        $this->loadModel('DayMessage');
        $payload = $this->Vertretung->find('all')->contain(['Klasse'])->where('Vertretung.datum = STR_TO_DATE(\''.$date.'\',\'%d.%m.%Y\')')->all();
        $motd = $this->DayMessage->find('all')->where('datum = STR_TO_DATE(\''.$date.'\',\'%d.%m.%Y\')')->all();
        $this->set(compact('payload', 'motd'));
    }

}