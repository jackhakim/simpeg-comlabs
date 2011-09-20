<?php
	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the DataOrganisasi class.  It uses the code-generated
	 * DataOrganisasiDataGrid control which has meta-methods to help with
	 * easily creating/defining DataOrganisasi columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both data_organisasi_list.php AND
	 * data_organisasi_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My QCubed Application
	 * @subpackage FormBaseObjects
	 */
	abstract class DataOrganisasiListFormBase extends QForm {
		// Local instance of the Meta DataGrid to list DataOrganisasis
		/**
		 * @var DataOrganisasiDataGrid dtgDataOrganisasis
		 */
		protected $dtgDataOrganisasis;

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
			$this->dtgDataOrganisasis = new DataOrganisasiDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgDataOrganisasis->CssClass = 'datagrid';
			$this->dtgDataOrganisasis->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgDataOrganisasis->Paginator = new QPaginator($this->dtgDataOrganisasis);
			$this->dtgDataOrganisasis->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/data_organisasi_edit.php';
			$this->dtgDataOrganisasis->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for data_organisasi's properties, or you
			// can traverse down QQN::data_organisasi() to display fields that are down the hierarchy)
			$this->dtgDataOrganisasis->MetaAddColumn(QQN::DataOrganisasi()->NipObject);
			$this->dtgDataOrganisasis->MetaAddColumn('NamaOrg');
			$this->dtgDataOrganisasis->MetaAddColumn('Jenis');
			$this->dtgDataOrganisasis->MetaAddColumn('Alamat');
			$this->dtgDataOrganisasis->MetaAddColumn('ThnMasuk');
			$this->dtgDataOrganisasis->MetaAddColumn('ThnKeluar');
			$this->dtgDataOrganisasis->MetaAddColumn('Honor');
			$this->dtgDataOrganisasis->MetaAddColumn('Jabatan');
		}
	}
?>
