<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.boostrapcdn.com/boostrap/4.2.1/css/boostrap.min.css" rel="stylesheet">

    <title>Tampilan</title>
</head>
<body>
<div class="container">
        <div class="row">
            <div class=col-sm-12>
                <div class="panel-head container-fluid" style="margin-to: 10px;">
            <p>Surat Masuk</p>
        </div>
<div class="form-horizontal">
    <div class="panel-body">
       

        <div class="form-group">
            <label class="col-sm-2">Nama Surat</label>
            <div class="col-sm-10">
                <p>{{ $suratmasuk->nama_surat }}</p>
            </div>
        </div>
            <div  class="form-group">
    <label class="col-sm-2">Perihal</label>
    <div class="col-sm-10">
        <p>{{ $suratmasuk->perihal }}</p>
</div>
</div>
<div class="form-group">
    <label class="col-sm-2">Ditunjukkan</label>
    <div class="col-sm-10">
        <p>{{ $suratmasuk->ditunjukkan }}</p>
</div>
</div>
<div class="form-group">
    <label class="col-sm-2">Tanggal Surat</label>
    <div class="col-sm-10">
        <p>{{ $suratmasuk->tanggal_surat }}</p>
</div>
</div>
<div class="form-group">
    <label class="col-sm-2">Upload Surat</label>
    <div class="col-sm-10">
    <p><img src="{{asset('imgg/'.$suratmasuk->upload)}}" alt=""></p>

</div>
</div>
<div class="form-group">
    <label class="col-sm-2">Pengirim</label>
    <div class="col-sm-10">
        <p>{{ $suratmasuk->pengirim }}</p>
</div>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <a href="/pengaduan" class="btn btn-warning">Data Surat</a>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>