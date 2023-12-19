<?php if ($this->session->flashdata('succes')) { ?>
	<div class="alert alert-success alert-dismissible fade show mx-lg-5" role="alert">
		<strong>
			<?= $this->session->flashdata('succes'); ?>
		</strong>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>
<?php } ?>
<div class="container-fluid h-100 gradient-custom4 custom-height">
	<div class="row">
		<div class="col-lg-7 d-flex align-items-center justify-content-end px-xl-5">
			<div class="row px-xl-5">
				<h2 class="text-center bebasNeue">WELCOME TO POLMAN TA
					<?= $nama ?>
				</h2>
				<p class="fs-4 bebasNeue" style="text-align:justify;">POLMAN TA adalah sebuah portal inovatif yang
					dibuat khusus untuk membantu
					mahasiswa POLMAN merancang alur tugas akhir dengan lebih mudah dan efisien. Dengan antarmuka
					yang intuitif dan fitur canggih, website ini memberikan panduan langkah demi langkah, membantu
					mahasiswa merencanakan dan mengorganisir setiap tahap proyek akhir mereka. POLMAN TA bukan hanya
					sekadar penyedia petunjuk, tetapi juga menjadi teman setia bagi mahasiswa, memandu mereka
					melalui kompleksitas tugas akhir dengan sederhana dan efektif, sehingga mereka dapat fokus
					mencapai prestasi akademis tertinggi.</p>
			</div>
		</div>
		<div class="col-lg-5 d-flex justify-content-end">
			<img src="<?= base_url('/assets/img/user/dashboard.png'); ?>" alt="">
		</div>
	</div>
