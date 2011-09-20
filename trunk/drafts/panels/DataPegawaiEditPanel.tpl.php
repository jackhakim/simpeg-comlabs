<?php
	// This is the HTML template include file (.tpl.php) for data_pegawaiEditPanel.
	// Remember that this is a DRAFT.  It is MEANT to be altered/modified.
	// Be sure to move this out of the drafts/dashboard subdirectory before modifying to ensure that subsequent
	// code re-generations do not overwrite your changes.
?>
	<div id="formControls">
		<?php $_CONTROL->txtNip->RenderWithName(); ?>

		<?php $_CONTROL->txtNama->RenderWithName(); ?>

		<?php $_CONTROL->calTglAngkatCapeg->RenderWithName(); ?>

		<?php $_CONTROL->calTglAngkatPeg->RenderWithName(); ?>

		<?php $_CONTROL->calTglMenjabat->RenderWithName(); ?>

		<?php $_CONTROL->txtStatus->RenderWithName(); ?>

		<?php $_CONTROL->txtGolongan->RenderWithName(); ?>

		<?php $_CONTROL->lstDataAnak->RenderWithName(); ?>

		<?php $_CONTROL->lstDataDevMandiri->RenderWithName(); ?>

		<?php $_CONTROL->lstDataDiklat->RenderWithName(); ?>

		<?php $_CONTROL->lstDataOrganisasi->RenderWithName(); ?>

		<?php $_CONTROL->lstDataPasangan->RenderWithName(); ?>

		<?php $_CONTROL->lstDataPendidikan->RenderWithName(); ?>

		<?php $_CONTROL->lstDataPengalaman->RenderWithName(); ?>

		<?php $_CONTROL->lstDataPengalamanKerja->RenderWithName(); ?>

		<?php $_CONTROL->lstDataPenghargaanEks->RenderWithName(); ?>

		<?php $_CONTROL->lstDataPenghargaanIn->RenderWithName(); ?>

		<?php $_CONTROL->lstDataPribadi->RenderWithName(); ?>

		<?php $_CONTROL->lstDataRiwayatKerja->RenderWithName(); ?>

		<?php $_CONTROL->lstDataSanksi->RenderWithName(); ?>

		<?php $_CONTROL->lstDataSkLain->RenderWithName(); ?>

	</div>

	<div id="formActions">
		<div id="save"><?php $_CONTROL->btnSave->Render(); ?></div>
		<div id="cancel"><?php $_CONTROL->btnCancel->Render(); ?></div>
		<div id="delete"><?php $_CONTROL->btnDelete->Render(); ?></div>
	</div>
