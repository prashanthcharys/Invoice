<?php
App::uses('AppController', 'Controller');
/**
 * RepresentativeItems Controller
 *
 * @property RepresentativeItem $RepresentativeItem
 * @property PaginatorComponent $Paginator
 */
class RepresentativeItemsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->RepresentativeItem->recursive = 0;
		$this->set('representativeItems', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->RepresentativeItem->exists($id)) {
			throw new NotFoundException(__('Invalid representative item'));
		}
		$options = array('conditions' => array('RepresentativeItem.' . $this->RepresentativeItem->primaryKey => $id));
		$this->set('representativeItem', $this->RepresentativeItem->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->RepresentativeItem->create();
			if ($this->RepresentativeItem->save($this->request->data)) {
				$this->Session->setFlash(__('The representative item has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The representative item could not be saved. Please, try again.'));
			}
		}
		$representatives = $this->RepresentativeItem->Representative->find('list');
		$items = $this->RepresentativeItem->Item->find('list');
		$this->set(compact('representatives', 'items'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->RepresentativeItem->exists($id)) {
			throw new NotFoundException(__('Invalid representative item'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->RepresentativeItem->save($this->request->data)) {
				$this->Session->setFlash(__('The representative item has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The representative item could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('RepresentativeItem.' . $this->RepresentativeItem->primaryKey => $id));
			$this->request->data = $this->RepresentativeItem->find('first', $options);
		}
		$representatives = $this->RepresentativeItem->Representative->find('list');
		$items = $this->RepresentativeItem->Item->find('list');
		$this->set(compact('representatives', 'items'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->RepresentativeItem->id = $id;
		if (!$this->RepresentativeItem->exists()) {
			throw new NotFoundException(__('Invalid representative item'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->RepresentativeItem->delete()) {
			$this->Session->setFlash(__('The representative item has been deleted.'));
		} else {
			$this->Session->setFlash(__('The representative item could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
