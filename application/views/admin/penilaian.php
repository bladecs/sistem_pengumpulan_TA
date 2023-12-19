<div class="container-fluid gradient-custom5 custom-height py-5">
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
	<div class="col d-flex align-items-center">
		<div class="row py-5">
			<div class="col py-3 px-2 mx-2 bg-light rounded-4">
				<h4 class="text-center mb-4">Data Proposal</h4>
				<table class="table table-striped table-hover table-bordered">
					<thead class="table-dark">
						<tr>
							<th class="col text-center">
								No
							</th>
							<th class="col-lg-3 text-center">
								Mahasiswa
							</th>
							<th class="col-lg-2 text-center">
								Dosen Pembimbing
							</th>
							<th class="col-lg-2 text-center">
								Tanggal
							</th>
							<th class="col-lg-2 text-center">
								File Proposal
							</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php $no = $this->uri->segment('0');
						foreach ($proposal as $j) { ?>
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
									<?= $j->tgl_penyerahan ?>
								</th>
								<th class="text-center">
									<a href="<?= base_url() . 'assets/uploads/' . $j->file_proposal ?>">
										<?= $j->file_proposal ?>
									</a>
								</th>
								<th class="text-center">
									<?php if ($j->nilai > 0) { ?>
										<button type="button" class="btn btn-success text-white">Selesai</button>
									<?php } else { ?>
										<button type="button" class="btn bg-dark text-white" data-bs-toggle="modal"
											data-bs-target="#nilaiProposalModal<?= $j->id_proposal ?>">Nilai</button>
									<?php } ?>
								</th>
							</tr>
							<?php if ($this->session->userdata('jobs') === 'Penilai') { ?>
								<div class="modal hide fade" id="nilaiProposalModal<?= $j->id_proposal ?>" tabindex="-1">
									<div class="modal-dialog modal-dialog-centered">
										<div class="modal-content">
											<div class="modal-body">
												<h5 class="text-center">Masukan Penilaian</h5>
												<form action="<?= base_url('admin/nilai_proposal'); ?>" method="post">
													<input type="hidden" name="id" value="<?= $j->id_proposal ?>">
													<input type="hidden" name="nama" value="<?= $j->nama_mhs ?>">
													<input type="hidden" name="nama_dosen" value="<?= $j->nama_dosen ?>">
													<input type="hidden" name="proposal" value="<?= $j->file_proposal ?>">
													<div class="mb-3">
														<div class="mb-3">
															<label for="penilai" class="form-label">Nama Penilai</label>
															<input type="text" name="penilai" class="form-control"
																value="<?= $nama ?>">
														</div>
														<div class="mb-3">
															<label for="nilai" class="form-label">Nilai yang di berikan</label>
															<input type="number" name="nilai" id="nilai" class="form-control"
																placeholder="Input Nilai Yang Diberikan">
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
							<?php } ?>
						<?php } ?>
					</tbody>
				</table>
				<p>
					<?= $link_page_proposal; ?>
				</p>
			</div>
			<div class="col py-3 px-2 mx-2 bg-light rounded-4">
				<h4 class="text-center mb-4">Data Seminar</h4>
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
									<?php if ($j->nilai > 0) { ?>
										<button type="button" class="btn btn-success text-white">Selesai</button>
									<?php } else { ?>
										<button type="button" class="btn bg-dark text-white" data-bs-toggle="modal"
											data-bs-target="#nilaiSeminarModal<?= $j->id_seminar ?>">Nilai</button>
									<?php } ?>
								</th>
							</tr>
							<?php if ($this->session->userdata('jobs') === 'Penilai') { ?>
								<div class="modal hide fade" id="nilaiSeminarModal<?= $j->id_seminar ?>" tabindex="-1">
									<div class="modal-dialog modal-dialog-centered">
										<div class="modal-content">
											<div class="modal-body">
												<h5 class="text-center">Masukan Penilaian</h5>
												<form action="<?= base_url('admin/nilai_seminar'); ?>" method="post">
													<input type="hidden" name="id" value="<?= $j->id_seminar ?>">
													<input type="hidden" name="nama" value="<?= $j->nama_mhs ?>">
													<input type="hidden" name="nama_dosen" value="<?= $j->nama_dosen ?>">
													<input type="hidden" name="proposal" value="<?= $j->topik ?>">
													<div class="mb-3">
														<div class="mb-3">
															<label for="penilai" class="form-label">Nama Penilai</label>
															<input type="text" name="penilai" class="form-control"
																value="<?= $nama ?>">
														</div>
														<div class="mb-3">
															<label for="nilai" class="form-label">Nilai yang di berikan</label>
															<input type="number" name="nilai" id="nilai" class="form-control"
																placeholder="Input Nilai Yang Diberikan">
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
							<?php } ?>
						<?php } ?>
					</tbody>
				</table>
			</div>
			<div class="col py-3 px-2 mx-2 bg-light rounded-4">
				<h4 class="text-center mb-4">Data Sidang</h4>
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
							<th class="col text-center"></th>
						</tr>
					</thead>
					<tbody>
						<?php $no = $this->uri->segment('0');
						foreach ($sidang as $j) { ?>
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
									<?php if ($j->nilai > 0) { ?>
										<button type="button" class="btn btn-success text-white">Selesai</button>
									<?php } else { ?>
										<button type="button" class="btn bg-dark text-white" data-bs-toggle="modal"
											data-bs-target="#nilaiSidangModal<?= $j->id_sidang ?>">Nilai</button>
									<?php } ?>
								</th>
							</tr>
							<?php if ($this->session->userdata('jobs') === 'Penilai') { ?>
								<div class="modal hide fade" id="nilaiSidangModal<?= $j->id_sidang ?>" tabindex="-1">
									<div class="modal-dialog modal-dialog-centered">
										<div class="modal-content">
											<div class="modal-body">
												<h5 class="text-center">Masukan Penilaian</h5>
												<form action="<?= base_url('admin/nilai_sidang'); ?>" method="post">
													<input type="hidden" name="id" value="<?= $j->id_sidang ?>">
													<input type="hidden" name="nama" value="<?= $j->nama_mhs ?>">
													<input type="hidden" name="nama_dosen" value="<?= $j->nama_dosen ?>">
													<input type="hidden" name="proposal" value="<?= $j->topik ?>">
													<div class="mb-3">
														<div class="mb-3">
															<label for="penilai" class="form-label">Nama Penilai</label>
															<input type="text" name="penilai" class="form-control"
																value="<?= $nama ?>">
														</div>
														<div class="mb-3">
															<label for="nilai" class="form-label">Nilai yang di berikan</label>
															<input type="number" name="nilai" id="nilai" class="form-control"
																placeholder="Input Nilai Yang Diberikan">
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
							<?php } ?>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>
