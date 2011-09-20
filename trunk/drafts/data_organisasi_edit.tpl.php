<?php
	// This is the HTML template include file (.tpl.php) for the data_organisasi_edit.php
	// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.

	// Be sure to move this out of the generated/ subdirectory before modifying to ensure that subsequent
	// code re-generations do not overwrite your changes.

	$strPageTitle = QApplication::Translate('DataOrganisasi') . ' - ' . $this->mctDataOrganisasi->TitleVerb;
	require(__CONFIGURATION__ . '/header.inc.php');
?>

	<?php $this->RenderBegin() ?>

	<div id="titleBar">
		<h2><?php _p($this->mctDataOrganisasi->TitleVerb); ?></h2>
		<h1><?php _t('DataOrganisasi')?></h1>
	</div>

	<div id="formControls">
		<?php $this->lstNipObject->RenderWithName(); ?>

		<?php $this->txtNamaOrg->RenderWithName(); ?>

		<?php $this->txtJenis->RenderWithName(); ?>

		<?php $this->txtAlamat->RenderWithName(); ?>

		<?php $this->txtThnMasuk->RenderWithName(); ?>

		<?php $this->txtThnKeluar->RenderWithName(); ?>

		<?php $this->txtHonor->RenderWithName(); ?>

		<?php $this->txtJabatan->RenderWithName(); ?>

	</div>

	<div id="formActions">
		<div id="save"><?php $this->btnSave->Render(); ?></div>
		<div id="cancel"><?php $this->btnCancel->Render(); ?></div>
		<div id="delete"><?php $this->btnDelete->Render(); ?></div>
	</div>

	<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>