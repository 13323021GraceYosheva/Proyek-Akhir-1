<?php include './include/Components/app/header.php' ?>
<section id="layanan">
    <div class="container my-2">
        <div class="row py-3">
            <div class="col-md-12">
                <h3>Jadwal Layanan</h3>
                <p><i class="fa fa-stethoscope"></i> Dokter</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 bg-light-primary-green rounded card p-3">
                <div class="row">
                    <div class="col-md-1 text-center">
                        <img src="assets/img/logo.jpg" width="75" height="75" alt="Doctor Picture"
                            class="img rounded-circle">
                    </div>
                    <div class="col-md-11 my-auto">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Nama Dokter</h5>
                                <small>Spesialisasi Dokter</small>
                            </div>
                            <div class="col-md-6 text-right">
                                <h5>Hari Praktek</h5>
                                <small>Jam Praktek</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="info_layanan">
    <div class="container my-5">
        <div class="row pt-5 py-3">
            <div class="col-md-12 text-center">
                <h3> Informasi Layanan </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 py-2">
                <ul class="nav nav-tabs justify-content-between bg-success rounded-pill p-2" id="myTab" role="tablist">
                    <li class="nav-item mx-1 my-1" role="presentation">
                        <button class="nav-link rounded-pill active" id="poliklinik-tab" data-toggle="tab"
                            data-target="#poliklinik-tab-pane" type="button" role="tab"
                            aria-controls="poliklinik-tab-pane" aria-selected="true">Poliklinik</button>
                    </li>
                    <li class="nav-item mx-1 my-1" role="presentation">
                        <button class="nav-link rounded-pill" id="pemeriksaan-medis-tab" data-toggle="tab"
                            data-target="#pemeriksaan-medis-tab-pane" type="button" role="tab"
                            aria-controls="pemeriksaan-medis-tab-pane" aria-selected="true">Pemeriksaan Medis</button>
                    </li>
                    
                    <li class="nav-item mx-1 my-1" role="presentation">
                        <button class="nav-link rounded-pill" id="alur-layanan-tab" data-toggle="tab"
                            data-target="#alur-layanan-tab-pane" type="button" role="tab"
                            aria-controls="alur-layanan-tab-pane" aria-selected="true">Alur Layanan</button>
                    </li>
                </ul>
            </div>
            <div class="col-md-12">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="poliklinik-tab-pane" role="tabpanel"
                        aria-labelledby="poliklinik-tab" tabindex="0">
                        <div class="container">
                            <div class="row py-5">
                                <div class="col-md-8 card" style="max-height: 40vh; height: 30vh;">
                                </div>
                                <div class="col-md-4 my-auto">
                                    <h3>Judul Disini</h3>
                                    <p>Text Disini</p>
                                </div>
                            </div>
                            <div class="row py-5">
                                <div class="col-md-8 card" style="max-height: 40vh; height: 30vh;">
                                </div>
                                <div class="col-md-4 my-auto">
                                    <h3>Judul Disini</h3>
                                    <p>Text Disini</p>
                                </div>
                            </div>
                            <div class="row py-5">
                                <div class="col-md-8 card" style="max-height: 40vh; height: 30vh;">
                                </div>
                                <div class="col-md-4 my-auto">
                                    <h3>Judul Disini</h3>
                                    <p>Text Disini</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="pemeriksaan-medis-tab-pane" role="tabpanel"
                        aria-labelledby="pemeriksaan-medis-tab" tabindex="0">
                        <div class="container">
                            <div class="row py-5">
                                <div class="col-md-8 card" style="max-height: 40vh; height: 30vh;">
                                </div>
                                <div class="col-md-4 my-auto">
                                    <h3>Judul Disini</h3>
                                    <p>Text Disini</p>
                                </div>
                            </div>
                            <div class="row py-5">
                                <div class="col-md-8 card" style="max-height: 40vh; height: 30vh;">
                                </div>
                                <div class="col-md-4 my-auto">
                                    <h3>Judul Disini</h3>
                                    <p>Text Disini</p>
                                </div>
                            </div>
                            <div class="row py-5">
                                <div class="col-md-8 card" style="max-height: 40vh; height: 30vh;">
                                </div>
                                <div class="col-md-4 my-auto">
                                    <h3>Judul Disini</h3>
                                    <p>Text Disini</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="alur-layanan-tab-pane" role="tabpanel" aria-labelledby="alur-layanan-tab"
                        tabindex="0">
                        <div class="container">
                            <div class="row py-5">
                                <div class="col-md-12 text-center my-auto">
                                    <h3>Isi Alur Layanan</h3>
                                </div>
                                <div class="col-md-12 card my-2" style="height: 50vh;">

                                </div>
                                <div class="col-md-12 card my-2" style="height: 50vh;">

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include './include/Components/app/footer.php' ?>