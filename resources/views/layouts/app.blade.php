<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="Performing Arts Studio | OKC, Edmond, OK">
    <meta property="og:description" content="Premier Dance & Acting Studio with a variety of classes for all ages">
    <meta property="og:image" content="https://www.danceunlimitedpac.com/images/classes/starlette2.jpg">
    <meta property="og:url" content="https://www.danceunlimitedpac.com/">
    <meta name="twitter:card" content="summary_large_image">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">

    <title>@yield('title', 'Dance Unlimited | Oklahoma City')</title>
    <meta name="description" content="Premier Dance & Acting Studio with a variety of classes for all ages">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-160107416-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-160107416-1');
    </script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <!-- Favicon -->

    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="images/site.webmanifest">

    <!-- Fonts -->

    <link href="https://fonts.googleapis.com/css?family=Raleway|Suez+One&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>

    </style>
</head>
<body>

    @if(session()->has('message'))
        <div class="alert alert-success" role="alert">
            <strong>Success</strong> {{ session()->get('message') }}
        </div>
    @endif

    @foreach($updates as $update)
        <div class="accordion" id="accordionExample">
            <div class="card" style="width: 100%;">
                <div class="card-header text-center bg-danger" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link text-white font-weight-bold text-uppercase" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="font-size: 0.8em;">
                            {{ $update->title }}
                        </button>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body text-center">
                        {!! $update->description !!}
                    </div>
                    @can('update', \App\Update::class)
                        <div>
                            <form action="{{ route('updates.update', ['update' => $update]) }}"
                                  method="POST" class="p-3">
                                @method('PATCH')
                                @include('forms.update')

                                <button class="btn btn-primary" type="submit">Save</button>
                            </form>
                        </div>
                    @endcan
                </div>
            </div>
        </div>
    @endforeach

    {{--<div class="container py-5">--}}
    {{--    @can('update', \App\Update::class)--}}
    {{--        <div class="p-3">--}}
    {{--            <h2>New Update</h2>--}}
    {{--            <form action="updates" method="POST">--}}
    {{--                @include('forms.update')--}}
    {{--                <button type="submit" class="btn btn-primary">Add Update</button>--}}
    {{--            </form>--}}
    {{--        </div>--}}
    {{--    @endcan--}}
    {{--</div>--}}

    <div class="website">
    @include('nav')
    @yield('content')
    @include('footer')
    </div>

</body>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

<script src="/js/script.js"></script>

<script>
    tinymce.init({
        selector: '#description',
        plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
        menubar: 'file edit view insert format tools table help',
        toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
    });
</script>

</html>
