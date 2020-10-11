

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
				<div class="col-md-10 col-lg-8 p-b-20 tab01 p-b-20">
					<!-- baru -->
					<div class="tab01-head how2 how2-cl1 bocl12 flex-s-c m-r-10 m-r-0-sr991">
						<h3 class="f1-m-2 cl3 tab01-title">
							Berita Terbaru
						</h3>

								<!-- Nav tabs -->
						<ul class="nav nav-tabs" role="tablist">
						
						</ul>

						<!--  -->
						<a href="<?php echo site_url('Welcome/terbaruall') ?>" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03">
							View all
							<i class="fs-12 m-l-5 fa fa-caret-right"></i>
						</a>
					</div>
						
					<div class="row p-t-35">
						<?php 
                            $no = 1;
                            foreach($terbaru as $wa){ 
                        ?>
						<div class="col-sm-6 p-r-25 p-r-15-sr991">
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
				
				

				<!-- Redaksi -->
				<div class="col-md-10 col-lg-4">
					<div class="p-l-10 p-rl-0-sr991 p-b-20">
						<!--  -->
						<div>
							<div class="how2 how2-cl4 flex-s-c">
								<h3 class="f1-m-2 cl3 tab01-title">
									Dewan Redaksi
								</h3>
							</div>

							<ul class="p-t-35">
								<li class="flex-wr-sb-s p-b-22">
									<div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
										1
									</div>

									<a href="#" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
										Pimred : Nabila Nilna
									</a>
								</li>

								<li class="flex-wr-sb-s p-b-22">
									<div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
										2
									</div>

									<a href="#" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
										Redaktur : Rofidatul Hasanah
									</a>
								</li>

								<li class="flex-wr-sb-s p-b-22">
									<div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
										3
									</div>

									<a href="#" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
										Kontributor : Farhan Aziz & Zubaed
									</a>
								</li>

								<li class="flex-wr-sb-s p-b-22">
									<div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
										4
									</div>

									<a href="#" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
										Medsos : Ferdiansyah
									</a>
								</li>

								<li class="flex-wr-sb-s p-b-22">
									<div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0">
										5
									</div>

									<a href="#" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
									Desain Grafis : Fathul & Faris
									</a>
									
								</li>
							</ul>
						</div>

						<!--  -->
						
						
						<!--  -->
						
					</div>
				</div>
			</div>
			
		</div>
	</section>

	<!-- Banner -->
	<div class="container">
		<div class="flex-c-c">
			<a href="#">
				<img class="max-w-full" src="<?php echo base_url('assets/') ?>images/banner-01.jpg" alt="IMG">
			</a>
		</div>
	</div>

	<!-- Latest -->
	<section class="bg0 p-t-60 p-b-35">
		<div class="container">
			<div class="row justify-content-center">
				<!-- kategori -->
				<div class="col-md-10 col-lg-8">
					<div class="p-b-20">
						<!-- Politik -->
						<div class="tab01 p-b-20" id="politik">
							<div class="tab01-head how2 how2-cl1 bocl12 flex-s-c m-r-10 m-r-0-sr991">
								<!-- Brand tab -->
								<h3 class="f1-m-2 cl12 tab01-title">
									Politik
								</h3>

								<!-- Nav tabs -->
								<ul class="nav nav-tabs" role="tablist">
								</ul>

								<!--  -->
								<a href="<?php echo site_url('Welcome/politikall') ?>" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03">
									View all
									<i class="fs-12 m-l-5 fa fa-caret-right"></i>
								</a>
							</div>
								

							<!-- Tab panes -->
							<div class="tab-content p-t-35">
								<!-- - -->
								<div class="tab-pane fade show active" id="tab1-1" role="tabpanel">
									<div class="row">
										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<!-- Item post -->	
											<?php 
												$no = 1;
												foreach($politik1 as $wa){ 
											?>
											<div class="m-b-30">
												<a href="<?php echo base_url('Welcome/detail/'.$wa['id_berita']) ?>" class="wrap-pic-w hov1 trans-03">
												<img src="<?php  echo base_url('../beritadong/gambar/'.$wa['gambar']) ?>" alt="IMG">
												</a>

												<div class="p-t-20">
													<h5 class="p-b-5">
														<a href="<?php echo base_url('Welcome/detail/'.$wa['id_berita']) ?>" class="f1-m-3 cl2 hov-cl10 trans-03">
														<?php echo $wa['judul'] ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
															 <?php echo $wa['penulis'] ?>
														</a>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															<?php echo date("d-m-Y", strtotime($wa['tanggal'])) ?>
														</span>
													</span>
													<?php } ?>
												</div>
											</div>
										</div>

										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<?php 
												$no = 1;
												foreach($politik3 as $wa){ 
											?>
											<!-- Item post -->	
											<div class="flex-wr-sb-s m-b-30">
												<a href="<?php echo base_url('Welcome/detail/'.$wa['id_berita']) ?>" class="wrap-pic-w hov1 trans-03">
													<img src="<?php  echo base_url('../beritadong/gambar/'.$wa['gambar']) ?>" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="<?php echo base_url('Welcome/detail/'.$wa['id_berita']) ?>" class="f1-s-5 cl3 hov-cl10 trans-03">
															<?php echo $wa['judul'] ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="" class="f1-s-6 cl8 hov-cl10 trans-03">
															<?php echo $wa['penulis'] ?>
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
												<?php } ?>
										</div>
									</div>
								</div>

							</div>
						</div>

						<!-- Ekonomi -->
						<div class="tab01 p-b-20" id="ekonomi">
							<div class="tab01-head how2 how2-cl1 bocl12 flex-s-c m-r-10 m-r-0-sr991">
								<!-- Brand tab -->
								<h3 class="f1-m-2 cl12 tab01-title">
									Ekonomi
								</h3>

								<!-- Nav tabs -->
								<ul class="nav nav-tabs" role="tablist">
								</ul>

								<!--  -->
								<a href="<?php echo site_url('Welcome/ekonomiall') ?>" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03">
									View all
									<i class="fs-12 m-l-5 fa fa-caret-right"></i>
								</a>
							</div>
								

							<!-- Tab panes -->
							<div class="tab-content p-t-35">
								<!-- - -->
								<div class="tab-pane fade show active" id="tab1-1" role="tabpanel">
									<div class="row">
										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<!-- Item post -->	
											<?php 
												$no = 1;
												foreach($ekonomi1 as $wa){ 
											?>
											<div class="m-b-30">
												<a href="<?php echo base_url('Welcome/detail/'.$wa['id_berita']) ?>" class="wrap-pic-w hov1 trans-03">
												<img src="<?php  echo base_url('../beritadong/gambar/'.$wa['gambar']) ?>" alt="IMG">
												</a>

												<div class="p-t-20">
													<h5 class="p-b-5">
														<a href="<?php echo base_url('Welcome/detail/'.$wa['id_berita']) ?>" class="f1-m-3 cl2 hov-cl10 trans-03">
														<?php echo $wa['judul'] ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
															 <?php echo $wa['penulis'] ?>
														</a>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															<?php echo date("d-m-Y", strtotime($wa['tanggal'])) ?>
														</span>
													</span>
													<?php } ?>
												</div>
											</div>
										</div>

										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<?php 
												$no = 1;
												foreach($ekonomi as $wa){ 
											?>
											<!-- Item post -->	
											<div class="flex-wr-sb-s m-b-30">
												<a href="<?php echo base_url('Welcome/detail/'.$wa['id_berita']) ?>" class="wrap-pic-w hov1 trans-03">
													<img src="<?php  echo base_url('../beritadong/gambar/'.$wa['gambar']) ?>" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="<?php echo base_url('Welcome/detail/'.$wa['id_berita']) ?>" class="f1-s-5 cl3 hov-cl10 trans-03">
															<?php echo $wa['judul'] ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="" class="f1-s-6 cl8 hov-cl10 trans-03">
															<?php echo $wa['penulis'] ?>
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
												<?php } ?>
										</div>
									</div>
								</div>

							</div>
						</div>

						<!-- Sosial -->
						<div class="tab01 p-b-20" id="sosial">
							<div class="tab01-head how2 how2-cl1 bocl12 flex-s-c m-r-10 m-r-0-sr991">
								<!-- Brand tab -->
								<h3 class="f1-m-2 cl12 tab01-title">
									Sosial
								</h3>

								<!-- Nav tabs -->
								<ul class="nav nav-tabs" role="tablist">
								</ul>

								<!--  -->
								<a href="<?php echo site_url('Welcome/sosialall') ?>" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03">
									View all
									<i class="fs-12 m-l-5 fa fa-caret-right"></i>
								</a>
							</div>
								

							<!-- Tab panes -->
							<div class="tab-content p-t-35">
								<!-- - -->
								<div class="tab-pane fade show active" id="tab1-1" role="tabpanel">
									<div class="row">
										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<!-- Item post -->	
											<?php 
												$no = 1;
												foreach($sosial1 as $wa){ 
											?>
											<div class="m-b-30">
												<a href="<?php echo base_url('Welcome/detail/'.$wa['id_berita']) ?>" class="wrap-pic-w hov1 trans-03">
												<img src="<?php  echo base_url('../beritadong/gambar/'.$wa['gambar']) ?>" alt="IMG">
												</a>

												<div class="p-t-20">
													<h5 class="p-b-5">
														<a href="<?php echo base_url('Welcome/detail/'.$wa['id_berita']) ?>" class="f1-m-3 cl2 hov-cl10 trans-03">
														<?php echo $wa['judul'] ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
															 <?php echo $wa['penulis'] ?>
														</a>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															<?php echo date("d-m-Y", strtotime($wa['tanggal'])) ?>
														</span>
													</span>
													<?php } ?>
												</div>
											</div>
										</div>

										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<?php 
												$no = 1;
												foreach($sosial3 as $wa){ 
											?>
											<!-- Item post -->	
											<div class="flex-wr-sb-s m-b-30">
												<a href="<?php echo base_url('Welcome/detail/'.$wa['id_berita']) ?>" class="wrap-pic-w hov1 trans-03">
													<img src="<?php  echo base_url('../beritadong/gambar/'.$wa['gambar']) ?>" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="<?php echo base_url('Welcome/detail/'.$wa['id_berita']) ?>" class="f1-s-5 cl3 hov-cl10 trans-03">
															<?php echo $wa['judul'] ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="" class="f1-s-6 cl8 hov-cl10 trans-03">
															<?php echo $wa['penulis'] ?>
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
												<?php } ?>
										</div>
									</div>
								</div>

							</div>
						</div>

						<!-- Opini -->
						<div class="tab01 p-b-20" id="opini">
							<div class="tab01-head how2 how2-cl1 bocl12 flex-s-c m-r-10 m-r-0-sr991">
								<!-- Brand tab -->
								<h3 class="f1-m-2 cl12 tab01-title">
									Opini
								</h3>

								<!-- Nav tabs -->
								<ul class="nav nav-tabs" role="tablist">
								</ul>

								<!--  -->
								<a href="<?php echo site_url('Welcome/opiniall') ?>" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03">
									View all
									<i class="fs-12 m-l-5 fa fa-caret-right"></i>
								</a>
							</div>
								

							<!-- Tab panes -->
							<div class="tab-content p-t-35">
								<!-- - -->
								<div class="tab-pane fade show active" id="tab1-1" role="tabpanel">
									<div class="row">
										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<!-- Item post -->	
											<?php 
												$no = 1;
												foreach($opini1 as $wa){ 
											?>
											<div class="m-b-30">
												<a href="<?php echo base_url('Welcome/detail/'.$wa['id_berita']) ?>" class="wrap-pic-w hov1 trans-03">
												<img src="<?php  echo base_url('../beritadong/gambar/'.$wa['gambar']) ?>" alt="IMG">
												</a>

												<div class="p-t-20">
													<h5 class="p-b-5">
														<a href="<?php echo base_url('Welcome/detail/'.$wa['id_berita']) ?>" class="f1-m-3 cl2 hov-cl10 trans-03">
														<?php echo $wa['judul'] ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
															 <?php echo $wa['penulis'] ?>
														</a>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															<?php echo date("d-m-Y", strtotime($wa['tanggal'])) ?>
														</span>
													</span>
													<?php } ?>
												</div>
											</div>
										</div>

										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<?php 
												$no = 1;
												foreach($opini3 as $wa){ 
											?>
											<!-- Item post -->	
											<div class="flex-wr-sb-s m-b-30">
												<a href="<?php echo base_url('Welcome/detail/'.$wa['id_berita']) ?>" class="wrap-pic-w hov1 trans-03">
													<img src="<?php  echo base_url('../beritadong/gambar/'.$wa['gambar']) ?>" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="<?php echo base_url('Welcome/detail/'.$wa['id_berita']) ?>" class="f1-s-5 cl3 hov-cl10 trans-03">
															<?php echo $wa['judul'] ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="" class="f1-s-6 cl8 hov-cl10 trans-03">
															<?php echo $wa['penulis'] ?>
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
												<?php } ?>
										</div>
									</div>
								</div>

							</div>
						</div>

						<!-- Analisa -->
						<div class="tab01 p-b-20" id="analisa">
							<div class="tab01-head how2 how2-cl1 bocl12 flex-s-c m-r-10 m-r-0-sr991">
								<!-- Brand tab -->
								<h3 class="f1-m-2 cl12 tab01-title">
									Analisa
								</h3>

								<!-- Nav tabs -->
								<ul class="nav nav-tabs" role="tablist">
								</ul>

								<!--  -->
								<a href="<?php echo site_url('Welcome/analisaall') ?>" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03">
									View all
									<i class="fs-12 m-l-5 fa fa-caret-right"></i>
								</a>
							</div>
								

							<!-- Tab panes -->
							<div class="tab-content p-t-35">
								<!-- - -->
								<div class="tab-pane fade show active" id="tab1-1" role="tabpanel">
									<div class="row">
										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<!-- Item post -->	
											<?php 
												$no = 1;
												foreach($analisa1 as $wa){ 
											?>
											<div class="m-b-30">
												<a href="<?php echo base_url('Welcome/detail/'.$wa['id_berita']) ?>" class="wrap-pic-w hov1 trans-03">
												<img src="<?php  echo base_url('../beritadong/gambar/'.$wa['gambar']) ?>" alt="IMG">
												</a>

												<div class="p-t-20">
													<h5 class="p-b-5">
														<a href="<?php echo base_url('Welcome/detail/'.$wa['id_berita']) ?>" class="f1-m-3 cl2 hov-cl10 trans-03">
														<?php echo $wa['judul'] ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
															 <?php echo $wa['penulis'] ?>
														</a>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															<?php echo date("d-m-Y", strtotime($wa['tanggal'])) ?>
														</span>
													</span>
													<?php } ?>
												</div>
											</div>
										</div>

										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<?php 
												$no = 1;
												foreach($analisa3 as $wa){ 
											?>
											<!-- Item post -->	
											<div class="flex-wr-sb-s m-b-30">
												<a href="<?php echo base_url('Welcome/detail/'.$wa['id_berita']) ?>" class="wrap-pic-w hov1 trans-03">
													<img src="<?php  echo base_url('../beritadong/gambar/'.$wa['gambar']) ?>" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="<?php echo base_url('Welcome/detail/'.$wa['id_berita']) ?>" class="f1-s-5 cl3 hov-cl10 trans-03">
															<?php echo $wa['judul'] ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="" class="f1-s-6 cl8 hov-cl10 trans-03">
															<?php echo $wa['penulis'] ?>
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
												<?php } ?>
										</div>
									</div>
								</div>

							</div>
						</div>

						<!-- Biografi -->
						<div class="tab01 p-b-20" id="biografi">
							<div class="tab01-head how2 how2-cl1 bocl12 flex-s-c m-r-10 m-r-0-sr991">
								<!-- Brand tab -->
								<h3 class="f1-m-2 cl12 tab01-title">
									Biografi
								</h3>

								<!-- Nav tabs -->
								<ul class="nav nav-tabs" role="tablist">
								</ul>

								<!--  -->
								<a href="<?php echo site_url('Welcome/biografiall') ?>" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03">
									View all
									<i class="fs-12 m-l-5 fa fa-caret-right"></i>
								</a>
							</div>
								

							<!-- Tab panes -->
							<div class="tab-content p-t-35">
								<!-- - -->
								<div class="tab-pane fade show active" id="tab1-1" role="tabpanel">
									<div class="row">
										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<!-- Item post -->	
											<?php 
												$no = 1;
												foreach($biografi1 as $wa){ 
											?>
											<div class="m-b-30">
												<a href="<?php echo base_url('Welcome/detail/'.$wa['id_berita']) ?>" class="wrap-pic-w hov1 trans-03">
												<img src="<?php  echo base_url('../beritadong/gambar/'.$wa['gambar']) ?>" alt="IMG">
												</a>

												<div class="p-t-20">
													<h5 class="p-b-5">
														<a href="<?php echo base_url('Welcome/detail/'.$wa['id_berita']) ?>" class="f1-m-3 cl2 hov-cl10 trans-03">
														<?php echo $wa['judul'] ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
															 <?php echo $wa['penulis'] ?>
														</a>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															<?php echo date("d-m-Y", strtotime($wa['tanggal'])) ?>
														</span>
													</span>
													<?php } ?>
												</div>
											</div>
										</div>

										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<?php 
												$no = 1;
												foreach($biografi3 as $wa){ 
											?>
											<!-- Item post -->	
											<div class="flex-wr-sb-s m-b-30">
												<a href="<?php echo base_url('Welcome/detail/'.$wa['id_berita']) ?>" class="wrap-pic-w hov1 trans-03">
													<img src="<?php  echo base_url('../beritadong/gambar/'.$wa['gambar']) ?>" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="<?php echo base_url('Welcome/detail/'.$wa['id_berita']) ?>" class="f1-s-5 cl3 hov-cl10 trans-03">
															<?php echo $wa['judul'] ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="" class="f1-s-6 cl8 hov-cl10 trans-03">
															<?php echo $wa['penulis'] ?>
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
												<?php } ?>
										</div>
									</div>
								</div>

							</div>
						</div>

						<!-- Keislaman -->
						<div class="tab01 p-b-20" id="keislaman">
							<div class="tab01-head how2 how2-cl1 bocl12 flex-s-c m-r-10 m-r-0-sr991">
								<!-- Brand tab -->
								<h3 class="f1-m-2 cl12 tab01-title">
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
								

							<!-- Tab panes -->
							<div class="tab-content p-t-35">
								<!-- - -->
								<div class="tab-pane fade show active" id="tab1-1" role="tabpanel">
									<div class="row">
										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<!-- Item post -->	
											<?php 
												$no = 1;
												foreach($keislaman1 as $wa){ 
											?>
											<div class="m-b-30">
												<a href="<?php echo base_url('Welcome/detail/'.$wa['id_berita']) ?>" class="wrap-pic-w hov1 trans-03">
												<img src="<?php  echo base_url('../beritadong/gambar/'.$wa['gambar']) ?>" alt="IMG">
												</a>

												<div class="p-t-20">
													<h5 class="p-b-5">
														<a href="<?php echo base_url('Welcome/detail/'.$wa['id_berita']) ?>" class="f1-m-3 cl2 hov-cl10 trans-03">
														<?php echo $wa['judul'] ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
															 <?php echo $wa['penulis'] ?>
														</a>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															<?php echo date("d-m-Y", strtotime($wa['tanggal'])) ?>
														</span>
													</span>
													<?php } ?>
												</div>
											</div>
										</div>

										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<?php 
												$no = 1;
												foreach($keislaman3 as $wa){ 
											?>
											<!-- Item post -->	
											<div class="flex-wr-sb-s m-b-30">
												<a href="<?php echo base_url('Welcome/detail/'.$wa['id_berita']) ?>" class="wrap-pic-w hov1 trans-03">
													<img src="<?php  echo base_url('../beritadong/gambar/'.$wa['gambar']) ?>" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="<?php echo base_url('Welcome/detail/'.$wa['id_berita']) ?>" class="f1-s-5 cl3 hov-cl10 trans-03">
															<?php echo $wa['judul'] ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="" class="f1-s-6 cl8 hov-cl10 trans-03">
															<?php echo $wa['penulis'] ?>
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
												<?php } ?>
										</div>
									</div>
								</div>

							</div>
						</div>

						<!-- Berita -->
						<div class="tab01 p-b-20" id="berita">
							<div class="tab01-head how2 how2-cl1 bocl12 flex-s-c m-r-10 m-r-0-sr991">
								<!-- Brand tab -->
								<h3 class="f1-m-2 cl12 tab01-title">
									Berita
								</h3>

								<!-- Nav tabs -->
								<ul class="nav nav-tabs" role="tablist">
								</ul>

								<!--  -->
								<a href="<?php echo site_url('Welcome/beritaall') ?>" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03">
									View all
									<i class="fs-12 m-l-5 fa fa-caret-right"></i>
								</a>
							</div>
								

							<!-- Tab panes -->
							<div class="tab-content p-t-35">
								<!-- - -->
								<div class="tab-pane fade show active" id="tab1-1" role="tabpanel">
									<div class="row">
										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<!-- Item post -->	
											<?php 
												$no = 1;
												foreach($berita1 as $wa){ 
											?>
											<div class="m-b-30">
												<a href="<?php echo base_url('Welcome/detail/'.$wa['id_berita']) ?>" class="wrap-pic-w hov1 trans-03">
												<img src="<?php  echo base_url('../beritadong/gambar/'.$wa['gambar']) ?>" alt="IMG">
												</a>

												<div class="p-t-20">
													<h5 class="p-b-5">
														<a href="<?php echo base_url('Welcome/detail/'.$wa['id_berita']) ?>" class="f1-m-3 cl2 hov-cl10 trans-03">
														<?php echo $wa['judul'] ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
															 <?php echo $wa['penulis'] ?>
														</a>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															<?php echo date("d-m-Y", strtotime($wa['tanggal'])) ?>
														</span>
													</span>
													<?php } ?>
												</div>
											</div>
										</div>

										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<?php 
												$no = 1;
												foreach($berita3 as $wa){ 
											?>
											<!-- Item post -->	
											<div class="flex-wr-sb-s m-b-30">
												<a href="<?php echo base_url('Welcome/detail/'.$wa['id_berita']) ?>" class="wrap-pic-w hov1 trans-03">
													<img src="<?php  echo base_url('../beritadong/gambar/'.$wa['gambar']) ?>" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="<?php echo base_url('Welcome/detail/'.$wa['id_berita']) ?>" class="f1-s-5 cl3 hov-cl10 trans-03">
															<?php echo $wa['judul'] ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="" class="f1-s-6 cl8 hov-cl10 trans-03">
															<?php echo $wa['penulis'] ?>
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
												<?php } ?>
										</div>
									</div>
								</div>

							</div>
						</div>

					</div>
				</div>
				<!-- vidio -->
				<div class="col-md-10 col-lg-4">
					<div class="p-l-10 p-rl-0-sr991 p-b-20">
						<div class="p-b-55">
							<div class="how2 how2-cl4 flex-s-c">
								<h3 class="f1-m-2 cl3 tab01-title">
									Stay Connected
								</h3>
							</div>

							<ul class="p-t-35">
								<li class="flex-wr-sb-c p-b-20">
									<a href="#" class="size-a-8 flex-c-c borad-3 size-a-8 bg-facebook fs-16 cl0 hov-cl0">
										<span class="fab fa-facebook-f"></span>
									</a>

									<div class="size-w-3 flex-wr-sb-c">
										<span class="f1-s-8 cl3 p-r-20">
											6879 Fans
										</span>

										<a href="#" class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03">
											Like
										</a>
									</div>
								</li>

								<li class="flex-wr-sb-c p-b-20">
									<a href="#" class="size-a-8 flex-c-c borad-3 size-a-8 bg-twitter fs-16 cl0 hov-cl0">
										<span class="fab fa-twitter"></span>
									</a>

									<div class="size-w-3 flex-wr-sb-c">
										<span class="f1-s-8 cl3 p-r-20">
											568 Followers
										</span>

										<a href="#" class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03">
											Follow
										</a>
									</div>
								</li>

								<li class="flex-wr-sb-c p-b-20">
									<a href="#" class="size-a-8 flex-c-c borad-3 size-a-8 bg-youtube fs-16 cl0 hov-cl0">
										<span class="fab fa-youtube"></span>
									</a>

									<div class="size-w-3 flex-wr-sb-c">
										<span class="f1-s-8 cl3 p-r-20">
											5039 Subscribers
										</span>

										<a href="#" class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03">
											Subscribe
										</a>
									</div>
								</li>
							</ul>
						</div>
						<!-- Video -->
						<div class="p-b-55">
							<div class="how2 how2-cl4 flex-s-c m-b-35">
								<h3 class="f1-m-2 cl3 tab01-title">
									Featured Video
								</h3>
							</div>

							<div>
								<div class="wrap-pic-w pos-relative">
									<img src="<?php echo base_url('assets/') ?>images/video-01.jpg" alt="IMG">

									<button class="s-full ab-t-l flex-c-c fs-32 cl0 hov-cl10 trans-03" data-toggle="modal" data-target="#modal-video-01">
										<span class="fab fa-youtube"></span>
									</button>
								</div>

								<div class="p-tb-16 p-rl-25 bg3">
									<h5 class="p-b-5">
										<a href="#" class="f1-m-3 cl0 hov-cl10 trans-03">
											Music lorem ipsum dolor sit amet consectetur 
										</a>
									</h5>

									<span class="cl15">
										<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
											by John Alvarado
										</a>

										<span class="f1-s-3 m-rl-3">
											-
										</span>

										<span class="f1-s-3">
											Feb 18
										</span>
									</span>
								</div>
							</div>	
						</div>
							
						<!-- Subscribe -->
						<div class="bg10 p-rl-35 p-t-28 p-b-35 m-b-55">
							<h5 class="f1-m-5 cl0 p-b-10">
								Subscribe
							</h5>

							<p class="f1-s-1 cl0 p-b-25">
								Get all latest content delivered to your email a few times a month.
							</p>

							<form class="size-a-9 pos-relative">
								<input class="s-full f1-m-6 cl6 plh9 p-l-20 p-r-55" type="text" name="email" placeholder="Email">

								<button class="size-a-10 flex-c-c ab-t-r fs-16 cl9 hov-cl10 trans-03">
									<i class="fa fa-arrow-right"></i>
								</button>
							</form>
						</div>
						
						<!-- Tag -->
						<div class="p-b-55">
							<div class="how2 how2-cl4 flex-s-c m-b-30">
								<h3 class="f1-m-2 cl3 tab01-title">
									Tags
								</h3>
							</div>

							<div class="flex-wr-s-s m-rl--5">
								<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
									Fashion
								</a>

								<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
									Lifestyle
								</a>

								<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
									Denim
								</a>

								<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
									Streetstyle
								</a>

								<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
									Crafts
								</a>

								<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
									Magazine
								</a>

								<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
									News
								</a>

								<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
									Blogs
								</a>
							</div>	
						</div>
						<div class="flex-c-s p-t-8">
							<a href="#">
								<img class="max-w-full" src="<?php echo base_url('assets/') ?>images/banner-02.jpg" alt="IMG">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
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