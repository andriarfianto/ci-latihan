<section class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<?php
                if(isset($_SESSION['hapus_sukses']) || isset($_SESSION['update_sukses'])) :
                $notif = '';
                isset($_SESSION['hapus_sukses']) ? $notif .= $_SESSION['hapus_sukses'] : '';
                isset($_SESSION['update_sukses']) ? $notif .= $_SESSION['update_sukses'] : '';
            ?>
			<div class="alert alert-success">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				<strong>Sukses!</strong>
				<?php echo $notif; ?>
			</div>
			<?php
                endif;
            ?>

			<div class="panel panel-primary">
				<div class="panel-heading">Data Mobil</div>
				<div class="panel-body">
					<div class="col-md-12" style="padding-bottom: 15px;">
						<a href="<?php echo base_url('mobil/formtambah'); ?>">
							<button type="button" class="btn btn-primary">
								<span class="glyphicon glyphicon-plus"></span> Tambah Data
							</button>
						</a>
					</div>

					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>#</th>
										<th>Kode Mobil</th>
										<th>Jenis</th>
										<th>Tahun</th>
										<th>Harga</th>
										<th>No. Polisi</th>
										<th>Opsi</th>
									</tr>
								</thead>

								<tbody>
									<?php 
                                        $no=1;
                                        foreach($mobils as $mobil) : ?>
									<tr>
										<td>
											<?php echo $no; ?>
										</td>
										<td>
											<?php echo $mobil->kdmobil; ?>
										</td>
										<td>
											<?php echo $mobil->jenis; ?>
										</td>
										<td>
											<?php echo $mobil->tahun; ?>
										</td>
										<td>
											<?php echo $mobil->harga; ?>
										</td>
										<td>
											<?php echo $mobil->nopol; ?>
										</td>
										<td>
											<a href="<?php echo base_url('mobil/formedit/'.$mobil->kdmobil); ?>">
												<button type="button" class="btn btn-default btn-xs">
													<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
												</button>
											</a>
											<a href="<?php echo base_url('mobil/hapusdata/'.$mobil->kdmobil); ?>" onclick="return confirm('Anda yakin akan menghapus')">
												<button type="button" class="btn btn-danger btn-xs">
													<span class="glyphicon glyphicon-remove"></span>
												</button>
											</a>
										</td>
									</tr>
									<?php 
                                        $no++;
                                        endforeach; 
                                    ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>