<?php include './include/Components/app/header.php' ?>

<section id="tentang">
    <div class="container">
        <div class="row">
            <div class="col-md-12 py-2">
                <ul class="nav nav-tabs justify-content-center bg-success rounded-pill p-2" id="myTab" role="tablist">
                    <li class="nav-item mx-1 my-1" role="presentation">
                        <button class="nav-link rounded-pill active" id="poliklinik-tab" data-bs-toggle="tab"
                            data-bs-target="#poliklinik-tab-pane" type="button" role="tab"
                            aria-controls="poliklinik-tab-pane" aria-selected="true">Artikel</button>
                    </li>
                </ul>
            </div>
            <div class="col-md-12">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="poliklinik-tab-pane" role="tabpanel" aria-labelledby="poliklinik-tab"
                        tabindex="0">
                        <div class="container">
                            <div class="row py-5">
                                <div class="col-md-12 text-center my-auto">
                                    <h3>Isi Dari Artikel</h3>
                                </div>
                                <div class="col-md-12 card" style="height: 50vh;">

                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="tab-pane fade" id="pemeriksaan-medis-tab-pane" role="tabpanel" aria-labelledby="pemeriksaan-medis-tab"
                        tabindex="0"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include './include/Components/app/footer.php' ?>