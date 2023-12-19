<div class="container-fluid gradient-custom5 custom-height d-flex align-items-center px-5">
	<div class="col py-3 px-5 bg-light rounded-4">
		<h4 class="text-center mb-4">Jadwal Bimbingan</h4>
		<table class="table table-striped table-hover table-bordered">
			<thead class="table-dark">
				<tr>
					<th class="col text-center">
						No
					</th>
					<th class="col-lg-3 text-center">
						Ruangan
					</th>
					<th class="col-lg-2 text-center">
						Waktu
					</th>
					<th class="col-lg-2 text-center">
						Tanggal
					</th>
					<th class="col-lg-2 text-center">
						Status
					</th>
					<th class="col-lg-3 text-center"></th>
				</tr>
			</thead>
			<tbody>
				<?php $no = 0;
				foreach ($jadwal as $j) { ?>
					<tr>
						<th class="text-center">
							<?= ++$no; ?>
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
							<?= $j->status ?>
						</th>
						<th class="d-flex justify-content-center">
							<?php if ($j->status != 'Done') { ?>
								<button type="button" class="btn bg-dark text-white" data-bs-toggle="modal"
									data-bs-target="#updateModal<?= $j->id_jadwal ?>">Selesai</button>
							<?php } else { ?>
								<?= $j->hasil ?>
							<?php } ?>
						</th>
					</tr>
					<div class="modal hide fade" id="updateModal<?= $j->id_jadwal ?>" tabindex="-1">
						<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content">
								<div class="modal-body">
									<h5 class="text-center">Tulis hasil bimbingan hari ini</h5>
									<form action="<?= base_url('user/update_jadwal_bimbingan'); ?>" method="post">
										<input type="hidden" name="id" value="<?= $j->id_jadwal ?>">
										<div class="mb-3">
											<label for="hasil" class="form-label">Hasil bimbingan hari ini :</label>
											<textarea name="hasil" id="hasil" class="form-control" cols="30"
												rows="10"></textarea>
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
