@extends('layout.bootstrapadmin.index')

@section('content')

<div class="col-sm-8">
    <div class="panel panel-info">
        <div class="panel-heading"><i class="glyphicon glyphicon-plus"></i> Form Add Kegiatan</div>
        <div class="panel-body">
            <form class="form-horizontal" action="<?php echo URL::to("/profile/update/" . $isi->id); ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">ID</label>
                    <div class="col-sm-4">
                        <input type="text" value="<?php echo $user->username; ?>" readonly="" name="id" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Name</label>
                    <div class="col-sm-4">
                        <input type="text"value="<?php echo $isi->nama; ?>"  name="nama" class="form-control " placeholder="name">
                        <p style="color: red"> {{ $errors->first('nama') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Gender</label>
                    <div class="col-sm-4">
                        <select class="form-control" name="gender">
                            <option value="" disabled="" selected=""></option>
                            <?php if ($isi->gender == "Pria") { ?>
                                <option value="Pria" selected="seleted">Pria</option>
                                <option value="Wanita">Wanita</option>
                            <?php } else { ?>
                                 <option value="Pria">Pria</option>
                                <option value="Wanita" selected="seleted">Wanita</option>
                            <?php }; ?>
                        </select>
                        <p style="color: red"> {{ $errors->first('gender') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Tempat Lahir</label>
                    <div class="col-sm-5">
                        <input type="text" value="<?php echo $isi->tempat_lahir; ?>" name="tmp_lahir" class="form-control" placeholder="Waktu Mulai">
                        <p style="color: red"> {{ $errors->first('tmp_lahir') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Tanggal Lahir</label>
                    <div class="col-sm-5">
                        <input type="date" value="<?php echo $isi->tanggal_lahir; ?>" name="tgl_lahir" class="form-control" placeholder="Waktu Berahir">
                        <p style="color: red"> {{ $errors->first('tgl_lahir') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Alamat</label>
                    <div class="col-sm-5">
                        <input type="text" value="<?php echo $isi->alamat; ?>" name="alamat" class="form-control" placeholder="Waktu Mulai">
                        <p style="color: red"> {{ $errors->first('alamat') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Gambar</label>
                    <div class="col-sm-5">
                        <input type="file" value="<?php echo URL::to($isi->picture); ?>" name="gambar" class="form-control">
                        <p style="color: red"> {{ $errors->first('gambar') }} </p>
                    </div>
                    <div class="col-sm-3">
                        <img src="<?php echo URL::to($isi->picture); ?>" width="60" height="60">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-10">
                        <button type="submit" class="btn btn-info"><i class="glyphicon glyphicon-saved"></i> Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop