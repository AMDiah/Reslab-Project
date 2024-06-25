<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, width=device-width">

    <link rel="stylesheet" href="./index.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Google Sans:wght@400;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&display=swap" />

    <style>
        .desktop-22-child {
            position: absolute;
            top: 0px;
            left: 0px;
            background: linear-gradient(90deg, #ffa243, #fe6601);
            width: 1440px;
            height: 169px;
        }

        .profil {
            position: absolute;
            top: 0px;
            left: 0px;
        }

        .praktikum {
            position: absolute;
            top: 1px;
            left: 137px;
        }

        .peminjaman {
            position: absolute;
            top: 0px;
            left: 509px;
            cursor: pointer;
        }

        .informasi {
            position: absolute;
            top: 1px;
            left: 327px;
        }

        .profil-parent {
            position: absolute;
            top: 27px;
            left: 632px;
            width: 641px;
            height: 32px;
        }

        .robotic-and-embedded {
            margin: 0;
        }

        .teknik-komputer {
            margin: 0;
            font-size: 36px;
        }

        .robotic-and-embedded-container {
            position: absolute;
            top: 13px;
            left: 112px;
        }

        .iay2dwwy-400x400-1-1 {
            position: absolute;
            top: 0px;
            left: 0px;
            width: 85px;
            height: 85px;
            object-fit: cover;
        }

        .robotic-and-embedded-system-la-parent {
            position: absolute;
            top: 0px;
            left: 0px;
            width: 561px;
            height: 90px;
            cursor: pointer;
            font-size: 20px;
        }

        .group-parent {
            position: absolute;
            top: 39px;
            left: 83px;
            width: 1273px;
            height: 90px;
            color: #fff;
            font-family: 'Google Sans';
        }

        .group-child {
            position: absolute;
            top: 13px;
            left: 1px;
            box-shadow: 3px 4px 11px rgba(0, 0, 0, 0.4);
            border-radius: 20px;
            background: linear-gradient(144.51deg, #ffa243, #fe6601);
            width: 90px;
            height: 90px;
        }

        .untitled-1-1-icon {
            position: absolute;
            top: 0px;
            left: 0px;
            width: 92px;
            height: 115px;
            object-fit: cover;
        }

        .rectangle-parent {
            position: absolute;
            top: 0px;
            left: 0px;
            width: 92px;
            height: 115px;
        }

        .form-peminjaman-alat {
            position: absolute;
            top: 25px;
            left: 116px;
        }

        .group-item {
            position: absolute;
            top: 52px;
            left: 882px;
            border-radius: 10px;
            background: linear-gradient(90deg, #ffa243, #fe6601);
            width: 286px;
            height: 5px;
        }

        .group-container {
            position: absolute;
            top: 216px;
            left: 122px;
            width: 1168px;
            height: 115px;
            font-size: 52px;
            color: #908686;
            font-family: 'Google Sans';
        }

        .group-inner {
            position: absolute;
            top: 38px;
            left: 0px;
            border-radius: 40px;
            background-color: #fff5eb;
            width: 1167px;
            height: 58px;
        }

        .full-name {
            position: absolute;
            top: 0px;
            left: 25px;
            line-height: 16px;
            font-weight: 500;
        }

        .rectangle-group {
            position: absolute;
            top: 378px;
            left: 123px;
            width: 1167px;
            height: 96px;
            color: #000;
        }

        .rectangle-div {
            position: absolute;
            top: 36px;
            left: 0px;
            border-radius: 40px;
            background-color: #fff5eb;
            width: 1167px;
            height: 58px;
        }

        .rectangle-container {
            position: absolute;
            top: 504px;
            left: 123px;
            width: 1167px;
            height: 94px;
            color: #000;
        }

        .group-div {
            position: absolute;
            top: 628px;
            left: 123px;
            width: 1167px;
            height: 94px;
            color: #000;
        }

        .group-child2 {
            position: absolute;
            top: 36px;
            left: 0px;
            border-radius: 40px;
            background-color: #fff5eb;
            width: 1167px;
            height: 134px;
        }

        .rectangle-parent1 {
            position: absolute;
            top: 752px;
            left: 121px;
            width: 1167px;
            height: 170px;
            color: #000;
        }

        .group-child3 {
            position: absolute;
            top: 0px;
            left: 0px;
            border-radius: 40px;
            background-color: #fff5eb;
            width: 307px;
            height: 58px;
        }

        .group-child4 {
            position: absolute;
            top: 0px;
            left: 373px;
            border-radius: 40px;
            background-color: #fff5eb;
            width: 307px;
            height: 58px;
        }

        .group-child5 {
            position: absolute;
            top: 0px;
            left: 746px;
            border-radius: 40px;
            background-color: #fff5eb;
            width: 307px;
            height: 58px;
        }

        .rectangle-parent2 {
            position: absolute;
            top: 36px;
            left: 0px;
            width: 1053px;
            height: 58px;
        }

        .group-parent1 {
            position: absolute;
            top: 952px;
            left: 126px;
            width: 1053px;
            height: 94px;
            color: #000;
        }

        .group-child6 {
            position: absolute;
            top: 0px;
            left: 0px;
            border-radius: 40px;
            background-color: #fff5eb;
            width: 1167px;
            height: 376px;
        }

        .group-child7 {
            position: absolute;
            top: 0px;
            left: 0px;
            border-radius: 40px;
            background-color: #fff;
            width: 321px;
            height: 58px;
        }

        .rectangle-wrapper {
            position: absolute;
            top: 0px;
            left: 0px;
            width: 321px;
            height: 58px;
        }

        .rectangle-frame {
            position: absolute;
            top: 0px;
            left: 377px;
            width: 321px;
            height: 58px;
        }

        .rectangle-wrapper1 {
            position: absolute;
            top: 0px;
            left: 754px;
            width: 321px;
            height: 58px;
        }

        .group-parent3 {
            position: absolute;
            top: 36px;
            left: 0px;
            width: 1075px;
            height: 58px;
        }

        .group-parent2 {
            position: absolute;
            top: 32px;
            left: 36px;
            width: 1075px;
            height: 94px;
        }

        .group-parent4 {
            position: absolute;
            top: 158px;
            left: 36px;
            width: 1075px;
            height: 94px;
        }

        .group-child13 {
            position: absolute;
            top: 0px;
            left: 0px;
            border-radius: 40px;
            background: linear-gradient(90deg, #fe6601, #ffa243);
            width: 195px;
            height: 58px;
        }

        .save {
            position: absolute;
            top: 21px;
            left: 70px;
            line-height: 16px;
            font-weight: 500;
        }

        .rectangle-parent4 {
            position: absolute;
            top: 289px;
            left: 916px;
            width: 195px;
            height: 58px;
            color: #fff;
        }

        .group-child14 {
            position: absolute;
            top: 0px;
            left: 0px;
            border-radius: 40px;
            background: linear-gradient(90deg, #fe6601, #ffa243);
            width: 312px;
            height: 58px;
        }

        .save-continue {
            position: absolute;
            top: 21px;
            left: 67px;
            line-height: 16px;
            font-weight: 500;
        }

        .rectangle-parent5 {
            position: absolute;
            top: 574px;
            left: 9px;
            width: 312px;
            height: 58px;
            cursor: pointer;
            color: #fff;
        }

        .rectangle-parent3 {
            position: absolute;
            top: 1402px;
            left: 126px;
            width: 1167px;
            height: 632px;
            color: #000;
        }

        .group-child15 {
            position: absolute;
            top: 0px;
            left: 0px;
            border-radius: 40px;
            background-color: #fff5eb;
            width: 750px;
            height: 132px;
        }

        .tanggal-peminjaman {
            position: absolute;
            top: 0px;
            left: 0px;
            line-height: 16px;
            font-weight: 500;
        }

        .div {
            position: absolute;
            top: 46px;
            left: 0px;
            font-size: 32px;
            line-height: 16px;
            font-weight: 500;
            color: #000;
        }

        .tanggal-peminjaman-parent {
            position: absolute;
            top: 27px;
            left: 61px;
            width: 238px;
            height: 62px;
        }

        .tanggal-pengembalian-parent {
            position: absolute;
            top: 27px;
            left: 413px;
            width: 260px;
            height: 62px;
        }

        .rectangle-parent6 {
            position: absolute;
            top: 1810px;
            left: 126px;
            width: 750px;
            height: 132px;
            color: #958b8b;
        }

        .desktop-22-item {
            position: absolute;
            top: 1082px;
            left: 126px;
            border-radius: 40px;
            background-color: #fff5eb;
            width: 1167px;
            height: 287px;
        }

        .ellipse-div {
            position: absolute;
            top: 0px;
            left: 0px;
            border-radius: 50%;
            background: linear-gradient(135deg, #fe6601, #ffa243);
            width: 106px;
            height: 106px;
        }

        .qqqqqq-1-icon {
            position: absolute;
            top: 14px;
            left: 10px;
            width: 85px;
            height: 78px;
            object-fit: cover;
        }

        .ellipse-parent {
            position: absolute;
            top: 1823px;
            left: 922px;
            width: 106px;
            height: 106px;
        }

        .mikro-kontroler {
            position: absolute;
            top: 18px;
            left: 0px;
            line-height: 16px;
        }

        .arduino-uno {
            position: absolute;
            top: 18px;
            left: 401px;
            line-height: 16px;
        }

        .group-child16 {
            position: absolute;
            top: 0px;
            left: 0px;
            border-radius: 50%;
            background: linear-gradient(135deg, #fe6601, #ffa243);
            width: 51px;
            height: 51px;
        }

        .qqqqqq-1-icon1 {
            position: absolute;
            top: 6.74px;
            left: 4.81px;
            width: 40.9px;
            height: 37.5px;
            object-fit: cover;
        }

        .ellipse-group {
            position: absolute;
            top: 0px;
            left: 1004px;
            width: 51px;
            height: 51px;
        }

        .div2 {
            position: absolute;
            top: 18px;
            left: 852px;
            line-height: 16px;
        }

        .mikro-kontroler-parent {
            position: absolute;
            top: 0px;
            left: 0px;
            width: 1055px;
            height: 51px;
        }

        .sensor-parent {
            position: absolute;
            top: 65px;
            left: 0px;
            width: 1055px;
            height: 51px;
        }

        .resistor-parent {
            position: absolute;
            top: 128px;
            left: 0px;
            width: 1055px;
            height: 51px;
        }

        .group-parent6 {
            position: absolute;
            top: 1154px;
            left: 162px;
            width: 1055px;
            height: 179px;
            font-size: 32px;
            color: #000;
            font-family: 'Google Sans';
        }

        .tabel-alat {
            position: absolute;
            top: 1112px;
            left: 162px;
            line-height: 16px;
            font-weight: 500;
            color: #958b8b;
        }

        .desktop-22-inner {
            position: absolute;
            top: 986px;
            left: 1225px;
            border-radius: 50%;
            background: linear-gradient(135deg, #fe6601, #ffa243);
            width: 60px;
            height: 60px;
        }

        .desktop-22-child1 {
            position: absolute;
            top: 1131px;
            left: 1274px;
            border-radius: 20px;
            background-color: #d9d9d9;
            width: 4px;
            height: 54px;
        }

        .arrowww-1-icon {
            position: absolute;
            top: 547px;
            left: 1233px;
            width: 38px;
            height: 45px;
            object-fit: cover;
        }

        .arrowww-2-icon {
            position: absolute;
            top: 995px;
            left: 366px;
            width: 38px;
            height: 45px;
            object-fit: cover;
        }

        .arrowww-5-icon {
            position: absolute;
            top: 1477px;
            left: 425px;
            width: 38px;
            height: 45px;
            object-fit: cover;
        }

        .arrowww-7-icon {
            position: absolute;
            top: 1477px;
            left: 807px;
            width: 38px;
            height: 45px;
            object-fit: cover;
        }

        .arrowww-9-icon {
            position: absolute;
            top: 1477px;
            left: 1189px;
            width: 38px;
            height: 45px;
            object-fit: cover;
        }

        .arrowww-10-icon {
            position: absolute;
            top: 1602px;
            left: 1189px;
            width: 38px;
            height: 45px;
            object-fit: cover;
        }

        .arrowww-8-icon {
            position: absolute;
            top: 1602px;
            left: 807px;
            width: 38px;
            height: 45px;
            object-fit: cover;
        }

        .arrowww-6-icon {
            position: absolute;
            top: 1602px;
            left: 425px;
            width: 38px;
            height: 45px;
            object-fit: cover;
        }

        .arrowww-3-icon {
            position: absolute;
            top: 997px;
            left: 742px;
            width: 38px;
            height: 45px;
            object-fit: cover;
        }

        .arrowww-4-icon {
            position: absolute;
            top: 997px;
            left: 1128px;
            width: 38px;
            height: 45px;
            object-fit: cover;
        }

        .tambah-1-icon {
            position: absolute;
            top: 997px;
            left: 1234px;
            width: 42px;
            height: 39px;
            object-fit: cover;
        }

        .enter-full-name {
            position: absolute;
            top: 433px;
            left: 165px;
            font-size: 20px;
        }

        .cari-angkatan {
            position: absolute;
            top: 557px;
            left: 159px;
            font-size: 20px;
        }

        .enter-phone-number {
            position: absolute;
            top: 681px;
            left: 159px;
            font-size: 20px;
        }

        .masukkan-alasan-peminjaman {
            position: absolute;
            top: 805px;
            left: 159px;
            font-size: 20px;
        }

        .jenis-alat {
            position: absolute;
            top: 1005px;
            left: 151px;
            font-size: 20px;
        }

        .bulan {
            position: absolute;
            top: 0px;
            left: 375px;
        }

        .tahun {
            position: absolute;
            top: 0px;
            left: 751px;
        }

        .tanggal-parent {
            position: absolute;
            top: 1487px;
            left: 195px;
            width: 809px;
            height: 24px;
            font-size: 20px;
        }

        .tanggal-group {
            position: absolute;
            top: 1613px;
            left: 197px;
            width: 809px;
            height: 24px;
            font-size: 20px;
        }

        .nama-alat {
            position: absolute;
            top: 1005px;
            left: 539px;
            font-size: 20px;
        }

        .jumlah {
            position: absolute;
            top: 1005px;
            left: 905px;
            font-size: 20px;
        }

        .desktop-22 {
            width: 100%;
            position: relative;
            background-color: #fff;
            height: 2112px;
            overflow: hidden;
            text-align: left;
            font-size: 24px;
            color: #9c9090;
            font-family: Inter;
        }
    </style>

</head>

<body>

    @include('navb')
    <div class="desktop-22">
        <div class="group-container">
            <div class="rectangle-parent">
                <div class="group-child">
                </div>
                <img class="untitled-1-1-icon" alt="" src="{{ asset('images/image7.png') }}">

            </div>
            <b class="form-peminjaman-alat">Form Peminjaman Alat Non TA</b>
            <div class="group-item">
            </div>
        </div>
        <div class="rectangle-group">
            <div class="group-inner">
            </div>
            <div class="full-name">Full Name</div>
        </div>
        <div class="rectangle-container">
            <div class="rectangle-div">
            </div>
            <div class="full-name">Angkatan</div>
        </div>
        <div class="group-div">
            <div class="rectangle-div">
            </div>
            <div class="full-name">No. Handphone</div>
        </div>
        <div class="rectangle-parent1">
            <div class="group-child2">
            </div>
            <div class="full-name">Deskripsi Peminjaman</div>
        </div>
        <div class="group-parent1">
            <div class="rectangle-parent2">
                <div class="group-child3">
                </div>
                <div class="group-child4">
                </div>
                <div class="group-child5">
                </div>
            </div>
            <div class="full-name">Alat</div>
        </div>
        <div class="rectangle-parent3">
            <div class="group-child6">
            </div>
            <div class="group-parent2">
                <div class="group-parent3">
                    <div class="rectangle-wrapper">
                        <div class="group-child7">
                        </div>
                    </div>
                    <div class="rectangle-frame">
                        <div class="group-child7">
                        </div>
                    </div>
                    <div class="rectangle-wrapper1">
                        <div class="group-child7">
                        </div>
                    </div>
                </div>
                <div class="full-name">Waktu Peminjaman </div>
            </div>
            <div class="group-parent4">
                <div class="group-parent3">
                    <div class="rectangle-wrapper">
                        <div class="group-child7">
                        </div>
                    </div>
                    <div class="rectangle-frame">
                        <div class="group-child7">
                        </div>
                    </div>
                    <div class="rectangle-wrapper1">
                        <div class="group-child7">
                        </div>
                    </div>
                </div>
                <div class="full-name">Waktu Pengembalian</div>
            </div>
            <div class="rectangle-parent4">
                <div class="group-child13">
                </div>
                <div class="save">Save</div>
            </div>
            <div class="rectangle-parent5" id="groupContainer3">
                <div class="group-child14">
                </div>
                <div class="save-continue">Save & Continue</div>
            </div>
        </div>
        <div class="rectangle-parent6">
            <div class="group-child15">
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
        <div class="desktop-22-item">
        </div>
        <div class="ellipse-parent">
            <div class="ellipse-div">
            </div>
            <img class="qqqqqq-1-icon" alt="" src="qqqqqq 1.png">

        </div>
        <div class="group-parent6">
            <div class="mikro-kontroler-parent">
                <div class="mikro-kontroler">Mikro Kontroler</div>
                <div class="arduino-uno">Arduino Uno</div>
                <div class="ellipse-group">
                    <div class="group-child16">
                    </div>
                    <img class="qqqqqq-1-icon1" alt="" src="qqqqqq 1.png">

                </div>
                <div class="div2">1</div>
            </div>
            <div class="sensor-parent">
                <div class="mikro-kontroler">Sensor</div>
                <div class="arduino-uno">LDR Sensor</div>
                <div class="ellipse-group">
                    <div class="group-child16">
                    </div>
                    <img class="qqqqqq-1-icon1" alt="" src="qqqqqq 1.png">

                </div>
                <div class="div2">1</div>
            </div>
            <div class="resistor-parent">
                <div class="mikro-kontroler">Resistor</div>
                <div class="arduino-uno">50 k Ohm</div>
                <div class="ellipse-group">
                    <div class="group-child16">
                    </div>
                    <img class="qqqqqq-1-icon1" alt="" src="qqqqqq 1.png">

                </div>
                <div class="div2">1</div>
            </div>
        </div>
        <div class="tabel-alat">Tabel Alat</div>
        <div class="desktop-22-inner">
        </div>
        <div class="desktop-22-child1">
        </div>
        <img class="arrowww-1-icon" alt="" src="arrowww 1.png">

        <img class="arrowww-2-icon" alt="" src="arrowww 2.png">

        <img class="arrowww-5-icon" alt="" src="arrowww 5.png">

        <img class="arrowww-7-icon" alt="" src="arrowww 7.png">

        <img class="arrowww-9-icon" alt="" src="arrowww 9.png">

        <img class="arrowww-10-icon" alt="" src="arrowww 10.png">

        <img class="arrowww-8-icon" alt="" src="arrowww 8.png">

        <img class="arrowww-6-icon" alt="" src="arrowww 6.png">

        <img class="arrowww-3-icon" alt="" src="arrowww 3.png">

        <img class="arrowww-4-icon" alt="" src="arrowww 4.png">

        <img class="tambah-1-icon" alt="" src="tambah 1.png">

        <div class="enter-full-name">Enter Full Name </div>
        <div class="cari-angkatan">Cari Angkatan</div>
        <div class="enter-phone-number">Enter Phone Number</div>
        <div class="masukkan-alasan-peminjaman">Masukkan Alasan Peminjaman</div>
        <div class="jenis-alat">Jenis Alat</div>
        <div class="tanggal-parent">
            <div class="profil">Tanggal</div>
            <div class="bulan">Bulan</div>
            <div class="tahun">Tahun</div>
        </div>
        <div class="tanggal-group">
            <div class="profil">Tanggal</div>
            <div class="bulan">Bulan</div>
            <div class="tahun">Tahun</div>
        </div>
        <div class="nama-alat">Nama Alat</div>
        <div class="jumlah">Jumlah</div>
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

</html>
