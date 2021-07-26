<!-- Main content -->
<section class="content">
    <div class="container">
        <hr />
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Kasus Coronavirus di Indonesia Berdasarkan Provinsi</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Provinsi</th>
                                    <th>Positif</th>
                                    <th>Sembuh</th>
                                    <th>Meninggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($data_indo as $rows) { ?>
                                    <tr>
                                        <th scope="row"><?php echo $no; ?></th>
                                        <td><?php echo $rows->attributes->Country_Region; ?></td>
                                        <td><?php echo $rows->attributes->Confirmed; ?></td>
                                        <td><?php echo $rows->attributes->Deaths; ?></td>
                                        <td><?php echo $rows->attributes->Recovered; ?></td>
                                    </tr>
                                <?php
                                    $no++;
                                } ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>