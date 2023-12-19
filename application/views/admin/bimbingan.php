<div class="container-fluid gradient-custom5 custom-height d-flex align-items-center px-5">
	<div class="col py-3 px-5 bg-light rounded-4">
		<h4 class="text-center mb-4">Data Jadwal Bimbingan</h4>
		<table class="table table-striped table-hover table-bordered">
			<thead class="table-dark">
				<tr>
					<th class="col text-center">
						No
					</th>
					<th class="col text-center">
						Dosen Pembimbing
					</th>
					<th class="col text-center">
						Mahasiswa
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
						Hasil
					</th>
					<th class="col text-center">
						Status
					</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = $this->uri->segment('0');
				foreach ($bimbingan as $j) { ?>
					<tr>
						<th class="text-center">
							<?= ++$no; ?>
						</th>
						<th class="text-center">
							<?= $j->nama_dosen ?>
						</th>
						<th class="text-center">
							<?= $j->nama_mhs ?>
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
							<?= $j->hasil ?>
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
