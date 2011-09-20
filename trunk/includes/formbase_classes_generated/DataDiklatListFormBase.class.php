<?php
	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the DataDiklat class.  It uses the code-generated
	 * DataDiklatDataGrid control which has meta-methods to help with
	 * easily creating/defining DataDiklat columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both data_diklat_list.php AND
	 * data_diklat_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My QCubed Application
	 * @subpackage FormBaseObjects
	 */
	abstract class DataDiklatListFormBase extends QForm {
		// Local instance of the Meta DataGrid to list DataDiklats
		/**
		 * @var DataDiklatDataGrid dtgDataDiklats
		 */
		protected $dtgDataDiklats;

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
			$this->dtgDataDiklats = new DataDiklatDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgDataDiklats->CssClass = 'datagrid';
			$this->dtgDataDiklats->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgDataDiklats->Paginator = new QPaginator($this->dtgDataDiklats);
			$this->dtgDataDiklats->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/data_diklat_edit.php';
			$this->dtgDataDiklats->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for data_diklat's properties, or you
			// can traverse down QQN::data_diklat() to display fields that are down the hierarchy)
			$this->dtgDataDiklats->MetaAddColumn(QQN::DataDiklat()->NipObject);
			$this->dtgDataDiklats->MetaAddColumn('NamaPelatihan');
			$this->dtgDataDiklats->MetaAddColumn('JenisPelatihan');
			$this->dtgDataDiklats->MetaAddColumn('TglMulai');
			$this->dtgDataDiklats->MetaAddColumn('TglSelesai');
			$this->dtgDataDiklats->MetaAddColumn('StatusLulus');
			$this->dtgDataDiklats->MetaAddColumn('Predikat');
			$this->dtgDataDiklats->MetaAddColumn('Rangking');
		}
	}
?>
