<script>
    "use strict";
    $(document).ready(function() {
        nestable();
    });

    function nestable() {
        $.ajax({
            url: "{{ route('lineup.index') }}",
            type: "GET",
            data: {
                _token: $('meta[name="_token"]').attr('content')
            },
            timeout: 5000,
            dataType: "JSON",
            success: function(data) {
                console.log(data)
                var output = '';

                function buildItem(item) {
                    var html = "<li class='dd-item dd3-item d-flex justify-content-between' data-id='" +
                        item.id + "'>";
                    html += "<div class='dd-handle dd3-handle'></div>";

                    html += "<div class='dd3-content'>" + item.title + "</div>";
                    html += `<div class='justify-content-end dd-nodrag px-3 d-flex my-auto'>`;

                    var checkis_release = item.is_release == '1' ? 'checked' : '';
                    var statsis_release = item.is_release == '1' ? false : true;

                    var url_update = "{{ route('lineup.update', ':id') }}";
                    url_update = url_update.replace(':id', item.id);

                    html += `<div class="form-check form-check-info form-switch form-check-custom form-check-solid is_release mx-2" title="Apakah Rilis?">
                            <input class="form-check-input" data-id="` + item.is_release +
                        `" type="checkbox" id="flexSwitchChecked" ` + checkis_release + ` />
                            <form method="post" action="` + url_update + `">
                                {{ csrf_field() }}
                                {{ method_field('put') }}
                                <input type="hidden" name="is_release" value="` + statsis_release + `" />
                            </form>
                            </div>`;

                    var check = item.status == '1' ? 'checked' : '';
                    var stats = item.status == '1' ? false : true;

                    html += `<div class="form-check form-check-success form-switch form-check-custom form-check-solid status" title="Apakah Tampil?">
                            <input class="form-check-input" data-id="` + item.status +
                        `" type="checkbox" id="flexSwitchChecked" ` + check + ` />
                            <form method="post" action="` + url_update + `">
                                {{ csrf_field() }}
                                {{ method_field('put') }}
                                <input type="hidden" name="status" value="` + stats + `" />
                            </form>
                            </div>`;
                    var url_edit = "{{ route('lineup.edit', ':id') }}";
                    url_edit = url_edit.replace(':id', item.id);

                    html += `
                    <a href="` + url_update + `"><span class="btn btn-primary btn-sm btn-icon rounded-sm mx-2" title="Edit Data"><i class="fal fa-edit"></i></span></a>
                    </div>`;



                    if (item.children) {
                        html += "<ol class='dd-list'>";

                        item.children.sort((a, b) => (a.order > b.order ? 1 : -1))
                        $.each(item.children, function(index, sub) {
                            html += buildItem(sub);
                        });
                        html += "</ol>";

                    }

                    html += "</li>";

                    return html;
                }

                $.each(data, function(index, item) {
                    output += buildItem(item);
                });

                var updateOutput = function(e) {
                    var list = e.length ? e : $(e.target),
                        output = list.data('output');

                    if (window.JSON) {
                        output.val(window.JSON.stringify(list.nestable('serialize')));
                    } else {
                        output.val('JSON browser support required for this demo.');
                    }
                };

                $('.nestable').children().html(output);
                $('.nestable').nestable({
                    maxDepth: 2
                }).on('change', updateOutput);

                updateOutput($('.nestable').data('output', $('.nestable-output')));
            }
        });
    }

    $('.exp').on('click', function(e) {
        var target = $(e.target),
            action = target.data('action');

        if (action === 'expand-all') {
            $('.dd').nestable('expandAll');
            $('.exp').html('Collapse Menu <i class="fa fa-chevron-up"></i>');
            $('.exp').data('action', 'collapse-all');
            $('.exp').toggleClass('btn-warning btn-success');
        }
        if (action === 'collapse-all') {
            $('.dd').nestable('collapseAll');
            $('.exp').html('Expand Menu <i class="fa fa-chevron-down"></i>')
            $('.exp').data('action', 'expand-all');
            $('.exp').toggleClass('btn-success btn-warning');
        }
    });

    $('.dd').on('click', '.status', function(e) {
        e.preventDefault();
        var id = $(this).children().data('id');
        var status = '';
        if (id == 1) {
            status = 'Tidak Aktif';
        } else {
            status = 'Aktif';
        }

        Swal.fire({
            title: 'Apakah anda yakin?',
            text: "merubah status lineup menjadi " + status,
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

    $('.dd').on('click', '.is_release', function(e) {
        e.preventDefault();
        var id = $(this).children().data('id');
        var status = '';
        if (id == 1) {
            status = 'Tidak Aktif';
        } else {
            status = 'Aktif';
        }

        Swal.fire({
            title: 'Apakah anda yakin?',
            text: "merubah status rilis menjadi " + status,
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

    $('.save').click(function(e) {
        e.preventDefault();

        Swal.fire({
            title: 'Anda yakin untuk',
            text: "menyimpan urutan lineup ini?",
            icon: 'info',
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

    // $(function() {
    //     var table = $('#kt_datatable').DataTable({
    //         processing: true,
    //         serverSide: true,
    //         // responsive: true,
    //         order: [1, 'asc'],
    //         ajax: "{{ route('lineup.index') }}",
    //         columns: [{
    //                 render: function(data, type, row, meta) {
    //                     return meta.row + meta.settings._iDisplayStart + 1;
    //                 },
    //                 orderable: true,
    //                 width: '4%',
    //                 className: 'text-center'
    //             },
    //             {
    //                 name: "title",
    //                 data: "title"
    //             },
    //             {
    //                 render: function(data, type, row) {
    //                     var html = `<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
    // 													<a href="` + row.thumbnail + `">
    // 														<div class="symbol-label">
    // 															<img src="` + row.thumbnail + `" alt="Emma Smith" class="w-100">
    // 														</div>
    // 													</a>
    // 												</div>`;
    //                     return html
    //                 },
    //                 orderable: false,
    //                 searchable: false,
    //             },
    //             {
    //                 render: function(data, type, row) {
    //                     var check = row.status == '1' ? 'checked' : '';
    //                     var stats = row.status == '1' ? false : true;

    //                     var url_update = "{{ route('lineup.update', ':id') }}";
    //                     url_update = url_update.replace(':id', row.id);

    //                     var html = `<div class="form-check form-check-success form-switch form-check-custom form-check-solid status">
    //                         <input class="form-check-input" data-id="` + row.status +
    //                         `" type="checkbox" id="flexSwitchChecked" ` + check + ` />
    //                         <form method="post" action="` + url_update + `">
    //                             {{ csrf_field() }}
    //                             {{ method_field('put') }}
    //                             <input type="hidden" name="status" value="` + stats + `" />
    //                         </form>
    //                         </div>`

    //                     return html
    //                 },
    //                 className: 'justify-content-center'
    //             },
    //             {
    //                 render: function(data, type, row) {
    //                     var check = row.is_release == '1' ? 'checked' : '';
    //                     var stats = row.is_release == '1' ? false : true;

    //                     var url_update = "{{ route('lineup.update', ':id') }}";
    //                     url_update = url_update.replace(':id', row.id);

    //                     var html = `<div class="form-check form-check-success form-switch form-check-custom form-check-solid is_release">
    //                         <input class="form-check-input" data-id="` + row.is_release +
    //                         `" type="checkbox" id="flexSwitchChecked" ` + check + ` />
    //                         <form method="post" action="` + url_update + `">
    //                             {{ csrf_field() }}
    //                             {{ method_field('put') }}
    //                             <input type="hidden" name="is_release" value="` + stats + `" />
    //                         </form>
    //                         </div>`

    //                     return html
    //                 },
    //                 className: 'justify-content-center'
    //             },
    //             {
    //                 render: function(data, type, row) {
    //                     var url_edit = "{{ route('lineup.edit', ':id') }}";
    //                     url_edit = url_edit.replace(':id', row.id);

    //                     var html = `<div class="d-flex justify-content-center">
    //                                 <a href="` + url_edit + `" class="edit btn btn-icon btn-warning me-2"><i class="fa-duotone fa-pen-to-square fs-lg"></i></a>
    //                                 </div>`
    //                     return html
    //                 },
    //                 orderable: false,
    //                 searchable: false,
    //             },
    //         ]
    //     });

    //     $(".alert").fadeTo(2000, 500).slideUp(500, function() {
    //         $(".alert").slideUp(500);
    //     });

    //     $('#kt_datatable').on('click', '.is_release', function(e) {
    //         e.preventDefault();
    //         var id = $(this).children().data('id');

    //         var status = '';
    //         if (id == '1') {
    //             status = 'Tidak Aktif';
    //         } else {
    //             status = 'Aktif';
    //         }

    //         Swal.fire({
    //             title: 'Apakah anda yakin?',
    //             text: "merubah status menu menjadi " + status,
    //             icon: 'warning',
    //             showCancelButton: true,
    //             confirmButtonColor: '#3085d6',
    //             cancelButtonColor: '#d33',
    //             confirmButtonText: 'Ya',
    //             cancelButtonText: 'Tidak'
    //         }).then((result) => {
    //             if (result.isConfirmed) {
    //                 $(this).find('form').submit();
    //             }
    //         })
    //     });


    //     $('#kt_datatable').on('click', '.status', function(e) {
    //         e.preventDefault();
    //         var id = $(this).children().data('id');

    //         var status = '';
    //         if (id == '1') {
    //             status = 'Tidak Aktif';
    //         } else {
    //             status = 'Aktif';
    //         }

    //         Swal.fire({
    //             title: 'Apakah anda yakin?',
    //             text: "merubah status menu menjadi " + status,
    //             icon: 'warning',
    //             showCancelButton: true,
    //             confirmButtonColor: '#3085d6',
    //             cancelButtonColor: '#d33',
    //             confirmButtonText: 'Ya',
    //             cancelButtonText: 'Tidak'
    //         }).then((result) => {
    //             if (result.isConfirmed) {
    //                 $(this).find('form').submit();
    //             }
    //         })
    //     });

    // });
</script>
