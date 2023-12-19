<div class="container-fluid gradient-custom5 custom-height d-flex align-items-center px-5">
	<div class="col py-3 px-5 bg-light rounded-4">
		<?php if ($this->session->flashdata('succes')) { ?>
			<div class="alert alert-success alert-dismissible fade show mx-lg-5" role="alert">
				<strong>
					<?= $this->session->flashdata('succes'); ?>
				</strong>
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		<?php } ?>
		<?php if ($this->session->flashdata('error')) { ?>
			<div class="alert alert-danger alert-dismissible fade show mx-lg-5" role="alert">
				<strong>
					<?= $this->session->flashdata('error'); ?>
				</strong>
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		<?php } ?>
		<h4 class="text-center mb-4">Tabel Akun</h4>
		<table class="table table-striped table-hover table-bordered">
			<thead class="table-dark">
				<tr>
					<th class="col text-center">
						No
					</th>
					<th class="col text-center">
						Nama
					</th>
					<th class="col text-center">
						Username
					</th>
					<th class="col text-center">
						Password
					</th>
					<th class="col text-center">
						Tanggal Lahir
					</th>
					<th class="col text-center">
						Jurusan
					</th>
					<th class="col text-center">
						Prodi
					</th>
					<th class="col text-center">
						Kelas
					</th>
					<th class="col text-center">
						Jabatan
					</th>
					<th class="col text-center">
						Jobs
					</th>
					<th class="col text-center">
						Status
					</th>
					<th class="col text-center"></th>
				</tr>
			</thead>
			<tbody>
				<?php $no = $this->uri->segment('0');
				foreach ($akun as $j) { ?>
					<tr>
						<th class="text-center">
							<?= ++$no; ?>
						</th>
						<th class="text-center">
							<?= $j->nama ?>
						</th>
						<th class="text-center">
							<?= $j->username ?>
						</th>
						<th class="text-center">
							<?= $j->password ?>
						</th>
						<th class="text-center">
							<?= $j->tgl_lahir ?>
						</th>
						<th class="text-center">
							<?= $j->jurusan ?>
						</th>
						<th class="text-center">
							<?= $j->prodi ?>
						</th>
						<th class="text-center">
							<?= $j->kelas ?>
						</th>
						<th class="text-center">
							<?= $j->jabatan ?>
						</th>
						<th class="text-center">
							<?= $j->jobs ?>
						</th>
						<th class="text-center">
							<?= $j->status ?>
						</th>
						<th class="d-flex justify-content-center">
							<?php if (!empty($j->status) && $j->status === 'Non Aktif') { ?>
								<button type="button" class="btn bg-dark text-white mx-1" data-bs-toggle="modal"
									data-bs-target="#updateModal<?= $j->id_user ?>">Aktivasi</button>
								<button type="button" class="btn bg-dark text-white mx-1" data-bs-toggle="modal"
									data-bs-target="#deleteModal<?= $j->id_user ?>">Delete</button>
							<?php } else if (!empty($j->status) && $j->status === 'Teraktivasi') { ?>
									<button type="button" class="btn bg-dark text-white mx-1" data-bs-toggle="modal"
										data-bs-target="#updateModal<?= $j->id_user ?>">Edit</button>
									<button type="button" class="btn bg-dark text-white mx-1" data-bs-toggle="modal"
										data-bs-target="#deleteModal<?= $j->id_user ?>">Delete</button>
							<?php } ?>
						</th>
					</tr>
					<div class="modal hide fade" id="updateModal<?= $j->id_user ?>" tabindex="-1">
						<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content">
								<div class="modal-body">
									<h5 class="text-center">Aktivasi</h5>
									<form action="<?= base_url('admin/update_akun'); ?>" method="post">
										<input type="hidden" name="id" value="<?= $j->id_user ?>">
										<div class="mb-3">
											<label for="up_akun" class="form-label">Jabatan</label>
											<select name="up_akun" id="up_akun" class="form-select">
												<option value="">Pilih jenis jabatan</option>
												<option value="Mahasiswa">Mahasiswa</option>
												<option value="Dosen">Dosen</option>
												<option value="Panitia">Panitia</option>
											</select>
										</div>
										<div class="mb-3">
											<label for="jobs" class="form-label">Jobs</label>
											<select name="jobs" id="up_akun" class="form-select">
												<option value="">Pilih jenis jabatan</option>
												<option value="Penilai">Penilai</option>
												<option value="Scheduler">Scheduler</option>
												<option value="Dosen Pembimbing">Dosen Pembimbing</option>
												<option value="Mahasiswa">Mahasiswa</option>
											</select>
										</div>
										<div class="modal-footer">
											<button type="submit" class="btn bg-dark text-white">Ya</button>
											<button type="button" class="btn btn-warning"
												data-bs-dismiss="modal">Tidak</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="modal hide fade" id="deleteModal<?= $j->id_user ?>" tabindex="-1">
						<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content">
								<div class="modal-header">
									<h5>Aktivasi</h5>
									<button type="button" class="btn btn-close" data-bs-dismiss="modal"
										aria-label="close"></button>
								</div>
								<div class="modal-body">
									<form action="<?= base_url('admin/delete_akun'); ?>" method="post">
										<input type="hidden" name="id" value="<?= $j->id_user ?>">
										<div class="mb-3">
											<h5 class="text-center">Apakah anda yakin menghapus akun ini ?</h5>
										</div>
										<div class="modal-footer">
											<button type="submit" class="btn bg-dark text-white">Ya</button>
											<button type="button" class="btn btn-warning"
												data-bs-dismiss="modal">Tidak</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
			</tbody>
		</table>
		<p>
			<?= $link_page; ?>
		</p>
	</div>
</div>
