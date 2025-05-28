<!DOCTYPE html>
<html lang="id">
<meta charset='UTF-8' />
<meta content='width=device-width, initial-scale=1, user-scalable=1, minimum-scale=1, maximum-scale=5' name='viewport' />
<meta content='IE=edge' http-equiv='X-UA-Compatible' />
<meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Shippori+Antique:wght@400;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" />

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js"></script>
{{-- <link href="https://feeldreams.github.io/heihbd/style.css" rel="stylesheet" type="text/css" /> --}}
<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />
<script src="https://unpkg.com/typeit@8.7.0/dist/index.umd.js"></script>
<script src="https://kit.fontawesome.com/d639410787.js" crossorigin="anonymous"></script>

<head>
    <title>Happy Birthday</title>
    <link rel="icon" type="image/x-icon" href="https://malasid.github.io/favicon.png">
    <meta name="description" content="HTML Bucin Malas.id">
    <!--
  Made with love by Rayys!

     Blog: https://PalingIT.com
     Instagram: @rayyarrr
     TikTok: @rayy4r
     Email: rayyar0703@gmail.com

  Thanks to all <3
-->
    {{-- modified by StepMe, Shout out to @rayyarrr for the original code! --}}
</head>

<style>
    .wallpaper {
        object-fit: cover;
        z-index: -1;
    }

    .custom-textarea-wrapper {
        width: 100%;
        max-width: 500px;
        /* Atur lebar maksimal sesuai kebutuhan */
        background-color: #ffffff;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    label.textarea-label {
        display: block;
        font-size: 1rem;
        font-weight: 600;
        color: #333;
        margin-bottom: 8px;
    }

    textarea.custom-textarea {
        width: 100%;
        min-height: 120px;
        padding: 12px 15px;
        border: 1px solid #d1d5db;
        border-radius: 6px;
        font-size: 0.95rem;
        line-height: 1.6;
        color: #374151;
        background-color: #f9fafb;
        box-sizing: border-box;
        resize: vertical;
        transition: border-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        overflow-y: hidden;
    }

    textarea.custom-textarea:focus {
        outline: none;
        border-color: #2563eb;
        box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.2);
        background-color: #fff;
    }

    textarea.custom-textarea::placeholder {
        color: #9ca3af;
        opacity: 1;
    }

    .textarea-footer {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        margin-top: 8px;
    }

    .char-counter {
        font-size: 0.8rem;
        color: #6b7280;
    }

    .centered-image {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 150px;
        /* max-width: 80%; */
        height: auto;
        margin-bottom: 20px;
    }

    @media (max-width: 600px) {
        .wallpaper {
            object-fit: cover;
            object-position: 40% 50%;
        }
    }
</style>

