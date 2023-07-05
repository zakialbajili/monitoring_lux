<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</head>
<body>
    <table class="mt-6 table table-striped table-bordered text-center p-2 mb-2 ">
        <thead style="text-align:center;border-radius: 4em 4em 0px 0px">
            <tr>
                <th class="h3 text-center fw-medium">Intesitas Cahaya</th>
                <th class="h3 text-center fw-medium">Status</th>
                <th class="h3 text-center fw-medium">Waktu</th>
            </tr>
        </thead>
        <tbody style="text-align:center;border-radius: 0px 0px 4em 4em">
            @foreach($data as $dt)
            <tr class="mt-6">
                <td class="mt-6 h5 fw-semibold">{{$dt->lux}}</td>
                <td class="mt-6 h5 fw-semibold">{{$dt->status}}</td>
                <td class="mt-6 h5 fw-semibold">{{$dt->created_at}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>