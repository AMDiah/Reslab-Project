<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, width=device-width">
    <link rel="stylesheet" href={{ url('allstyle/formta.css') }} />
    <link rel="stylesheet" href={{ url('allstyle/animation.css') }} />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Google Sans:wght@400;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&display=swap" />
    <link
        href="https://fonts.googleapis.com/css2?family=Google+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">



</head>

<body>
    @include('navb')
    <div class="desktop-16">
        <div class="group-container">
            <div class="rectangle-parent">
                <div class="group-child">
                </div>
                <img class="untitled-1-1-icon" alt="" src="{{ asset('images/image7.png') }}">
            </div>
            <b class="form-peminjaman-alat">Form Peminjaman Alat TA</b>
            <div class="group-item">
            </div>
        </div>

        <form action="">
            <div class="rectangle-group">
                <div class="group-inner">
                </div>
                <label class="full-name">Full Name</label>
                <input type="text" name="nama" class="form-controli" placeholder="     Enter Full Name">
            </div>
            <div class="rectangle-container">
                <div class="rectangle-div">
                </div>
                <div class="full-name">Angkatan</div>
                <select class="form-controll" name="angkatan" required>
                    <option value="">Pilih Angkatan</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                </select>
            </div>
            <div class="group-div">
                <div class="rectangle-div">
                </div>
                <label class="full-name">No. Handphone</label>
                <input type="text" name="handphone" class="form-controlll" placeholder="     Handphone">
            </div>
            <div class="group-parent1">
                <label class="full-name">Alat</label>
                <div class="rectangle-parent1">
                    <div class="group-child2">
                        <select class="group-child2" name="jenisalat" required>
                            <option value="">Pilih Jenis Alat</option>
                            <option value="Mikro Kontroler">Mikro Kontroler</option>
                            <option value="Sensor">Sensor</option>
                            <option value="Resistor">Resistor</option>
                        </select>
                    </div>
                    <div class="group-child3">
                        <select class="group-child2" name="namaalat" required>
                            <option value="">Pilih Nama Alat</option>
                            <option value="Arduino Uno">Arduino Uno</option>
                            <option value="LDR Sensor">LDR Sensor</option>
                            <option value="50 k Ohm">50 k Ohm</option>
                        </select>
                    </div>
                    <div class="group-child4">

                        <input type="number" id="quantity" name="quantity" min="1" max="5">
                        {{-- <select class="group-child2" name="jumlah" required>
                            <option value="">Pilih Jumlah</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select> --}}
                    </div>
                </div>
            </div>
        </form>

        <div class="rectangle-parent2">
            <div class="group-child5">
            </div>
            <div class="group-parent2">
                <div class="group-parent3">
                    <div class="rectangle-wrapper">
                        <div class="group-child6">
                        </div>
                    </div>
                    <div class="rectangle-frame">
                        <div class="group-child6">
                        </div>
                    </div>
                    <div class="rectangle-wrapper1">
                        <div class="group-child6">
                        </div>
                    </div>
                </div>
                <div class="full-name">Waktu Peminjaman </div>
            </div>
            <div class="group-parent4">
                <div class="group-parent5">
                    <div class="rectangle-wrapper">
                        <div class="group-child6">
                        </div>
                    </div>
                    <div class="rectangle-frame">
                        <div class="group-child6">
                        </div>
                    </div>
                    <div class="rectangle-wrapper1">
                        <div class="group-child6">
                        </div>
                    </div>
                </div>
                <div class="full-name">Waktu Pengembalian</div>
            </div>
            <div class="rectangle-parent3">
                <div class="group-child12">
                </div>
                <div class="save">Save</div>
            </div>
            <div class="rectangle-parent4" id="groupContainer3">
                <div class="group-child13">
                </div>
                <div class="save-continue">Save & Continue</div>
            </div>
        </div>
        <div class="rectangle-parent5">
            <div class="group-child14">
            </div>
            <div class="tanggal-peminjaman-parent">
                <div class="tanggal-peminjaman">Tanggal Peminjaman</div>
                <div class="div">22/03/2024</div>
            </div>
            <div class="tanggal-pengembalian-parent">
                <div class="tanggal-peminjaman">Tanggal Pengembalian</div>
                <div class="div">27/03/2024</div>
            </div>
        </div>
        <div class="desktop-16-item">
        </div>
        <div class="tabel-alat">Tabel Alat</div>
        <div class="group-parent6">
            <div class="mikro-kontroler-parent">
                <div class="mikro-kontroler">Mikro Kontroler</div>
                <div class="arduino-uno">Arduino Uno</div>
                <div class="ellipse-group">
                    <div class="group-child15">
                    </div>
                    <img class="qqqqqq-1-icon1" alt="" src="{{ asset('images/qqqqqq 1.png') }}">
                </div>
                <div class="div2">1</div>
            </div>
            <div class="sensor-parent">
                <div class="mikro-kontroler">Sensor</div>
                <div class="arduino-uno">LDR Sensor</div>
                <div class="ellipse-group">
                    <div class="group-child15">
                    </div>
                    <img class="qqqqqq-1-icon1" alt="" src="{{ asset('images/qqqqqq 1.png') }}">
                </div>
                <div class="div2">1</div>
            </div>
            <div class="resistor-parent">
                <div class="mikro-kontroler">Resistor</div>
                <div class="arduino-uno">50 k Ohm</div>
                <div class="ellipse-group">
                    <div class="group-child15">
                    </div>
                    <img class="qqqqqq-1-icon1" alt="" src="{{ asset('images/qqqqqq 1.png') }}">
                </div>
                <div class="div2">1</div>
            </div>
        </div>
        <div class="desktop-16-child1">
        </div>



        <div class="tanggal-parent">
            <div class="tanggal"></div>
            <select class="tanggal" name="tanggal" required>
                <option value="">Pilih Tanggal</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
            <div class="bulan"></div>
            <select class="bulan" name="bulan" required>
                <option value="">Pilih Bulan</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
            <div class="tahun"></div>
            <select class="tahun" name="tahun" required>
                <option value="">Pilih Tahun</option>
                <option value="1">2024</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        </div>
        <div class="tanggal-group">
            <div class="tanggal"></div>
            <select class="tanggal" name="tanggal" required>
                <option value="">Pilih Tanggal</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
            <div class="bulan"></div>
            <select class="bulan" name="bulan" required>
                <option value="">Pilih Bulan</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
            <div class="tahun"></div>
            <select class="tahun" name="tahun" required>
                <option value="">Pilih Tahun</option>
                <option value="1">2024</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        </div>

        <div class="ellipse-parent">
            <div class="ellipse-div">
            </div>
            <img class="qqqqqq-1-icon" alt="" src="{{ asset('images/qqqqqq 1.png') }}">
        </div>

        <div>
            <div class="desktop-16-inner">
            </div>
            <img class="tambah-1-icon" alt="" src="{{ asset('images/tambah 1.png') }}">
        </div>

    </div>




    <script>
        var peminjamanText = document.getElementById("peminjamanText");
        if (peminjamanText) {
            peminjamanText.addEventListener("click", function(e) {
                // Add your code here
            });
        }

        var groupContainer1 = document.getElementById("groupContainer1");
        if (groupContainer1) {
            groupContainer1.addEventListener("click", function(e) {
                // Add your code here
            });
        }

        var groupContainer3 = document.getElementById("groupContainer3");
        if (groupContainer3) {
            groupContainer3.addEventListener("click", function(e) {
                // Add your code here
            });
        }
    </script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

</html>
