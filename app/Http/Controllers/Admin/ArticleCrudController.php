<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\ArticleRequest as StoreRequest;
use App\Http\Requests\ArticleRequest as UpdateRequest;

/**
 * Class ArticleCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class ArticleCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Article');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/article');
        $this->crud->setEntityNameStrings('مقاله', 'مقالات');

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
            'name' => 'title',
            'type' => 'text',
            'label' => "عنوان"
        ]);
        $this->crud->addField([
            'name' => 'article_category_id',
            'type' => 'select2',
            'label' => 'دسته بندی مقاله',
            'entity' => 'articleCategory',
            'attribute' => 'article_category',
        ]);
        $this->crud->addField([
            'name' => 'publisher',
            'type' => 'text',
            'label' => "ناشر"
        ]);
        $this->crud->addField([
            'name' => 'author',
            'type' => 'text',
            'label' => "نویسنده"
        ]);
        $this->crud->addField([
            'name' => 'abstract',
            'type' => 'textarea',
            'label' => "چکیده"
        ]);
        $this->crud->addField([
            'name' => 'published_date',
            'type' => 'date',
            'label' => "تاریخ انتشار"
        ]);
        $this->crud->addField([
            'name' => 'keywords',
            'type' => 'text',
            'label' => "کلمات کلیدی"
        ]);
        $this->crud->addField([
            'name' => 'article_status_id',
            'type' => 'select2',
            'label' => 'وضعیت مقاله',
            'entity' => 'articleStatus',
            'attribute' => 'article_status',
        ]);
        $this->crud->addField([
            'name' => 'download_link',
            'type' => 'text',
            'label' => "لینک دانلود"
        ]);
        $this->crud->addField([
            'name' => 'download_count',
            'type' => 'number',
            'label' => "تعداد دانلود",
            'attributes' => ["min" => 0, "step" => 1]
        ]);

        // ------ CRUD COLUMNS
        $this->crud->addColumn([
            'name' => 'id',
            'type' => 'number',
            'label' => 'شناسه',
        ]);
        $this->crud->addColumn([
            'name' => 'title',
            'type' => 'text',
            'label' => 'عنوان',
        ]);
        $this->crud->addColumn([
            'name' => 'article_category_id',
            'type' => 'select',
            'label' => 'دسته بندی مقاله',
            'entity' => 'articleCategory',
            'attribute' => 'article_category',
        ]);
        $this->crud->addColumn([
            'name' => 'publisher',
            'type' => 'text',
            'label' => 'ناشر',
        ]);
        $this->crud->addColumn([
            'name' => 'author',
            'type' => 'text',
            'label' => 'نویسنده',
        ]);
        $this->crud->addColumn([
            'name' => 'abstract',
            'type' => 'text',
            'label' => 'چکیده',
            'limit' => 255
        ]);
        $this->crud->addColumn([
            'name' => 'published_date',
            'type' => 'date',
            'label' => 'تاریخ انتشار',
        ]);
        $this->crud->addColumn([
            'name' => 'keywords',
            'type' => 'text',
            'label' => 'کلمات کلیدی',
        ]);
        $this->crud->addColumn([
            'name' => 'article_status_id',
            'type' => 'select',
            'label' => 'وضعیت مقاله',
            'entity' => 'articleStatus',
            'attribute' => 'article_status',
        ]);
        $this->crud->addColumn([
            'name' => 'download_link',
            'type' => 'text',
            'label' => 'لینک دانلود',
        ]);
        $this->crud->addColumn([
            'name' => 'download_count',
            'type' => 'number',
            'label' => 'تعداد دانلود',
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



        // add asterisk for fields that are required in ArticleRequest
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
