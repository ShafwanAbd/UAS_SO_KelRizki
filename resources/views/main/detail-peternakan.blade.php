@extends('layouts.layout')

@section('content')
<div class="container-fluid py-3">
  <div class="d-flex-row text-end px-3">
    <a href="{{ url('/semua_bisnis') }}" class="btn" style="background:#769FCD; color:white"><i class="bi bi-arrow-left"></i> Kembali</a>
  </div>
  <div class="row py-5 px-3">
    <div class="col-md-6">
      <div class="ratio ratio-16x9">
        <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="YouTube video" allowfullscreen></iframe>
      </div>
    </div>
    <div class="col-md-6">
      <h5 style="color: black"><span class="badge" style="background: #769FCD;">SAHAM</span> Peternakan Ayam</h5>
      <h1 class="fw-semibold">PT. NARATAS FARM</h1>
      <p><i class="bi bi-geo-alt-fill"></i> Ciamis, Jawa Barat</p>
      <p style="color:grey">TOTAL INVESTASI</p>
      <h5 style="color:forestgreen">Rp. 250,000,000</h5>
      <div class="progress">
        <div class="progress-bar" role="progressbar" aria-label="Success example" style="width: 25%; background:#769FCD" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
      <p style="text-align: end;">Target: Rp. 1,000,000,000</p>
      <div class="d-flex d-row text-center align-items-center justify-content-center">
        <a class="btn shadow py-2 px-4" style="background: #769FCD; color:aliceblue">Pesan Saham</a>
        <a class="btn ms-2 shadow py-2 px-4" style="background:white"><i class="bi bi-share"></i> Bagikan</a>
      </div>
    </div>
  </div>
  <div class="row py-2 px-4">
    <div class="col-md-3">
      <div class="row sticky-top">
        <div class="card border-0 shadow">
          <div class=" d-flex d-row pt-3">
            <a href="#farm-highlight" class="text-decoration-none">
              <p class="fw-bold" style="color: grey;">Farm Highlight</p>
            </a>
            <p class="ms-auto" style="color: grey;">></p>
          </div>
          <div class="d-flex d-row ">
            <a href="#company-overview" class="text-decoration-none">
              <p class="fw-bold" style="color: grey;">Company Overview</p>
            </a>
            <p class=" ms-auto" style="color: grey;">></p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-7">
      <div class="row">
        <h4 class="fw-bold" id="farm-highlight">FARM HIGHLIGHT</h4>
        <p style="text-align:justify; color:darkgrey">Bintoro Corp merupakan perusahaan One Stop Living Service, dimana
          melayani
          berbagai
          macam jasa yang fokus pada
          kebutuhan sebuah bangunan, mulai dari pembangunan hingga perawatan. Unit bisnis Bintoro Corp antara lain
          desain
          arsitek, kontraktor, interior, pengendalian hama, dan cleaning service. Design, Build, Homecare adalah
          semboyan
          yang diusung sebagai representasi layanan terpadu Bintoro Corp.

          PT Bintoro Bangun Indonesia merupakan salah satu badan usaha dari Bintoro Corp yang lebih fokus dalam sektor
          usaha konstruksi. PT BBI memiliki manager key account yang berdedikasi yang akan menjadikan jalur komunikasi
          menjadi terpusat untuk memudahkan klien berkonsultasi dan selalu mengutamakan keselamatan tim serta selalu
          menjalankan kegiatan dalam beribadah secara tepat waktu untuk melancarkan segala pekerjaan.

          Mereka memahami, rumah adalah salah satu hal terpenting dalam hidup. Insyaa Allah yang PT BBI lakukan adalah
          tentang membuat rumahmu jadi yang kamu banget.



          PT Bintoro Bangun Indonesia adalah Unit bisnis yang berfokus di sektor konstruksi rumah/kantor/ bangunan
          tingkat
          rendah meliputi desain, pelaksanaan konstruksi, hingga pengurusan izin pembangunan rumah. PT Bintoro Bangun
          Indonesia memiliki beberapa layanan, diantaranya:

          Bintoro Architect: Melayani jasa desain arsitektur, interior, maupun lansekap rumah maupun kantor

          Bintoro Build: Melayani jasa pelaksanaan konstruksi rumah dan kantor, juga jasa pengurusan IMB

          Bintoro Interior: Melayani jasa pelaksanaan konstruksi interior rumah maupun kantor</p>
      </div>
      <div class="row">
        <h4 class="fw-bold" id="company-overview">Company Overview</h4>
        <p style="text-align:justify; color:darkgray">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex inventore accusantium laboriosam tenetur voluptate
          neque! Sequi nostrum velit harum ipsa illo dignissimos, nemo facilis voluptatibus expedita provident nam
          mollitia error. Lorem ipsum dolor sit amet consectetur adipisicing elit. Non esse, similique eius assumenda et
          veniam sed eaque explicabo debitis corporis aliquam perferendis beatae culpa recusandae eveniet minus eos est,
          sapiente alias consequuntur, eligendi nihil vero! Repellat cupiditate obcaecati, expedita iste molestias vel
          repudiandae saepe accusamus iusto illo eius hic impedit placeat aliquid omnis atque neque ipsa nesciunt
          voluptas enim libero recusandae. Exercitationem reprehenderit adipisci id ullam quaerat ab neque consequuntur
          commodi. Ea repellat optio autem expedita aliquid.
        </p>
      </div>
    </div>
    <div class="col-md-2">
      <div class="row sticky-top">
        <div class="card border-0 shadow pt-2 pe-2 ps-3 pb-4">
          <p class="fw-semibold fs-6">Yuk Investasi!</p>
          <p>Limit investasi tahunan anda adalah:</p>
          <ul class="text-justify-end">
            <li>5% dari pendapatan per-tahun jika pendapatan per-tahun max Rp 500 juta, atau</li>
            <li>10% dari pendapatan per-tahun jika pendapatan per-tahun lebih dari Rp 500 juta</li>
          </ul>
          <div class="total-investasi lh-1">
            <p class="lh-1">Total Investasi:</p>
            <p class="lh-1" style="color:forestgreen">Rp. 250,000,000</p>
          </div>
          <a class="btn shadow py-2" style="background: #769FCD; color:aliceblue">Pesan Saham</a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

@endsection