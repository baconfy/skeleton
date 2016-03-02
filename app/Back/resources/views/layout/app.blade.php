<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }}</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{ elixir('css/back.css') }}">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        @include('back::layout.partials.header.component')
        @include('back::layout.partials.main-sidebar.component')

        <div class="content-wrapper">
            <section class="content-header">
                @yield('page-title')
            </section>

            <section class="content">
                @yield('content')
            </section>
        </div>

        @include('back::layout.partials.footer.component')
        @include('back::layout.partials.control-sidebar.component')
    </div>

<script src="{{ elixir('js/back.js') }}"></script>
</body>
</html>