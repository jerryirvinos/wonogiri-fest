<script>
    "use strict";

    $(function() {
        var table = $('#kt_datatable').DataTable({
            processing: true,
            serverSide: true,
            // responsive: true,
            order: [3, 'asc'],
            ajax: "{{ route('user.index') }}",
            columns: [{
                    render: function(data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    },
                    orderable: true,
                    width: '4%',
                    className: 'text-center'
                },
                {
                    render: function(data, type, row) {
                        var html = `<div class="d-flex align-items-center">
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <div class="symbol-label">
                                            <div class="symbol-label"
                                                style="background-image:url('{{ asset('/assets/media/avatars/blank.png') }}')">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <div class="fs-4 fw-bolder text-gray-800 text-hover-primary">
                                            ` + row.name + `
                                        </div>
                                        <div class="fs-6 fw-semibold text-gray-500">
                                            ` + row.nama_role + `
                                        </div>
                                    </div></div>`;
                        return html
                    },
                    orderable: false,
                },
                {
                    render: function(data, type, row) {
                        var stt = 'Tidak Aktif';
                        if (row.status) {
                            stt = 'Aktif';
                        }
                        var html = `<div class="badge badge-light-primary-custom rounded-pill px-6 py-3">
                                        <span class="fs-6 fw-bold">` + stt + `</span>
                                    </div>`;
                        return html
                    },
                    orderable: false,
                },
                {
                    render: function(data, type, row) {
                        var html = `<div class="fs-6 fw-bold text-gray-600">` + row
                            .modified_by +
                            `</div>`;
                        return html
                    },
                    orderable: false,
                },
                {
                    render: function(data, type, row) {
                        var url_edit = "{{ route('user.edit', ':id') }}";
                        url_edit = url_edit.replace(':id', row.id);

                        var url_delete = "{{ route('user.destroy', ':id') }}";
                        url_delete = url_delete.replace(':id', row.id);

                        var html = `<div class="d-flex justify-content-center">
                                    <a href="` + url_edit + `" class="edit btn btn-icon btn-warning me-2"><i class="fa-duotone fa-check-to-slot fs-lg"></i></a>
                                    <a class="delete btn btn-icon btn-danger me-2" title="Delete" 
                                 data-name="` + row.name + `">
                                    <i class="fa-duotone fa-trash fs-lg"></i>
                                    <form method="post" action="` + url_delete + `">
                                         {{ csrf_field() }}
                                         {{ method_field('delete') }}
                                    </form>
                                 </a>
                                    </div>`
                        return html
                    },
                    orderable: false,
                    searchable: false,
                },
            ]
        });

        $(".alert").fadeTo(2000, 500).slideUp(500, function() {
            $(".alert").slideUp(500);
        });

        $('#kt_datatable').on('click', '.delete', function(e) {
            console.log('aa')
            e.preventDefault();
            var name = $(this).data('name');

            Swal.fire({
                title: 'Apakah anda yakin?',
                text: "untuk menghapus " + name,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya',
                cancelButtonText: 'Tidak'
            }).then((result) => {
                if (result.isConfirmed) {
                    $(this).find('form').submit();
                }
            })
        });

    });
</script>
