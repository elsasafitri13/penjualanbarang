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
                                <h2 class="pageheader-title">Barang Laku</h2>
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
                                        <h5 class="card-header-title">Table Barang Laku</h5>
                                        <div class="toolbar ml-auto">
                                            <a href="#" class="btn btn-primary btn-sm modal_tambah" data-id="null" data-toggle="modal" data-target="#myModal"><span class="fas fa-plus"></span>Tambah Data</a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered first" id="barang_laku">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama Barang</th>
                                                        <th>Jumlah</th>
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
                                        <label class="col-form-label">Jumlah : </label>
                                        <div class="form-group">
                                            <input type="number" class="form-control" placeholder="Contoh: 20" name="jumlah" id="jumlah" required>
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
                                    <th>Nama Barang</th>
                                    <td id="idbarang"></td>
                                  </tr>
                                  <tr>
                                    <th>Jumlah</th>
                                    <td id="jumlahh"></td>
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
            var barang_laku = $('#barang_laku').DataTable({
                "processing": true,
                "serverSide": true,
                "ordering": false,
                "columnDefs": [
                    {"className": 'text-center', "targets": 5}
                ],
                "ajax":
                    {
                        "url": "data/data_barang_laku.php", // URL file untuk proses select datanya
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
                    { "data": "id_barang", width: '15%'},
                    { "data": "jumlah", width: '13%', class:'text-center'},
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

            barang_laku.on( 'draw.dt', function () {
                var PageInfo = $('#barang_laku').DataTable().page.info();
                barang_laku.column(0, { page: 'current' }).nodes().each( function (cell, i) {
                    cell.innerHTML = i + 1 + PageInfo.start;
                });
            });

            // Menampilkan modal tambah data barang_laku
            $('.modal_tambah').click(function(){
                $('#exampleModalLabel').text('Tambah Barang Laku');
                $('#form-tambah')[0].reset();
            });

            // Menampilkan untuk modal edit data barang_laku
            $(document).on('click', '.modal_edit', function(){
                var id = $(this).data("id");
                $.ajax({
                    url:"proses/select_barang_laku.php",
                    method:"POST",
                    data:{id:id},
                    dataType:"json",
                    success:function(data){
                        $('#myModal').modal('show');
                        $('#exampleModalLabel').text('Edit Barang Laku');
                        $('#id_barang').val(data.id_barang);
                        $('#jumlah').val(data.jumlah);
                        $('#id').val(data.id);

                    }
                });
            });
            // Submit form tambah data
            $('.tambah').on("click", function(e){
                e.preventDefault();
                $.ajax({
                    url: 'proses/tambah_barang_laku.php',
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
                                $('#barang').DataTable().ajax.reload();
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

            // Menampilkan untuk modal detail data barang_laku
            $(document).on('click', '.modal_detail', function(){
                var id = $(this).data("id");
                console.log(id);
                $.ajax({
                    url:"proses/select_barang_laku.php",
                    method:"POST",
                    data:{id:id},
                    dataType:"json",
                    success:function(data){
                        $('#myModalDetail').modal('show');
                        $('#label').text('Detail Barang Laku');
                        $('#idbarang').text(data.id_barang);
                        $('#jumlahh').text(data.jumlah);
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
                            url: 'proses/hapus_barang_laku.php',
                            dataType: "json",
                            type: 'POST',
                            data: {id:id},
                        });
                        swal("Data berhasil dihapus", {
                            icon: "success", 
                        });
                        $('#barang').DataTable().ajax.reload();

                    } else {
                        swal("Data Anda masih tersedia!");
                    }
                });
            });
        });
        
    </script>
</body>
 
</html>