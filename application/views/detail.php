

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
                
                    
                    
                    <div class="tab01 p-b-20">
                    <!-- baru -->
                        
                        <div class="col-md-10 col-lg-12 p-b-20">    
                            
								<?php 
                                    $no = 1;
                                    foreach($berita as $wa){ 
                                ?>
								<div class="tab-content p-t-35">
								<!-- - -->
								<div class="tab-pane fade show active" id="tab1-1" role="tabpanel">
									<div class="row">
										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<!-- Item post -->	
											<div class="m-b-30">
												<a href="" class="wrap-pic-w hov1 trans-03">
													<img src="<?php  echo base_url('../beritadong/gambar/'.$wa['gambar']) ?>" alt="IMG">
												</a>
                                                <div class="size-w-2">
													<h5 class="p-b-5">
														<a href="" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        <?php echo date("d-m-Y", strtotime($wa['tanggal'])) ?>, Oleh
														<?php echo $wa['penulis'] ?>
														</a>
													</h5>
												</div>

												<!-- <div class="p-t-20">
													<h5 class="p-b-5">
														<a href="" class="f1-m-3 cl2 hov-cl10 trans-03">
															<?php echo $wa['penulis'] ?>
														</a>
													</h5>

													
												</div> -->
											</div>
										</div>

										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<!-- Item post -->	
											<div class="flex-wr-sb-s m-b-30">

												
                                                <div class="p-t-20">
													<h5 class="p-b-5">
														<a href="" class="f1-m-3 cl2 hov-cl10 trans-03">
															<?php echo $wa['judul'] ?>
														</a>
													</h5>

													
												</div>
											</div>
										</div>
                                        <div class="col-sm-12 p-r-25 p-r-15-sr991">
                                            <div class="flex-wr-sb-s m-b-30">

												
                                                <div class="p-t-20">
                                                    <h5 class="p-b-5">
                                                        <span href="" class="f1-s-7 size-w-3  ">
                                                            
                                                                <?php echo $wa['deskripsi'] ?>
                                                            
                                                        </span>
                                                    </h5>

                                                
                                                </div>
                                            </div>
                                        </div>
									</div>
								</div>
									<?php } ?>
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