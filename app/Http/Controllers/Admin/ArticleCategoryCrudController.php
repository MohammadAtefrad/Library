<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\ArticleCategoryRequest as StoreRequest;
use App\Http\Requests\ArticleCategoryRequest as UpdateRequest;

/**
 * Class ArticleCategoryCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class ArticleCategoryCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\ArticleCategory');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/articlecategory');
        $this->crud->setEntityNameStrings('گروه مقاله', 'دسته بندی مقالات');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */
        // How disable insert, delete & edit buttons:
        // $this->crud->denyAccess('delete');
        // $this->crud->denyAccess('create');

        // TODO: remove setFromDb() and manually define Fields and Columns
        // $this->crud->setFromDb();

        // ------ CRUD FIELDS
        $this->crud->addField([
            'type' => 'text',
            'name' => 'article_category',
            'label' => 'نام دسته بندی مقاله',
        ]);

        // ------ CRUD COLUMNS
        $this->crud->addColumn([
            'name' => 'id',
            'type' => 'number',
            'label' => 'شناسه',
        ]);
        $this->crud->addColumn([
            'name' => 'article_category',
            'type' => 'text',
            'label' => 'نام دسته بندی مقاله',
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

        // add asterisk for fields that are required in ArticleCategoryRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        // $fields = $this->crud->create_fields;
        // foreach ($fields as $key=>$value) {
        //     $request->offsetSet($key, strip_tags($request->$key));
        //     $request->offsetSet($key, trim($request->$key));
        //     $request->offsetSet($key, stripslashes($request->$key));
        //     $request->offsetSet($key, filter_var($request->$key, FILTER_SANITIZE_STRING));
        //     $request->offsetSet($key, htmlspecialchars($request->$key));
        // }

        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        // $fields = $this->crud->update_fields;
        // foreach ($fields as $key=>$value) {
        //     $request->offsetSet($key, strip_tags($request->$key));
        //     $request->offsetSet($key, trim($request->$key));
        //     $request->offsetSet($key, stripslashes($request->$key));
        //     $request->offsetSet($key, filter_var($request->$key, FILTER_SANITIZE_STRING));
        //     $request->offsetSet($key, htmlspecialchars($request->$key));
        // }

        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
