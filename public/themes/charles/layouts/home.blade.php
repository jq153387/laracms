<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{__('app.name')}} - {{ Theme::getMetaTitle() }}</title>
    <meta name="description" content="{{ Theme::getMetaDesctiption() }}">
    <meta name="keyword" content="{{ Theme::getMetaKeyword() }}">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}
    {!! Theme::asset()->styles() !!}
    {!! Theme::asset()->scripts() !!}
</head>

<body>
    {!! Theme::content() !!}
    {!! Theme::asset()->container('footer')->scripts() !!}
</body>

</html>