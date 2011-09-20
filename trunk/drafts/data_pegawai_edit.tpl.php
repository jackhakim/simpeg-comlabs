<?php
	// This is the HTML template include file (.tpl.php) for the data_pegawai_edit.php
	// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.

	// Be sure to move this out of the generated/ subdirectory before modifying to ensure that subsequent
	// code re-generations do not overwrite your changes.

	$strPageTitle = QApplication::Translate('DataPegawai') . ' - ' . $this->mctDataPegawai->TitleVerb;
	require(__CONFIGURATION__ . '/header.inc.php');
?>

	<?php $this->RenderBegin() ?>

	<div id="titleBar">
		<h2><?php _p($this->mctDataPegawai->TitleVerb); ?></h2>
		<h1><?php _t('DataPegawai')?></h1>
	</div>

	<div id="formControls">
		<?php $this->txtNip->RenderWithName(); ?>

		<?php $this->txtNama->RenderWithName(); ?>

		<?php $this->calTglAngkatCapeg->RenderWithName(); ?>

		<?php $this->calTglAngkatPeg->RenderWithName(); ?>

		<?php $this->calTglMenjabat->RenderWithName(); ?>

		<?php $this->txtStatus->RenderWithName(); ?>

		<?php $this->txtGolongan->RenderWithName(); ?>

		<?php $this->lstDataAnak->RenderWithName(); ?>

		<?php $this->lstDataDevMandiri->RenderWithName(); ?>

		<?php $this->lstDataDiklat->RenderWithName(); ?>

		<?php $this->lstDataOrganisasi->RenderWithName(); ?>

		<?php $this->lstDataPasangan->RenderWithName(); ?>

		<?php $this->lstDataPendidikan->RenderWithName(); ?>

		<?php $this->lstDataPengalaman->RenderWithName(); ?>

		<?php $this->lstDataPengalamanKerja->RenderWithName(); ?>

		<?php $this->lstDataPenghargaanEks->RenderWithName(); ?>

		<?php $this->lstDataPenghargaanIn->RenderWithName(); ?>

		<?php $this->lstDataPribadi->RenderWithName(); ?>

		<?php $this->lstDataRiwayatKerja->RenderWithName(); ?>

		<?php $this->lstDataSanksi->RenderWithName(); ?>

		<?php $this->lstDataSkLain->RenderWithName(); ?>

	</div>

	<div id="formActions">
		<div id="save"><?php $this->btnSave->Render(); ?></div>
		<div id="cancel"><?php $this->btnCancel->Render(); ?></div>
		<div id="delete"><?php $this->btnDelete->Render(); ?></div>
	</div>

	<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>