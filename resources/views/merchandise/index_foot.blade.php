<script>
    "use strict";

    $(function() {
        var table = $('#kt_datatable').DataTable({
            processing: true,
            serverSide: true,
            // responsive: true,
            order: [1, 'asc'],
            ajax: "{{ route('merchandise.index') }}",
            columns: [{
                    render: function(data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    },
                    orderable: true,
                    width: '4%',
                    className: 'text-center'
                },
                {
                    name: "code",
                    data: "code"
                },
                {
                    name: "price",
                    data: "price"
                },
                {
                    render: function(data, type, row) {
                        var html = `<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
														<a href="` + row.thumbnail + `">
															<div class="symbol-label">
																<img src="` + row.thumbnail + `" alt="Emma Smith" class="w-100">
															</div>
														</a>
													</div>`;
                        return html
                    },
                    orderable: false,
                    searchable: false,
                },
                {
                    render: function(data, type, row) {
                        var html = `<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
														<a href="` + row.path + `">
															<div class="symbol-label">
																<img src="` + row.path + `" alt="Emma Smith" class="w-100">
															</div>
														</a>
													</div>`;
                        return html
                    },
                    orderable: false,
                    searchable: false,
                },
                {
                    name: "link",
                    data: "link"
                },
                {
                    render: function(data, type, row) {
                        var check = row.status == '1' ? 'checked' : '';
                        var stats = row.status == '1' ? false : true;
                        var url_update = "{{ route('merchandise.update', ':id') }}";
                        url_update = url_update.replace(':id', row.id);

                        var html = `<div class="form-check form-check-success form-switch form-check-custom form-check-solid status">
                            <input class="form-check-input" data-id="` + row.status +
                            `" type="checkbox" id="flexSwitchChecked" ` + check + ` />
                            <form method="post" action="` + url_update + `">
                                {{ csrf_field() }}
                                {{ method_field('put') }}
                                <input type="hidden" name="status" value="` + stats + `" />
                            </form>
                            </div>`

                        return html
                    },
                    className: 'text-center'
                },
                {
                    render: function(data, type, row) {
                        var url_edit = "{{ route('merchandise.edit', ':id') }}";
                        url_edit = url_edit.replace(':id', row.id);

                        var html = `<div class="d-flex justify-content-center">
                                    <a href="` + url_edit + `" class="edit btn btn-icon btn-warning me-2"><i class="fa-duotone fa-pen-to-square fs-lg"></i></a>
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
            console.log(id);
            var status = '';
            if (id == 1) {
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
