<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ Theme::getMetaTitle() }} - {{__('app.name')}}</title>
    <meta name="keyword" content="{{ Theme::getMetaKeyword() }}">
    <meta name="description" content="{{ Theme::getMetaDescription() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="{{asset('apple-touch-icon.png')}}">

    {!! Theme::asset()->styles() !!}
    {!! Theme::asset()->scripts() !!}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.20/datatables.min.css" />

    <script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.20/datatables.min.js"></script>
</head>

<body>
    <div class="page">
        {!! Theme::partial('header') !!}
        <div class="container container-w">
            <div class="row">
                <div class="col-md-4 col-aside">{!! Theme::partial('aside') !!}</div>
                <div class="col-md-8 col-content">{!! Theme::content() !!}</div>
            </div>
        </div>
        {!! Theme::partial('footer') !!}
    </div>
    {!! Theme::asset()->container('footer')->scripts() !!}
    {!! Theme::asset()->container('extra')->scripts() !!}
</body>

</html>