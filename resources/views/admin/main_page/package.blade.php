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
                            <li class="breadcrumb-item active">Package</li>
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
                            <h4 class="card-title">Data Fish Package</h4>
                            <button type="button" class="btn btn-primary" onclick="openModalForm()"><i class="fas fa-plus-circle"></i> Add Package</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Type Package</th>
                                    <th>Price Package</th>
                                    <th>item 1</th>
                                    <th>item 2</th>
                                    <th>item 3</th>
                                    <th>URL</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($packages as $package)
                                <tr>
                                    <td><?= $package->ID_PACKAGE ?></td>
                                    <td><?= $package->TYPE_PACKAGE ?></td>
                                    <td><?= $package->PRICE_PACKAGE ?></td>                                
                                    <td><?= $package->FIRST_ITEM ?></td>                                
                                    <td><?= $package->SECOND_ITEM ?></td>                                
                                    <td><?= $package->THIRD_ITEM ?></td>                                
                                    <td><?= $package->BUY_NOW ?></td>                                
                                    <td>
                                        <button type="button" class="btn btn-primary" onclick="openModalForm(`{{ json_encode($package) }}`)"><i class="fas fa-edit"></i></button>
                                        <button type="button" class="btn btn-danger" onclick="openModalDelete('{{ $package->ID_PACKAGE }}')"><i class="fas fa-trash-alt"></i></button>
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
                <h5 class="modal-title" id="modalFormLabel">Add Fish Package</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="form-package" action="" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- <input type="hidden" name="id_package"> -->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">No Package</label>
                                <input type="text" class="form-control" name="id_package" placeholder="Enter type name" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Type Package</label>
                                <input type="text" class="form-control" name="type_package" placeholder="Enter type name" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Price Package</label>
                                <input type="text" class="form-control" name="price_package" placeholder="Enter price" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Item 1</label>
                                <input type="text" class="form-control" name="first_item" placeholder="Enter item" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Item 2</label>
                                <input type="text" class="form-control" name="second_item" placeholder="Enter item" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Item 3</label>
                                <input type="text" class="form-control" name="third_item" placeholder="Enter item" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Link Product</label>
                                <input type="text" class="form-control" name="buy_now" placeholder="Enter link product" required>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
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
        }).buttons().container().appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)");
        
        $(".dataTables_length select").addClass("form-select form-select-sm");
    });

    function openModalForm(dataRaw = "") {
        if (dataRaw.length > 0) {
            var packages = JSON.parse(dataRaw);
            $('input[name="id_package"]').val(packages.ID_PACKAGE);
            $('input[name="type_package"]').val(packages.TYPE_PACKAGE);
            $('input[name="price_package"]').val(packages.PRICE_PACKAGE);
            $('input[name="first_item"]').val(packages.FIRST_ITEM);
            $('input[name="second_item"]').val(packages.SECOND_ITEM);
            $('input[name="third_item"]').val(packages.THIRD_ITEM);
            $('input[name="buy_now"]').val(packages.BUY_NOW);
            $('#text-btn').html('Simpan Perubahan');
            $('#form-package').attr('action', '<?= url('admin/edit-package') ?>');
        } else {
            $('#text-btn').html('Tambahkan Package')
            $('#form-package').attr('action', '<?= url('admin/save-package') ?>');
        }
        $('#modalForm').modal('show');
    }

    function openModalDelete(idPackage) {
        Swal.fire({
            title: 'Apakah kamu yakin?',
            text: 'Kamu tidak akan bisa mengembalikan data package yang sudah dihapus!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Ya, Hapus Package!',
            cancelButtonText: 'Tidak',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                location.href = "<?= url('admin/delete-package') ?>/" + idPackage
            }
        });
    }
</script>
