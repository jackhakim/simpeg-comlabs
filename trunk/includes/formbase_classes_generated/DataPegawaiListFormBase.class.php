<?php
	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the DataPegawai class.  It uses the code-generated
	 * DataPegawaiDataGrid control which has meta-methods to help with
	 * easily creating/defining DataPegawai columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both data_pegawai_list.php AND
	 * data_pegawai_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My QCubed Application
	 * @subpackage FormBaseObjects
	 */
	abstract class DataPegawaiListFormBase extends QForm {
		// Local instance of the Meta DataGrid to list DataPegawais
		/**
		 * @var DataPegawaiDataGrid dtgDataPegawais
		 */
		protected $dtgDataPegawais;

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
			$this->dtgDataPegawais = new DataPegawaiDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgDataPegawais->CssClass = 'datagrid';
			$this->dtgDataPegawais->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgDataPegawais->Paginator = new QPaginator($this->dtgDataPegawais);
			$this->dtgDataPegawais->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/data_pegawai_edit.php';
			$this->dtgDataPegawais->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for data_pegawai's properties, or you
			// can traverse down QQN::data_pegawai() to display fields that are down the hierarchy)
			$this->dtgDataPegawais->MetaAddColumn('Nip');
			$this->dtgDataPegawais->MetaAddColumn('Nama');
			$this->dtgDataPegawais->MetaAddColumn('TglAngkatCapeg');
			$this->dtgDataPegawais->MetaAddColumn('TglAngkatPeg');
			$this->dtgDataPegawais->MetaAddColumn('TglMenjabat');
			$this->dtgDataPegawais->MetaAddColumn('Status');
			$this->dtgDataPegawais->MetaAddColumn('Golongan');
			$this->dtgDataPegawais->MetaAddColumn(QQN::DataPegawai()->DataAnak);
			$this->dtgDataPegawais->MetaAddColumn(QQN::DataPegawai()->DataDevMandiri);
			$this->dtgDataPegawais->MetaAddColumn(QQN::DataPegawai()->DataDiklat);
			$this->dtgDataPegawais->MetaAddColumn(QQN::DataPegawai()->DataOrganisasi);
			$this->dtgDataPegawais->MetaAddColumn(QQN::DataPegawai()->DataPasangan);
			$this->dtgDataPegawais->MetaAddColumn(QQN::DataPegawai()->DataPendidikan);
			$this->dtgDataPegawais->MetaAddColumn(QQN::DataPegawai()->DataPengalaman);
			$this->dtgDataPegawais->MetaAddColumn(QQN::DataPegawai()->DataPengalamanKerja);
			$this->dtgDataPegawais->MetaAddColumn(QQN::DataPegawai()->DataPenghargaanEks);
			$this->dtgDataPegawais->MetaAddColumn(QQN::DataPegawai()->DataPenghargaanIn);
			$this->dtgDataPegawais->MetaAddColumn(QQN::DataPegawai()->DataPribadi);
			$this->dtgDataPegawais->MetaAddColumn(QQN::DataPegawai()->DataRiwayatKerja);
			$this->dtgDataPegawais->MetaAddColumn(QQN::DataPegawai()->DataSanksi);
			$this->dtgDataPegawais->MetaAddColumn(QQN::DataPegawai()->DataSkLain);
		}
	}
?>
