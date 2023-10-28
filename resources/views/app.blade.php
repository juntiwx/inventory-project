<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="{{ Vite::asset('resources/images/icon.png') }}">
    <title>Dev</title>
    @routes
    @vite('resources/js/app.js')
    @inertiaHead
</head>
<body>
@inertia
{{--for jquery--}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

{{--fot data tabled--}}
<script src="https://cdn.datatables.net/1.10.8/js/jquery.dataTables.min.js" defer="defer"></script>

{{--for chartjs and plugin datalabel--}}
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.0/dist/chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
</body>
</html>
