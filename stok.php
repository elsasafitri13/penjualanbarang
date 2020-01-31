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
                                <h2 class="pageheader-title">Stok</h2>
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
                                        <h5 class="card-header-title">Table Stok</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered first" id="stok">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama Barang</th>
                                                        <th>Stok</th>
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
                                            <input type="text" class="form-control" placeholder="Contoh: Handphone" name="id_barang" id="id_barang" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="col-form-label">Stok : </label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Contoh: Oppo" name="stok" id="stok" required>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </form>
                                <br>
                                        <!-- modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                            <button type="simpan" class="btn btn-primary tambah">Simpan</button>
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
            var stok = $('#stok').DataTable({
                "processing": true,
                "serverSide": true,
                "ordering": false,
                "columnDefs": [
                    {"className": 'text-center', "targets": 5}
                ],
                "ajax":
                    {
                        "url": "data/data_stok.php", // URL file untuk proses select datanya
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
                    { "data": "stok", width: '13%', class:'text-center'},
                    

                     ]
            });

            // Menginput number
            $('#myModal').on('shown.bs.modal', function() {
                $('#harga_beli').number( true, 2 );
                $('#harga_jual').number( true, 2 );
            });

            stok.on( 'draw.dt', function () {
                var PageInfo = $('#stok').DataTable().page.info();
                stok.column(0, { page: 'current' }).nodes().each( function (cell, i) {
                    cell.innerHTML = i + 1 + PageInfo.start;
                });
            });

            // Menampilkan modal tambah data stok
            $('.modal_tambah').click(function(){
                $('#exampleModalLabel').text('Tambah Stok');
                $('#form-tambah')[0].reset();
            });
        });

        
    </script>
</body>
 
</html>