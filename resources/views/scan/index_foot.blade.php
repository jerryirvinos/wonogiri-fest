<script>
    function onScanSuccess(decodedText, decodedResult) {
        // Handle on success condition with the decoded text or result.
        // console.log(`Scan result: ${decodedText}`, decodedResult);
        var result = JSON.parse(decodedResult.decodedText);
        console.log(decodedText)
        html5QrcodeScanner.clear();
        $.ajax({
            url: "{{ route('scan.store') }}",
            dataType: 'json',
            type: "POST",
            data: {
                _token: $('meta[name="_token"]').attr('content'),
                result: result,
            },
            success: function(data) {
                if (data.status) {
                    Swal.fire({
                        title: data.msg,
                        html: `Kode Ticket <b>` + data.data.ticket_code + `</b>, ` +
                            `Jumlah Ticket  <b> ` + data.data.qty + `</b>`,
                        icon: "info",
                        showCloseButton: true,
                        buttonsStyling: !1,
                        confirmButtonText: "Ok",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    }).then((result) => {
                        window.location.reload();
                    })
                } else {
                    Swal.fire({
                        text: data.msg,
                        icon: "error",
                        showCloseButton: true,
                        buttonsStyling: !1,
                        confirmButtonText: "Ok",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    })
                }

            },
            error: function(
                jqXHR,
                textStatus,
                errorThrown
            ) {
                toastr
                    .error(
                        'Error to connect a server'
                    );
            }
        });
    }

    function onScanError(errorMessage) {
        // handle on error condition, with error message
        toastr
            .error(
                errorMessage
            );
    }

    var html5QrcodeScanner = new Html5QrcodeScanner(
        "reader", {
            fps: 10,
            qrbox: 250
        });
    html5QrcodeScanner.render(onScanSuccess);
</script>
