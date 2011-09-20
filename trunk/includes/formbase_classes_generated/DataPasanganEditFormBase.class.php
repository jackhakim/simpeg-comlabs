<?php
	/**
	 * This is a quick-and-dirty draft QForm object to do Create, Edit, and Delete functionality
	 * of the DataPasangan class.  It uses the code-generated
	 * DataPasanganMetaControl class, which has meta-methods to help with
	 * easily creating/defining controls to modify the fields of a DataPasangan columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both data_pasangan_edit.php AND
	 * data_pasangan_edit.tpl.php out of this Form Drafts directory.
	 *
	 * @package My QCubed Application
	 * @subpackage FormBaseObjects
	 */
	abstract class DataPasanganEditFormBase extends QForm {
		// Local instance of the DataPasanganMetaControl
		/**
		 * @var DataPasanganMetaControlGen mctDataPasangan
		 */
		protected $mctDataPasangan;

		// Controls for DataPasangan's Data Fields
		protected $lstNipObject;
		protected $txtNamaPasangan;
		protected $txtTempatLahir;
		protected $calTglLahir;
		protected $txtAgama;
		protected $txtStatusNikah;
		protected $txtJumTanggungan;
		protected $txtAlamat;
		protected $txtNamaBapak;
		protected $txtNamaIbu;
		protected $txtPendidikanTerakhir;
		protected $calTglNikah;
		protected $calTglCerai;

		// Other ListBoxes (if applicable) via Unique ReverseReferences and ManyToMany References

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

			// Use the CreateFromPathInfo shortcut (this can also be done manually using the DataPasanganMetaControl constructor)
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctDataPasangan = DataPasanganMetaControl::CreateFromPathInfo($this);

			// Call MetaControl's methods to create qcontrols based on DataPasangan's data fields
			$this->lstNipObject = $this->mctDataPasangan->lstNipObject_Create();
			$this->txtNamaPasangan = $this->mctDataPasangan->txtNamaPasangan_Create();
			$this->txtTempatLahir = $this->mctDataPasangan->txtTempatLahir_Create();
			$this->calTglLahir = $this->mctDataPasangan->calTglLahir_Create();
			$this->txtAgama = $this->mctDataPasangan->txtAgama_Create();
			$this->txtStatusNikah = $this->mctDataPasangan->txtStatusNikah_Create();
			$this->txtJumTanggungan = $this->mctDataPasangan->txtJumTanggungan_Create();
			$this->txtAlamat = $this->mctDataPasangan->txtAlamat_Create();
			$this->txtNamaBapak = $this->mctDataPasangan->txtNamaBapak_Create();
			$this->txtNamaIbu = $this->mctDataPasangan->txtNamaIbu_Create();
			$this->txtPendidikanTerakhir = $this->mctDataPasangan->txtPendidikanTerakhir_Create();
			$this->calTglNikah = $this->mctDataPasangan->calTglNikah_Create();
			$this->calTglCerai = $this->mctDataPasangan->calTglCerai_Create();

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
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(sprintf(QApplication::Translate('Are you SURE you want to DELETE this %s?'), QApplication::Translate('DataPasangan'))));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxAction('btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctDataPasangan->EditMode;
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
			// Delegate "Save" processing to the DataPasanganMetaControl
			$this->mctDataPasangan->SaveDataPasangan();
			$this->RedirectToListPage();
		}

		protected function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the DataPasanganMetaControl
			$this->mctDataPasangan->DeleteDataPasangan();
			$this->RedirectToListPage();
		}

		protected function btnCancel_Click($strFormId, $strControlId, $strParameter) {
			$this->RedirectToListPage();
		}

		// Other Methods

		protected function RedirectToListPage() {
			QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/data_pasangan_list.php');
		}
	}
?>
