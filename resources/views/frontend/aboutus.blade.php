@extends('frontend.templates.master')

@section('content')
    <section class="my-5 my-lg-10">
        <div class="container mt-10">
            <div class="row justify-content-center px-8 px-lg-10">
                <div class="col-xl-10 col-xxl-8">
                    <div class="fs-4x fw-semibold text-center text-white font-title ls-3 mt-0 mt-lg-5 mb-5 mb-lg-15">
                        About Us
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-12 col-xxl-10 text-center">
                            <img class="w-100 mw-100 mw-lg-100 h-auto text-center mx-auto" alt=""
                                src="{{ asset('/assets/media/illustrations/aboutus.png') }}">
                        </div>
                    </div>
                    <div class="fst-italic lh-xl fs-7 fs-lg-4 text-center mt-10 mb-10 mb-lg-20">
                        Sebagian hanya berbisik, kami mencoba berteriak tentang mimpi. <br>
                        Mencoba memberitahu mereka, bahwa masa depan ada di halaman kita. <br>
                        Wonogiri, kota kesayangan yang akan selalu kuperjuangkan!
                    </div>
                    <div class="fs-5 fs-lg-2 fw-semibold text-center text-white font-title">
                        Wonogiri Festival 2023
                    </div>
                    <div class="fst-semibold lh-xl fs-7 fs-lg-5 text-center my-10">
                        Berbicara mengenai musik tidak terlepas dari keselarasan, harmonisasi, dan perasaan. Musik merupakan
                        bahasa yang global di mana musik sebagai wujud menyampaikan perasaan, situasi, dan keadaan yang
                        digambarkan secara imajinatif dengan satu keselarasan dan perekat satu kesatuan dan kebersamaan,
                        karena musik tidak memandang perbedaan.
                    </div>
                    <div class="fst-semibold lh-xl fs-7 fs-lg-5 text-center my-10">
                        <span class="fw-bolder mt-10">WONOGIRI FESTIVAL 2023</span> mencoba meramu sajian musik sebagai
                        ekspresi
                        sekaligus sajian yang baik dan
                        pantas bagi masyarakat Wonogiri. <span class="fw-bolder">WONOGIRI FESTIVAL 2023</span> merupakan
                        pesta besar festival musik dan
                        kuliner
                        khas Wonogiri. Festival yang hadir untuk menghibur dan merekatkan satu kesatuan dan
                        kebersamaan warga
                        Wonogiri. Para penonton akan dibuai dengan experience yang mengenalkan Wonogiri
                        dengan segala
                        kekayaannya, segala rupa potensi dan bagaimana event ini menjadi event besar pertama
                        di tanah Wonogiri.
                    </div>

                    <div class="row justify-content-center my-5 my-lg-15">
                        <div class="col-xl-12 col-xxl-10 text-center">
                            <img class="w-25 mw-50 mw-lg-50 h-auto text-center mx-auto" alt=""
                                src="{{ asset('/assets/media/illustrations/aboutus2.png') }}">
                        </div>
                    </div>

                    <div class="fst-semibold lh-xl fs-7 fs-lg-5 text-center my-10">
                        <span class="fw-bolder mt-10">#AYOWONOGIRIISO</span> adalah campaign yang kami sampaikan di Wonogiri
                        Festival gelaran pertama di tahun
                        2023 ini. Kami berharap, muncul kebanggaan dan rasa untuk terus berpacu dan bersaing dengan
                        kota-kota lain. Wonogiri dengan segala potensinya akan mulai didengungkan dari kalangan muda,
                        didukung mereka yang mapan, dan dibanggakan mereka yang senja. <span class="fw-bolder mt-10">AYO
                            WONOGIRI ISO!!</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
