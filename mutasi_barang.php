<!doctype html>
<html lang="en">
 <!-- test push -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <?php include('partials/head_link.php'); ?>
    <title>project barang</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ====s========================================================== -->
        <?php include('partials/header.php');?>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <?php include('partials/sidebar.php');?>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Barang</h2>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-header d-flex">
                                        <h5 class="card-header-title">Table Keluar Masuk Barang</h5>
                                        <div class="toolbar ml-auto">
                                            <a href="#" class="btn btn-primary btn-sm modal_tambah" data-id="null" data-toggle="modal" data-target="#myModal"><span class="fas fa-plus"></span>Tambah Data</a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered first" id="mutasi_barang">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama Barang</th>
                                                        <th>Nama Supplier</th>
                                                        <th>Jumlah</th>
                                                        <th>Jenis</th>
                                                        <th>Tanggal Masuk</th>
                                                        <th>Tanggal Keluar</th>
                                                        <th style="width: 18%; text-align: center;">Opsi</th>
                                                    </tr>
                                                </thead>
                                                
                                            </table>

                                        </div>
                                        <!-- isi chart -->

                                        <figure class="highcharts-figure">
                                            <div id="container"></div>

                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!-- modal tambah data -->
            <div id="myModal" class="modal fade" role="dialog" tabindex="-1" aria-labelledy="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                <div class="modal-dialog modal-lg">
                    <!-- konten modal tambah -->
                    <div class="modal-content">
                        <!-- heading modal body-->
                        <div class="modal-header">
                            <h5 class="modal-tittle" id="exampleModalLabel"></h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <!-- form tambah data modal body -->
                        <div class="modal-body">
                            <form method="post" id="form-tambah">
                            <input type="hidden" name="id" id="id"/>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="col-form-label">Nama Barang : </label>
                                        <div class="form-group">
                                            <select class="form-control" name="id_barang" id="id_barang">
                                    <?php
                                        $servername = "localhost";
                                        $database = "penjualanbarang";
                                        $username = "root";
                                        $password = "";
                                        // create connection
                                        $conn = mysqli_connect($servername, $username, $password, $database);
                                        $sql = "SELECT * FROM barang";
                                        $result = $conn->query($sql);

                                        foreach ($result as $key => $value) {
                                        
                                        echo '<option value=" '.$value['id'].'">'.$value['nama_barang'].'</option>';
                                    }

                                    $conn->close();
                                    ?>
                                </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="col-form-label">Nama Supplier : </label>
                                        <div class="form-group">
                                            <select class="form-control" name="id_supplier" id="id_supplier">
                                    <?php
                                        $servername = "localhost";
                                        $database = "penjualanbarang";
                                        $username = "root";
                                        $password = "";
                                        // create connection
                                        $conn = mysqli_connect($servername, $username, $password, $database);
                                        $sql = "SELECT * FROM supplier";
                                        $result = $conn->query($sql);

                                        foreach ($result as $key => $value) {
                                        
                                        echo '<option value=" '.$value['id'].'">'.$value['nama'].'</option>';
                                    }

                                    $conn->close();
                                    ?>
                                </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="col-form-label">Jumlah : </label>
                                        <div class="form-group">
                                            <input type="number" class="form-control" placeholder="Contoh: 10" name="jumlah" id="jumlah" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="col-form-label">Jenis : </label>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" name="jenis" id="jenis" value="1">Barang Masuk<br>
                                                <input type="checkbox" class="form-check-input" name="jenis" id="jenis" value="2">Barang Keluar<br>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="col-form-label">Tanggal Masuk : </label>
                                        <div class="form-group">
                                            <input type="date" class="form-control" placeholder="Contoh: 20" name="tanggal_masuk" id="tanggal_masuk" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="col-form-label">Tanggal Keluar: </label>
                                        <div class="form-group">
                                            <input type="date" class="form-control" placeholder="Contoh: 25" name="tanggal_keluar" id="tanggal_keluar" required>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                                <br>
                                        <!-- modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                            <button type="simpan" class="btn btn-primary tambah">Simpan</button>
                                        </div>
                            </div>
                        </div>
                    </div>

            <!-- modal detail -->
            <div id="myModalDetail" class="modal fade" role="dialog" tabindex="-1" aria-labelledy="label" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                <div class="modal-dialog modal-lg">
                    <!-- konten modal tambah -->
                    <div class="modal-content">
                        <!-- heading modal body-->
                        <div class="modal-header">
                            <h5 class="modal-tittle" id="label"></h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <!-- form detail modal body -->
                        <div class="modal-body">
                            <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th>Id Barang</th>
                                    <td id="idbarang"></td>
                                  </tr>
                                  <tr>
                                    <th>Id Supplier</th>
                                    <td id="idsupplier"></td>
                                  </tr>
                                  <tr>
                                    <th>Jumlah</th>
                                    <td id="jumlahh"></td>
                                  </tr>
                                  <tr>
                                    <th>Jenis</th>
                                    <td id="jeniss"></td>
                                  </tr>
                                  <tr>
                                    <th>Tanggal Masuk</th>
                                    <td id="tanggalmasuk"></td>
                                  </tr>
                                  <tr>
                                      <th>Tanggal Keluar</th>
                                      <td id="tanggalkeluar"></td>
                                  </tr>
                                </thead>
                            </table>
                        </div>

                                <br>
                                        <!-- modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                        </div>
                    </div>
                </div>
            </div>
                    
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <?php include('partials/footer.php'); ?>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <?php include('partials/buttom_script.php'); ?>

    <script>
        $(document).ready(function(){
            // Menampilkan data menggunakan plufin datatables
            var mutasi_barang = $('#mutasi_barang').DataTable({
                "processing": true,
                "serverSide": true,
                "ordering": false,
                "columnDefs": [
                    {"className": 'text-center', "targets": 5}
                ],
                "ajax":
                    {
                        "url": "data/data_mutasi_barang.php", // URL file untuk proses select datanya
                        "type": "POST"
                    },
                "columnDefs": [ {
                    "searchable": false,
                    "orderable": false,
                    "targets": 0
                } ],
                "order": [[ 1, 'asc' ]],
                "columns": [
                    { "data": null, width: '5%', class:'text-center'},
                    { "data": "id_barang", width: '10%'},
                    { "data": "id_supplier", width: '10%'},
                    { "data": "jumlah", width: '9%'},
                    { "data": "jenis", width: '13%', class:'text-center'},
                    { "data": "tanggal_masuk", width: '13%'},
                    { "data": "tanggal_keluar", width: '13%'},
                    
                    { "render": function (data, type, row ) {
                        var html = "<a href='#' class='btn btn-primary btn-sm modal_edit' data-id="+row.id+"><span class='fas fa-edit'></span></a> | " +
                                        "<a href='#' class='btn btn-info btn-sm modal_detail' data-id="+row.id+"><span class='fas fa-eye'></span></a> | " +
                                        "<a href='' class='btn btn-danger btn-sm hapus' data-id="+row.id+"><span class='fas fa-trash'></span></a>";
                                    return html;
                            
                                }
                        },

                     ]
            });

            // Menginput number
            $('#myModal').on('shown.bs.modal', function() {
                $('#harga_beli').number( true, 2 );
                $('#harga_jual').number( true, 2 );
            });

            mutasi_barang.on( 'draw.dt', function () {
                var PageInfo = $('#mutasi_barang').DataTable().page.info();
                mutasi_barang.column(0, { page: 'current' }).nodes().each( function (cell, i) {
                    cell.innerHTML = i + 1 + PageInfo.start;
                });
            });

            // Menampilkan modal tambah data mutasi_barang
            $('.modal_tambah').click(function(){
                $('#exampleModalLabel').text('Tambah Mutasi Barang');
                $('#form-tambah')[0].reset();
            });

            // select get data mutasi_barang
            $('#nama_barang').on("change", function(){
                var id = $(this).val();

                $.ajax({
                    url: 'proses/get_mutasi_barang.php',
                    dataType: "json",
                    type: 'GET',
                    data:{id : id},
                    success: function(response){
                        console.log(response);
                        $('#nama_barang').val(response.nama_barang);
                    }
                });
            });

            // Menampilkan untuk modal edit data mutasi_barang
            $(document).on('click', '.modal_edit', function(){
                var id = $(this).data("id");
                $.ajax({
                    url:"proses/select_mutasi_barang.php",
                    method:"POST",
                    data:{id:id},
                    dataType:"json",
                    success:function(data){
                        $('#myModal').modal('show');
                        $('#exampleModalLabel').text('Edit Mutasi Barang');
                        $('#id_barang').val(data.id_barang);
                        $('#id_supplier').val(data.id_supplier);
                        $('#jumlah').val(data.jumlah);
                        $('#jenis').val(data.jenis);
                        $('#tanggal_masuk').val(data.tanggal_masuk);
                        $('#tanggal_keluar').val(data.tanggal_keluar);
                        $('#id').val(data.id);

                    }
                });
            });
            // Submit form tambah data
            $('.tambah').on("click", function(e){
                e.preventDefault();
                $.ajax({
                    url: 'proses/tambah_mutasi_barang.php',
                    dataType: "json",
                    type: 'POST',
                    data: $('#form-tambah').serialize(),
                    success: function(response){
                        switch(response.status) {
                            case 422:
                                $('#myModal').find('#form-tambah')[0].reset();
                                $('#myModal').modal('hide');
                                $('#form-tambah')[0].reset();
                                swal({
                                    title: "Error!",
                                    text: response.msg,
                                    icon: "error",
 
    
                                });
                                break;
                            case 200:
                                $('#myModal').find('#form-tambah')[0].reset();
                                $('#mutasi_barang').DataTable().ajax.reload();
                                $('#myModal').modal('hide');
                                swal({
                                    title: "Success!",
                                    text: response.msg,
                                    icon: "success",


                                });
                                break;
                            default:
                                // code block
                        }
                    }
                });
            });

            // Menampilkan untuk modal detail data mutasi_barang
            $(document).on('click', '.modal_detail', function(){
                var id = $(this).data("id");
                console.log(id);
                $.ajax({
                    url:"proses/select_mutasi_barang.php",
                    method:"POST",
                    data:{id:id},
                    dataType:"json",
                    success:function(data){
                        $('#myModalDetail').modal('show');
                        $('#label').text('Detail Mutasi Barang');
                        $('#idbarang').text(data.id_barang);
                        $('#idsupplier').text(data.id_supplier);
                        $('#jumlahh').text(data.jumlah);
                        $('#jeniss').text(data.jenis);
                        $('#tanggalmasuk').text(data.tanggal_masuk);
                        $('#tanggalkeluar').text(data.tanggal_keluar);
                        $('#id').val(data.id);

                    }
                });
            });
            // Hapus data
            $(document).on('click', '.hapus', function(e){
                e.preventDefault();
                var id = $(this).data("id");
                swal({
                    title: "Apakah Anda yakin ?",
                    text: "Data yang anda hapus tidak bisa dikembalikan !",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                }).then((willDelete) =>{
                    if (willDelete) {
                        $.ajax({
                            url: 'proses/hapus_mutasi_barang.php',
                            dataType: "json",
                            type: 'POST',
                            data: {id:id},
                        });
                        swal("Data berhasil dihapus", {
                            icon: "success", 
                        });
                        $('#mutasi_barang').DataTable().ajax.reload();

                    } else {
                        swal("Data Anda masih tersedia!");
                    }
                });
            });
        });
        
    </script>
</body>
 
</html>