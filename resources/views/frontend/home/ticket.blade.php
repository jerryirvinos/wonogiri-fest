<section class="my-5 my-lg-10">
    <div class="container">
        <div class="row justify-content-center px-8 px-lg-10">
            <div class="col-lg-12">
                <div class="text-center mb-12">
                    <div class="fs-4x text-white font-title ls-4 mb-7" id="ticket"
                        data-kt-scroll-offset="{default: 100, lg: 150}">
                        TIKET
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-xxl-10">
                <div class="d-flex justify-content-center justify-content-lg-between flex-wrap">
                    @foreach ($tickets as $ticket)
                        <button type="button"
                            class="card bg-transparent h-100 py-0 py-lg-5 mx-auto {{ $ticket->price ? 'ticketClick' : '' }}"
                            data-id={{ Crypt::encryptString($ticket->id) }} data-price={{ $ticket->price }}>
                            <div class="bgi-no-repeat bgi-size-contain bgi-position-center position-relative my-auto min-h-175px mw-100 h-auto"
                                style="background-image: url('{{ asset('/assets/media/illustrations/tiket3.png') }}')">
                                <div class="card-body text-center">
                                    <div class="d-flex justify-content-start flex-column flex-wrap mb-5">
                                        <div class="fs-2x text-base font-title">
                                            {{ $ticket->name }}
                                        </div>
                                        <div class="fs-3 fst-italic text-base fw-semibold">
                                            {{ $ticket->title }} <span class="fs-5">{{ $ticket->detail }}</span>
                                        </div>
                                    </div>
                                    <div class="fs-3x text-base fw-bolder">
                                        @if ($ticket->price == 0)
                                            SOLD OUT
                                        @elseif ($ticket->price == 1)
                                            &nbsp;
                                        @else
                                            {{ $ticket->price ? format_rupiah($ticket->price) : '' }}
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </button>
                    @endforeach
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-sm-12">
                        <div
                            class="lh-xl fs-8 fs-lg-5 fw-semibold mt-4 text-gray-400 text-center mt-5 mt-lg-10 px-5 px-lg-20">
                            Penjualan tiket <span class="fw-bold text-white fs-7 fs-lg-3">Early Bird</span> dilakukan
                            secara offline di Official Ticket Box Wonogiri Festival. <br>
                            Untuk wilayah luar Wonogiri & Sukoharjo bisa melalui hotline : <a
                                href="https://wa.me/6285161834585"><span
                                    class="fw-bold text-white fs-7 fs-lg-4">085161834585
                                    (WA only)</span></a> <br>
                            <span class="fw-bolder text-white fs-7 fs-lg-2">NOTE : PEMBELIAN TICKET SELAIN DARI OFFICIAL
                                TICKET
                                BOX DAN HOTLINE DIANGGAP TIDAK SAH. KUOTA TERBATAS!</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
