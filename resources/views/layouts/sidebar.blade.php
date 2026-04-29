

<header>
    <link rel="stylesheet" href="header.css">
<div class="sidebar">
    <div class="sidebar-top">
        <h2 class="logo">MyDashboard</h2>
    </div>

<ul class="menu">
    <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
    <li><a href="{{ route('dashboard') }}">Articles</a></li>
    {{-- <li><a href="#">Categories</a></li> --}}
    {{-- <li><a href="#">Users</a></li> --}}
</ul>

<div class="sidebar-bottom">
    <span class="user-name">{{ auth()->user()->name ?? 'User' }}</span>

    <form method="POST" action="{{ route('auth.logout') }}">
        @csrf
        <button type="submit" class="logout-btn">Logout</button>
    </form>
</div>

</div>
</header>


