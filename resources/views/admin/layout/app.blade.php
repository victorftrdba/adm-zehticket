<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Painel Administrativo | Produtor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/admin/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/partials/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/partials/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/event/index.css') }}">
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
</head>

<body>
    @include('admin.partials.header')
    @yield('content')
    @include('admin.partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.tiny.cloud/1/cpkljb5hvf9g0bw6vkvfqofe0pw3rtktqex3usqykutuvy1w/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="{{asset('js/event/event.js')}}"></script>
</body>

</html>
