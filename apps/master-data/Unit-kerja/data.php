<div class="card">
  <div class="card-header">
    <a href="?emi=tambah-unitkerja" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah data</a>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>Nama unit kerja</th>
        <th>Manajer</th>
        <th width="13%">Opsi</th>
      </tr>
      </thead>
      <tbody>
        <?php 
         foreach ($data_unitkerja as $data) { ?>
         
        <tr>
          <td><?= $data->nama_unit_kerja ?></td>
          <td><?= $data->manajer ?></td>
          <td>
            <a href="?emi=ubah-unitkerja&id_unit_kerja=<?= $data->id_unit_kerja; ?>&parameter=1" class="btn btn-sm btn-warning"><i class="fa fa-pen"></i> Edit</a> |
            <a href="?emi=detail-unitkerja&id_unit_kerja=<?= $data->id_unit_kerja; ?>&parameter=1" class="btn btn-sm btn-info"><i class="fa fa-eye"></i> Detail</a> |
            <a href="?emi=hapus-unitkerja&id_unit_kerja=<?= $data->id_unit_kerja ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Hapus</a>
          </td>
        </tr>
        <?php } ?>

      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>