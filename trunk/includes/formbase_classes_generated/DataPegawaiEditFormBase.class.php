<?php
	/**
	 * This is a quick-and-dirty draft QForm object to do Create, Edit, and Delete functionality
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
	 * @subpackage FormBaseObjects
	 */
	abstract class DataPegawaiEditFormBase extends QForm {
		// Local instance of the DataPegawaiMetaControl
		/**
		 * @var DataPegawaiMetaControlGen mctDataPegawai
		 */
		protected $mctDataPegawai;

		// Controls for DataPegawai's Data Fields
		protected $txtNip;
		protected $txtNama;
		protected $calTglAngkatCapeg;
		protected $calTglAngkatPeg;
		protected $calTglMenjabat;
		protected $txtStatus;
		protected $txtGolongan;

		// Other ListBoxes (if applicable) via Unique ReverseReferences and ManyToMany References
		protected $lstDataAnak;
		protected $lstDataDevMandiri;
		protected $lstDataDiklat;
		protected $lstDataOrganisasi;
		protected $lstDataPasangan;
		protected $lstDataPendidikan;
		protected $lstDataPengalaman;
		protected $lstDataPengalamanKerja;
		protected $lstDataPenghargaanEks;
		protected $lstDataPenghargaanIn;
		protected $lstDataPribadi;
		protected $lstDataRiwayatKerja;
		protected $lstDataSanksi;
		protected $lstDataSkLain;

		// Other Controls
		/**
		 * @var QButton Save
		 */
		protected $btnSave;
		/**
		 * @var QButton Delete
		 */
		protected $btnDelete;
		/**
		 * @var QButton Cancel
		 */
		protected $btnCancel;

		// Create QForm Event Handlers as Needed

//		protected function Form_Exit() {}
//		protected function Form_Load() {}
//		protected function Form_PreRender() {}

		protected function Form_Run() {
			parent::Form_Run();
		}

		protected function Form_Create() {
			parent::Form_Create();

			// Use the CreateFromPathInfo shortcut (this can also be done manually using the DataPegawaiMetaControl constructor)
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctDataPegawai = DataPegawaiMetaControl::CreateFromPathInfo($this);

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
			$this->btnSave->AddAction(new QClickEvent(), new QAjaxAction('btnSave_Click'));
			$this->btnSave->CausesValidation = true;

			$this->btnCancel = new QButton($this);
			$this->btnCancel->Text = QApplication::Translate('Cancel');
			$this->btnCancel->AddAction(new QClickEvent(), new QAjaxAction('btnCancel_Click'));

			$this->btnDelete = new QButton($this);
			$this->btnDelete->Text = QApplication::Translate('Delete');
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(sprintf(QApplication::Translate('Are you SURE you want to DELETE this %s?'), QApplication::Translate('DataPegawai'))));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxAction('btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctDataPegawai->EditMode;
		}

		/**
		 * This Form_Validate event handler allows you to specify any custom Form Validation rules.
		 * It will also Blink() on all invalid controls, as well as Focus() on the top-most invalid control.
		 */
		protected function Form_Validate() {
			// By default, we report the result of validation from the parent
			$blnToReturn = parent::Form_Validate();

			// Custom Validation Rules
			// TODO: Be sure to set $blnToReturn to false if any custom validation fails!
			

			$blnFocused = false;
			foreach ($this->GetErrorControls() as $objControl) {
				// Set Focus to the top-most invalid control
				if (!$blnFocused) {
					$objControl->Focus();
					$blnFocused = true;
				}

				// Blink on ALL invalid controls
				$objControl->Blink();
			}

			return $blnToReturn;
		}

		// Button Event Handlers

		protected function btnSave_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Save" processing to the DataPegawaiMetaControl
			$this->mctDataPegawai->SaveDataPegawai();
			$this->RedirectToListPage();
		}

		protected function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the DataPegawaiMetaControl
			$this->mctDataPegawai->DeleteDataPegawai();
			$this->RedirectToListPage();
		}

		protected function btnCancel_Click($strFormId, $strControlId, $strParameter) {
			$this->RedirectToListPage();
		}

		// Other Methods

		protected function RedirectToListPage() {
			QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/data_pegawai_list.php');
		}
	}
?>
