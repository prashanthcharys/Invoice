<?php

App::uses('AppController', 'Controller');

/**
 * Representatives Controller
 *
 * @property Representative $Representative
 * @property PaginatorComponent $Paginator
 */
class RepresentativesController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator');
    public $uses = array('Representative', 'Customer', 'Order');

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Representative->recursive = 0;
        $this->set('representatives', $this->Paginator->paginate());
    }

    public function beforeFilter() {
        parent::beforeFilter();

        $this->Auth->allow('login', 'logout');

        $this->Auth->loginAction = 'login';
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {

        if (!isset($_SESSION['user_id'])) {
            $this->redirect(array('controller' => 'representatives', 'action' => 'login'));
        }


        if (!$this->Representative->exists($id)) {
            throw new NotFoundException(__('Invalid representative'));
        }
        $options = array('conditions' => array('Representative.' . $this->Representative->primaryKey => $id));
        $this->set('representative', $this->Representative->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {

        if (!isset($_SESSION['user_id'])) {
            $this->redirect(array('controller' => 'representatives', 'action' => 'login'));
        }


        if ($this->request->is('post')) {
            $this->Representative->create();
            if ($this->Representative->save($this->request->data)) {
                $this->Session->setFlash(__('The representative has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The representative could not be saved. Please, try again.'));
            }
        }
        $territories = $this->Representative->Territory->find('list');
        $this->set(compact('territories'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {

        if (!isset($_SESSION['user_id'])) {
            $this->redirect(array('controller' => 'representatives', 'action' => 'login'));
        }


        if (!$this->Representative->exists($id)) {
            throw new NotFoundException(__('Invalid representative'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Representative->save($this->request->data)) {
                $this->Session->setFlash(__('The representative has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The representative could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Representative.' . $this->Representative->primaryKey => $id));
            $this->request->data = $this->Representative->find('first', $options);
        }
        $territories = $this->Representative->Territory->find('list');
        $this->set(compact('territories'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {

        if (!isset($_SESSION['user_id'])) {
            $this->redirect(array('controller' => 'representatives', 'action' => 'login'));
        }


        $this->Representative->id = $id;
        if (!$this->Representative->exists()) {
            throw new NotFoundException(__('Invalid representative'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Representative->delete()) {
            $this->Session->setFlash(__('The representative has been deleted.'));
        } else {
            $this->Session->setFlash(__('The representative could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

    /**
     * index method
     *
     * @return void
     */
    public function orders() {

        if (!isset($_SESSION['user_id'])) {
            $this->redirect(array('controller' => 'representatives', 'action' => 'login'));
        }

        $this->Representative->recursive = 0;
        $customers = $this->Representative->Territory->find('list', array(
            'consditions' => array(
                'id' => $_SESSION['user_id']
            )
        ));

        reset($customers);
        $territory_id = key($customers);


        $this->Customer->recursive = -1;
        $customers = $this->Customer->find('all', array('conditions' => array(
                'territory_id' => $territory_id
            ),
            'fields' => array(
                'Customer.id'
        )));

        $custome_ids = array();

        foreach ($customers as $customer) {
            $customer_ids[] = $customer['Customer']['id'];
        }

        $this->Order->recursive = 0;

        $orders = $this->Order->find('all', array(
            'conditions' => array(
                'Order.customer_id' => $customer_ids
            )
        ));

        $this->set('orders', $orders);
    }

    public function login() {

        if (isset($_SESSION['user_id'])) {
            $this->redirect(array('controller' => 'orders', 'action' => 'index'));
        }

        if ($this->request->is('post')) {
            $username = $this->request->data['Representative']['username'];
            $password = $this->request->data['Representative']['password'];
            //Check user credentials and redirect to user based on that.

            $user_id = $this->Representative->find('all', array('conditions' => array('AND' => array('username' => $username, 'password' => $password))));

            if ($user_id) {
                $this->Session->setFlash('Success');

                $_SESSION['user_id'] = $user_id[0]['Representative']['id'];

                $this->Auth->login($user_id);

                $this->Auth->loginAction = 'representatives/login';

                $this->redirect(array('controller' => 'representatives', 'action' => 'orders'));
            } else {
                //Print a Messege that username or password is wrong if authenticate fails.
                $this->Session->setFlash('Invalid Username or Password,try again');
            }
        } else {
            //	  		$this->Session->setFlash('First time');
        }
    }

    public function logout() {
        $this->Auth->logout();
        $this->redirect(array('controller' => 'representatives', 'action' => 'login'));
    }

    public function report() {

        if (isset($_GET['filter'])) {
            $filter = $_GET['filter'];
        } else {
            $filter = 'day';
        }

        if ($filter == 'day') {
            $results = $this->Representative->query("SELECT SUM(total) AS total, COUNT(*) AS count, date(orders.created) AS filter FROM invoices INNER JOIN orders on orders.id = invoices.order_id GROUP BY date(orders.created)");
        } else if ($filter == 'month') {
            $results = $this->Representative->query("SELECT SUM(total) AS total,COUNT(*) AS count,  MONTH(orders.created) AS filter FROM invoices INNER JOIN orders on orders.id = invoices.order_id GROUP BY MONTH(orders.created)");
        } else if ($filter == 'year') {
            $results = $this->Representative->query("SELECT SUM(total) AS total, COUNT(*) AS count, YEAR(orders.created) AS filter FROM invoices INNER JOIN orders on orders.id = invoices.order_id GROUP BY YEAR(orders.created)");
        } else {
            $results = $this->Representative->query("SELECT SUM(total) AS total, COUNT(*) AS count, date(orders.created) AS filter FROM invoices INNER JOIN orders on orders.id = invoices.order_id GROUP BY date(orders.created)");
        }

        $data['type'] = $filter;
        $data['data'] = $results;

        $this->set('data', $data);
    }

}
