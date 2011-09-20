<?php
	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the DataSanksi class.  It uses the code-generated
	 * DataSanksiDataGrid control which has meta-methods to help with
	 * easily creating/defining DataSanksi columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both data_sanksi_list.php AND
	 * data_sanksi_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My QCubed Application
	 * @subpackage FormBaseObjects
	 */
	abstract class DataSanksiListFormBase extends QForm {
		// Local instance of the Meta DataGrid to list DataSanksis
		/**
		 * @var DataSanksiDataGrid dtgDataSanksis
		 */
		protected $dtgDataSanksis;

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
			$this->dtgDataSanksis = new DataSanksiDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgDataSanksis->CssClass = 'datagrid';
			$this->dtgDataSanksis->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgDataSanksis->Paginator = new QPaginator($this->dtgDataSanksis);
			$this->dtgDataSanksis->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/data_sanksi_edit.php';
			$this->dtgDataSanksis->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for data_sanksi's properties, or you
			// can traverse down QQN::data_sanksi() to display fields that are down the hierarchy)
			$this->dtgDataSanksis->MetaAddColumn(QQN::DataSanksi()->NipObject);
			$this->dtgDataSanksis->MetaAddColumn('JenisSanksi');
			$this->dtgDataSanksis->MetaAddColumn('NoSk');
		}
	}
?>
