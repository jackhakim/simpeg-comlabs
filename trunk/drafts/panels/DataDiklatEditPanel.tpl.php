<?php
	// This is the HTML template include file (.tpl.php) for data_diklatEditPanel.
	// Remember that this is a DRAFT.  It is MEANT to be altered/modified.
	// Be sure to move this out of the drafts/dashboard subdirectory before modifying to ensure that subsequent
	// code re-generations do not overwrite your changes.
?>
	<div id="formControls">
		<?php $_CONTROL->lstNipObject->RenderWithName(); ?>

		<?php $_CONTROL->txtNamaPelatihan->RenderWithName(); ?>

		<?php $_CONTROL->txtJenisPelatihan->RenderWithName(); ?>

		<?php $_CONTROL->calTglMulai->RenderWithName(); ?>

		<?php $_CONTROL->calTglSelesai->RenderWithName(); ?>

		<?php $_CONTROL->txtStatusLulus->RenderWithName(); ?>

		<?php $_CONTROL->txtPredikat->RenderWithName(); ?>

		<?php $_CONTROL->txtRangking->RenderWithName(); ?>

	</div>

	<div id="formActions">
		<div id="save"><?php $_CONTROL->btnSave->Render(); ?></div>
		<div id="cancel"><?php $_CONTROL->btnCancel->Render(); ?></div>
		<div id="delete"><?php $_CONTROL->btnDelete->Render(); ?></div>
	</div>
