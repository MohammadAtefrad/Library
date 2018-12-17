<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Backpack Crud Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used by the CRUD interface.
    | You are free to change them to anything
    | you want to customize your views to better match your application.
    |
    */

    // Forms
    'save_action_save_and_new' => 'ذخیره و مورد جدید',
    'save_action_save_and_edit' => 'ذخیره و ویرایش این مورد',
    'save_action_save_and_back' => 'ذخیره و بازگشت',
    'save_action_changed_notification' => 'رفتار پیش فرض پس از ذخیره تغییر کرده است.',

    // Create form
    'add'                 => 'اضافه کردن',
    'back_to_all'         => 'بازگشت به همه ',
    'cancel'              => 'لغو',
    'add_a_new'           => 'اضافه کردن یک ',

    // Edit form
    'edit'                 => 'ویرایش',
    'save'                 => 'ذخیره',

    // Revisions
    'revisions'            => 'ویرایش ها',
    'no_revisions'         => 'هیچ ویرایشی یافت نشد',
    'created_this'         => 'ایجاد این مورد',
    'changed_the'          => 'تغییر',
    'restore_this_value'   => 'بازیابی این مقدار',
    'from'                 => 'از',
    'to'                   => 'به',
    'undo'                 => 'لغو',
    'revision_restored'    => 'ویرایش با موفقیت انجام شد',
    'guest_user'           => 'کاربر مهمان',

    // Translatable models
    'edit_translations' => 'ویرایش ترجمه ها',
    'language'          => 'زبان',

    // CRUD table view
    'all'                       => 'همه ',
    'in_the_database'           => 'در پایگاه داده',
    'list'                      => 'لیست',
    'actions'                   => 'عملیات',
    'preview'                   => 'پیش نمایش',
    'delete'                    => 'حذف',
    'admin'                     => 'مدیر',
    'details_row'               => 'این ردیف جزئیات است. لطفا مطابق نظر خود آن را ویرایش کنید.',
    'details_row_loading_error' => 'هنگام بارگیری جزئیات خطایی روی داد. لطفا دوباره سعی کنید.',

        // Confirmation messages and bubbles
        'delete_confirm'                              => 'آیا مطمئن هستید که میخواهید این مورد را حذف کنید؟',
        'delete_confirmation_title'                   => 'مورد حذف شد',
        'delete_confirmation_message'                 => 'مورد با موفقیت حذف شد.',
        'delete_confirmation_not_title'               => 'حذف نشد',
        'delete_confirmation_not_message'             => "یک خطا وجود دارد، مورد شما ممکن است حذف نشده باشد.",
        'delete_confirmation_not_deleted_title'       => 'حذف نشده',
        'delete_confirmation_not_deleted_message'     => 'هیچ اتفاقی نیفتاد، مورد شما امن است.',

        // Bulk actions
        'bulk_no_entries_selected_title' => 'هیچ ورودی انتخاب نشده است',
        'bulk_no_entries_selected_message' => 'لطفا یک یا چند مورد را برای انجام اعمال جمعی بر روی آنها انتخاب کنید.',

        // Bulk confirmation
        'bulk_delete_are_you_sure' => 'آیا مطمئن هستید که میخواهید این موارد را حذف کنید: ورودیهای شماره؟',
        'bulk_delete_sucess_title' => 'ورودی ها چاک شدند.',
        'bulk_delete_sucess_message' => ' موارد حذف شدند',
        'bulk_delete_error_title' => 'حذف نشد',
        'bulk_delete_error_message' => 'یک یا چند مورد را نمی توان حذف کرد',

        // Ajax errors
        'ajax_error_title' => 'خطا',
        'ajax_error_text'  => 'خطا در بارگیری صفحه، لطفا صفحه را تازه کنید',

        // DataTables translation
        'emptyTable'     => 'داده ای در جدول وجود ندارد',
        'info'           => 'نمایش _START_ تا _END_ از کل _TOTAL_ مورد',
        'infoEmpty'      => 'نمایش 0 تا 0 از 0 ورودی',
        'infoFiltered'   => '(که از کل _MAX_ مورد فیلتر شده است)',
        'infoPostFix'    => '',
        'thousands'      => ',',
        'lengthMenu'     => '_MENU_ رکورد در هر صفحه',
        'loadingRecords' => 'بارگذاری...',
        'processing'     => 'در حال پردازش...',
        'search'         => 'جستجو: ',
        'zeroRecords'    => 'هیچ رکوردی یافت نشد.',
        'paginate'       => [
            'first'    => 'اولین',
            'last'     => 'آخرین',
            'next'     => 'بعدی',
            'previous' => 'قبلی',
        ],
        'aria' => [
            'sortAscending'  => ': برای مرتب کردن صعودی ستون فعال کن',
            'sortDescending' => ': برای مرتب کردن نزولی ستون فعال کن',
        ],
        'export' => [
            'export'            => 'صادر کردن',
            'copy'              => 'کپی',
            'excel'             => 'اکسل',
            'csv'               => 'CSV',
            'pdf'               => 'PDF',
            'print'             => 'پرینت',
            'column_visibility' => 'نمایش ستون',
        ],

    // global crud - errors
        'unauthorized_access' => 'دسترسی غیر مجاز - شما مجوزهای لازم برای دیدن این صفحه ندارید.',
        'please_fix' => 'لطفا خطاهای زیر را رفع کنید:',

    // global crud - success / error notification bubbles
        'insert_success' => 'مورد با موفقیت اضافه شد.',
        'update_success' => 'مورد با موفقیت تغییر یافت.',

    // CRUD reorder view
        'reorder'                      => 'تنظیم مجدد',
        'reorder_text'                 => 'از کشیدن و رها کردن برای تغییر ترتیب استفاده کنید.',
        'reorder_success_title'        => 'انجام شد',
        'reorder_success_message'      => 'تنظیم شما ذخیره شد.',
        'reorder_error_title'          => 'خطا',
        'reorder_error_message'        => 'تنظیم شما ذخیره نشد!',

    // CRUD yes/no
        'yes' => 'بله',
        'no' => 'خیر',

    // CRUD filters navbar view
        'filters' => 'فیلترها',
        'toggle_filters' => 'تعویض فیلترها',
        'remove_filters' => 'پاک کردن فیلترها',

    // Fields
        'browse_uploads' => 'مرور آپلود ها',
        'select_all' => 'انتخاب همه',
        'select_files' => 'انتخاب فایل ها',
        'select_file' => 'انتخاب فایل',
        'clear' => 'پاکسازی',
        'page_link' => 'لینک صفحه',
        'page_link_placeholder' => 'http://example.com/your-desired-page',
        'internal_link' => 'لینک داخلی',
        'internal_link_placeholder' => 'اسلاگ داخلی. Ex: \'admin/page\' (no quotes) for \':url\'',
        'external_link' => 'لینک خارجی',
        'choose_file' => 'انتخاب فایل',

    //Table field
        'table_cant_add' => 'Cannot add new :entity',
        'table_max_reached' => 'Maximum number of :max reached',

    // File manager
    'file_manager' => 'مدیریت فایل ها',
];
