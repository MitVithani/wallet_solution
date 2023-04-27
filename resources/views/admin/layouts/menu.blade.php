
<li class="{{ Request::is('admin/home*') ? 'active' : '' }}">
    <a href="{!! route('admin.home') !!}"><i class="fa fa fa-home"></i><span>&nbsp;&nbsp;Dashboard</span></a>
</li>

<li class="{{ Request::is('admin/users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"
       class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
       <i class="fa fa fa-user"></i><span>&nbsp;&nbsp;Users</span>
    </a>
</li>

<li class="{{ Request::is('admin/ShareLink*') ? 'active' : '' }}">
    <a href="{{ route('ShareLink.index') }}"
       class="nav-link {{ Request::is('ShareLink*') ? 'active' : '' }}">
       <i class="fa fa fa-user"></i><span>&nbsp;&nbsp;Share Link</span>
    </a>
</li>


