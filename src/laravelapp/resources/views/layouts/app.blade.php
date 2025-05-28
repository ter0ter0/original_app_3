<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">  <title>モダンHTMLデモ</title>

  {{-- Vite経由でCSSを読み込む --}}
  @vite(['resources/css/style.css'])

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
</head>
<body>
        @if(session('alertMessage'))
            <div class="alert alert-danger text-center w-75 mx-auto">
                {{ session('alertMessage') }}
            </div>
        @elseif(session('successMessage'))
            <div class="alert alert-success text-center w-75 mx-auto">
                {{ session('successMessage') }}
            </div>
        @endif

        @include('commons.header')

        <main>
            @yield('content')
        </main>

        @include('commons.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>
