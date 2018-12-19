<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard sidebar_right_menu_li"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
<li><a href="{{ backpack_url('elfinder') }}"><i class="fa fa-files-o sidebar_right_menu_li"></i> <span>{{ trans('backpack::crud.file_manager') }}</span></a></li>

<li class="treeview">
    <a href="#"><i class="fa fa-user sidebar_right_menu_li"></i> <span>کاربر</span> <i class="fa fa-angle-right pull-right"></i></a>
    <ul class="treeview-menu">
        <li><a href='{{ backpack_url('user') }}'><i class='fa fa-user sidebar_right_menu_li'></i> <span>کاربران</span></a></li>
        <li><a href='{{ backpack_url('role') }}'><i class='fa fa-vcard sidebar_right_menu_li'></i> <span>نقش های کاربران</span></a></li>
        <li><a href='{{ backpack_url('userstatus') }}'><i class='fa fa-lightbulb-o sidebar_right_menu_li'></i> <span>وضعیت های کاربران</span></a></li>
    </ul>
</li>

<li class="treeview">
    <a href="#"><i class="fa fa-book sidebar_right_menu_li"></i> <span>کتاب</span> <i class="fa fa-angle-right pull-right"></i></a>
    <ul class="treeview-menu">
        <li><a href='{{ backpack_url('book') }}'><i class='fa fa-book sidebar_right_menu_li'></i> <span>کتاب ها</span></a></li>
        <li><a href='{{ backpack_url('bookcategory') }}'><i class='fa fa-folder sidebar_right_menu_li'></i> <span>دسته بندی کتاب ها</span></a></li>
        <li><a href='{{ backpack_url('bookcomment') }}'><i class='fa fa-commenting sidebar_right_menu_li'></i> <span>نظرات کتاب ها</span></a></li>
        <li><a href='{{ backpack_url('bookstatus') }}'><i class='fa fa-lightbulb-o sidebar_right_menu_li'></i> <span>وضیعت های کتاب ها</span></a></li>
    </ul>
</li>

<li class="treeview">
    <a href="#"><i class="fa fa-sticky-note-o sidebar_right_menu_li"></i> <span>مقاله</span> <i class="fa fa-angle-right pull-right"></i></a>
    <ul class="treeview-menu">
        <li><a href='{{ backpack_url('article') }}'><i class="fa fa-sticky-note-o sidebar_right_menu_li"></i> <span>مقالات</span></a></li>
        <li><a href='{{ backpack_url('articlecategory') }}'><i class='fa fa-folder sidebar_right_menu_li'></i> <span>دسته بندی مقالات</span></a></li>
        <li><a href='{{ backpack_url('articlecomment') }}'><i class='fa fa-commenting sidebar_right_menu_li'></i> <span>نظرات مقالات</span></a></li>
        <li><a href='{{ backpack_url('articlestatus') }}'><i class='fa fa-lightbulb-o sidebar_right_menu_li'></i> <span>وضعیت های مقالات</span></a></li>
    </ul>
</li>

<li class="treeview">
    <a href="#"><i class="fa fa-newspaper-o sidebar_right_menu_li"></i> <span>پست</span> <i class="fa fa-angle-right pull-right"></i></a>
    <ul class="treeview-menu">
        <li><a href='{{ backpack_url('post') }}'><i class='fa fa-newspaper-o sidebar_right_menu_li'></i> <span>پست ها</span></a></li>
        <li><a href='{{ backpack_url('postcategory') }}'><i class='fa fa-folder sidebar_right_menu_li'></i> <span>دسته بندی پست ها</span></a></li>
        <li><a href='{{ backpack_url('postcomment') }}'><i class='fa fa-commenting sidebar_right_menu_li'></i> <span>نظرات پست ها</span></a></li>
        <li><a href='{{ backpack_url('poststatus') }}'><i class='fa fa-lightbulb-o sidebar_right_menu_li'></i> <span>وضعیت های پست ها</span></a></li>
    </ul>
</li>

<li class="treeview">
    <a href="#"><i class="fa fa-envelope sidebar_right_menu_li"></i> <span>پیام</span> <i class="fa fa-angle-right pull-right"></i></a>
    <ul class="treeview-menu">
        <li><a href='{{ backpack_url('message') }}'><i class='fa fa-envelope sidebar_right_menu_li'></i> <span>پیام ها</span></a></li>
        <li><a href='{{ backpack_url('messagepriority') }}'><i class='fa fa-bullhorn sidebar_right_menu_li'></i> <span>اولویت های پیام ها</span></a></li>
        <li><a href='{{ backpack_url('messagestatus') }}'><i class='fa fa-lightbulb-o sidebar_right_menu_li'></i> <span>وضعیت های پیام ها</span></a></li>
    </ul>
</li>

<li class="treeview">
    <a href="#"><i class="fa fa-cart-arrow-down sidebar_right_menu_li"></i> <span>فاکتور</span> <i class="fa fa-angle-right pull-right"></i></a>
    <ul class="treeview-menu">
        <li><a href='{{ backpack_url('factor') }}'><i class='fa fa-cart-arrow-down sidebar_right_menu_li'></i> <span>فاکتور ها</span></a></li>
        <li><a href='{{ backpack_url('factorstatus') }}'><i class='fa fa-lightbulb-o sidebar_right_menu_li'></i> <span>وضعیت های فاکتورها</span></a></li>
    </ul>
</li>

<li><a href='{{ backpack_url('commentstatus') }}'><i class='fa fa-comments-o sidebar_right_menu_li'></i> <span>وضیعت های نظرات</span></a></li>





