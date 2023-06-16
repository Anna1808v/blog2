<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
with font-awesome or any other icon font library -->
        <li class="nav-header">ADMIN PANEL</li>
        <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
                <i class="fa-regular far fa-comment"></i>
                <p>
                    Comments
                    <span class="badge badge-info right">{{ $comments->total() }}</span>
                </p>
            </a>
        </li>

    </ul>
</nav>
