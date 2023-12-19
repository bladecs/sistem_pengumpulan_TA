<div class="container-fluid gradient-custom5 custom-height">
	<div class="row justify-content-center py-5">
		<div class="col-5 bg-light mx-3 py-5 px-5 rounded-4">
			<h4 class="text-center">Data Diri</h4>
			<form action="<?= base_url('user/insert_topik'); ?>" method="post">
				<input type="hidden" name="id" id="id" value="<?= $user['id_user'] ?>">
				<div class="mb-3">
					<label for="nama" class="form-label">Nama Mahasiswa</label>
					<input type="text" class="form-control" name="nama" id="nama" value="<?= $user['nama'] ?>" readonly>
				</div>
				<div class="mb-3">
					<label for="nim" class="form-label">NIM</label>
					<input type="text" class="form-control" name="nim" id="nim" value="<?= $user['username'] ?>"
						readonly>
				</div>
				<div class="mb-3">
					<label for="jurusan" class="form-label">Jurusan</label>
					<input type="text" class="form-control" name="jurusan" value="<?= $user['jurusan'] ?>" readonly>
				</div>
				<div class="mb-3">
					<label for="prodi" class="form-label">Prodi</label>
					<input type="text" class="form-control" name="prodi" value="<?= $user['prodi'] ?>" readonly>
				</div>
				<div class="mb-3">
					<label for="kelas" class="form-label">Kelas</label>
					<input type="text" class="form-control" name="kelas" value="<?= $user['kelas'] ?>" readonly>
				</div>
				<div class="mb-3">
					<label for="topik" class="form-label">Pilih Topik</label>
					<select name="topik" id="topik" class="form-select" required>
						<option value="">Pilih topik yang akan digunakan</option>
						<?php foreach($topik as $t) { ?>
							<option value="<?= $t->judul_topik ?>">
								<?= $t->judul_topik ?>
							</option>
						<?php } ?>
					</select>
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
		<div class="col-6 bg-light px-3 py-5 h-75 rounded-4">
			<h4 class="text-center">List Topik</h4>
			<div class="col bg-light text-black mb-3">
				<table class="table table-striped table-hover">
					<thead class="table-dark">
						<tr>
							<th class="text-center">
								No
							</th>
							<th class="text-center">
								Topik
							</th>
							<th class="text-center">
								Dosen
							</th>
						</tr>
					</thead>
					<?php $no = $this->uri->segment('0');
					foreach($page as $t) { ?>
						<tbody>
							<tr>
								<td class="text-center">
									<?= ++$no; ?>
								</td>
								<td class="text-center">
									<?= $t->judul_topik ?>
								</td>
								<td class="text-center">
									<?= $t->nama_pengusul ?>
								</td>
							</tr>
						</tbody>
					<?php } ?>
				</table>
				<p>
					<?php echo $link_page; ?>
				</p>
			</div>
		</div>
	</div>
</div>
