@extends('layout.bootstrapadmin.index')

@section('content')

<div class="col-sm-8">
    <div class="panel panel-info">
        <div class="panel-heading"><i class="glyphicon glyphicon-plus"></i> Form Add Kegiatan</div>
        <div class="panel-body">
            <form class="form-horizontal" action="<?php echo URL::to("/kegiantan/update/". $isi->id); ?>" method="post">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">User</label>
                    <div class="col-sm-4">
                        <input type="text" value="<?php echo $user->username; ?>" readonly="" name="id" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Name</label>
                    <div class="col-sm-4">
                        <input type="text"value="<?php echo $isi->name; ?>"  name="name" class="form-control " placeholder="name">
                        <p style="color: red"> {{ $errors->first('name') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Keterangan</label>
                    <div class="col-sm-4">
                        <input type="text" value="<?php echo $isi->keterangan; ?>" name="keterangan" class="form-control " placeholder="Keterangan">
                        <p style="color: red"> {{ $errors->first('keterangan') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Waktu Mulai</label>
                    <div class="col-sm-5">
                        <input type="time" value="<?php echo $isi->waktu_mulai; ?>" name="mulai" class="form-control" placeholder="Waktu Mulai">
                        <p style="color: red"> {{ $errors->first('mulai') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Waktu Berahir</label>
                    <div class="col-sm-5">
                        <input type="time" value="<?php echo $isi->waktu_berakhir; ?>" name="berahir" class="form-control" placeholder="Waktu Berahir">
                        <p style="color: red"> {{ $errors->first('berahir') }} </p>
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