<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\BookRequest as StoreRequest;
use App\Http\Requests\BookRequest as UpdateRequest;

/**
 * Class BookCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class BookCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Book');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/book');
        $this->crud->setEntityNameStrings('کتاب', 'کتاب ها');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns
        // $this->crud->setFromDb();

        // ------ CRUD FIELDS
        $this->crud->addField([
            'name' => 'name',
            'type' => 'text',
            'label' => "نام"
        ]);
        $this->crud->addField([
            'name' => 'book_category_id',
            'type' => 'select2',
            'label' => 'دسته بندی کتاب',
            'entity' => 'bookCategory',
            'attribute' => 'book_category',
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
            'name' => 'translator',
            'type' => 'text',
            'label' => "مترجم"
        ]);
        $this->crud->addField([
            'name' => 'description',
            'type' => 'textarea',
            'label' => "توصیف"
        ]);
        $this->crud->addField([
            'name' => 'published_date',
            'type' => 'date',
            'label' => "تاریخ انتشار"
        ]);
        $this->crud->addField([
            'name' => 'penalty_value',
            'type' => 'number',
            'label' => "مقدار جریمه"
        ]);
        $this->crud->addField([
            'name' => 'book_status_id',
            'type' => 'select2',
            'label' => 'وضعیت کتاب',
            'entity' => 'bookStatus',
            'attribute' => 'book_status',
        ]);
        $this->crud->addField([
            'name' => 'borrowed_date',
            'type' => 'date',
            'label' => "تاریخ امانت"
        ]);
        $this->crud->addField([
            'name' => 'return_deadline_date',
            'type' => 'date',
            'label' => "مهلت تحویل"
        ]);
        $this->crud->addField([
            'name' => 'return_date',
            'type' => 'date',
            'label' => "تاریخ بازگشت"
        ]);
        $this->crud->addField([
            'name' => 'reborrow_count',
            'type' => 'number',
            'label' => "تعداد تمدید",
            'attributes' => ["min" => 0, "step" => 1]
        ]);
        $this->crud->addField([
            'name' => 'user_id',
            'type' => 'select2',
            'label' => 'کاربر فعلی دارنده کتاب',
            'entity' => 'users2',
            'attribute' => 'name',
        ]);

        // ------ CRUD COLUMNS
        $this->crud->addColumn([
            'name' => 'id',
            'type' => 'number',
            'label' => 'شناسه',
        ]);
        $this->crud->addColumn([
            'name' => 'name',
            'type' => 'text',
            'label' => 'نام',
        ]);
        $this->crud->addColumn([
            'name' => 'book_category_id',
            'type' => 'select',
            'label' => 'دسته بندی کتاب',
            'entity' => 'bookCategory',
            'attribute' => 'book_category',
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
            'name' => 'translator',
            'type' => 'text',
            'label' => 'مترجم',
        ]);
        $this->crud->addColumn([
            'name' => 'description',
            'type' => 'text',
            'label' => 'توصیف',
            'limit' => 255
        ]);
        $this->crud->addColumn([
            'name' => 'published_date',
            'type' => 'date',
            'label' => 'تاریخ انتشار',
        ]);
        $this->crud->addColumn([
            'name' => 'penalty_value',
            'type' => 'number',
            'label' => 'مقدار جریمه',
        ]);
        $this->crud->addColumn([
            'name' => 'book_status_id',
            'type' => 'select',
            'label' => 'وضعیت کتاب',
            'entity' => 'bookStatus',
            'attribute' => 'book_status',
        ]);
        $this->crud->addColumn([
            'name' => 'borrowed_date',
            'type' => 'date',
            'label' => 'تاریخ امانت',
        ]);
        $this->crud->addColumn([
            'name' => 'return_deadline_date',
            'type' => 'date',
            'label' => 'مهلت تحویل',
        ]);
        $this->crud->addColumn([
            'name' => 'return_date',
            'type' => 'date',
            'label' => 'تاریخ بازگشت',
        ]);
        $this->crud->addColumn([
            'name' => 'reborrow_count',
            'type' => 'number',
            'label' => 'تعداد تمدید',
        ]);
        $this->crud->addColumn([
            'name' => 'user_id',
            'type' => 'select',
            'label' => 'کاربر فعلی دارنده کتاب',
            'entity' => 'users2',
            'attribute' => 'name',
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


        // add asterisk for fields that are required in BookRequest
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
