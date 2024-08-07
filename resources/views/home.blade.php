<!doctype html>
<html>

<head>
    <title>Home</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href={{ url('./allstyle/homepage.css') }} />
    <link rel="stylesheet" href="./animation.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Google+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />

    {{-- panggil file jquery untuk proses realtime --}}
    <script type="text/javascript" src=" {{ 'jquery/jquery.min.js' }}"></script>

    {{-- ajax untuk realtime --}}
    <script type="text/javascript">
        $(document).ready(function() {
            setInterval(function() {
                $("#suhu").load("{{ url('bacasuhu') }}");
                $("#kelembapan").load("{{ url('bacakelembapan') }}");
            }, 1000); //1000 ms
        });
    </script>

</head>

<body>
    <div class="parent-div">
        <div class="pos-abs desktop--1-14" id="id-14">
            <div class="pos-abs layout-main-15" id="id-15"></div>
            <div class="pos-abs rectangle-261-57473" id="id-57473"></div>
            <!-- assettt1 -->
            <section class="pos-abs assettt-1818" id="id-1818">
                <div class="pos-abs nnnn-1-1816" id="id-1816">
                    <div class="pos-abs image-div bg-no-repeat fill-parent bg-cover nodeBg-1816" id="id-bg-1816"
                        alt="nnnn 11 Image"></div>
                </div>

                <div class="pos-abs ellipse-2-1819" id="id-1819">

                </div>
                <div class="pos-abs ellipse-1-1817" id="id-1817">

                </div>
                <div>
                    <img src="imageshome/image0.png" class="pos-abs ellipse-2-1819" id="id-1819">
                </div>

            </section>
            <div class="row">
                <img src="images/image0.png" class="pos-abs iay2dwwy400x400-1920 nodeBg-1920">
            </div>
            <div class="pos-abs iay2dwwy400x400-1920" id="id-1920">
            </div>
            {{-- <div class="pos-abs robotic-and-emb-64" id="id-64">
                <a href="{{ route('home') }} class="robotic-and-emb-64-0">ROBOTIC AND EMBEDDED SYSTEM
                    LABORATORY<br /></a><a class="robotic-and-emb-64-1">TEKNIK KOMPUTER</a>
            </div> --}}
            <div class="pos-abs robotic-and-emb-64" id="id-57480">
                <a href="{{ route('home') }}" class="robotic-and-emb-64-0">ROBOTIC AND EMBEDDED SYSTEM
                    LABORATORY<br /></a>
                <a href="{{ route('home') }}" class="robotic-and-emb-64-1">TEKNIK KOMPUTER</a>
            </div>
            <!-- Group 11 -->
            <section class="pos-abs group-1-114" id="id-114">
                <div class="pos-abs profil-110" id="id-110">
                    <a href="{{ route('profil') }}" class="profil-110-0">Profil</a>
                </div>
                <div class="pos-abs peminjaman-112" id="id-112">
                    <a href="{{ route('peminjaman') }}" class="peminjaman-112-0">Peminjaman</a>
                </div>
                <div class="pos-abs praktikum-111" id="id-111">
                    <a href="{{ route('praktikum') }}" class="praktikum-111-0">Praktikum</a>
                </div>
                <div class="pos-abs informasi-113" id="id-113">
                    <a href="{{ route('informasi') }}"" class="informasi-113-0">Informasi</a>
                </div>
            </section>
            <!-- Group 171 -->

            <div class="pos-abs ready-to-suppor-124" id="id-124">
                <span class="ready-to-suppor-124-0">Ready to<br />Supporting </span><span
                    class="ready-to-suppor-124-1">you<br /></span><span class="ready-to-suppor-124-2">in collage
                    life</span>
            </div>
            <div class="pos-abs menjadi-laborat-138" id="id-138">
                <span class="menjadi-laborat-138-0">Menjadi laboratorium yang unggul dalam menciptakan berbagai
                    perangkat sistem tertanam ditingkat nasional dalam menunjang
                    pendidikan dan kehidupan bermasyarakat</span>
            </div>
            <!-- Group 721 -->
            <section class="pos-abs group-72-1172" id="id-1172">
                <div class="pos-abs rectangle-1-139" id="id-139"></div>
                <div class="pos-abs search-11-14146" id="id-14146">
                    <div class="pos-abs image-div bg-no-repeat fill-parent bg-cover nodeBg-14146" id="id-bg-14146"
                        alt="search 11 Image"></div>
                </div>
                <div class="pos-abs search1-14147" id="id-14147">
                    <span class="search1-14147-0">Search...</span>
                </div>
                <div class="pos-abs play-video-1812" id="id-1812">
                    <span class="play-video-1812-0">Play Video</span>
                </div>
            </section>
            <!-- Group 172 -->
            <section class="pos-abs group-172-57498" id="id-57498">
                <div class="pos-abs group-2-57499" id="id-57499">
                    <div class="pos-abs rectangle-4-57500" id="id-57500"></div>
                </div>
                <div class="pos-abs pngegg-1-2362" id="id-2362">
                    <div class="pos-abs image-div bg-no-repeat fill-parent bg-cover nodeBg-2362" id="id-bg-2362"
                        alt="pngegg 11 Image"></div>
                </div>
                <div class="pos-abs praktikum-57502" id="id-57502">
                    <span class="praktikum-57502-0">Praktikum</span>
                </div>
                <div class="pos-abs rectangle-12-57503" id="id-57503"></div>
            </section>
            <div class="pos-abs rectangle-2-232" id="id-232"></div>
            <div class="pos-abs bulat-1-1813" id="id-1813">
                <div class="pos-abs image-div bg-no-repeat fill-parent bg-cover nodeBg-1813" id="id-bg-1813"
                    alt="bulat 11 Image"></div>
            </div>
            <div class="pos-abs image-1-126" id="id-126">
                <div class="pos-abs image-div bg-no-repeat fill-parent bg-cover nodeBg-126" id="id-bg-126"
                    alt="image 11 Image"></div>
            </div>
            <!-- Group 971 -->
            <section class="pos-abs group-971-141122" id="id-141122">
                <div class="pos-abs rectangle-53-141123" id="id-141123"></div>
                <div class="pos-abs c-36423183d86b494-141126" id="id-141126">
                    <div class="pos-abs image-div bg-no-repeat fill-parent bg-cover nodeBg-141126" id="id-bg-141126"
                        alt="36423183d86b4942d9f0cc462d1556cb 11 Image"></div>
                </div>
                <div class="pos-abs kelembapan-141124" id="id-141124">
                    <span class="kelembapan-141124-0">Kelembapan</span>
                </div>
                <div class="pos-abs c-43-141125" id="id-141125">
                    <span class="c-43-141125-0">43</span>
                </div>
            </section>
            <!-- Group 991 -->
            <section class="pos-abs group-991-141127" id="id-141127">
                <div class="pos-abs rectangle-53-141128" id="id-141128"></div>
                <div class="pos-abs c-4601f773e41c094-141131" id="id-141131">
                    <div class="pos-abs image-div bg-no-repeat fill-parent bg-cover nodeBg-141131" id="id-bg-141131"
                        alt="4601f773e41c094849e10288a7aec5e8 11 Image"></div>
                </div>
                <div class="pos-abs pengunjung-141129" id="id-141129">
                    <span class="pengunjung-141129-0">Pengunjung</span>
                </div>
                <div class="pos-abs c-43-141130" id="id-141130">
                    <span class="c-43-141130-0">43</span>
                </div>
            </section>
            <!-- Group 981 -->
            <section class="pos-abs group-98-14121" id="id-14121">
                <div class="pos-abs rectangle-53-14122" id="id-14122"></div>
                <div class="pos-abs c-2732733257iconw-14125" id="id-14125">
                    <div class="pos-abs image-div bg-no-repeat fill-parent bg-cover nodeBg-14125" id="id-bg-14125"
                        alt="273-2733257_icon-weather-portal-comments-weather-icons-png-white 11 Image"></div>
                </div>
                <div class="pos-abs suhu-14123" id="id-14123">
                    <span class="suhu-14123-0">Suhu</span>
                </div>
                <div class="pos-abs c-43-14124" id="kelembapan">
                    <span class="c-43-14124-0">43</span>
                </div>
                <div class="pos-abs c-3192" id="id-3192">
                    <span class="c-3192-0">°C</span>
                </div>
            </section>
            <!-- Group 1001 -->
            <section class="pos-abs group-100-3193" id="id-3193">
                <div class="pos-abs rectangle-53-3194" id="id-3194"></div>
                <div class="pos-abs rectangle-541-141242" id="id-141242"></div>
                <div class="pos-abs c-36423183d86b494-14126" id="id-14126">
                    <div class="pos-abs image-div bg-no-repeat fill-parent bg-cover nodeBg-14126" id="id-bg-14126"
                        alt="36423183d86b4942d9f0cc462d1556cb 11 Image"></div>
                </div>
                <div class="pos-abs kelembapan-3195" id="id-3195">
                    <span class="kelembapan-3195-0">Kelembapan</span>
                </div>

                <div class="pos-abs c-43-3197" id="suhu">
                    <span class="c-43-3197-0">43</span>
                </div>

            </section>
            <!-- Group 1011 -->
            <section class="pos-abs group-101-3199" id="id-3199">
                <div class="pos-abs rectangle-53-31910" id="id-31910"></div>
                <div class="pos-abs pengunjung-31911" id="id-31911">
                    <span class="pengunjung-31911-0">Pengunjung</span>
                </div>
                <div class="pos-abs c-4601f773e41c094-31914" id="id-31914">
                    <div class="pos-abs image-div bg-no-repeat fill-parent bg-cover nodeBg-31914" id="id-bg-31914"
                        alt="4601f773e41c094849e10288a7aec5e8 21 Image"></div>
                </div>
                <div class="pos-abs c-43-31913" id="id-31913">
                    <span class="c-43-31913-0">43</span>
                </div>
                <div class="pos-abs org-31912" id="id-31912">
                    <span class="org-31912-0">org</span>
                </div>
            </section>
            <!-- Group 181 -->

            <div class="pos-abs c-40700bb7ae9f7a7-14139" id="id-14139">
                <div class="pos-abs image-div bg-no-repeat fill-parent bg-cover nodeBg-14139" id="id-bg-14139"
                    alt="40700bb7ae9f7a78b2d52c35bdcb9922 11 Image"></div>
            </div>
            <!-- Group 221 -->
            <section class="pos-abs group-22-62517" id="id-62517">
                <div class="pos-abs ai-brain-chip---4299" id="id-4299">
                    <div class="pos-abs image-div bg-no-repeat fill-parent bg-cover nodeBg-4299" id="id-bg-4299"
                        alt="Ai Brain Chip - Artificial Intelligence 3D Icon Pack Illustrations 11 Image"></div>
                </div>
                <div class="pos-abs rectangle-13-4266" id="id-4266"></div>
                <div class="pos-abs robotic-and-emb-4292" id="id-4292">
                    <span class="robotic-and-emb-4292-0">Robotic And Embedded <br />Things</span>
                </div>
                <div class="pos-abs menjadi-laborat-4293" id="id-4293">
                    <span class="menjadi-laborat-4293-0">Menjadi laboratorium yang unggul dalam menciptakan berbagai
                        perangkat sistem tertanam ditingkat nasional dalam menunjang
                        pendidikan dan kehidupan bermasyarakat kaderisasi asisten
                        laboratorium menjadi sumber daya manusia yang terampi Ikut serta
                        dalam lomba ditingkat nasional dibidang sistem tertanam<br /></span>
                </div>
                <div class="pos-abs rectangle-21-4295" id="id-4295"></div>
                <div class="pos-abs learn-more-4297" id="id-4297">
                    <span class="learn-more-4297-0">Learn more</span>
                </div>
            </section>

            <!-- Group 61 -->
            <section class="pos-abs group-6-4259" id="id-4259">
                <div class="pos-abs group-2-2814" id="id-2814">
                    <div class="pos-abs untitled1-1-272" id="id-272">
                        <div class="pos-abs image-div bg-no-repeat fill-parent bg-cover nodeBg-272" id="id-bg-272"
                            alt="Untitled-1 11 Image"></div>
                    </div>
                    <div class="pos-abs rectangle-4-235" id="id-235"></div>
                </div>
                <div class="pos-abs berita-282" id="id-282">
                    <span class="berita-282-0">Berita</span>
                </div>
                <div class="pos-abs rectangle-12-3533" id="id-3533"></div>
            </section>
            <!-- Group 31 -->
            <section class="pos-abs group-3-3511" id="id-3511">
                <div class="pos-abs rectangle-5-283" id="id-283"></div>
                <div class="pos-abs rectangle-9-352" id="id-352">
                    <div class="pos-abs image-div bg-no-repeat fill-parent bg-cover nodeBg-352" id="id-bg-352"
                        alt="Rectangle 91 Image"></div>
                </div>
                <div class="pos-abs open-recruitmen-357" id="id-357">
                    <span class="open-recruitmen-357-0">OPEN RECRUITMENT<br />ASISTEN MAGANG</span>
                </div>
                <div class="pos-abs c-29-september-20-359" id="id-359">
                    <span class="c-29-september-20-359-0">29 September 2024</span>
                </div>
                <div class="pos-abs open-recruitmen-3510" id="id-3510">
                    <span class="open-recruitmen-3510-0">Open Recruitment Asisten Magang ResLab 2021/2022Asisten
                        Laboratorium ResLab membuka kesempatan untuk teman-teman Mahasiswa
                        Teknik Komputer Angkatan 2018 & 2019 untuk ikut berpartisipasi
                        sebagai Asisten</span>
                </div>
            </section>
            <!-- Group 41 -->
            <section class="pos-abs group-4-3512" id="id-3512">
                <div class="pos-abs rectangle-5-3513" id="id-3513"></div>
                <div class="pos-abs rectangle-9-3514" id="id-3514">
                    <div class="pos-abs image-div bg-no-repeat fill-parent bg-cover nodeBg-3514" id="id-bg-3514"
                        alt="Rectangle 91 Image"></div>
                </div>
                <div class="pos-abs open-recruitmen-3515" id="id-3515">
                    <span class="open-recruitmen-3515-0">OPEN RECRUITMENT<br />ASISTEN MAGANG</span>
                </div>
                <div class="pos-abs c-29-september-20-3516" id="id-3516">
                    <span class="c-29-september-20-3516-0">29 September 2024</span>
                </div>
                <div class="pos-abs open-recruitmen-3517" id="id-3517">
                    <span class="open-recruitmen-3517-0">Open Recruitment Asisten Magang ResLab 2021/2022Asisten
                        Laboratorium ResLab membuka kesempatan untuk teman-teman Mahasiswa
                        Teknik Komputer Angkatan 2018 & 2019 untuk ikut berpartisipasi
                        sebagai Asisten</span>
                </div>
            </section>
            <!-- Group 33 -->
            <section class="pos-abs group-3-3524" id="id-3524">
                <div class="pos-abs rectangle-5-3525" id="id-3525"></div>
                <div class="pos-abs rectangle-9-3526" id="id-3526">
                    <div class="pos-abs image-div bg-no-repeat fill-parent bg-cover nodeBg-3526" id="id-bg-3526"
                        alt="Rectangle 91 Image"></div>
                </div>
                <div class="pos-abs open-recruitmen-3527" id="id-3527">
                    <span class="open-recruitmen-3527-0">OPEN RECRUITMENT<br />ASISTEN MAGANG</span>
                </div>
                <div class="pos-abs c-29-september-20-3528" id="id-3528">
                    <span class="c-29-september-20-3528-0">29 September 2024</span>
                </div>
                <div class="pos-abs open-recruitmen-3529" id="id-3529">
                    <span class="open-recruitmen-3529-0">Open Recruitment Asisten Magang ResLab 2021/2022Asisten
                        Laboratorium ResLab membuka kesempatan untuk teman-teman Mahasiswa
                        Teknik Komputer Angkatan 2018 & 2019 untuk ikut berpartisipasi
                        sebagai Asisten</span>
                </div>
            </section>
            <!-- Group 32 -->
            <section class="pos-abs group-3-3518" id="id-3518">
                <div class="pos-abs rectangle-5-3519" id="id-3519"></div>
                <div class="pos-abs rectangle-9-3520" id="id-3520">
                    <div class="pos-abs image-div bg-no-repeat fill-parent bg-cover nodeBg-3520" id="id-bg-3520"
                        alt="Rectangle 91 Image"></div>
                </div>
                <div class="pos-abs open-recruitmen-3521" id="id-3521">
                    <span class="open-recruitmen-3521-0">OPEN RECRUITMENT<br />ASISTEN MAGANG</span>
                </div>
                <div class="pos-abs c-29-september-20-3522" id="id-3522">
                    <span class="c-29-september-20-3522-0">29 September 2024</span>
                </div>
                <div class="pos-abs open-recruitmen-3523" id="id-3523">
                    <span class="open-recruitmen-3523-0">Open Recruitment Asisten Magang ResLab 2021/2022Asisten
                        Laboratorium ResLab membuka kesempatan untuk teman-teman Mahasiswa
                        Teknik Komputer Angkatan 2018 & 2019 untuk ikut berpartisipasi
                        sebagai Asisten</span>
                </div>
            </section>
            <!-- Group 71 -->
            <section class="pos-abs group-7-4260" id="id-4260">
                <div class="pos-abs group-2-4261" id="id-4261">
                    <div class="pos-abs untitled1-1-4263" id="id-4263">
                        <div class="pos-abs image-div bg-no-repeat fill-parent bg-cover nodeBg-4263" id="id-bg-4263"
                            alt="Untitled-1 11 Image"></div>
                    </div>
                    <div class="pos-abs rectangle-4-4262" id="id-4262"></div>
                </div>
                <div class="pos-abs project-asisten-4264" id="id-4264">
                    <span class="project-asisten-4264-0">Project Asisten</span>
                </div>
                <div class="pos-abs rectangle-12-4265" id="id-4265"></div>
            </section>
            <!-- Group 101 -->
            <section class="pos-abs group-10-4284" id="id-4284">
                <div class="pos-abs rectangle-18-4285" id="id-4285"></div>
                <div class="pos-abs rectangle-17-4271" id="id-4271">
                    <div class="pos-abs image-div bg-no-repeat fill-parent bg-cover nodeBg-4271" id="id-bg-4271"
                        alt="Rectangle 171 Image"></div>
                </div>
                <div class="pos-abs robot-fire-figh-4273" id="id-4273">
                    <span class="robot-fire-figh-4273-0">ROBOT FIRE FIGHTER</span>
                </div>
                <div class="pos-abs reslab-project--4274" id="id-4274">
                    <span class="reslab-project--4274-0">[RESLAB PROJECT :ROBOT FIRE FIGHTER ]Robot fire fighter itu
                        apa
                        sih? &nbsp;Buat Sobat reslab yang penasaran, yuk disimak.</span>
                </div>
            </section>
            <!-- Group 111 -->
            <section class="pos-abs group-11-50105" id="id-50105">
                <div class="pos-abs rectangle-18-50106" id="id-50106"></div>
                <div class="pos-abs rectangle-17-50107" id="id-50107">
                    <div class="pos-abs image-div bg-no-repeat fill-parent bg-cover nodeBg-50107" id="id-bg-50107"
                        alt="Rectangle 171 Image"></div>
                </div>
                <div class="pos-abs robot-fire-figh-50108" id="id-50108">
                    <span class="robot-fire-figh-50108-0">ROBOT FIRE FIGHTER</span>
                </div>
                <div class="pos-abs reslab-project--50109" id="id-50109">
                    <span class="reslab-project--50109-0">[RESLAB PROJECT :ROBOT FIRE FIGHTER ]Robot fire fighter itu
                        apa
                        sih? &nbsp;Buat Sobat reslab yang penasaran, yuk disimak.</span>
                </div>
            </section>
            <!-- Group 102 -->
            <section class="pos-abs group-10-50110" id="id-50110">
                <div class="pos-abs rectangle-18-50111" id="id-50111"></div>
                <div class="pos-abs rectangle-17-50112" id="id-50112">
                    <div class="pos-abs image-div bg-no-repeat fill-parent bg-cover nodeBg-50112" id="id-bg-50112"
                        alt="Rectangle 171 Image"></div>
                </div>
                <div class="pos-abs robot-fire-figh-50113" id="id-50113">
                    <span class="robot-fire-figh-50113-0">ROBOT FIRE FIGHTER</span>
                </div>
                <div class="pos-abs reslab-project--50114" id="id-50114">
                    <span class="reslab-project--50114-0">[RESLAB PROJECT :ROBOT FIRE FIGHTER ]Robot fire fighter itu
                        apa
                        sih? &nbsp;Buat Sobat reslab yang penasaran, yuk disimak.</span>
                </div>
            </section>
            <!-- Group 231 -->
            <section class="pos-abs group-23-62518" id="id-62518">
                <div class="pos-abs rectangle-22-51124" id="id-51124"></div>
                <div class="pos-abs rectangle-24-51129" id="id-51129"></div>
                <div class="pos-abs image-5-51131" id="id-51131">
                    <div class="pos-abs image-div bg-no-repeat fill-parent bg-cover nodeBg-51131" id="id-bg-51131"
                        alt="image 51 Image"></div>
                </div>
                <div class="pos-abs rectangle-23-51127" id="id-51127"></div>
                <div class="pos-abs group-13-51132" id="id-51132">
                    <div class="pos-abs iay2dwwy400x400-51125" id="id-51125">
                        <div class="pos-abs image-div bg-no-repeat fill-parent bg-cover nodeBg-51125" id="id-bg-51125"
                            alt="iay2dwWY_400x400 (1) 21 Image"></div>
                    </div>
                    <div class="pos-abs robotic-and-emb-51126" id="id-51126">
                        <span class="robotic-and-emb-51126-0">ROBOTIC AND EMBEDDED SYSTEM<br />LABORATORY</span>
                    </div>
                </div>
                <div class="pos-abs kontak-kami-rob-51128" id="id-51128">
                    <span class="kontak-kami-rob-51128-0">Kontak Kami<br /></span><span
                        class="kontak-kami-rob-51128-1">Robotics & Embedded System Laboratory<br /><br /></span><span
                        class="kontak-kami-rob-51128-2">Universitas Andalas<br />Gd. Fakultas Teknolosi Informasi
                        Lt.2<br />Limau
                        Manis 25163<br /><br />Telepon : (+62) 812-7726-5292<br />Instagra
                        : @reslabunand<br /><br />Facebook : reslabunand<br /></span>
                </div>
            </section>
        </div>
    </div>
    <script src="scripts.js"></script>
</body>

</html>
