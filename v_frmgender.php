	<div class="container">
		<div class="jumbotron">
			<form action="<?=site_url("c_gender/save4add");?>" method="post">
				<div class="row">
					<div class="col-sm-2"></div><div class="col-sm-10"><h3>Form Entri Kode Gender!</h3></div>
				</div>
				<div class="form-group row">
					<label for="rgender_kode" class="col-sm-2 col-form-label">Kode Gender</label>
					<div class="col-sm-1">
						<input type="text" name="rgender_kode" id="rgender_kode" value="<?=$rgender_kode;?>" class="form-control" />
					</div>
				</div>
				<div class="form-group row">
					<label for="rgender_nama" class="col-sm-2 col-form-label">Nama Gender</label>
					<div class="col-sm-3">
						<input type="text" name="rgender_nama" id="rgender_nama" value="<?=$rgender_nama;?>" class="form-control" />
					</div>
				</div>
				<div class="form-group row">
					<label for="btn_submit" class="col-sm-2 col-form-label"></label>
					<div class="col-sm-3">
					<button name="btn_submit" id="btn_submit" type="submit" value="Tambah" class="btn btn-secondary">Simpan</button>
					<button name="btn_reset"  id="btn_reset"  type="Reset"  value="Reset" class="btn btn-secondary">Reset</button>
					</div>
				</div>
			</form>
		</div>
	</div>
