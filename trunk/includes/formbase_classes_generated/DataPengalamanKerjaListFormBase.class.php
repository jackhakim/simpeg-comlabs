<?php
	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the DataPengalamanKerja class.  It uses the code-generated
	 * DataPengalamanKerjaDataGrid control which has meta-methods to help with
	 * easily creating/defining DataPengalamanKerja columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both data_pengalaman_kerja_list.php AND
	 * data_pengalaman_kerja_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My QCubed Application
	 * @subpackage FormBaseObjects
	 */
	abstract class DataPengalamanKerjaListFormBase extends QForm {
		// Local instance of the Meta DataGrid to list DataPengalamanKerjas
		/**
		 * @var DataPengalamanKerjaDataGrid dtgDataPengalamanKerjas
		 */
		protected $dtgDataPengalamanKerjas;

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
			$this->dtgDataPengalamanKerjas = new DataPengalamanKerjaDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgDataPengalamanKerjas->CssClass = 'datagrid';
			$this->dtgDataPengalamanKerjas->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgDataPengalamanKerjas->Paginator = new QPaginator($this->dtgDataPengalamanKerjas);
			$this->dtgDataPengalamanKerjas->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/data_pengalaman_kerja_edit.php';
			$this->dtgDataPengalamanKerjas->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for data_pengalaman_kerja's properties, or you
			// can traverse down QQN::data_pengalaman_kerja() to display fields that are down the hierarchy)
			$this->dtgDataPengalamanKerjas->MetaAddColumn(QQN::DataPengalamanKerja()->NipObject);
			$this->dtgDataPengalamanKerjas->MetaAddColumn('TempatKerja');
			$this->dtgDataPengalamanKerjas->MetaAddColumn('Alamat');
			$this->dtgDataPengalamanKerjas->MetaAddColumn('TahunMasuk');
			$this->dtgDataPengalamanKerjas->MetaAddColumn('TahunKeluar');
			$this->dtgDataPengalamanKerjas->MetaAddColumn('GajiTerakhir');
			$this->dtgDataPengalamanKerjas->MetaAddColumn('JabatanTerakhir');
		}
	}
?>
