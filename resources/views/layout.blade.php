<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>My Reading List</title>
    <style>
        body{font-family:sans-serif;max-width:700px;margin:2rem auto;padding:0 1rem}
        table{width:100%;border-collapse:collapse}
        td,th{border-bottom:1px solid #ddd;padding:.5rem;text-align:left}
        label{display:block;margin-top:1rem}
        input,select{padding:.4rem;width:100%;box-sizing:border-box}
        .error{color:#b00}
        .filters a{margin-right:.5rem}
        .filters a.active{font-weight:bold}
    </style>
</head>
<body>
    <h1><a href="{{ route('books.index') }}" style="text-decoration:none;color:inherit">My Reading List</a></h1>
    @yield('content')
</body>
</html>
