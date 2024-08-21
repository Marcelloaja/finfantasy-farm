<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">DataTables</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                            <li class="breadcrumb-item active">Banner</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <!-- alert page -->
        @if(session('success'))
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            swal("Success", "{{ session('success') }}", "success")
        </script>
        @endif

        @if(session('error'))
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            swal("Error", "{{ session('error') }}", "error")
        </script>
        @endif
        <!-- end alert page -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between">
                            <h4 class="card-title">Data Banner</h4>
                            <!-- <button type="button" class="btn btn-primary" onclick="openModalForm()"><i class="fas fa-user-plus"></i> Tambahkan Pengguna</button> -->
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>All Kinds Of Fish</th>
                                    <th>Total Buyers</th>
                                    <th>Total Fish Package</th>
                                    <th>Out Of Town Delivery</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($banners as $banner)
                                <tr>
                                    <td>{{ $banner->ALL_KINDS }}</td>
                                    <td>{{ $banner->TOTAL_BUYERS }}</td>
                                    <td>{{ $banner->FISH_PACKAGE }}</td>
                                    <td>{{ $banner->DELIVERY }}</td>
                                    <td>
                                        <button type="button" class="btn btn-primary" onclick="openModalForm(`{{ json_encode($banner) }}`)"><i class="fas fa-edit"></i></button>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- end cardaa -->
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div> <!-- container-fluid -->
</div>
<!-- Static Backdrop modal Button -->
<!-- Static Backdrop Modal -->
<div class="modal fade" id="modalForm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="modalFormLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalFormLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="form-banner" action="" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id_banner">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">All Kinds Of Fish</label>
                                <input type="text" class="form-control" name="all_kinds" placeholder="Enter number" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Total Buyers</label>
                                <input type="text" class="form-control" name="total_buyers" placeholder="Enter number" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Total Fish Package</label>
                                <input type="text" class="form-control" name="fish_package" placeholder="Enter number" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Out Of Town Delivery</label>
                                <input type="text" class="form-control" name="delivery" placeholder="Enter number" required>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button> -->
                    <button type="submit" class="btn btn-primary"><span id="text-btn"></span></button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Page-content -->
<style>
    .swal2-confirm {
        margin-left: 1rem !important;
    }
</style>
<script>
    $(document).ready(function() {
        $("#datatable-buttons").DataTable({
            lengthChange: !1,
            buttons: ["pageLength", "colvis"]
        }).buttons().container().appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)"), $(".dataTables_length select").addClass("form-select form-select-sm")
    });

    function openModalForm(dataRaw = "") {
        if (dataRaw.length > 0) {
            var banners = JSON.parse(dataRaw)
            $('input[name="id_banner"]').val(banners.ID_BANNER)
            $('input[name="all_kinds"]').val(banners.ALL_KINDS)
            $('input[name="total_buyers"]').val(banners.TOTAL_BUYERS)
            $('input[name="fish_package"]').val(banners.FISH_PACKAGE)
            $('input[name="delivery"]').val(banners.DELIVERY)
            $('#text-btn').html('Simpan Perubahan')
            $('#form-banner').attr('action', '<?= url('admin/edit-banner') ?>')
        } else {
            $('#text-btn').html('Tambahkan Banner')
            $('#form-banner').attr('action', '<?= url('admin/save-banner') ?>')
        }
        $('#modalForm').modal('show')
    }

    function openModalDelete(idBanner) {
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: "btn btn-success",
                cancelButton: "btn btn-danger"
            },
            buttonsStyling: false
        });
        swalWithBootstrapButtons.fire({
            title: "Apakah kamu yakin?",
            text: "Kamu tidak akan bisa mengembalikan data banner yang sudah dihapus!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Ya, Hapus Banner",
            cancelButtonText: "Tidak",
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                location.href = "<?= url('admin/delete-banner') ?>/" + idBanner
            }
        });
    }
</script>