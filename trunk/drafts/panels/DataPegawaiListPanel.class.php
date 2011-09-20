<?php
	/**
	 * This is the abstract Panel class for the List All functionality
	 * of the DataPegawai class.  This code-generated class
	 * contains a datagrid to display an HTML page that can
	 * list a collection of DataPegawai objects.  It includes
	 * functionality to perform pagination and sorting on columns.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QPanel which extends this DataPegawaiListPanelBase
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent re-
	 * code generation.
	 *
	 * @package My QCubed Application
	 * @subpackage Drafts
	 *
	 */
	class DataPegawaiListPanel extends QPanel {
		// Local instance of the Meta DataGrid to list DataPegawais
		/**
		 * @var DataPegawaiDataGrid
		 */
		public $dtgDataPegawais;

		// Other public QControls in this panel
		/**
		 * @var QButton CreateNew
		 */
		public $btnCreateNew;
		/**
		 * @var QControlProxy ProxyEdit
		 */
		public $pxyEdit;

		// Callback Method Names
		/**
		 * @var string SetEditPanelMethod
		 */
		protected $strSetEditPanelMethod;
		/**
		 * @var string CloseEditPanelMethod
		 */
		protected $strCloseEditPanelMethod;

		public function __construct($objParentObject, $strSetEditPanelMethod, $strCloseEditPanelMethod, $strControlId = null) {
			// Call the Parent
			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Record Method Callbacks
			$this->strSetEditPanelMethod = $strSetEditPanelMethod;
			$this->strCloseEditPanelMethod = $strCloseEditPanelMethod;

			// Setup the Template
			$this->Template = __DOCROOT__ . __PANEL_DRAFTS__ . '/DataPegawaiListPanel.tpl.php';

			// Instantiate the Meta DataGrid
			$this->dtgDataPegawais = new DataPegawaiDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgDataPegawais->CssClass = 'datagrid';
			$this->dtgDataPegawais->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgDataPegawais->Paginator = new QPaginator($this->dtgDataPegawais);
			$this->dtgDataPegawais->ItemsPerPage = 8;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$this->pxyEdit = new QControlProxy($this);
			$this->pxyEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'pxyEdit_Click'));
			$this->dtgDataPegawais->MetaAddEditProxyColumn($this->pxyEdit, 'Edit', 'Edit');

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

			// Setup the Create New button
			$this->btnCreateNew = new QButton($this);
			$this->btnCreateNew->Text = QApplication::Translate('Create a New') . ' ' . QApplication::Translate('DataPegawai');
			$this->btnCreateNew->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCreateNew_Click'));
		}

		public function pxyEdit_Click($strFormId, $strControlId, $strParameter) {
			$strParameterArray = explode(',', $strParameter);
			$objEditPanel = new DataPegawaiEditPanel($this, $this->strCloseEditPanelMethod, $strParameterArray[0]);

			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}

		public function btnCreateNew_Click($strFormId, $strControlId, $strParameter) {
			$objEditPanel = new DataPegawaiEditPanel($this, $this->strCloseEditPanelMethod, null);
			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}
	}
?>