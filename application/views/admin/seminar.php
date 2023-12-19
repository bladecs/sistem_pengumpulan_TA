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
		<h4 class="text-center mb-4">Jadwal Seminar</h4>
		<table class="table table-striped table-hover table-bordered">
			<thead class="table-dark">
				<tr>
					<th class="col text-center">
						No
					</th>
					<th class="col text-center">
						Mahasiswa
					</th>
					<th class="col text-center">
						Dosen Pembimbing
					</th>
					<th class="col text-center">
						Topik
					</th>
					<th class="col text-center">
						Ruangan
					</th>
					<th class="col text-center">
						Waktu
					</th>
					<th class="col text-center">
						Tanggal
					</th>
					<th class="col text-center">
						Nilai
					</th>
					<th class="col text-center">
						Status
					</th>
					<th class="col text-center"></th>
				</tr>
			</thead>
			<tbody>
				<?php $no = $this->uri->segment('0');
				foreach ($seminar as $j) { ?>
					<tr>
						<th class="text-center">
							<?= ++$no; ?>
						</th>
						<th class="text-center">
							<?= $j->nama_mhs ?>
						</th>
						<th class="text-center">
							<?= $j->nama_dosen ?>
						</th>
						<th class="text-center">
							<?= $j->topik ?>
						</th>
						<th class="text-center">
							<?= $j->ruangan ?>
						</th>
						<th class="text-center">
							<?= $j->waktu ?>
						</th>
						<th class="text-center">
							<?= $j->tanggal ?>
						</th>
						<th class="text-center">
							<?= $j->nilai ?>
						</th>
						<th class="text-center">
							<?= $j->status ?>
						</th>
						<th class="d-flex justify-content-center">
							<button type="button" class="btn bg-dark text-white mx-1"
								data-bs-target="#editModal<?= $j->id_seminar ?>" data-bs-toggle="modal">Edit</button>
							<button type="button" class="btn btn-warning text-white mx-1"
								data-bs-target="#deleteModal<?= $j->id_seminar ?>" data-bs-toggle="modal">Delete</button>
							<?php if (!empty($j->status) && $j->status != 'Telah Dilaksanakan') { ?>
								<button type="button" class="btn bg-danger text-white mx-1">Not Done</button>
							<?php } else { ?>
								<button type="button" class="btn bg-succes text-white mx-1">Done</button>
							<?php } ?>
						</th>
					</tr>
					<div class="modal hide fade" id="editModal<?= $j->id_seminar ?>" tabindex="-1">
						<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content">
								<div class="modal-body">
									<h5 class="text-center">Apa yang ingin anda ubah ?</h5>
									<form action="<?= base_url('admin/update_jadwal_seminar'); ?>" method="post">
										<input type="hidden" name="id" value="<?= $j->id_seminar ?>">
										<div class="mb-3">
											<div class="mb-3">
												<label for="ruangan" class="form-label">Ubah Ruangan Seminar</label>
												<input type="text" name="ruangan" class="form-control">
											</div>
											<div class="mb-3">
												<label for="waktu" class="form-label">Ubah Waktu Seminar</label>
												<input type="time" name="waktu" class="form-control">
											</div>
											<div class="mb-3">
												<label for="tanggal" class="form-label">Ubah Tanggal Seminar</label>
												<input type="date" name="tanggal" class="form-control">
											</div>
										</div>
										<div class="modal-footer">
											<button type="submit" class="btn bg-dark text-white">Update</button>
											<button type="button" class="btn btn-warning"
												data-bs-dismiss="modal">Close</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="modal hide fade" id="deleteModal<?= $j->id_seminar ?>" tabindex="-1">
						<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="btn btn-close" data-bs-dismiss="modal"
										aria-label="Close"></button>
								</div>
								<div class="modal-body">
									<form action="<?= base_url('user/delete_jadwal_seminar'); ?>" method="post">
										<input type="hidden" name="id" value="<?= $j->id_seminar ?>">
										<div class="mb-3">
											<h5 class="text-center">Apa anda yakin menghapus data ini ?</h5>
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
	</div>
</div>
