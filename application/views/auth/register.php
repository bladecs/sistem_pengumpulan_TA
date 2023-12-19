<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
	<style>
		.custom-height {
			height: 100vh;
		}

		.gradient-custom {
			background: #fccb90;
			background: -webkit-linear-gradient(135deg, #0F0F0F, #001C30, #0F0F0F);
			background: linear-gradient(135deg, #0F0F0F, #001C30, #0F0F0F);
		}

		.gradient-custom2 {
			background: #fccb90;
			background: -webkit-linear-gradient(135deg, #7A316F, #461959, #7A316F);
			background: linear-gradient(135deg, #7A316F, #461959, #7A316F);
		}
	</style>
</head>

<body>
	<div class="container-fluid d-flex justify-content-center align-items-center gradient-custom py-5 custom-height">
		<div class="col-lg-4 bg-light px-5 py-5 rounded-4">
			<form action="<?= base_url('auth/register'); ?>" method="post">
				<h4 class="text-center">WELCOME TO SISTEM TA POLMAN</h4>
				<h5 class="text-center">Silahkan Isi Data Diri Anda</h5>
				<div class="mb-3">
					<label for="nama" class="form-label">Nama</label>
					<input type="text" name="nama" class="form-control" placeholder="Input Nama Anda">
				</div>
				<div class="mb-3">
					<label for="username" class="form-label">Username</label>
					<input type="text" name="username" class="form-control" placeholder="Input NIM/NIP">
				</div>
				<div class="mb-3">
					<label for="password" class="form-label">Password</label>
					<input type="password" name="password" class="form-control">
				</div>
				<div class="mb-3">
					<label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
					<input type="date" name="tgl_lahir" class="form-control">
				</div>
				<div class="mb-3">
					<label for="jurusan" class="form-label">Jurusan</label>
					<select name="jurusan" id="jurusan" class="form-select" onchange="updateProdiOptions()">
						<option value="">Pilih Jurusan Anda</option>
						<option value="AE">Automation Enginering</option>
						<option value="ME">Manufacture Enginering</option>
						<option value="DE">Desain Enginering</option>
						<option value="FE">Foundry Enginering</option>
					</select>
				</div>
				<div class="mb-3">
					<label for="prodi" class="form-label"></label>
					<select name="prodi" id="prodi" class="form-select">
						<option value="">Pilih prodi anda</option>
					</select>
				</div>
				<div class="mb-3">
					<label for="kelas" class="form-label"></label>
					<input type="text" name="kelas" placeholder="Input kelas anda" class="form-control">
				</div>
				<div class="mb-3">
					<div class="row-cols-auto d-flex align-items-center flex-row-reverse">
						<div class="col-lg-6 d-flex flex-column-reverse">
							<button type="submit" class="btn btn-primary px-3">Register</button>
						</div>
						<div class="col-lg-6">
							<a href="<?= base_url('auth'); ?>" class="text-decoration-none">Sudah memiliki
								akun</a>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
	<script>
		function updateProdiOptions() {
			var jurusanSelect = document.getElementById("jurusan");
			var prodiSelect = document.getElementById("prodi");
			prodiSelect.innerHTML = "<option value='' default>Pilih prodi anda</option>";
			if (jurusanSelect.value === "AE") {
				var aeProdi = ["Mekatronika", "Otomasi Industri", "Informatika Indsutri"];
				aeProdi.forEach(function (socket) {
					var option = document.createElement("option");
					option.value = socket;
					option.text = socket;
					prodiSelect.add(option);
				});
			} else if (jurusanSelect.value === "ME") {
				var meProdi = ["Material Bisnis", "Maintenance Repair", "Teknik Mesin", "Perkakas Presisi"];
				meProdi.forEach(function (socket) {
					var option = document.createElement("option");
					option.value = socket;
					option.text = socket;
					prodiSelect.add(option);
				});
			}
			else if (jurusanSelect.value === "DE") {
				var deProdi = ["Plastic Molding", "Desain Presisi"];
				deProdi.forEach(function (socket) {
					var option = document.createElement("option");
					option.value = socket;
					option.text = socket;
					prodiSelect.add(option);
				});
			}
			else if (jurusanSelect.value === "FE") {
				var feProdi = ["Pengecoran Logam", "Material Maju"];
				feProdi.forEach(function (socket) {
					var option = document.createElement("option");
					option.value = socket;
					option.text = socket;
					prodiSelect.add(option);
				});
			}
		}
	</script>
</body>

</html>
