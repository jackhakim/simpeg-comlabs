<?php
	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the DataPenghargaanEks class.  It uses the code-generated
	 * DataPenghargaanEksDataGrid control which has meta-methods to help with
	 * easily creating/defining DataPenghargaanEks columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both data_penghargaan_eks_list.php AND
	 * data_penghargaan_eks_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My QCubed Application
	 * @subpackage FormBaseObjects
	 */
	abstract class DataPenghargaanEksListFormBase extends QForm {
		// Local instance of the Meta DataGrid to list DataPenghargaanEkses
		/**
		 * @var DataPenghargaanEksDataGrid dtgDataPenghargaanEkses
		 */
		protected $dtgDataPenghargaanEkses;

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
			$this->dtgDataPenghargaanEkses = new DataPenghargaanEksDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgDataPenghargaanEkses->CssClass = 'datagrid';
			$this->dtgDataPenghargaanEkses->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgDataPenghargaanEkses->Paginator = new QPaginator($this->dtgDataPenghargaanEkses);
			$this->dtgDataPenghargaanEkses->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/data_penghargaan_eks_edit.php';
			$this->dtgDataPenghargaanEkses->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for data_penghargaan_eks's properties, or you
			// can traverse down QQN::data_penghargaan_eks() to display fields that are down the hierarchy)
			$this->dtgDataPenghargaanEkses->MetaAddColumn(QQN::DataPenghargaanEks()->NipObject);
			$this->dtgDataPenghargaanEkses->MetaAddColumn('NamaPenghargaan');
			$this->dtgDataPenghargaanEkses->MetaAddColumn('TglDapat');
			$this->dtgDataPenghargaanEkses->MetaAddColumn('Pemberi');
			$this->dtgDataPenghargaanEkses->MetaAddColumn('Alamat');
		}
	}
?>
