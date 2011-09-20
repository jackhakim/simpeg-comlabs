<?php
	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the DataRiwayatKerja class.  It uses the code-generated
	 * DataRiwayatKerjaDataGrid control which has meta-methods to help with
	 * easily creating/defining DataRiwayatKerja columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both data_riwayat_kerja_list.php AND
	 * data_riwayat_kerja_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My QCubed Application
	 * @subpackage FormBaseObjects
	 */
	abstract class DataRiwayatKerjaListFormBase extends QForm {
		// Local instance of the Meta DataGrid to list DataRiwayatKerjas
		/**
		 * @var DataRiwayatKerjaDataGrid dtgDataRiwayatKerjas
		 */
		protected $dtgDataRiwayatKerjas;

		// Create QForm Event Handlers as Needed

//		protected function Form_Exit() {}
//		protected function Form_Load() {}
//		protected function Form_PreRender() {}
//		protected function Form_Validate() {}

		protected function Form_Run() {
			parent::Form_Run();
		}

		protected function Form_Create() {
			parent::Form_Create();

			// Instantiate the Meta DataGrid
			$this->dtgDataRiwayatKerjas = new DataRiwayatKerjaDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgDataRiwayatKerjas->CssClass = 'datagrid';
			$this->dtgDataRiwayatKerjas->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgDataRiwayatKerjas->Paginator = new QPaginator($this->dtgDataRiwayatKerjas);
			$this->dtgDataRiwayatKerjas->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/data_riwayat_kerja_edit.php';
			$this->dtgDataRiwayatKerjas->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for data_riwayat_kerja's properties, or you
			// can traverse down QQN::data_riwayat_kerja() to display fields that are down the hierarchy)
			$this->dtgDataRiwayatKerjas->MetaAddColumn(QQN::DataRiwayatKerja()->NipObject);
			$this->dtgDataRiwayatKerjas->MetaAddColumn('NoSk');
			$this->dtgDataRiwayatKerjas->MetaAddColumn('JenisSk');
			$this->dtgDataRiwayatKerjas->MetaAddColumn('TglKeluar');
		}
	}
?>
