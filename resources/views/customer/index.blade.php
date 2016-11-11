<!DOCTYPE html>
<html>
<head>
    <title>Application</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="container">
        <div id="app">
            <data-viewer source="/api/customer" title="Customer Data" />
        </div>
    </div>
</body>
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</html>