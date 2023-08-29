<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

        <li class=" nav-item"><a href="index.php"><i class="la la-home"></i><span class="menu-title" data-i18n="nav.dash.main">Dashboard</span></a>

        </li>
        <!--  Post -->
        <li class=" nav-item"><a href="#"><i class="#"></i><span class="menu-title" data-i18n="nav.templates.main">Posts</span>
            <span class="badge badge badge-info badge-pill float-right mr-2">
            </span></a>
            <ul class="menu-content">
            <ul class="menu-content">
                <li><a class="menu-item" href="{{route('post.create')}}" data-i18n="nav.templates.horz.classic">Add Post</a>
                </li>
                <li><a class="menu-item" href="{{route('post.index')}}" data-i18n="nav.templates.horz.top_icon">Show All Posts</a>
                </li>
            </ul>
            </ul>
        </li>
        {{-- category --}}
        <li class=" nav-item"><a href="#"><i class="#"></i><span class="menu-title" data-i18n="nav.templates.main">categories</span>
            <span class="badge badge badge-info badge-pill float-right mr-2">
            </span></a>
            <ul class="menu-content">
            <ul class="menu-content">
                <li><a class="menu-item" href="{{route('category.create')}}" data-i18n="nav.templates.horz.classic">Add category</a>
                </li>
                <li><a class="menu-item" href="{{route('category.index')}}" data-i18n="nav.templates.horz.top_icon">Show All categories</a>
                </li>
            </ul>
            </ul>
        </li>
        {{-- Admin --}}
        <li class=" nav-item"><a href="#"><i class="#"></i><span class="menu-title" data-i18n="nav.templates.main">Admin</span>
            <span class="badge badge badge-info badge-pill float-right mr-2">
            </span></a>
            <ul class="menu-content">
            <ul class="menu-content">
                <li><a class="menu-item" href="{{route('admin.create')}}" data-i18n="nav.templates.horz.classic">Add New Admin</a>
                </li>
                <li><a class="menu-item" href="{{route('admin.index')}}" data-i18n="nav.templates.horz.top_icon">Show All Admin</a>
                {{-- <li><a class="menu-item" href="{{route('admin.edit')}}" data-i18n="nav.templates.horz.top_icon">Edit Admin</a> --}}
                </li>
            </ul>
            </ul>
        </li>

        <li class=" nav-item"><a href="#"><i class="#"></i><span class="menu-title" data-i18n="nav.templates.main">Users

            </span>
            <span class="badge badge badge-info badge-pill float-right mr-2">

            </span></a>
            <ul class="menu-content">

            <ul class="menu-content">
                <li><a class="menu-item" href="add_new_category.php" data-i18n="nav.templates.horz.classic">Add New User</a>
                </li>
                <li><a class="menu-item" href="show_category.php" data-i18n="nav.templates.horz.top_icon">Show All Users</a>
                </li>
            </ul>
        </li>
        </ul>
        </li>

        {{-- navigation_page --}}

        <li class=" nav-item"><a href="#"><i class="#"></i><span class="menu-title" data-i18n="nav.templates.main">Navigation_header

        </span>
        <span class="badge badge badge-info badge-pill float-right mr-2">

        </span></a>
        <ul class="menu-content">
{{-- 
        <ul class="menu-content">
            <li><a class="menu-item" href="{{route('page.create')}}" data-i18n="nav.templates.horz.classic">Add page</a>
            </li>
            <li><a class="menu-item" href="{{route('page.index')}}" data-i18n="nav.templates.horz.top_icon">Show All pages</a>
            </li>
        </ul> --}}
    </li>
    </ul>
    </li>





        </ul>
    </div>
    </div>
