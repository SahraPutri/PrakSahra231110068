<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'CRUD Mahasiswa')</title>

    {{-- CSS --}}
<style>
    body {
        font-family: 'Segoe UI', Roboto, Arial, sans-serif;
        background-color: #0a0f1a; /* Hitam kebiruan */
        color: #e0e0ff; /* Abu terang kebiruan */
        margin: 0;
        padding: 40px;
    }

    h2 {
        font-size: 28px;
        font-weight: 600;
        color: #8e44ad; /* Ungu terang */
        margin-bottom: 24px;
        border-bottom: 2px solid #2c2f40;
        padding-bottom: 10px;
    }

    a {
        color: #64b5f6; /* Biru terang */
        text-decoration: none;
        font-weight: 500;
    }

    a:hover {
        text-decoration: underline;
    }

    .btn-tambah {
        display: inline-block;
        background-color: #512da8; /* Ungu tua */
        color: #f0f0ff;
        padding: 10px 16px;
        border-radius: 6px;
        font-size: 14px;
        text-decoration: none;
        margin-bottom: 20px;
        transition: background-color 0.2s ease-in-out;
        box-shadow: 0 2px 4px rgba(0,0,0,0.3);
    }

    .btn-tambah:hover {
        background-color: #311b92;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        background-color: #121a2c; /* Biru kehitaman */
        border: 1px solid #2c3e50;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 4px rgba(0,0,0,0.4);
    }

    th, td {
        padding: 14px 18px;
        border-bottom: 1px solid #2e3444;
        text-align: left;
        font-size: 14px;
        color: #e0e0ff;
    }

    th {
        background-color: #1a237e; /* Biru gelap */
        color: #b3e5fc;
        text-transform: uppercase;
        font-size: 13px;
        letter-spacing: 0.5px;
    }

    tr:last-child td {
        border-bottom: none;
    }

    tr:hover {
        background-color: #1c2233; /* Highlight baris */
    }

    .aksi a {
        padding: 6px 10px;
        font-size: 13px;
        border-radius: 4px;
        margin-right: 6px;
        display: inline-block;
    }

    .aksi a.edit {
        background-color: #3949ab; /* Biru keunguan */
        color: #fff;
    }

    .aksi a.edit:hover {
        background-color: #283593;
    }

    .aksi a.hapus {
        background-color: #8e24aa; /* Ungu muda */
        color: #fff;
    }

    .aksi a.hapus:hover {
        background-color: #6a1b9a;
    }

    form {
        display: inline;
    }

    button.hapus {
        background-color: #8e24aa;
        color: #fff;
        border: none;
        padding: 6px 10px;
        border-radius: 4px;
        font-size: 13px;
        cursor: pointer;
    }

    button.hapus:hover {
        background-color: #6a1b9a;
    }
</style>
</head>
<body>

    @yield('content')

</body>
</html>