<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\BookCategoryRequest as StoreRequest;
use App\Http\Requests\BookCategoryRequest as UpdateRequest;

/**
 * Class BookCategoryCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class BookCategoryCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\BookCategory');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/bookcategory');
        $this->crud->setEntityNameStrings('دسته بندی کتاب', 'دسته بندی کتاب ها');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns
        // $this->crud->setFromDb();

        // ------ CRUD FIELDS
        $this->crud->addField([
            'type' => 'text',
            'name' => 'book_category',
            'label' => 'نام دسته بندی کتاب',
        ]);

        // ------ CRUD COLUMNS
        $this->crud->addColumn([
            'name' => 'id',
            'type' => 'number',
            'label' => 'شناسه',
        ]);
        $this->crud->addColumn([
            'name' => 'book_category',
            'type' => 'text',
            'label' => 'نام دسته بندی کتاب',
        ]);
        $this->crud->addColumn([
            'name' => 'created_at',
            'type' => 'datetime',
            'label' => 'زمان ایجاد',
            // 'entity' => 'commentStatus', // the method that defines the relationship in your Model
            // 'attribute' => 'comment_status', // foreign key attribute that is shown to user
        ]);
        $this->crud->addColumn([
            'name' => 'updated_at',
            'type' => 'datetime',
            'label' => 'زمان آخرین تغییرات',
            // 'entity' => 'commentStatus', // the method that defines the relationship in your Model
            // 'attribute' => 'comment_status', // foreign key attribute that is shown to user
        ]);


        // add asterisk for fields that are required in BookCategoryRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
