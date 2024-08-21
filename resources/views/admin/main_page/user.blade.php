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
                            <li class="breadcrumb-item active">User</li>
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
                            <h4 class="card-title">Data User</h4>
                            <button type="button" class="btn btn-primary" onclick="openModalForm()"><i class="fas fa-user-plus"></i> Tambahkan Pengguna</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Tanggal Bergabung</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($user as $item)
                                <tr>
                                    <td><?= $item->NAMA_USER ?></td>
                                    <td><?= $item->EMAIL ?></td>
                                    <td><?= $item->ROLE ?></td>
                                    <td><?= date('j F Y', strtotime($item->LOG_TIME)) ?></td>
                                    <td>
                                        <button type="button" class="btn btn-primary" onclick="openModalForm(`<?= htmlentities(json_encode($item)) ?>`)"><i class="fas fa-edit"></i></button>
                                        <button type="button" class="btn btn-danger" onclick="openModalDelete(`<?= $item->ID_USER ?>`)"><i class="fas fa-trash-alt"></i></button>
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
            <form id="form-user" action="" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id_user">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-control" name="nama" placeholder="Enter your name" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="" placeholder="Enter your password">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label" for="formrow-password-input">Role</label>
                                <select class="form-select" id="role" name="role" required>
                                    <option value="">Pilih Role</option>
                                    @foreach($role as $item)
                                    <option value="<?= $item->ID_ROLE ?>"><?= $item->ROLE ?></option>
                                    @endforeach
                                </select>
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
            var data = JSON.parse(dataRaw)
            $('input[name="id_user"]').val(data.ID_USER)
            $('input[name="nama"]').val(data.NAMA_USER)
            $('input[name="email"]').val(data.EMAIL)
            $('select[name="role"]').val(data.ID_ROLE)
            $('#text-btn').html('Simpan Perubahan')
            $('#form-user').attr('action', '<?= url('admin/edit-user') ?>')
        } else {
            $('#text-btn').html('Tambahkan Pengguna')
            $('#form-user').attr('action', '<?= url('admin/save-user') ?>')
        }
        $('#modalForm').modal('show')
    }

    function openModalDelete(idUser) {
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: "btn btn-success",
                cancelButton: "btn btn-danger"
            },
            buttonsStyling: false
        });
        swalWithBootstrapButtons.fire({
            title: "Apakah kamu yakin?",
            text: "Kamu tidak akan bisa mengembalikan data pengguna yang sudah dihapus!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Ya, Hapus Pengguna",
            cancelButtonText: "Tidak",
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                location.href = "<?= url('admin/delete-user') ?>/" + idUser
            }
        });
    }
</script>