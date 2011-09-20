<?php
	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the DataAnak class.  It uses the code-generated
	 * DataAnakDataGrid control which has meta-methods to help with
	 * easily creating/defining DataAnak columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both data_anak_list.php AND
	 * data_anak_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My QCubed Application
	 * @subpackage FormBaseObjects
	 */
	abstract class DataAnakListFormBase extends QForm {
		// Local instance of the Meta DataGrid to list DataAnaks
		/**
		 * @var DataAnakDataGrid dtgDataAnaks
		 */
		protected $dtgDataAnaks;

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
			$this->dtgDataAnaks = new DataAnakDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgDataAnaks->CssClass = 'datagrid';
			$this->dtgDataAnaks->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgDataAnaks->Paginator = new QPaginator($this->dtgDataAnaks);
			$this->dtgDataAnaks->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/data_anak_edit.php';
			$this->dtgDataAnaks->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for data_anak's properties, or you
			// can traverse down QQN::data_anak() to display fields that are down the hierarchy)
			$this->dtgDataAnaks->MetaAddColumn(QQN::DataAnak()->NipObject);
			$this->dtgDataAnaks->MetaAddColumn('NamaAnak');
			$this->dtgDataAnaks->MetaAddColumn('TempatLahir');
			$this->dtgDataAnaks->MetaAddColumn('TglLahir');
			$this->dtgDataAnaks->MetaAddColumn('StatusAnak');
			$this->dtgDataAnaks->MetaAddColumn('Agama');
			$this->dtgDataAnaks->MetaAddColumn('Pendidikan');
		}
	}
?>
