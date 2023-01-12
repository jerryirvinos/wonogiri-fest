<script>
    "use strict";

    $(function() {
        var table = $('#kt_datatable').DataTable({
            processing: true,
            serverSide: true,
            // responsive: true,
            order: [1, 'asc'],
            ajax: "{{ route('instagram.index') }}",
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
                        var html = `<div class="d-flex justify-content-start">
                                        <div class="symbol symbol-50px me-4">
                                            <img src="` + row.path + `">
                                        </div>
                                        <div class="d-flex justify-content-start align-items-start flex-column">
                                            <div class="text-gray-800 fw-semibold">` + row.title + `</div>
                                        </div>
                                    </div>`;
                        return html
                    }
                },
                {
                    render: function(data, type, row) {
                        var check = row.status == '1' ? 'checked' : '';
                        var stats = row.status == '1' ? false : true;

                        var url_update = "{{ route('instagram.update', ':id') }}";
                        url_update = url_update.replace(':id', row.id);

                        var html = `<div class="form-check form-check-success form-switch form-check-custom form-check-solid status">
                            <input class="form-check-input form-check-input-lg w-60px" data-id="` + row.status +
                            `" type="checkbox" id="flexSwitchChecked" ` + check + ` />
                            <form method="post" action="` + url_update + `">
                                {{ csrf_field() }}
                                {{ method_field('put') }}
                                <input type="hidden" name="status" value="` + stats + `" />
                            </form>
                            </div>`

                        return html
                    },
                    className: 'justify-content-center'
                },
                {
                    render: function(data, type, row) {
                        var url_edit = "{{ route('instagram.edit', ':id') }}";
                        url_edit = url_edit.replace(':id', row.id);

                        var html = `<div class="d-flex justify-content-center">
                                    <a href="` + url_edit + `" class="edit btn btn-warning btn-sm btn-icon rounded-sm p-6 mx-2"><i class="fa-duotone fa-pen-to-square fs-2"></i></a>
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

        $('#kt_datatable').on('click', '.status', function(e) {
            e.preventDefault();
            var id = $(this).children().data('id');

            var status = '';
            if (id == '1') {
                status = 'Tidak Aktif';
            } else {
                status = 'Aktif';
            }

            Swal.fire({
                title: 'Apakah anda yakin?',
                text: "merubah status menu menjadi " + status,
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
