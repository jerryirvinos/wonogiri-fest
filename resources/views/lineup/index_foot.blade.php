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
                var output = '';

                function buildItem(item) {
                    var html = "<li class='dd-item dd3-item' data-id='" + item.id + "'>";
                    html += "<div class='dd-handle dd3-handle'></div>";
                    html += `<div class='float-right dd-nodrag pt-1 px-3 d-flex'>`;

                    var check = (item.status == '1') ? 'checked="checked"' : '';
                    var stats = (item.status == '0') ? '0' : '1';

                    html += `<span class="switch">
																<label>
																	<input type="checkbox"  ` + check + ` name="select">
																	<span></span>
																</label>
															</span>`;

                    html += `
                    <a href="menu/edit/` + encodeURIComponent(window.btoa(item.id)) + `"><span class="btn btn-primary btn-sm btn-icon rounded-sm mx-2" title="Edit Data"><i class="fal fa-edit"></i></span></a>
                    <a href="" class="delete btn btn-danger btn-sm btn-icon rounded-sm" title="Delete" data-name="` +
                        item.name + `">
                        <i class="fal fa-trash-alt"></i>
                        <form method="post" action="menu/destroy/` + encodeURIComponent(window.btoa(item.id)) + `">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                        </form>
                        </a>
                    </div>`;

                    var attribute = ''
                    if (item.link && item.icon) {
                        attribute = "<span class='float-right'>[ LINK : " + item.link +
                            " | ICON : <i class='" + item.icon + "'></i> ]</span>"
                    } else if (item.link) {
                        attribute = "<span class='float-right'>[ LINK : " + item.link + " ]</span>"
                    } else if (item.icon) {
                        attribute = "<span class='float-right'>[ ICON : <i class='" + item.icon +
                            "'></i> ]</span>"
                    } else {
                        attribute = ""
                    }

                    html += "<div class='dd3-content'>" + item.name + attribute + "</div>";

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

    $('.dd').on('click', '.delete', function(e) {
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

    $('.save').click(function(e) {
        e.preventDefault();

        Swal.fire({
            title: 'Anda yakin untuk',
            text: "menyimpan urutan menu ini?",
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
