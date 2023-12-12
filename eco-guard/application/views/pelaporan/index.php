<section class="container-fluid bg-cream" id="pelaporan">
	<div class="container">
		<div class="row">
			<div class="col-md-6 mx-auto py-5 justified-text pelaporan">
				<h5>Jika anda melihat pencemaran pada lingkungan di sekitar anda, silahkan masukan laporan anda dibawah ini. Mari kita mulai peduli pada lingkungan sekitar!</h5>
				<form id="myForm" action="<?= base_url('pelaporan/store')?>" method="POST">
					<div class="row mt-5">
						<div class="col-md-4">
							<h6>Image</h6>
							<div class="card-pelaporan p-3">
									<div class="drag-area">
										<div class="icon">
										<i class="fas fa-images"></i>
										</div>

										<span class="header">Drag & Drop</span>
										<span class="header">or <span class="button">browse</span></span>
										<input type="file" name="gambar" hidden />
										<!--<span class="support">Supports: JPEG, JPG, PNG</span> -->
									</div>
							</div>
						</div>
						<div class="col-md-4">
							<h6>Location</h6>
							<div class="card-pelaporan p-3">
								<div class="drag-area">
									<div class="icon">
									<i class="fa-solid fa-location-dot"></i>
									</div>

									<span class="header">Enter your location</span>
									<span class="header"><span id="open-location" class="button">here</span></span>
									<input type="hidden" class="form-control" />
									<div id="input-location" class="p-1"></div>
								</div>
								
							</div>
						</div>
						<div class="col-md-4">
							<h6>Description</h6>
							<div class="card-pelaporan p-3">
								<div class="description-area p-2">
									<textarea name="deskripsi" id="description" cols="30" rows="10" class="form-control" placeholder="type description here"></textarea>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		
	</div>
</section>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="<?= base_url()?>assets/js/draggable.js"></script>

<script>
    $(document).ready(function () {
        $('#description').on('keydown', function (e) {
            // Check if "Control + Enter" or "Command + Enter" is pressed
            if ((e.ctrlKey || e.metaKey) && e.keyCode === 13) {
                // Submit the form
                $('#myForm').submit();
            }
        });
		
		$("#open-location").click(() => {
	
			var input = `<input type="text" name="lokasi" class="form-control input-sm" />`
			
			$("#input-location").append(input)
		})
    });
</script>
