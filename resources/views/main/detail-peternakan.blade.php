@extends('layouts.layout')

@section('content')

@if(Session::has('success'))
    <p class="alert alert-success fixed-top w-75 mx-auto my-5 text-center" id="sixSeconds">{{ Session::get('success') }}</p>
@elseif(Session::has('failed'))
    <p class="alert alert-warning fixed-top w-75 mx-auto my-5 text-center" id="sixSeconds">{{ Session::get('failed') }}</p>
@endif

<div class="container py-3">
  <div class="d-flex-row text-end px-3">
    @if (Auth::user()->role == 'admin')
    <a href="{{ url('/listBisnisAdmin') }}" class="btn" style="background:#769FCD; color:white"><i class="bi bi-arrow-left"></i> Kembali</a>
    @else    
    <a href="{{ url('/semua_bisnis') }}" class="btn" style="background:#769FCD; color:white"><i class="bi bi-arrow-left"></i> Kembali</a>
    @endif
  </div>
  <div class="row py-5 px-3">
    <div class="col-md-6">
      <div class="ratio ratio-16x9">
        <iframe src="https://www.youtube.com/embed/{{ $datas1->url_yt }}" title="YouTube video" allowfullscreen></iframe>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row">
        <h5 style="color: black"><span class="badge" style="background: #769FCD;">{{ strtoupper($datas1->kategori) }}</span> {{ $datas1->jenis }}</h5>
        <h1 class="fw-semibold">{{ $datas1->nama }}</h1>
        <p><i class="bi bi-geo-alt-fill"></i> {{ $datas1->location }}</p>
        <p style="color:grey">TOTAL INVESTASI</p>
        <h5 style="color:forestgreen">{{ @money($datas1->harga * $datas1->lembar_terjual) }}</h5>
        <div class="progress px-0 rounded-0 mx-3 my-0">
          <div id="progressbar" class="progress-bar" role="progressbar" aria-label="Success example" style="width: 0%; background:#769FCD" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
          </div>

          @php $percent = $datas1->lembar_terjual / $datas1->lembar * 100; @endphp

          <script>
            $(document).ready(function() {
              $('#progressbar').css('width', '{{ $percent }}%')
            })
          </script>
        </div> 
        <p style="text-align: end;">Target: {{ @money($datas1->harga * $datas1->lembar) }}</p>
        <div class="d-flex d-row text-center align-items-center justify-content-center">
          @if($isActive == '1')
          <a class="btn shadow py-2 px-4" style="background: #769FCD; color:aliceblue" data-bs-toggle="modal" data-bs-target="#exampleModal">Pesan Saham</a>
          @else 
          <button type="button" data-bs-content="Peternakan Sedang Tidak Aktif" class="btn shadow py-2 px-4" style="background: #ACC3DD; color:aliceblue" data-bs-container="body" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="top">
            Pesan Saham
          </button>
          @endif
          <a class="btn ms-2 shadow py-2 px-4" style="background:white"><i class="bi bi-share"></i> Bagikan</a>
        </div>
      </div>
    </div>
  </div>
  
  <div class="row py-2 px-4">
    <div class="col-md-3">
      <div class="row sticky-top">

        <!-- <div class="card border-0 shadow">
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
        </div>  -->

        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                Farm Highlight
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Company Overview
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
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
        <div class="card border-0 shadow pt-2 ps-3 pb-4">
          <p class="fw-semibold fs-6">Yuk Investasi!</p>
          <p>Limit investasi tahunan anda adalah:</p>
          <ul class="text-justify-end">
            <li>5% dari pendapatan per-tahun jika pendapatan per-tahun max Rp 500 juta, atau</li>
            <li>10% dari pendapatan per-tahun jika pendapatan per-tahun lebih dari Rp 500 juta</li>
          </ul>
          <div class="total-investasi lh-1">
            <p class="lh-1">Total Investasi:</p>
            <p class="lh-1" style="color:forestgreen">{{ @money($datas1->harga * $datas1->lembar_terjual) }}</p>
          </div>
          @if ($isActive == '1')
          <a class="btn shadow py-2" style="background: #769FCD; color:aliceblue" data-bs-toggle="modal" data-bs-target="#exampleModal">Pesan Saham</a>
          @else 
          <button type="button" data-bs-content="Peternakan Sedang Tidak Aktif" class="btn shadow py-2 px-4" style="background: #ACC3DD; color:aliceblue" data-bs-container="body" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="top">
            Pesan Saham
          </button>          
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<!-- MODAL -->
<form method="POST" action="{{ url('/beli_investasi/'.$datas1->id) }}">
  @csrf
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Pesan Saham</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <div class="mb-3">
            <label for="berapalembar">Lembar</label>
            <input name="lembar" type="number" min="1" class="form-control" id="berapalembar" placeholder="0" required>
          </div> 

          <div class="mb-3">
            <label for="berapalembar">Pembayaran Dari</label>
            <select name="pembayaran_from" class="form-control" required>
              <option value="" disabled selected>-- Select --</option>
              <option value="balance">Saldo Rekening - {{ @money(Auth::user()->balance) }}</option>
              <option value="dividen">Dividen - {{ @money(Auth::user()->dividen) }}</option>
            </select>
          </div> 

          <label id="perkalianlembar">0 Lembar: Rp 0</label>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Pesan Saham</button>
        </div>
      </div>

      <script>
        $(document).ready(function() {
          $('#berapalembar').on('input', function() {
            const berapalembarVal = $('#berapalembar').val();
            $('#perkalianlembar').html(berapalembarVal + ' Lembar: Rp ' + (berapalembarVal *
              '{{ $datas1->harga }}'));
          });
        })
      </script>
    </div>
  </div>
</form>

<script>
  const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
  const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))
</script>
@endsection