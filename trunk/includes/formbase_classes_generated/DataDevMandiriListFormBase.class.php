<?php
	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the DataDevMandiri class.  It uses the code-generated
	 * DataDevMandiriDataGrid control which has meta-methods to help with
	 * easily creating/defining DataDevMandiri columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both data_dev_mandiri_list.php AND
	 * data_dev_mandiri_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My QCubed Application
	 * @subpackage FormBaseObjects
	 */
	abstract class DataDevMandiriListFormBase extends QForm {
		// Local instance of the Meta DataGrid to list DataDevMandiris
		/**
		 * @var DataDevMandiriDataGrid dtgDataDevMandiris
		 */
		protected $dtgDataDevMandiris;

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
			$this->dtgDataDevMandiris = new DataDevMandiriDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgDataDevMandiris->CssClass = 'datagrid';
			$this->dtgDataDevMandiris->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgDataDevMandiris->Paginator = new QPaginator($this->dtgDataDevMandiris);
			$this->dtgDataDevMandiris->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/data_dev_mandiri_edit.php';
			$this->dtgDataDevMandiris->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for data_dev_mandiri's properties, or you
			// can traverse down QQN::data_dev_mandiri() to display fields that are down the hierarchy)
			$this->dtgDataDevMandiris->MetaAddColumn(QQN::DataDevMandiri()->NipObject);
			$this->dtgDataDevMandiris->MetaAddColumn('NamaKursus');
			$this->dtgDataDevMandiris->MetaAddColumn('JenisKursus');
			$this->dtgDataDevMandiris->MetaAddColumn('Penyelenggara');
			$this->dtgDataDevMandiris->MetaAddColumn('Alamat');
			$this->dtgDataDevMandiris->MetaAddColumn('TglMulai');
			$this->dtgDataDevMandiris->MetaAddColumn('TglSelesai');
			$this->dtgDataDevMandiris->MetaAddColumn('NoSertifikat');
			$this->dtgDataDevMandiris->MetaAddColumn('Predikat');
		}
	}
?>
