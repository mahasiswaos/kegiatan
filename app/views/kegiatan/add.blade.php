@extends('layout.bootstrapadmin.index')

@section('content')

<div class="col-sm-8">
    <div class="panel panel-info">
        <div class="panel-heading"><i class="glyphicon glyphicon-plus"></i> Form Add Kegiatan</div>
        <div class="panel-body">
            <form class="form-horizontal" action="<?php echo URL::to("/kegiatan/proses_add"); ?>" method="post">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">User</label>
                    <div class="col-sm-4">
                        <select class="form-control" name="id">
                            <option value="" disabled="" selected="">Pilih Username...!</option>
                            <?php foreach ($isi as $value) {?>
                            <option value="<?php echo $value->id ?>"><?php echo $value->username ?></option>
                            <?php } ?>
                        </select>
                        <p style="color: red"> {{ $errors->first('id') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Name</label>
                    <div class="col-sm-4">
                        <input type="text" name="name" class="form-control " placeholder="name">
                        <p style="color: red"> {{ $errors->first('name') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Keterangan</label>
                    <div class="col-sm-4">
                        <input type="text" name="keterangan" class="form-control " placeholder="Keterangan">
                        <p style="color: red"> {{ $errors->first('keterangan') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Waktu Mulai</label>
                    <div class="col-sm-5">
                        <input type="time" name="mulai" class="form-control" placeholder="Waktu Mulai">
                        <p style="color: red"> {{ $errors->first('mulai') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Waktu Berahir</label>
                    <div class="col-sm-5">
                        <input type="time" name="berahir" class="form-control" placeholder="Waktu Berahir">
                        <p style="color: red"> {{ $errors->first('berahir') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-10">
                        <button type="submit" class="btn btn-info"><i class="glyphicon glyphicon-saved"></i> Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop