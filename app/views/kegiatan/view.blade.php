@extends('layout.bootstrapadmin.index')

@section('content')
@if (Session::has('message'))
<div class="alert alert-info alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{ Session::get('message') }}
</div>
@endif
<div class="panel panel-info">
    <!-- Default panel contents -->
    <div class="panel-heading"><i class="glyphicon glyphicon-list-alt"></i> Tabel Keterangan</div>

    <!-- Table -->
    <div class="table-bordered">
        <table class="table">
            <tr class="panel-default">
                <th>Id</th>
                <th>Name</th>
                <th>Keterangan</th>
                <th>Waktu Mulai</th>
                <th>Waktu Berahir</th>
                <th>Action</th>
            </tr>
            <?php $i = 1;
            foreach ($isi as $value) {
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $value['name']; ?></td>
                    <td><?php echo $value['keterangan']; ?></td>
                    <td><?php echo $value['waktu_mulai']; ?></td>
                    <td><?php echo $value['waktu_berakhir']; ?></td>
                    <td>
                        <div class="btn btn-group">
                            <a class="btn btn-small btn-danger" title="Delete" href="{{ URL::to('/kegiatan/delete/' . $value->id) }}"><span class="glyphicon glyphicon-trash"></span> </a>
                            <a class="btn btn-small btn-primary" title="Update" href="{{ URL::to('/kegiatan/edit/' . $value->id) }}"><span class=" glyphicon glyphicon-edit"></span> </a>
                        </div>

                    </td>
                </tr>
                <?php
                $i++;
            }
            ?>
        </table>
    </div>
</div>
@stop