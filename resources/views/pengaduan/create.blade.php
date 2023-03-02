<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">

    <title>Tambah Data</title>
</head>
<body>
    <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                 - <strong>TAMBAH DATA</strong> -
                </div>
                <div class="card-body">

                    <br/>
                    <br/>
                    
                    <form method="post" action="/pengaduan/store">
 
                        {{ csrf_field() }}
 
                        <!-- <div class="form-group">
                            <label><strong>id_pengaduan</strong></label>
                            <input type="text" name="id_pengaduan" class="form-control">
 
                            @if($errors->has('id_pengaduan'))
                                <div class="text-danger">
                                    {{ $errors->first('id_pengaduan')}}
                                </div>
                            @endif
                        </div> -->


 
                        <div class="form-group">
                            <label><strong>tanggal_pengaduan</strong></label>
                            <input type="date" name="tanggal_pengaduan" class="form-control">
 
                             @if($errors->has('tanggal_pengaduan'))
                                <div class="text-danger">
                                    {{ $errors->first('tanggal_pengaduan')}}
                                </div>
                            @endif
                        </div>



                        <div class="form-group">
                            <label><strong>NIK</strong></label>
                            <input type="text" name="NIK" class="form-control">
 
                             @if($errors->has('NIK'))
                                <div class="text-danger">
                                    {{ $errors->first('NIK')}}
                                </div>
                            @endif
                        </div>



                        <div class="form-group">
                            <label><strong>isi_laporan</strong></label>
                            <textarea name="isi_laporan" class="form-control"></textarea>
 
                             @if($errors->has('isi_laporan'))
                                <div class="text-danger">
                                    {{ $errors->first('isi_laporan')}}
                                </div>
                            @endif
                        </div>



                        <div class="form-group">
                            <label><strong>foto</strong></label>
                            <input type="file" name="foto" class="form-control">
 
                             @if($errors->has('foto'))
                                <div class="text-danger">
                                    {{ $errors->first('foto')}}
                                </div>
                            @endif
                        </div>



                        <div class="form-group">
                            <p><strong>Status</strong></p>
                            <input type="radio" name="status" value="proses" />Proses</p>
                            <input type="radio" name="status" value="selesai" />Selesai</p>
 
                             @if($errors->has('status'))
                                <div class="text-danger">
                                    {{ $errors->first('status')}}
                                </div>
                            @endif
                        </div>


                        <div class="form-group">
                            <a href="/pengaduan" class="btn btn-primary">Kembali</a>
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
</body>
</html>