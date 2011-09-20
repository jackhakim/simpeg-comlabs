<?php
	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the DataPribadi class.  It uses the code-generated
	 * DataPribadiDataGrid control which has meta-methods to help with
	 * easily creating/defining DataPribadi columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both data_pribadi_list.php AND
	 * data_pribadi_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My QCubed Application
	 * @subpackage FormBaseObjects
	 */
	abstract class DataPribadiListFormBase extends QForm {
		// Local instance of the Meta DataGrid to list DataPribadis
		/**
		 * @var DataPribadiDataGrid dtgDataPribadis
		 */
		protected $dtgDataPribadis;

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
			$this->dtgDataPribadis = new DataPribadiDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgDataPribadis->CssClass = 'datagrid';
			$this->dtgDataPribadis->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgDataPribadis->Paginator = new QPaginator($this->dtgDataPribadis);
			$this->dtgDataPribadis->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/data_pribadi_edit.php';
			$this->dtgDataPribadis->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for data_pribadi's properties, or you
			// can traverse down QQN::data_pribadi() to display fields that are down the hierarchy)
			$this->dtgDataPribadis->MetaAddColumn(QQN::DataPribadi()->NipObject);
			$this->dtgDataPribadis->MetaAddColumn('TempatLahir');
			$this->dtgDataPribadis->MetaAddColumn('TglLahir');
			$this->dtgDataPribadis->MetaAddColumn('Agama');
			$this->dtgDataPribadis->MetaAddColumn('StatusNikah');
			$this->dtgDataPribadis->MetaAddColumn('JumTanggungan');
			$this->dtgDataPribadis->MetaAddColumn('Alamat');
			$this->dtgDataPribadis->MetaAddColumn('NamaBapak');
			$this->dtgDataPribadis->MetaAddColumn('NamaIbu');
			$this->dtgDataPribadis->MetaAddColumn('JenisKelamin');
		}
	}
?>