</div>
<section class="container-fluid px-5 py-5 gradient-custom3" id="timeline">
	<h3 class="text-center pb-3 text-white text-uppercase">Timeline Pengerjaan Tugas Akhir</h3>
	<div class="main-timeline-2">
		<div class="timeline-2 left-2">
			<div class="card">
				<img src="<?php echo base_url('/assets/img/user/time_line.jpg'); ?>" class="card-img-top"
					alt="Responsive image">
				<div class="card-body p-4">
					<h4 class="fw-bold mb-4">Pemilihan Topik</h4>
					<p class="text-muted mb-4"><i class="far fa-clock" aria-hidden="true"></i> Step 1</p>
					<p class="mb-0" style="text-align:justify;">Pada tahap awal mahasiswa akan di berikan pilihan
						untuk memilih topik yang akan
						di gunakan pada tugas akhir secara mandiri atau mengambil dari saran dosen pembimbing masing
						- masing, hal tersebut dapat dilakukan oleh mahasiswa dengan bebas</p>
					<?php if ($topik > 0) { ?>
						<p class="btn btn-success mt-3 px-4">Done</p>
					<?php } else { ?>
						<a href="<?= base_url('user/pilih_topik'); ?>" class="btn btn-primary mt-3">Pilih Topik</a>
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="timeline-2 right-2">
			<div class="card">
				<img src="<?php echo base_url('/assets/img/user/time_line.jpg'); ?>" class="card-img-top"
					alt="Responsive image">
				<div class="card-body p-4">
					<h4 class="fw-bold mb-4">Pembuatan Proposal</h4>
					<p class="text-muted mb-4"><i class="far fa-clock" aria-hidden="true"></i>Step 2</p>
					<p class="mb-0" style="text-align:justify;">Pada tahap ini setalah mahasiswa menentukan topik
						apa yang akan di jadikan
						sebagai bahan tugas akhir maka mahasiswa harus membuat proposal mengenai projek yang akan di
						buat atau akan di bahas untuk memenuhi tugas akhir, dan akan di nilai setelah berhasil
						membuatnya jika dinyatakan layak maka akan lanjut ke tahap selanjutnya namun jika masih
						terdapat atau harus di revisi maka mahasiswa wajib memperbaiki dan mengumpulkan kembali
						hasil proposal yang telah di buat</p>
					<?php if (!empty($proposal['status']) && $proposal['status'] == 'Sedang di proses') { ?>
						<span class="btn btn-warning mt-3">On Going</span>
					<?php } else if (!empty($proposal['status']) && $proposal['status'] == 'Revisi') { ?>
							<a href="<?= base_url('user/proposal'); ?>" class="btn btn-danger mt-3">Kumpulkan
								Revisi</a>
					<?php } else if (!empty($proposal['status']) && $proposal['status'] == 'Selesai') { ?>
								<span class="btn btn-success mt-3">Done</span>
					<?php } else { ?>
								<a href="<?= base_url('user/proposal'); ?>" class="btn btn-primary mt-3">
									Kumpulkan Proposal</a>
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="timeline-2 left-2">
			<div class="card">
				<img src="<?php echo base_url('/assets/img/user/time_line.jpg'); ?>" class="card-img-top"
					alt="Responsive image">
				<div class="card-body p-4">
					<h4 class="fw-bold mb-4">Melakukan Bimbingan</h4>
					<p class="text-muted mb-4"><i class="far fa-clock" aria-hidden="true"></i>Step 3</p>
					<p class="mb-0" style="text-align:justify;">Pada tahap ini sebenarnya mahasiswa dapat
						melakukannya saat sedan membuat
						proposal untuk mendapat arahan atau informasi yang benar dari dosen pembimbing, agar bisa
						melewati tahap pembuatan prosal dengan baik dan bisa membuat tugas akhir menjadi lebih mudah
						lagi, bimbingan ini biasanya memiliki jadwal masing - masing dari setiap dosen pembimbing
						yang bersangkutan.</p>
					<a href="<?= base_url('user/jadwal_bimbingan'); ?>" class="btn btn-primary mt-3">Jadwal
						Bimbingan</a>
				</div>
			</div>
		</div>
		<div class="timeline-2 right-2">
			<div class="card">
				<img src="<?php echo base_url('/assets/img/user/time_line.jpg'); ?>" class="card-img-top"
					alt="Responsive image">
				<div class="card-body p-4">
					<h4 class="fw-bold mb-4">Melakukan Seminar</h4>
					<p class="text-muted mb-4"><i class="far fa-clock" aria-hidden="true"></i>Step 4</p>
					<p class="mb-0" style="text-align:justify;">Pada tahap ini mahasiswa melakukan seminar didepan
						kelas yang berisi beberapa
						teman - teman dari mahasiswa, dan ada dosen pembimbing yang akan memberikan penilai dari
						presentasi seminar yang telah di sampaikan oleh mahasiswa yang bersangkutan lalu akan ada
						sesi tanya jawab dan akan ada pemberian saran dan masukan dari teman - teman maupun dosen
						agar kedepannya bisa lebih baik.</p>
					<a href="<?= base_url('user/jadwal_seminar'); ?>" class="btn btn-primary mt-3">Jadwal
						Seminar</a>
				</div>
			</div>
		</div>
		<div class="timeline-2 left-2">
			<div class="card">
				<img src="<?php echo base_url('/assets/img/user/time_line.jpg'); ?>" class="card-img-top"
					alt="Responsive image">
				<div class="card-body p-4">
					<h4 class="fw-bold mb-4">Melakukan Sidang</h4>
					<p class="text-muted mb-4"><i class="far fa-clock" aria-hidden="true"></i>Step 5</p>
					<p class="mb-0" style="text-align:justify;">Tahap akhir ini adalah sidang tugas akhir dimana
						mahasiswa akan mempresentasikan
						hasil penelitan dari alat yang telah di buat dalam bentuk power point yang akan di nilai
						oleh 3 dosen penilai dan 1 dosen pembimbing setelah melakukan presentasi maka dosen penilai
						akan mengajukan pertanyaan yang harus mahasiswa jawab agar bisa mendapat nilai yang baik dan
						berhasil lulus dari sidang tugas akhir, jika mahasiswa tidak memenuhi akreditasi nilau tugas
						akhir maka mahasiswa wajib melakukan sidang tugas akhir kembali agar bisa lulus dan
						mendapatkan gelar sarjana.</p>
					<a href="<?= base_url('user/jadwal_sidang'); ?>" class="btn btn-primary mt-3">Jadwal Sidang</a>
				</div>
			</div>
		</div>
	</div>
</section>
