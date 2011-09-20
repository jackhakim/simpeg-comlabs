<?php
	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the DataPengalaman class.  It uses the code-generated
	 * DataPengalamanDataGrid control which has meta-methods to help with
	 * easily creating/defining DataPengalaman columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both data_pengalaman_list.php AND
	 * data_pengalaman_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My QCubed Application
	 * @subpackage FormBaseObjects
	 */
	abstract class DataPengalamanListFormBase extends QForm {
		// Local instance of the Meta DataGrid to list DataPengalamans
		/**
		 * @var DataPengalamanDataGrid dtgDataPengalamans
		 */
		protected $dtgDataPengalamans;

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
			$this->dtgDataPengalamans = new DataPengalamanDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgDataPengalamans->CssClass = 'datagrid';
			$this->dtgDataPengalamans->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgDataPengalamans->Paginator = new QPaginator($this->dtgDataPengalamans);
			$this->dtgDataPengalamans->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/data_pengalaman_edit.php';
			$this->dtgDataPengalamans->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for data_pengalaman's properties, or you
			// can traverse down QQN::data_pengalaman() to display fields that are down the hierarchy)
			$this->dtgDataPengalamans->MetaAddColumn(QQN::DataPengalaman()->NipObject);
			$this->dtgDataPengalamans->MetaAddColumn('Pengalaman');
			$this->dtgDataPengalamans->MetaAddColumn('Tanggal');
		}
	}
?>
