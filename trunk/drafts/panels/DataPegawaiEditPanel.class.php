<?php
	/**
	 * This is a quick-and-dirty draft QPanel object to do Create, Edit, and Delete functionality
	 * of the DataPegawai class.  It uses the code-generated
	 * DataPegawaiMetaControl class, which has meta-methods to help with
	 * easily creating/defining controls to modify the fields of a DataPegawai columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 *
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both data_pegawai_edit.php AND
	 * data_pegawai_edit.tpl.php out of this Form Drafts directory.
	 *
	 * @package My QCubed Application
	 * @subpackage Drafts
	 */
	class DataPegawaiEditPanel extends QPanel {
		// Local instance of the DataPegawaiMetaControl
		/**
		 * @var DataPegawaiMetaControl
		 */
		protected $mctDataPegawai;

		// Controls for DataPegawai's Data Fields
		public $txtNip;
		public $txtNama;
		public $calTglAngkatCapeg;
		public $calTglAngkatPeg;
		public $calTglMenjabat;
		public $txtStatus;
		public $txtGolongan;

		// Other ListBoxes (if applicable) via Unique ReverseReferences and ManyToMany References
		public $lstDataAnak;
		public $lstDataDevMandiri;
		public $lstDataDiklat;
		public $lstDataOrganisasi;
		public $lstDataPasangan;
		public $lstDataPendidikan;
		public $lstDataPengalaman;
		public $lstDataPengalamanKerja;
		public $lstDataPenghargaanEks;
		public $lstDataPenghargaanIn;
		public $lstDataPribadi;
		public $lstDataRiwayatKerja;
		public $lstDataSanksi;
		public $lstDataSkLain;

		// Other Controls
		/**
		 * @var QButton Save
		 */
		public $btnSave;
		/**
		 * @var QButton Delete
		 */
		public $btnDelete;
		/**
		 * @var QButton Cancel
		 */
		public $btnCancel;

		// Callback
		protected $strClosePanelMethod;

		public function __construct($objParentObject, $strClosePanelMethod, $strNip = null, $strControlId = null) {
			// Call the Parent
			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Setup Callback and Template
			$this->strTemplate = __DOCROOT__ . __PANEL_DRAFTS__ . '/DataPegawaiEditPanel.tpl.php';
			$this->strClosePanelMethod = $strClosePanelMethod;

			// Construct the DataPegawaiMetaControl
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctDataPegawai = DataPegawaiMetaControl::Create($this, $strNip);

			// Call MetaControl's methods to create qcontrols based on DataPegawai's data fields
			$this->txtNip = $this->mctDataPegawai->txtNip_Create();
			$this->txtNama = $this->mctDataPegawai->txtNama_Create();
			$this->calTglAngkatCapeg = $this->mctDataPegawai->calTglAngkatCapeg_Create();
			$this->calTglAngkatPeg = $this->mctDataPegawai->calTglAngkatPeg_Create();
			$this->calTglMenjabat = $this->mctDataPegawai->calTglMenjabat_Create();
			$this->txtStatus = $this->mctDataPegawai->txtStatus_Create();
			$this->txtGolongan = $this->mctDataPegawai->txtGolongan_Create();
			$this->lstDataAnak = $this->mctDataPegawai->lstDataAnak_Create();
			$this->lstDataDevMandiri = $this->mctDataPegawai->lstDataDevMandiri_Create();
			$this->lstDataDiklat = $this->mctDataPegawai->lstDataDiklat_Create();
			$this->lstDataOrganisasi = $this->mctDataPegawai->lstDataOrganisasi_Create();
			$this->lstDataPasangan = $this->mctDataPegawai->lstDataPasangan_Create();
			$this->lstDataPendidikan = $this->mctDataPegawai->lstDataPendidikan_Create();
			$this->lstDataPengalaman = $this->mctDataPegawai->lstDataPengalaman_Create();
			$this->lstDataPengalamanKerja = $this->mctDataPegawai->lstDataPengalamanKerja_Create();
			$this->lstDataPenghargaanEks = $this->mctDataPegawai->lstDataPenghargaanEks_Create();
			$this->lstDataPenghargaanIn = $this->mctDataPegawai->lstDataPenghargaanIn_Create();
			$this->lstDataPribadi = $this->mctDataPegawai->lstDataPribadi_Create();
			$this->lstDataRiwayatKerja = $this->mctDataPegawai->lstDataRiwayatKerja_Create();
			$this->lstDataSanksi = $this->mctDataPegawai->lstDataSanksi_Create();
			$this->lstDataSkLain = $this->mctDataPegawai->lstDataSkLain_Create();

			// Create Buttons and Actions on this Form
			$this->btnSave = new QButton($this);
			$this->btnSave->Text = QApplication::Translate('Save');
			$this->btnSave->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnSave_Click'));
			$this->btnSave->CausesValidation = $this;

			$this->btnCancel = new QButton($this);
			$this->btnCancel->Text = QApplication::Translate('Cancel');
			$this->btnCancel->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCancel_Click'));

			$this->btnDelete = new QButton($this);
			$this->btnDelete->Text = QApplication::Translate('Delete');
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(sprintf(QApplication::Translate('Are you SURE you want to DELETE this %s?'),  QApplication::Translate('DataPegawai'))));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctDataPegawai->EditMode;
		}

		// Control AjaxAction Event Handlers
		public function btnSave_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Save" processing to the DataPegawaiMetaControl
			$this->mctDataPegawai->SaveDataPegawai();
			$this->CloseSelf(true);
		}

		public function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the DataPegawaiMetaControl
			$this->mctDataPegawai->DeleteDataPegawai();
			$this->CloseSelf(true);
		}

		public function btnCancel_Click($strFormId, $strControlId, $strParameter) {
			$this->CloseSelf(false);
		}

		// Close Myself and Call ClosePanelMethod Callback
		protected function CloseSelf($blnChangesMade) {
			$strMethod = $this->strClosePanelMethod;
			$this->objForm->$strMethod($blnChangesMade);
		}

		
	}
?>