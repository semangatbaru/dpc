

     <?php $this->load->view('partial/head')?>
    

    <body>
    <?php $this->load->view('partial/header')?>
        <!-- Headline -->
        <!-- <div class="container">
            <div class="bg0 flex-wr-sb-c p-rl-20 p-tb-8">
                <div class="f2-s-1 p-r-30 size-w-0 m-tb-6 flex-wr-s-c">
                    <span class="text-uppercase cl2 p-r-8">
                        Trending Now:
                    </span>
    
                    <span class="dis-inline-block cl6 slide100-txt pos-relative size-w-0" data-in="fadeInDown" data-out="fadeOutDown">
                        <span class="dis-inline-block slide100-txt-item animated visible-false">
                            Interest rate angst trips up US equity bull market
                        </span>
                        
                        <span class="dis-inline-block slide100-txt-item animated visible-false">
                            Designer fashion show kicks off Variety Week
                        </span>
    
                        <span class="dis-inline-block slide100-txt-item animated visible-false">
                            Microsoft quisque at ipsum vel orci eleifend ultrices
                        </span>
                    </span>
                </div>
    
                <div class="pos-relative size-a-2 bo-1-rad-22 of-hidden bocl11 m-tb-6">
                    <input class="f1-s-1 cl6 plh9 s-full p-l-25 p-r-45" type="text" name="search" placeholder="Search">
                    <button class="flex-c-c size-a-1 ab-t-r fs-20 cl2 hov-cl10 trans-03">
                        <i class="zmdi zmdi-search"></i>
                    </button>
                </div>
            </div>
        </div> -->
            
        <!-- Feature post -->
        <section class="bg0">
            
        </section>
    
        <!-- Post -->
        <section class="bg0 p-t-70">
            <div class="container">
                <div class="row justify-content-center">
                    
                    
                    <div class="tab01 p-b-20">
                    <!-- baru -->
                        <div class="tab01-head how2 how2-cl1 bocl12 flex-s-c m-r-10 m-r-0-sr991">
                            <h3 class="f1-m-2 cl3 tab01-title">
                                Keislaman
                            </h3>
    
                                    <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                            
                            </ul>
    
                            <!--  -->
                            <a href="<?php echo site_url('Welcome/keislamanall') ?>" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03">
                                View all
                                <i class="fs-12 m-l-5 fa fa-caret-right"></i>
                            </a>
                        </div>
                        <div class="col-md-10 col-lg-12 p-b-20">    
                            <div class="row p-t-35">
                                <?php 
                                    $no = 1;
                                    foreach($keislamanall as $wa){ 
                                ?>
                                <div class="col-sm-3">
                                    <!-- Item latest -->	
                                    <div class="m-b-45">
                                        <a href="<?php echo base_url('Welcome/detail/'.$wa['id_berita']) ?>" class="wrap-pic-w hov1 trans-03">
                                            <img src="<?php  echo base_url('../beritadong/gambar/'.$wa['gambar']) ?>" alt="IMG">
                                        </a>
        
                                        <div class="p-t-16">
                                            <h5 class="p-b-5">
                                                <a href="<?php echo base_url('Welcome/detail/'.$wa['id_berita']) ?>" class="f1-m-3 cl2 hov-cl10 trans-03">
                                                    <?php echo $wa['judul'] ?>
                                                </a>
                                            </h5>
        
                                            <span class="cl8">
                                                <a href="<?php echo base_url('Welcome/detail/'.$wa['id_berita']) ?>" class="f1-s-4 cl8 hov-cl10 trans-03">
                                                    by <?php echo $wa['penulis'] ?>
                                                </a>
        
                                                <span class="f1-s-3 m-rl-3">
                                                    -
                                                </span>
        
                                                <span class="f1-s-3">
                                                <?php echo date("d-m-Y", strtotime($wa['tanggal'])) ?>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                    <?php }?>
                                    
                                <!--  -->

                                
                            </div>
                        </div>
                    </div>

                    
                    
    
                    
                </div>
                
            </div>
        </section>
    
        
    
        <!-- Latest -->
        
    <?php $this->load->view('partial/footer')?>
    <?php $this->load->view('partial/top')?>
    
    <div class="modal fade" id="modal-video-01" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document" data-dismiss="modal">
                <div class="close-mo-video-01 trans-0-4" data-dismiss="modal" aria-label="Close">&times;</div>
    
                <div class="wrap-video-mo-01">
                    <div class="video-mo-01">
                        <iframe src="<?php echo base_url('assets/') ?>https://www.youtube.com/embed/wJnBTPUQS5A?rel=0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        
    <?php $this->load->view('partial/script')?>
    
    
    </body>
    </html>