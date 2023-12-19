<div class="container-fluid gradient-custom5 custom-height py-5">
	<div class="col py-5">
		<div class="row justify-content-center bg-light mt-5 mx-5 py-4 rounded-4">
			<div class="col-lg-4 px-3 py-3 me-5">
				<div class="mb-3">
					<label for="judul" class="form-label">Topik</label>
					<input type="text" name="nama" class="form-control" value="<?= $seminar['topik'] ?>" readonly>
				</div>
				<div class="mb-3">
					<label for="nama_mhs" class="form-label">Nama Mahasiswa</label>
					<input type="text" name="nama_mhs" class="form-control" value="<?= $seminar['nama_mhs'] ?>"
						readonly>
				</div>
				<div class="mb-3">
					<label for="nama_dsn" class="form-label">Nama Dosen</label>
					<input type="text" name="nama_dsn" class="form-control" value="<?= $seminar['nama_dosen'] ?>"
						readonly>
				</div>
				<div class="mb-3">
					<label for="ruangan" class="form-label">Ruangan</label>
					<input type="text" name="ruangan" class="form-control" value="<?= $seminar['ruangan'] ?>" readonly>
				</div>
			</div>
			<div class="col-lg-7 py-3 bg-dark rounded-4">
				<h4 class="text-center text-white text-uppercase mb-3">Tanggal Pelaksanaan Sidang</h4>
				<div class="mb-3 px-5">
					<div class="row d-flex justify-content-center px-5">
						<div class="row justify-content-center mb-3 bg-light py-3 rounded-4">
							<div class="card me-2" style="width:7rem; height:8rem;">
								<div class="card-body d-flex align-items-center justify-content-center">
									<h1 class="card-text">
										<?= substr($seminar['waktu'], 0, 2); ?>
									</h1>
								</div>
							</div>
							<div class="col-1 d-flex align-items-center">
								<h1>:</h1>
							</div>
							<div class="card me-2" style="width:7rem; height:8rem;">
								<div class="card-body d-flex align-items-center justify-content-center">
									<h1 class="card-text">
										<?= substr($seminar['waktu'], 3, 2); ?>
									</h1>
								</div>
							</div>
							<div class="col-1 d-flex align-items-center">
								<h1>:</h1>
							</div>
							<div class="card me-3" style="width:7rem; height:8rem;">
								<div class="card-body d-flex align-items-center justify-content-center">
									<h1 class="card-text">
										<?= substr($seminar['waktu'], 6, 2); ?>
									</h1>
								</div>
							</div>
						</div>
						<div class="row justify-content-center mb-3 bg-light py-3 rounded-4">
							<div class="card me-2" style="width:7rem; height:8rem;">
								<div class="card-body d-flex align-items-center justify-content-center">
									<h1 class="card-text">
										<?= substr($seminar['tanggal'], 8, 2); ?>
									</h1>
								</div>
							</div>
							<div class="col-1 d-flex align-items-center">
								<h1>/</h1>
							</div>
							<div class="card me-2" style="width:7rem; height:8rem;">
								<div class="card-body d-flex align-items-center justify-content-center">
									<h1 class="card-text">
										<?= substr($seminar['tanggal'], 5, 2); ?>
									</h1>
								</div>
							</div>
							<div class="col-1 d-flex align-items-center">
								<h1>/</h1>
							</div>
							<div class="card me-3" style="width:7rem; height:8rem;">
								<div class="card-body d-flex align-items-center justify-content-center">
									<h1 class="card-text">
										<?= substr($seminar['tanggal'], 0, 4); ?>
									</h1>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
