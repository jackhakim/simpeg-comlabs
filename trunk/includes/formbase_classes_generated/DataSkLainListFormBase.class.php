<?php
	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the DataSkLain class.  It uses the code-generated
	 * DataSkLainDataGrid control which has meta-methods to help with
	 * easily creating/defining DataSkLain columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both data_sk_lain_list.php AND
	 * data_sk_lain_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My QCubed Application
	 * @subpackage FormBaseObjects
	 */
	abstract class DataSkLainListFormBase extends QForm {
		// Local instance of the Meta DataGrid to list DataSkLains
		/**
		 * @var DataSkLainDataGrid dtgDataSkLains
		 */
		protected $dtgDataSkLains;

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
			$this->dtgDataSkLains = new DataSkLainDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgDataSkLains->CssClass = 'datagrid';
			$this->dtgDataSkLains->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgDataSkLains->Paginator = new QPaginator($this->dtgDataSkLains);
			$this->dtgDataSkLains->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/data_sk_lain_edit.php';
			$this->dtgDataSkLains->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for data_sk_lain's properties, or you
			// can traverse down QQN::data_sk_lain() to display fields that are down the hierarchy)
			$this->dtgDataSkLains->MetaAddColumn(QQN::DataSkLain()->NipObject);
			$this->dtgDataSkLains->MetaAddColumn('NoSk');
			$this->dtgDataSkLains->MetaAddColumn('JenisSk');
		}
	}
?>
