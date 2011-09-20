<?php
	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the DataPendidikan class.  It uses the code-generated
	 * DataPendidikanDataGrid control which has meta-methods to help with
	 * easily creating/defining DataPendidikan columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both data_pendidikan_list.php AND
	 * data_pendidikan_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My QCubed Application
	 * @subpackage FormBaseObjects
	 */
	abstract class DataPendidikanListFormBase extends QForm {
		// Local instance of the Meta DataGrid to list DataPendidikans
		/**
		 * @var DataPendidikanDataGrid dtgDataPendidikans
		 */
		protected $dtgDataPendidikans;

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
			$this->dtgDataPendidikans = new DataPendidikanDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgDataPendidikans->CssClass = 'datagrid';
			$this->dtgDataPendidikans->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgDataPendidikans->Paginator = new QPaginator($this->dtgDataPendidikans);
			$this->dtgDataPendidikans->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/data_pendidikan_edit.php';
			$this->dtgDataPendidikans->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for data_pendidikan's properties, or you
			// can traverse down QQN::data_pendidikan() to display fields that are down the hierarchy)
			$this->dtgDataPendidikans->MetaAddColumn(QQN::DataPendidikan()->NipObject);
			$this->dtgDataPendidikans->MetaAddColumn('Jenjang');
			$this->dtgDataPendidikans->MetaAddColumn('NamaTempat');
			$this->dtgDataPendidikans->MetaAddColumn('TahunMasuk');
			$this->dtgDataPendidikans->MetaAddColumn('TahunLulus');
			$this->dtgDataPendidikans->MetaAddColumn('Gelar');
			$this->dtgDataPendidikans->MetaAddColumn('NoIjasah');
		}
	}
?>
