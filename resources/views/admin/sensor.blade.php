<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="card text-center">
        <div class="card-header text-white" style="background-color:#27374D">
            <h2 class="fw-light">Nilai Intesitas Cahaya</h2>
        </div>
        <div class="card-body">
            <div class="mt-6 ">
                <div class="container">
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
                </div>
            </div>
        </div>
    </div>
</body>
</html>
