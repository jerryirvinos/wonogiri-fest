<script>
    "use strict";
    const monthNames = ["Januari", "Februari", "Maret", "April", "Mei", "Juni",
        "Juli", "Agustus", "September", "Oktober", "November", "Desember"
    ];

    const weekday = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];

    const style = ["warning", "success", "info", "primary"]

    $(function() {
        var table = $('#kt_datatable').DataTable({
            processing: true,
            serverSide: true,
            order: [1, 'asc'],
            ajax: "{{ route('verification.index') }}",
            columns: [{
                    render: function(data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    },
                    orderable: true,
                    width: '4%',
                    className: 'text-center'
                },
                {
                    name: "ticket_code",
                    data: "ticket_code",
                    visible: false,
                },
                {
                    render: function(data, type, row) {
                        var html = `<div class="fs-3 text-dark fw-bolder text-hover-primary mb-1">
                                        ` + row.ticket_code + `
                                    </div>`;
                        return html
                    },
                    orderable: false,
                    className: 'text-center'
                },
                {
                    render: function(data, type, row) {
                        var html = `<div class="d-flex align-items-center">
                                        <div class="d-flex flex-column">
                                            <div class="fs-4 fw-bolder text-gray-800">
                                                ` + row.name + `
                                            </div>
                                            <div class="fs-6 fw-semibold text-gray-500">
                                                ` + row.identity_number + `
                                            </div>
                                        </div>
                                    </div>`;
                        return html
                    },
                    orderable: false,
                },
                {
                    render: function(data, type, row) {
                        var d = new Date(row.created_at);

                        var html = `<div class="d-flex flex-column">
                                        <div class="fs-7 fw-semibold text-gray-700">
                                            ` + weekday[d.getDay()] + `
                                        </div>
                                        <div class="fs-5 fw-bold text-gray-800">
                                            ` + d.getUTCDate() + ' ' + monthNames[d.getUTCMonth()] + ' ' + d
                            .getUTCFullYear() + `
                                        </div>
                                    </div>`;
                        return html
                    },
                    orderable: false,
                },
                {
                    render: function(data, type, row) {
                        var html = `<div class="d-flex align-items-center">
                                        <div class="d-flex flex-column">
                                            <div class="fs-4 fw-bolder text-gray-800">
                                                ` + row.account_name + `
                                            </div>
                                            <div class="fs-6 fw-semibold text-gray-500">
                                                ` + row.account_number + `
                                            </div>
                                        </div>
                                    </div>`;
                        return html
                    },
                    orderable: false,
                },
                {
                    render: function(data, type, row) {
                        var index;
                        if (row.ticket_type == 1) {
                            index = 0;
                        } else if (row.ticket_type == 2) {
                            index = 1;
                        } else if (row.ticket_type == 3) {
                            index = 2;
                        } else {
                            index = 3;
                        }
                        var color = style[index]
                        var html = `<span class="badge badge-light-` + style[index] + ` rounded-pill px-6 py-3">
                                        <span class="fs-6 fw-bold">` + row.ticket_name + `</span>
                                    </span>`;
                        return html
                    },
                    orderable: false,
                    className: 'text-center'
                },
                {
                    render: function(data, type, row) {
                        var html = `<span class="fs-5 text-gray-900">
                                        ` + row.phone + `
                                    </span>`;
                        return html
                    },
                    orderable: false,
                },
                {
                    render: function(data, type, row) {
                        var url_edit = "{{ route('verification.edit', ':id') }}";
                        url_edit = url_edit.replace(':id', row.id);

                        var html = `<div class="d-flex justify-content-center">
                                    <a href="` + url_edit + `" class="btn btn-icon btn-warning me-1" title=""><i class="fa-duotone fa-check-to-slot fa-lg"></i></a>
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