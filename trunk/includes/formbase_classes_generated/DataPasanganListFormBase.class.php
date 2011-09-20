<?php
	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the DataPasangan class.  It uses the code-generated
	 * DataPasanganDataGrid control which has meta-methods to help with
	 * easily creating/defining DataPasangan columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both data_pasangan_list.php AND
	 * data_pasangan_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My QCubed Application
	 * @subpackage FormBaseObjects
	 */
	abstract class DataPasanganListFormBase extends QForm {
		// Local instance of the Meta DataGrid to list DataPasangans
		/**
		 * @var DataPasanganDataGrid dtgDataPasangans
		 */
		protected $dtgDataPasangans;

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
			$this->dtgDataPasangans = new DataPasanganDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgDataPasangans->CssClass = 'datagrid';
			$this->dtgDataPasangans->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgDataPasangans->Paginator = new QPaginator($this->dtgDataPasangans);
			$this->dtgDataPasangans->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/data_pasangan_edit.php';
			$this->dtgDataPasangans->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for data_pasangan's properties, or you
			// can traverse down QQN::data_pasangan() to display fields that are down the hierarchy)
			$this->dtgDataPasangans->MetaAddColumn(QQN::DataPasangan()->NipObject);
			$this->dtgDataPasangans->MetaAddColumn('NamaPasangan');
			$this->dtgDataPasangans->MetaAddColumn('TempatLahir');
			$this->dtgDataPasangans->MetaAddColumn('TglLahir');
			$this->dtgDataPasangans->MetaAddColumn('Agama');
			$this->dtgDataPasangans->MetaAddColumn('StatusNikah');
			$this->dtgDataPasangans->MetaAddColumn('JumTanggungan');
			$this->dtgDataPasangans->MetaAddColumn('Alamat');
			$this->dtgDataPasangans->MetaAddColumn('NamaBapak');
			$this->dtgDataPasangans->MetaAddColumn('NamaIbu');
			$this->dtgDataPasangans->MetaAddColumn('PendidikanTerakhir');
			$this->dtgDataPasangans->MetaAddColumn('TglNikah');
			$this->dtgDataPasangans->MetaAddColumn('TglCerai');
		}
	}
?>
