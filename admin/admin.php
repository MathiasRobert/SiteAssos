<?php
include('includes/start.php');
?>
<!doctype html>
<html lang="fr">
<head>
	<?php include('includes/head.php'); ?>
</head>

<body>

	<div class="wrapper">

		<?php include('includes/sidebar.php'); ?>

		<div class="main-panel">

			<?php include('includes/nav.php'); ?>

			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-8">
							<div class="card">
								<div class="card-header" data-background-color="purple">
									<h4 class="title">Les informations de l'association</h4>
								</div>
								<div class="card-content">
									<form action="requetes/majInfosAsso.php" method="POST" enctype="multipart/form-data">
										<div class="row">
											<div class="col-md-12">
												<div class="picture-container">
													<div class="picture">
														<img src="../<?php if(isset($infosAsso->asso_logo)) echo $infosAsso->asso_logo; else echo 'images/default-avatar.png'; ?>" class="picture-src" id="wizardPicturePreview" title="">
														<input name="logo" type="file" id="wizard-picture">
													</div>
													<h6>Logo</h6>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-8">
												<div class="form-group label-floating">
													<label class="control-label">Nom</label>
													<input type="text" class="form-control" value="<?php if(isset($infosAsso->asso_nom)) echo $infosAsso->asso_nom; ?>" disabled>
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group label-floating">
													<label class="control-label">Diminutif</label>
													<input name="diminutif" type="text" class="form-control" value="<?php if(isset($infosAsso->asso_diminutif)) echo $infosAsso->asso_diminutif; ?>">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">Email</label>
													<input type="email" class="form-control" value="<?php if(isset($infosAsso->asso_mail)) echo $infosAsso->asso_mail; ?>" disabled>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="input-group">
													<span class="input-group-addon">
													<i class="material-icons">colorize</i> Couleur
													</span>
													<input name="couleur" type="color" class="form-control" value="<?php if(isset($infosAsso->asso_couleur)) echo $infosAsso->asso_couleur; ?>">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<div class="form-group label-floating">
														<label class="control-label">Description courte (250 lettres max)</label>
														<textarea name="descCourte" class="form-control" rows="3"><?php if(isset($infosAsso->asso_description_court)) echo $infosAsso->asso_description_court; ?></textarea>
													</div>
													<div class="form-group label-floating">
														<label class="control-label">Description longue (2000 lettres max)</label>
														<textarea name="descLongue" class="form-control" rows="10"><?php if(isset($infosAsso->asso_description_long)) echo $infosAsso->asso_description_long; ?></textarea>
													</div>
												</div>
											</div>
										</div>

										<button type="submit" class="btn btn-primary pull-right">Mettre à jour</button>
										<div class="clearfix"></div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<?php include('includes/footer.php'); ?>

		</div>
	</div>

</body>

<!--   Core JS Files   -->
<script src="../lib/jquery/jquery.min.js" type="text/javascript"></script>
<script src="../lib/jquery/jquery.validate.min.js" type="text/javascript"></script>
<script src="../lib/jquery/additional-methods.min.js" type="text/javascript"></script>
<script src="../lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../lib/material-dashboard/js/material.min.js" type="text/javascript"></script>

<script src="../lib/full-calendar/js/moment.min.js" type="text/javascript"></script>
<script src="js/select.js" type="text/javascript"></script>
<script src="js/date-picker.js" type="text/javascript"></script>
<script src="js/admin.js" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="../lib/material-dashboard/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="../lib/material-dashboard/js/bootstrap-notify.js"></script>

<!-- Material Dashboard javascript methods -->
<script src="../lib/material-dashboard/js/material-dashboard.js"></script>


</html>
