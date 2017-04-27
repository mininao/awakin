<?php namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\ProductCrudRequest as StoreRequest;
use App\Http\Requests\ProductCrudRequest as UpdateRequest;

class ProductCrudController extends CrudController {

	public function setup() {
        $this->crud->setModel("App\Product");
        $this->crud->setRoute("admin/product");
        $this->crud->setEntityNameStrings('product', 'products');

        $this->crud->addColumn([
      	'name' => 'title',
        'label' => 'Titre'
      	]);
        $this->crud->addColumn([
      	'name' => 'foodType',
        'label' => 'Type'
      	]);
        $this->crud->addField([
      	'name' => 'title',
        'label' => 'Titre'
      	]);
        $this->crud->addField([
      	'name' => 'description',
        'label' => 'Description'
      	]);
        $this->crud->addField([
      	'name' => 'price',
        'label' => 'Prix (centimes)'
      	]);
        $this->crud->addField([
      	'name' => 'foodType',
        'label' => 'Type',
        'type' => 'select_from_array',
        'options' => ['beverage' => 'Boisson', 'sweet' => 'Sucré', 'salty' => 'Salé'],
      	]);
        //$this->crud->setFromDb();
    }

	public function store(StoreRequest $request)
	{
		return parent::storeCrud();
	}

	public function update(UpdateRequest $request)
	{
		return parent::updateCrud();
	}
}