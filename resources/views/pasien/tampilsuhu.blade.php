<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="mt-6 ">
        <h1 class="mt-3">Data Suhu & Kelembaban</h1>
        <table class="mt-6" border=1 style="text-align:center">
            <tr>
                <th>No</th>
                <th>Suhu</th>
                <th>Kelembaban</th>
                <th>created_at</th>
                <th>updated_at</th>
                <th>Aksi</th>
            </tr>
            @foreach($data as $dt)
            <tr class="mt-6">
                <td class="mt-6">{{$dt->id}}</td>
                <td class="mt-6">{{$dt->suhu}}</td>
                <td class="mt-6">{{$dt->kelembaban}}</td>
                <td class="mt-6">{{$dt->created_at}}</td>
                <td class="mt-6">{{$dt->update_at}}</td>
                <td class="mt-6">Edit/Hapus</td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>