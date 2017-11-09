<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Map</title>
</head>
<body>
    <div
            id="map"
            name="test"
    >

    </div>
        {{--<div class="content">
            <div class="title m-b-md">
                Map
            </div>
            <map name="example"
            ></map>
        </div>--}}

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAiuP77AFfqzOwXR-D91yD16RurwxCc0lc"></script>
    <script src="{{ asset('/js/app.js') }}"></script>
</body>
</html>
