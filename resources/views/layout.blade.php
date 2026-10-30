<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Reading List</title>
    <style>
        :root{--bg:#f4f5fb;--card:#fff;--text:#1f2937;--muted:#6b7280;--primary:#4f46e5;--primary-dark:#4338ca;--danger:#dc2626;--border:#e5e7eb}
        *{box-sizing:border-box}
        body{margin:0;font-family:system-ui,-apple-system,"Segoe UI",Roboto,sans-serif;background:var(--bg);color:var(--text);line-height:1.5}
        header{background:linear-gradient(135deg,#4f46e5,#7c3aed);color:#fff;padding:2.5rem 1rem 4rem;text-align:center}
        header h1{margin:0;font-size:2rem}
        header h1 a{color:#fff;text-decoration:none}
        header p{margin:.25rem 0 0;opacity:.85}
        main{max-width:820px;margin:-2rem auto 3rem;padding:0 1rem}
        .card{background:var(--card);border-radius:14px;padding:1.5rem;box-shadow:0 6px 20px rgba(0,0,0,.08)}
        a{color:var(--primary);text-decoration:none}
        a:hover{text-decoration:underline}

        .toolbar{display:flex;flex-wrap:wrap;gap:1rem;justify-content:space-between;align-items:center;margin-bottom:1.25rem}
        .filters{display:flex;flex-wrap:wrap;gap:.5rem}
        .filters a{padding:.35rem .9rem;border-radius:999px;background:#eef0f7;color:var(--text);font-size:.9rem}
        .filters a:hover{text-decoration:none;background:#e0e3f1}
        .filters a.active{background:var(--primary);color:#fff;font-weight:600}

        .btn,button{font:inherit;cursor:pointer;border:0;border-radius:8px;padding:.5rem 1rem;background:var(--primary);color:#fff;font-weight:600}
        .btn:hover,button:hover{background:var(--primary-dark);text-decoration:none}
        .btn-small{padding:.3rem .7rem;font-size:.85rem}
        .btn-edit{background:#eef0f7;color:var(--text)}
        .btn-edit:hover{background:#e0e3f1}
        .btn-danger{background:#fee2e2;color:var(--danger)}
        .btn-danger:hover{background:#fecaca}

        table{width:100%;border-collapse:collapse}
        th{font-size:.8rem;text-transform:uppercase;letter-spacing:.04em;color:var(--muted)}
        td,th{border-bottom:1px solid var(--border);padding:.75rem .5rem;text-align:left}
        tr:last-child td{border-bottom:0}
        td.actions{text-align:right;white-space:nowrap}
        td.actions form{display:inline}
        .book-title{font-weight:600}

        .badge{display:inline-block;padding:.15rem .65rem;border-radius:999px;font-size:.8rem;font-weight:600}
        .badge-to-read{background:#fef3c7;color:#92400e}
        .badge-reading{background:#dbeafe;color:#1e40af}
        .badge-finished{background:#dcfce7;color:#166534}

        .empty{text-align:center;color:var(--muted);padding:2rem 0}

        .search{display:flex;gap:.5rem;margin-bottom:1.25rem}
        .search input{flex:1}

        label{display:block;margin-top:1rem;font-weight:600}
        input,select{width:100%;padding:.6rem .75rem;margin-top:.25rem;border:1px solid var(--border);border-radius:8px;font:inherit}
        input:focus,select:focus{outline:2px solid var(--primary);border-color:transparent}
        .error{color:var(--danger);font-size:.9rem;margin-top:.25rem}
        h2{margin-top:0}
    </style>
</head>
<body>
    <header>
        <h1><a href="{{ route('books.index') }}">📚 My Reading List</a></h1>
        <p>Keep track of what you want to read, are reading, and have finished</p>
    </header>
    <main>
        <div class="card">
            @yield('content')
        </div>
    </main>
</body>
</html>

