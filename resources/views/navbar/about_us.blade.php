@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex flex-row align-items-center">
            <div class="profile-image">          
                <img class="rounded-circle m-2" src="{{asset('img/profile-icon.jpg')}}" alt="" height="120px" width="120px">
            </div>
            <div class="profile-name pt-2 px-2">
                <h3 class="fw-bold">TernakConnect</h3>
                <p>Menyediakan Solusi Keuangan Untuk Pengembangan Usaha Ternak Anda</p>
            </div>
        </div>

        <div class="text-center my-5">
            <h5>TernakConnect</h5>
            <p>TernakConnect adalah sebuah aplikasi yang menghubungkan peternak yang membutuhkan modal dengan investor yang ingin mendukung usaha ternak. Peternak memasukkan proposal usaha ternaknya dan investor memilih usaha ternak yang sesuai dengan minat dan keinginan mereka untuk diberikan modal. Setelah terjadi kesepakatan, investor memberikan modal dan peternak mengembangkan usahanya, memberikan laporan perkembangan usaha secara berkala kepada investor. Aplikasi ini memudahkan peternak mendapatkan modal, memberikan kesempatan bagi investor untuk berinvestasi pada usaha ternak, dan mengurangi risiko peternak dan investor. Biaya layanan TernakConnect cukup kecil dan sebanding dengan manfaat yang diberikan.</p>
        </div>

        <div class="row my-5">
            <div class="col text-center">
                <p>Visi</p>
                <p>Menjadi aplikasi yang terdepan dalam membantu peternak dan investor dalam mengembangkan usaha ternak yang berkelanjutan dan menghasilkan manfaat yang signifikan bagi masyarakat.</p>
            </div>
            <div class="col">
                <p class="text-center">misi</p>
                <ol>
                    <li>Mempermudah peternak dalam mendapatkan modal untuk mengembangkan usaha ternaknya</li>
                    <li>Memberikan kesempatan bagi investor untuk berinvestasi pada usaha ternak yang menjanjikan</li>
                    <li>menyediakan layanan yang aman, transparan, dan terpercaya bagi peternak dan investor</li>
                    <li>Mendukung pertumbuhan dan pengembangan usaha ternak yang berkelanjutanm, ramah lingkungan,  dan menghasilkan produk berkualitsa tinggi</li>
                    <li>Menjadi mitra yang berdidikasi bagi peternak dan investor dalam mencapai tujuan bisnis mereka</li>
                </ol>
            </div>
        </div>

        <div class="my-5">
            <h3 class="fw-semibold text-center my-5">Profil</h3>
            <div class="d-flex justify-content-between my-5">
                <div class="card text-center p-3 rounded"  style="width: 236px">
                    <img class="rounded-circle m-2 mx-auto d-block" src="{{asset('img/profile-icon.jpg')}}" alt="" height="90px" width="90px">
                    <p class="fw-semibold mt-3">Andriana Herlambang</p>
                    <p>Program Studi Sarjana Informatika Universitas Siliwangi</p>
                </div>
                <div class="card text-center p-3 rounded"  style="width: 236px">
                    <img class="rounded-circle m-2 mx-auto d-block" src="{{asset('img/profile-icon.jpg')}}" alt="" height="90px" width="90px">
                    <p class="fw-semibold mt-3">Lutfi Amaludin</p>
                    <p>Program Studi Sarjana Informatika Universitas Siliwangi</p>
                </div>
                <div class="card text-center p-3 rounded"  style="width: 236px">
                    <img class="rounded-circle m-2 mx-auto d-block" src="{{asset('img/profile-icon.jpg')}}" alt="" height="90px" width="90px">
                    <p class="fw-semibold mt-3">Muhammad Shafwan Abdullah</p>
                    <p>Program Studi Sarjana Informatika Universitas Siliwangi</p>
                </div>
            </div>
            <div class="d-flex justify-content-between my-5">
                <div class="card text-center p-3 rounded"  style="width: 236px">
                    <img class="rounded-circle m-2 mx-auto d-block" src="{{asset('img/profile-icon.jpg')}}" alt="" height="90px" width="90px">
                    <p class="fw-semibold mt-3">Resa Setyawan</p>
                    <p>Program Studi Sarjana Informatika Universitas Siliwangi</p>
                </div>
                <div class="card text-center p-3 rounded"  style="width: 236px">
                    <img class="rounded-circle m-2 mx-auto d-block" src="{{asset('img/profile-icon.jpg')}}" alt="" height="90px" width="90px">
                    <p class="fw-semibold mt-3">Rizki Pratama</p>
                    <p>Program Studi Sarjana Informatika Universitas Siliwangi</p>
                </div>
                <div class="card text-center p-3 rounded"  style="width: 236px">
                    <img class="rounded-circle m-2 mx-auto d-block" src="{{asset('img/fotoFormal.jpeg')}}" alt="" height="90px" width="90px">
                    <p class="fw-semibold mt-3">Zulfan Syahidan Alfarra</p>
                    <p>Program Studi Sarjana Informatika Universitas Siliwangi</p>
                </div>
            </div>
        </div>



        <!-- <div class="text-center my-5">
            <p>Tentang Kami</p>
            <p class="fw-bolder h1 text-dark text-capitalize">Ternak Connect</p>
        </div>
        <div class="row  mb-5">
            <div class="col-4">
                <img class="img-fluid my-3" src="{{ asset('./image/poto_profil/poto_profil_1.png')}}" alt="">
            </div>
            <div class="col-4">
                <img class="img-fluid my-3" src="{{ asset('./image/poto_profil/poto_profil_1.png')}}" alt="">
            </div>
            <div class="col-4">
                <img class="img-fluid my-3" src="{{ asset('./image/poto_profil/poto_profil_1.png')}}" alt="">
            </div>
            <div class="col-4">
                <img class="img-fluid my-3" src="{{ asset('./image/poto_profil/poto_profil_1.png')}}" alt="">
            </div>
            <div class="col-4">
                <img class="img-fluid my-3" src="{{ asset('./image/poto_profil/poto_profil_1.png')}}" alt="">
            </div>
            <div class="col-4">
                <img class="img-fluid my-3" src="{{ asset('./image/poto_profil/poto_profil_1.png')}}" alt="">
            </div>
        </div>
        <div>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum </p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus necessitatibus suscipit soluta odio sed ratione consequatur recusandae eveniet ex officia quasi repellat id, harum dolore neque alias amet reprehenderit ad.
            Minus deserunt doloribus rem consequuntur quod, Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum quam, eius molestiae voluptate eaque dolorum nostrum ex explicabo nemo iste neque sapiente quia. Officiis ex natus praesentium. Qui, reprehenderit enim?
            Excepturi sequi optio minus quaerat, praesentium perferendis! Numquam accusantium et dolorem, adipisci dolorum dolores facilis animi soluta non minima sapiente illum. Cupiditate qui aperiam fugiat ex a doloremque reprehenderit nihil.
            Sapiente, omnis eius. Corporis nisi ipsa quam error molestias neque odit, repudiandae provident veritatis saepe amet vel cupiditate rerum omnis commodi. Repellat ea neque praesentium accusamus recusandae. Laborum, debitis numquam? corrupti nostrum voluptas voluptatum. Ut alias recusandae, vel quod repellendus sint aliquid dolore voluptatum veniam aspernatur repudiandae, quaerat quo expedita quasi facilis adipisci nulla!</p>
        </div> -->
    </div>
@endsection