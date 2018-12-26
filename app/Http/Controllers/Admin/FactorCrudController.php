<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\FactorRequest as StoreRequest;
use App\Http\Requests\FactorRequest as UpdateRequest;

/**
 * Class FactorCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class FactorCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Factor');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/factor');
        $this->crud->setEntityNameStrings('فاکتور', 'فاکتورها');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns
        // $this->crud->setFromDb();

        // ------ CRUD FIELDS
        $this->crud->addField([
            'name' => 'user_id',
            'type' => 'select2',
            'label' => 'نام کاربر',
            'entity' => 'user',
            'attribute' => 'name',
        ]);
        $this->crud->addField([
            'name' => 'books',
            'type' => 'select2_multiple',
            'label' => "کتابها",
            'entity' => 'books',
            'attribute' => 'name',
            'pivot' => true,
            'select_all' => true,

        ]);
        $this->crud->addField([
            'name' => 'factor_status_id',
            'type' => 'select2',
            'label' => 'وضعیت فاکتور',
            'entity' => 'factorStatus',
            'attribute' => 'factor_status',
        ]);

        // ------ CRUD COLUMNS
        $this->crud->addColumn([
            'name' => 'id',
            'type' => 'number',
            'label' => 'شناسه',
        ]);
        $this->crud->addColumn([
            'name' => 'user_id',
            'type' => 'select',
            'label' => 'نام کاربر',
            'entity' => 'user',
            'attribute' => 'name',
        ]);
        $this->crud->addColumn([
            'name' => 'books_number',
            'type' => 'select_multiple',
            'label' => "کتابها",
            'entity' => 'books',
            'attribute' => 'name',
        ]);
        $this->crud->addColumn([
            'name' => 'factor_status_id',
            'type' => 'select',
            'label' => 'وضعیت فاکتور',
            'entity' => 'factorStatus',
            'attribute' => 'factor_status',
        ]);
        $this->crud->addColumn([
            'name' => 'created_at',
            'type' => 'datetime',
            'label' => 'زمان ایجاد',
        ]);
        $this->crud->addColumn([
            'name' => 'updated_at',
            'type' => 'datetime',
            'label' => 'زمان آخرین تغییرات',
        ]);

        $this->crud->addButtonFromView('line', 'accept', 'accept', 'beginning');

        // add asterisk for fields that are required in FactorRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
    }

    public function accept()
    {
    //
    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $request->request->add(['books_number' => count($request->books)]);

        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $request->request->add(['books_number' => count($request->books)]);

        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
