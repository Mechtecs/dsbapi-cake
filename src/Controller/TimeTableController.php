<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Model\Table\DayMessageTable;
use App\Model\Table\VertretungTable;
/**
 * TimeTable Controller
 *
 * @property \App\Model\Table\TimeTable $TimeTable
 * @property \App\Model\Table\VertretungTable $Vertretung
 * @property \App\Model\Table\DayMessageTable $DayMessage
 */
class TimeTableController extends AppController
{

    public function heute(){
        $data = array();
        $this->loadModel('Vertretung');
        $this->loadModel('DayMessage');
        $payload = $this->Vertretung->find('all')->contain(['Klasse'])->where('Vertretung.datum = current_date()')->all();
        $motd = $this->DayMessage->find('all')->where('datum = current_date()')->all();
        $this->set(compact('payload', 'motd'));
    }

    public function morgen(){
        $data = array();
        $this->loadModel('Vertretung');
        $this->loadModel('DayMessage');
        $payload = $this->Vertretung->find('all')->contain(['Klasse'])->where('Vertretung.datum = (current_date() + INTERVAL 1 DAY)')->all();
        $motd = $this->DayMessage->find('all')->where('datum = (current_date() + INTERVAL 1 DAY)')->all();
        $this->set(compact('payload', 'motd'));
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $timeTable = $this->paginate($this->TimeTable);

        $this->set(compact('timeTable'));
        $this->set('_serialize', ['timeTable']);
    }

    /**
     * View method
     *
     * @param string|null $id Time Table id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $timeTable = $this->TimeTable->get($id, [
            'contain' => []
        ]);

        $this->set('timeTable', $timeTable);
        $this->set('_serialize', ['timeTable']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $timeTable = $this->TimeTable->newEntity();
        if ($this->request->is('post')) {
            $timeTable = $this->TimeTable->patchEntity($timeTable, $this->request->data);
            if ($this->TimeTable->save($timeTable)) {
                $this->Flash->success(__('The time table has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The time table could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('timeTable'));
        $this->set('_serialize', ['timeTable']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Time Table id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $timeTable = $this->TimeTable->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $timeTable = $this->TimeTable->patchEntity($timeTable, $this->request->data);
            if ($this->TimeTable->save($timeTable)) {
                $this->Flash->success(__('The time table has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The time table could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('timeTable'));
        $this->set('_serialize', ['timeTable']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Time Table id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $timeTable = $this->TimeTable->get($id);
        if ($this->TimeTable->delete($timeTable)) {
            $this->Flash->success(__('The time table has been deleted.'));
        } else {
            $this->Flash->error(__('The time table could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
