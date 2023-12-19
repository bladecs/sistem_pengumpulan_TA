<div class="container-fluid gradient-custom5 custom-height d-flex align-items-center px-5">
	<div class="col py-3 px-5 bg-light rounded-4">
		<h4 class="text-center mb-4">Data Pengumpulan Proposal</h4>
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
					<th class="col-lg-2 text-center">
						Status
					</th>
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
							<?= $j->status ?>
						</th>
					</tr>
				<?php } ?>
			</tbody>
		</table>
		<p>
			<?= $link_page; ?>
		</p>
	</div>
</div>
