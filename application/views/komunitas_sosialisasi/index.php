<section class="container-fluid" id="home">
	<div class="container">
		<div class="row mx-auto justify-content-center">
			<div class="col-md-5 py-5">
				<!-- Flickity HTML init -->
				<div class="komunitas">
					<div class="komunitas-cell">
						<img src="<?= base_url()?>assets/img/5.jpeg" alt="">
						<p>Banjir besar yang melanda Jakarta pada tahun 2007 memicu lahirnya Teens Go Green (TGG), sebuah komunitas yang bertujuan membentuk generasi muda yang peduli lingkungan dan bertekad untuk memperbaiki keadaan lingkungan di masa depan. Awalnya, TGG berfungsi sebagai program eco-students club yang ditujukan bagi siswa SMA di DKI Jakarta.</p>
						<p>Setelah program ini berakhir pada tahun 2013, Teens Go Green secara resmi bertransformasi menjadi sebuah komunitas muda yang independen. Dengan lebih dari 400 sukarelawan yang bergabung dari seluruh penjuru Indonesia, TGG terus aktif dalam memperjuangkan isu-isu lingkungan melalui berbagai kegiatan.</p>
					</div>
				</div>
			</div>
			<div class="col-md-5 p-5">
				<div class="p-3">
					<h3 class="color-green">Comments</h3>
					<div class="comments p-3">
						<div class="comment p-3">
							<form action="<?= base_url('komunitassosialisasi/post_comments') ?>" method="POST">
							<div class="form-group">
								<textarea name="comment" id="" cols="30" rows="10" class="form-control" placeholder="What do you think?"></textarea>
							</div>
							<div class="form-group">
								<hr class="devider"/>
							</div>

							<div class="form-group d-flex justify-content-between">
								<div class="d-flex">
									<a class="btn"><i class="fa-solid fa-bold"></i></a>
									<a class="btn"><i class="fa-solid fa-italic"></i></a>
									<a class="btn"><i class="fa-solid fa-underline"></i></a>
								</div>
								<button type="submit" class="btn btn-comment">Comment</button>
							</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
