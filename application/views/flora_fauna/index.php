<section class="container-fluid bg-green" id="flora">
	<div class="container ">
		<div class="row mx-auto justify-content-center">
			<div class="col-md-4 py-5 mt-5">
				<div class="flora p-3 mt-5">
					<form action="<?= base_url('florafauna/store')?>" method="POST" enctype="multipart/form-data">
						<div class="drag-area">
							<div class="icon">
							<i class="fas fa-images"></i>
							</div>
							<span class="header">Drop your image here</span>
							<span class="header">or <span class="button">browse</span></span>
							<input type="file" hidden/>
							<span class="support">Supports: JPEG, JPG, PNG</span>
						</div>
						<div class="d-flex justify-content-center pt-3">
							<button type="submit" class="btn btn-comment">Upload</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="<?= base_url()?>assets/js/draggable.js"></script>
