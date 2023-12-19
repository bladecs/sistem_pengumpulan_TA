<div class="container-fluid gradient-custom5 custom-height">
	<div class="d-flex align-items-center justify-content-center">
		<div class="row justify-content-center px-3 py-5">
			<div class="col-lg-6 bg-light px-4 py-4 rounded-4">
				<?php if($this->session->flashdata('error')) { ?>
					<div class="alert alert-danger alert-dismissible fade show mx-lg-5" role="alert">
						<strong>
							<?= $this->session->flashdata('error'); ?>
						</strong>
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
				<?php } ?>
				<h4 class="text-center mb-3">Form Pengumpulan Proposal</h4>
				<form action="<?=base_url('user/upload_proposal');?>" method="post" enctype="multipart/form-data">
					<div class="mb-3">
						<label for="nama" class="form-label">Nama</label>
						<input type="text" name="nama" value="<?= $topik['nama_mhs'] ?>" class="form-control" readonly>
					</div>
					<div class="mb-3">
						<label for="nim" class="form-label">NIM</label>
						<input type="text" name="nim" value="<?= $topik['nim'] ?>" class="form-control" readonly>
					</div>
					<div class="mb-3">
						<label for="dosen" class="form-label">Dosen Pembimbing</label>
						<input type="text" name="dosen" value="<?= $dosen['nama_pengusul'] ?>" class="form-control"
							readonly>
					</div>
					<div class="mb-3">
						<label for="jdl_topik" class="form-label">Judul Topik</label>
						<input type="text" name="jdl_topik" value="<?= $topik['topik_pilih'] ?>" class="form-control"
							readonly>
					</div>
					<div class="mb-3">
						<label for="file_proposal" class="form-label">File Proposal</label>
						<p class="form-label fs-6 fw-light">file berupa pdf/word</p>
						<input type="file" name="file_proposal" class="form-control" size="2048">
					</div>
					<div class="mb-3 d-flex justify-content-end">
						<button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#confirModal">
							Submit
						</button>
					</div>
					<div class="modal fade" id="confirModal" tabindex="-1" aria-labelledby="confirModalLabel"
						aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content">
								<div class="modal-header">
									<h1 class="modal-title fs-5" id="confirModalLabel">Confirmasi</h1>
									<button type="button" class="btn-close" data-bs-dismiss="modal"
										aria-label="Close"></button>
								</div>
								<div class="modal-body">
									<h5 class="text-center">Apa data yang anda masukan sudah benar ?</h5>
								</div>
								<div class="modal-footer">
									<button type="submit" class="btn btn-dark text-white">Ya</button>
									<button type="button" class="btn btn-warning" data-bs-dismiss="modal">Tidak</button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="col-lg-5 bg-light mx-2 py-2 rounded-4">
				<div class="col py-3 px-3 mb-3 d-flex justify-content-center">
					<div class="row justify-content-center">
						<h4 class="text-center mb-3">Sisa Waktu Pengumpulan</h4>
						<div class="card mx-2" style="width:6rem;">
							<div class="card-body">
								<div class="card-text text-center">
									Hour
								</div>
							</div>
						</div>
						<div class="card mx-2" style="width:6rem;">
							<div class="card-body">
								<div class="card-text text-center">
									Minute
								</div>
							</div>
						</div>
						<div class="card mx-2" style="width:6rem;">
							<div class="card-body">
								<div class="card-text text-center">
									Second
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col py-3">
					<div class="row justify-content-center">
						<div class="col-6">
							<div class="mb-3">
								<label for="penilai1" class="form-label">Penilai 1</label>
								<input type="text" name="penilai1" class="form-control" value="" readonly>
							</div>
							<div class="mb-3">
								<label for="penilai2" class="form-label">Penilai 2</label>
								<input type="text" name="penilai2" class="form-control" value="" readonly>
							</div>
							<div class="mb-3">
								<label for="penilai3" class="form-label">Penilai 3</label>
								<input type="text" name="penilai3" class="form-control" value="" readonly>
							</div>
						</div>
						<div class="col-5 d-flex align-items-center">
							<div class="row d-flex justify-content-center">
								<div class="card mb-3" style="width:10rem; height:10rem;">
									<div class="card-body">
										<h5 class="card-text text-center">Akreditasi</h5>
									</div>
								</div>
								<div class="mb-3">
									<input type="text" class="form-control" value="" readonly>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
