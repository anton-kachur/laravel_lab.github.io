<!DOCTYPE html>
<html lang="en">
    <head><meta charset="UTF-8">
        <title>@yield('title')</title>
    </head>
    <body>
        <h1>
            Object name:  {{ isset($obj->name) ? $obj->name : 'No face, no name' }}<br>
            Age:  {{ isset($obj->age) ? $obj->age: 'No number'}}
            <div>@yield('content')</div><br>
            <div>@yield('arr')</div>
        </h1>
    </body>
</html>
