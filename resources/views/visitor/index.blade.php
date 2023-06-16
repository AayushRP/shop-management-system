This is visitor index.
<a href="#" class="nav-link"
onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
<p>
    <i class="fas fa-sign-out-alt">

    </i>
    <span>{{ trans('global.logout') }}</span>
</p>
</a>

<form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>