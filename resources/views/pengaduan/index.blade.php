<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewreport" content="widht=device-widht, initial-scale=1">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
	<title>Pengaduan Masyarakat</title>
</head>
<body>
<div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                 - <strong> DATA PENGADUAN </strong> -
                </div>
                <div class="card-body">
                    <a href="/pengaduan/create" class="btn btn-primary">Input Data Pengaduan</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                            <!-- <th>No</th> -->
                                <th>tanggal_pengaduan</th>
                                <th>NIK</th>
								<th>isi_laporan</th>
								<th>foto</th>
								<th>status</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pengaduan as $p)
                            <tr>
                                <!-- <td>{{ $p->id_pengaduan }}</td> -->
                                <td>{{ $p->tanggal_pengaduan }}</td>
                                <td>{{ $p->NIK }}</td>
								<td>{{ $p->isi_laporan }}</td>
								<td>{{ $p->foto }}</td>
								<td>{{ $p->status }}</td>
                                <td>
                                    <a href="/pengaduan/edit/{{ $p->id_pengaduan }}" class="btn btn-warning">Edit</a>
                                    <a href="/pengaduan/destroy/{{ $p->id_pengaduan }}" class="btn btn-danger">Hapus</a>
                                    <a href="/pengaduan/show/{{ $p->id }}" class="btn btn-info">Detail</a>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
	</table>
 
 
</body>
</html>