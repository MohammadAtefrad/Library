<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\UserRequest as StoreRequest;
use App\Http\Requests\UserRequest as UpdateRequest;

/**
 * Class UserCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class UserCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\User');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/user');
        $this->crud->setEntityNameStrings('user', 'users');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns
        // $this->crud->setFromDb();

        // add asterisk for fields that are required in UserRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');

        // columns
        $this->crud->addColumn([
            'name' => 'id',
            'type' => 'number',
            'label' => 'Id',
        ]);
        $this->crud->addColumn([
            'name' => 'name',
            'type' => 'text',
            'label' => 'نام',
        ]);
        $this->crud->addColumn([
            'name' => 'email',
            'type' => 'email',
            'label' => 'ایمیل',
        ]);
        $this->crud->addColumn([
            'label' => "سطح", // Table column heading
            'type' => "select",
            'name' => 'role_id', // the column that contains the ID of that connected entity;
            'entity' => 'role', // the method that defines the relationship in your Model
            'attribute' => "role", // foreign key attribute that is shown to user
            'model' => "App\User", // foreign key model
        ]);
        $this->crud->addColumn([
            'label' => "وضعیت", // Table column heading
            'type' => "select",
            'name' => 'user_status_id', // the column that contains the ID of that connected entity;
            'entity' => 'userstatus', // the method that defines the relationship in your Model
            'attribute' => "user_status", // foreign key attribute that is shown to user
            'model' => "App\User", // foreign key model
        ]);
    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $fields = $this->crud->create_fields;
        foreach ($fields as $key=>$value) {
            $request->offsetSet($key, strip_tags($request->$key));
        }

        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $fields = $this->crud->update_fields;
        foreach ($fields as $key=>$value) {
            $request->offsetSet($key, strip_tags($request->$key));
        }

        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
