<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>

```
<!-- CSS -->
<link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
```

</head>
<body>

```
<!-- Sidebar -->
@include('layouts.sidebar')

<!-- Contenu principal -->
<div class="main-content">
    @yield('content')
</div>
```

</body>
</html>
