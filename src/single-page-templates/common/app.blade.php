<!DOCTYPE html>
<html>
<head>
    <title>Laravel Sandbox</title>
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="//cdn.bootcss.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap-editable.css" rel="stylesheet"/>
    <script src="//cdn.bootcss.com/jquery/2.2.0/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="js/bootstrap-editable.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
</head>
<body>
<div class="container">
    <div class="content">
        @yield("content")
    </div>
</div>
</body>
</html>