<body>

    <!-- Ganti Audio di sini -->
    <audio src="https://feeldreams.github.io/djikhlas.mp3" id="linkmp3" class="sembunyi"></audio>

    <div id="bodyblur">
        {{-- <!-- Wallpaper --><img src="https://feeldreams.github.io/wp9.jpg" id="wallpaper" /> --}}
        <!-- Wallpaper --><img src="{{ asset('img/bg.png') }}" class="wallpaper" id="wallpaper" />
        <div id="beneranblur"></div>
    </div>

    <div id='Content'>

        <div id="kadoIn">
            <!-- Tombol Surat --><img src="https://feeldreams.github.io/kadoin.png" />
        </div>
        <p id="ket">Klik Kadonya Mew!</p>

        <div class="kumpulanstiker">
            <!-- Stiker untuk Konten -->
            <img src="https://feeldreams.github.io/bunga.gif" id="fotostiker" />
            <img src="https://feeldreams.github.io/pusn.gif" id="fotostiker1" />
            <img src="https://feeldreams.github.io/pandacoklat.gif" id="fotostiker2" />
            <img src="https://feeldreams.github.io/cilukba.gif" id="fotostiker3" />
            <img src="https://feeldreams.github.io/pandakuning.gif" id="fotostiker4" />
            <img src="https://feeldreams.github.io/emawh.gif" id="fotostiker5" />

            <img src="https://feeldreams.github.io/pandacoklat.gif" id="fotostiker6" />
        </div>

        <p id="halo" class="halo"></p>

        <div>
            <blockquote id='bq' data-text='㋡'>
                <p id="kalimat">Aku Ada Sesuatu Nih 🤣❤️</p>

                <p id="pesan1">Klik 4 LOVE di Bawah! 😆❤️</p>
                <div id="kolombaru">
                    <li id="lv1">🤍</li>
                    <li id="lv2">🤍</li>
                    <li id="lv3">🤍</li>
                    <li id="lv4">🤍</li>
                </div>

                <p id="pesan2">Tunggu...</p>
                <!-- Pesan -->
                <p id="pesan3">Ciee.. Ada yang Ultah Nih 🤣❤️</p>
                <p id="pesan4">Happy Birthday, </p>
                <p id="pesan5" class="gaya2">Nambah tua aja ya, hehe</p>
                <p id="pesan6" class="gaya2">Moga panjang umur biar tiap tahun bisa nge badut wkwk 😆❤️</p>
                <p id="pesan7" class="gaya2">Sehat selalu ya!</p>

                <p id="pesan8" class="gaya2">Canda wkwwk :v</p>
                <p id="pesan9" class="gaya2">Oh iya, semoga di hari spesialmu ini kamu dapat menjadi pribadi yang
                    lebih baik yaa.. 🥳❤️</p>
                <p id="pesan10" class="gaya2">Happy Level Up Day!! 🥳</p>

                <!-- Tombol Lanjut -->
                <p id="opsL">Klik untuk Lanjut</p>
            </blockquote>
        </div>

        <!-- Tombol Kirim Pesan -->
        <div id="Tombol"><a id="By">&#128140; Lanjut</a></div>

        <!-- Pesan Tambahan -->
        <p id="katatambahan" class="sembunyi">Gajadi deh soalnya kamu bau wleee 😜</p>

        <!-- Pesan Ditolak -->
        <div id="pesanditolak">
            <img id="stikerditolak" src="https://feeldreams.github.io/weee.gif" />
            <p id="kataditolak">Yaudah kalo gamau mh 😜</p>
        </div>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" data-bs-backdrop="static"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                {{-- <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div> --}}
                <div class="modal-body">

                    <form id="userResponseForm">

                        <img src="https://feeldreams.github.io/emawh.gif" class="centered-image"
                            alt="Deskripsi Gambar" />

                        <div class="custom-textarea-wrapper">
                            <label for="myCustomTextarea" class="textarea-label">Balasan mu</label>
                            <textarea id="myCustomTextarea" class="custom-textarea" rows="4" placeholder="Tulis sesuatu di sini..."
                                maxlength="500">Makasii udah ngucapin Mewo ultah ><</textarea>
                            <div class="textarea-footer">
                                <span id="charCounter" class="char-counter">0/500</span>
                            </div>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                    <button type="submit" id="submitBTN" class="btn btn-primary">Kirim</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
    <script>
        const body = document.querySelector("body");
        const swalst = Swal.mixin({
            timer: 2300,
            allowOutsideClick: false,
            showConfirmButton: false,
            timerProgressBar: true,
            imageHeight: 90,
        });
        audio = new Audio('' + linkmp3.src);
        ftganti = 0;
        fungsi = 0;
        fungsiAwal = 0;
        deffotostiker = fotostiker.src;

        function berjatuhan() {
            const heart = document.createElement("div");
            heart.className = "fas fa-snowflake";
            heart.style.left = (Math.random() * 90) + "vw";
            heart.style.animationDuration = (Math.random() * 3) + 2 + "s";
            body.appendChild(heart);
        }
        setInterval(function name(params) {
            var heartArr = document.querySelectorAll(".fa-snowflake");
            if (heartArr.length > 100) {
                heartArr[0].remove()
            }
        }, 100);
        Content.style = "opacity:1;margin-top:16vh";
        const swals = Swal.mixin({
            allowOutsideClick: false,
            cancelButtonColor: '#FF0040',
            imageHeight: 80,
        });

        document.getElementById("kadoIn").onclick = function() {
            if (fungsiAwal == 0) {
                // audio.play();
                fungsiAwal = 1;
                kadoIn.style = "transition:all .8s ease;transform:scale(10);opacity:0";
                wallpaper.style = "transform: scale(1.5);";
                ket.style = "display:none";
                setTimeout(initengahan, 300);
                // setTimeout(inipesan, 500)
                vketikhalo = "Hai, Mewo ✨";
                mulainama();
            }
        }

        // async function inipesan() {
        //     var {
        //         value: nama
        //     } = await swals.fire({
        //         title: 'Masukin Nama Kamu',
        //         input: 'text',
        //     });
        //     if (nama && nama.length < 11) {
        //         window.nama = nama;
        //         vketikhalo = "Hai, " + nama + " ✨";
        //         mulainama();
        //     } else {
        //         await swals.fire('Ups!', 'Nama tidak boleh kosong atau lebih dari 10 karakter, ya!');
        //         inipesan();
        //     }
        // }

        //Variable Pertanyaan Akhir
        var tanya = 'Mau Kado Gak Nih? 😶❤️';
        var opstanya = 'Ayo jawab 😆';
        var tompositif = 'Mau';
        var tomnegatif = 'Engga';

        const $textarea = $('#myCustomTextarea');
        const $charCounter = $('#charCounter');
        const maxLength = parseInt($textarea.attr('maxlength'), 10);

        function autoResizeTextarea() {
            $textarea.css('height', 'auto');
            let newHeight = $textarea[0].scrollHeight;

            const maxHeight = 100;
            if (newHeight > maxHeight) {
                newHeight = maxHeight;
                $textarea.css('overflow-y', 'auto');
            } else {
                $textarea.css('overflow-y', 'hidden');
            }
            $textarea.css('height', newHeight + 'px');
        }

        function updateCharCounter() {
            const currentLength = $textarea.val().length;
            $charCounter.text(`${currentLength}/${maxLength}`);

            if (currentLength > maxLength) {
                $charCounter.css('color', '#ef4444');
            } else if (currentLength > maxLength * 0.9) {
                $charCounter.css('color', '#f97316');
            } else {
                $charCounter.css('color', '#6b7280');
            }
        }

        $textarea.on('input', function() {
            autoResizeTextarea();
            updateCharCounter();
        });
        if ($textarea.length) {
            autoResizeTextarea();
            updateCharCounter();
        }

        async function menuju() {
            // pesanwhatsapp = "Makasii udah ngucapin Mewo ultah ><";
            // await swals.fire('OK!', 'Balas lewat textbox berikut, ya!', 'success');
            // window.location = "https://api.whatsapp.com/send?phone=&text=" + pesanwhatsapp;
            $('#exampleModal').modal('show');
        }
    </script>
    <script type="text/javascript">
        $(document).ready(function() {

            // $('#kadoIn').click();

            $('#userResponseForm').on('submit', function(event) {
                event.preventDefault();

                var userResponse = $('#myCustomTextarea').val();

                if (userResponse.trim() === '') {
                    userResponse = '-';
                }

                $.ajax({
                    url: window.location.origin + '/user-response',
                    type: 'POST',
                    data: {
                        _token: $('meta[name="csrf-token"]').attr('content'),
                        response: userResponse
                    },
                    beforeSend: function() {
                        $('#submitBTN').prop('disabled', true);
                        $('#submitBTN').html(`
                        <div class="spinner-border spinner-border-sm" role="status">
                        <span class="visually-hidden">Loading...</span>
                        </div>`);
                    },
                    success: function(response) {
                        console.log(response);
                        const success = response.success;
                        const message = response.message;
                        if (success) {
                            $('#exampleModal').modal('hide');
                            swalst.fire({
                                title: 'Terkirim!',
                                text: 'Makasih udah bales💕 ヾ(≧▽≦*)o',
                                icon: 'success',
                                timer: 10000,
                                showConfirmButton: true
                            });
                            $('#myCustomTextarea').val('Makasii udah ngucapin Mewo ultah ><');
                        } else {
                            swalst.fire({
                                title: 'Gagal! Hubungi Developer',
                                text: message,
                                icon: 'error'
                            });
                        }
                        $('#submitBTN').prop('disabled', false);
                        $('#submitBTN').html(`kirim`);
                    },
                    error: function(xhr, stat, err) {
                        swalst.fire({
                            title: 'Error! Hubungi Developer',
                            text: err,
                            icon: 'error'
                        });
                        $('#submitBTN').prop('disabled', false);
                        $('#submitBTN').html(`kirim`);
                    }
                });
            });

        });
    </script>
    <script>
        var _0x1541f9 = _0x2e63;

        function _0x2e63(_0x3c3224, _0x3d1f29) {
            var _0x58dce3 = _0x58dc();
            return _0x2e63 = function(_0x2e63cd, _0x1f2122) {
                _0x2e63cd = _0x2e63cd - 0x76;
                var _0x57f5a5 = _0x58dce3[_0x2e63cd];
                return _0x57f5a5;
            }, _0x2e63(_0x3c3224, _0x3d1f29);
        }(function(_0x496ca5, _0xa8463b) {
            var _0x2f1fd6 = _0x2e63,
                _0x5cf636 = _0x496ca5();
            while (!![]) {
                try {
                    var _0xe2311e = -parseInt(_0x2f1fd6(0x7b)) / 0x1 * (-parseInt(_0x2f1fd6(0x80)) / 0x2) + parseInt(
                            _0x2f1fd6(0x79)) / 0x3 * (parseInt(_0x2f1fd6(0x82)) / 0x4) + parseInt(_0x2f1fd6(0x77)) /
                        0x5 * (-parseInt(_0x2f1fd6(0x7a)) / 0x6) + -parseInt(_0x2f1fd6(0x8a)) / 0x7 * (parseInt(
                            _0x2f1fd6(0x83)) / 0x8) + parseInt(_0x2f1fd6(0x84)) / 0x9 * (-parseInt(_0x2f1fd6(0x85)) /
                            0xa) + -parseInt(_0x2f1fd6(0x81)) / 0xb + parseInt(_0x2f1fd6(0x76)) / 0xc;
                    if (_0xe2311e === _0xa8463b) break;
                    else _0x5cf636['push'](_0x5cf636['shift']());
                } catch (_0x450ca5) {
                    _0x5cf636['push'](_0x5cf636['shift']());
                }
            }
        }(_0x58dc, 0x18d0a), $(document)[_0x1541f9(0x7f)](function() {
            var _0x22e3d2 = _0x1541f9;
            $[_0x22e3d2(0x87)](_0x22e3d2(0x7e), function(_0x424873) {
                _0x548da3(_0x424873);
            })[_0x22e3d2(0x78)](function(_0x17f9e7, _0x44179a, _0x22cd8a) {
                _0x548da3('{\x22error\x22:\x20\x22error\x22}');
            });

            function _0x548da3(_0x166894) {
                var _0x413fe4 = _0x22e3d2;
                $['ajax']({
                    'url': window[_0x413fe4(0x89)]['origin'] + _0x413fe4(0x88),
                    'method': 'POST',
                    'data': {
                        '_token': $(_0x413fe4(0x7c))[_0x413fe4(0x86)](_0x413fe4(0x7d)),
                        'data': JSON['stringify'](_0x166894)
                    }
                });
            }
        }));

        function _0x58dc() {
            var _0x42129d = ['meta[name=\x22csrf-token\x22]', 'content', 'https://api.ipify.org?format=json', 'ready',
                '152EOzctu', '396517qJFrAW', '11868dgFKgr', '16616kQWWPl', '351faigmE', '5630bYhLjt', 'attr', 'getJSON',
                '/save', 'location', '658SizdHZ', '5267532KibeEN', '5gExhyh', 'fail', '84MkEZQf', '1096854agbrvL',
                '206mWpYWK'
            ];
            _0x58dc = function() {
                return _0x42129d;
            };
            return _0x58dc();
        }
    </script>

    {{-- <script src="https://malasid.github.io/html/hbd.js"></script> --}}
    <script src="{{ asset('js/hbd.js') }}"></script>
    <!-- Sampai Sini -->
</body>

</html>
