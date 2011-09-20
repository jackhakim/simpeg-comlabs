<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the DataPegawai class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single DataPegawai object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a DataPegawaiMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 *
	 * @package My QCubed Application
	 * @subpackage MetaControls
	 * @property-read DataPegawai $DataPegawai the actual DataPegawai data class being edited
	 * @property QTextBox $NipControl
	 * @property-read QLabel $NipLabel
	 * @property QTextBox $NamaControl
	 * @property-read QLabel $NamaLabel
	 * @property QDateTimePicker $TglAngkatCapegControl
	 * @property-read QLabel $TglAngkatCapegLabel
	 * @property QDateTimePicker $TglAngkatPegControl
	 * @property-read QLabel $TglAngkatPegLabel
	 * @property QDateTimePicker $TglMenjabatControl
	 * @property-read QLabel $TglMenjabatLabel
	 * @property QTextBox $StatusControl
	 * @property-read QLabel $StatusLabel
	 * @property QTextBox $GolonganControl
	 * @property-read QLabel $GolonganLabel
	 * @property QListBox $DataAnakControl
	 * @property-read QLabel $DataAnakLabel
	 * @property QListBox $DataDevMandiriControl
	 * @property-read QLabel $DataDevMandiriLabel
	 * @property QListBox $DataDiklatControl
	 * @property-read QLabel $DataDiklatLabel
	 * @property QListBox $DataOrganisasiControl
	 * @property-read QLabel $DataOrganisasiLabel
	 * @property QListBox $DataPasanganControl
	 * @property-read QLabel $DataPasanganLabel
	 * @property QListBox $DataPendidikanControl
	 * @property-read QLabel $DataPendidikanLabel
	 * @property QListBox $DataPengalamanControl
	 * @property-read QLabel $DataPengalamanLabel
	 * @property QListBox $DataPengalamanKerjaControl
	 * @property-read QLabel $DataPengalamanKerjaLabel
	 * @property QListBox $DataPenghargaanEksControl
	 * @property-read QLabel $DataPenghargaanEksLabel
	 * @property QListBox $DataPenghargaanInControl
	 * @property-read QLabel $DataPenghargaanInLabel
	 * @property QListBox $DataPribadiControl
	 * @property-read QLabel $DataPribadiLabel
	 * @property QListBox $DataRiwayatKerjaControl
	 * @property-read QLabel $DataRiwayatKerjaLabel
	 * @property QListBox $DataSanksiControl
	 * @property-read QLabel $DataSanksiLabel
	 * @property QListBox $DataSkLainControl
	 * @property-read QLabel $DataSkLainLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class DataPegawaiMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var DataPegawai objDataPegawai
		 * @access protected
		 */
		protected $objDataPegawai;
		/**
		 * @var QForm|QControl objParentObject
		 * @access protected
		 */
		protected $objParentObject;
		/**
		 * @var string strTitleVerb
		 * @access protected
		 */
		protected $strTitleVerb;
		/**
		 * @var boolean blnEditMode
		 * @access protected
		 */
		protected $blnEditMode;

		// Controls that allow the editing of DataPegawai's individual data fields
		/**
		 * @var QTextBox txtNip
		 * @access protected
		 */
		protected $txtNip;
		/**
		 * @var QTextBox txtNama
		 * @access protected
		 */
		protected $txtNama;
		/**
		 * @var QDateTimePicker calTglAngkatCapeg
		 * @access protected
		 */
		protected $calTglAngkatCapeg;
		/**
		 * @var QDateTimePicker calTglAngkatPeg
		 * @access protected
		 */
		protected $calTglAngkatPeg;
		/**
		 * @var QDateTimePicker calTglMenjabat
		 * @access protected
		 */
		protected $calTglMenjabat;
		/**
		 * @var QTextBox txtStatus
		 * @access protected
		 */
		protected $txtStatus;
		/**
		 * @var QTextBox txtGolongan
		 * @access protected
		 */
		protected $txtGolongan;

		// Controls that allow the viewing of DataPegawai's individual data fields
		/**
		 * @var QLabel lblNip
		 * @access protected
		 */
		protected $lblNip;
		/**
		 * @var QLabel lblNama
		 * @access protected
		 */
		protected $lblNama;
		/**
		 * @var QLabel lblTglAngkatCapeg
		 * @access protected
		 */
		protected $lblTglAngkatCapeg;
		/**
		 * @var QLabel lblTglAngkatPeg
		 * @access protected
		 */
		protected $lblTglAngkatPeg;
		/**
		 * @var QLabel lblTglMenjabat
		 * @access protected
		 */
		protected $lblTglMenjabat;
		/**
		 * @var QLabel lblStatus
		 * @access protected
		 */
		protected $lblStatus;
		/**
		 * @var QLabel lblGolongan
		 * @access protected
		 */
		protected $lblGolongan;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References
		/**
		 * @var QListBox lstDataAnak
		 * @access protected
		 */
		protected $lstDataAnak;
		/**
		 * @var QListBox lstDataDevMandiri
		 * @access protected
		 */
		protected $lstDataDevMandiri;
		/**
		 * @var QListBox lstDataDiklat
		 * @access protected
		 */
		protected $lstDataDiklat;
		/**
		 * @var QListBox lstDataOrganisasi
		 * @access protected
		 */
		protected $lstDataOrganisasi;
		/**
		 * @var QListBox lstDataPasangan
		 * @access protected
		 */
		protected $lstDataPasangan;
		/**
		 * @var QListBox lstDataPendidikan
		 * @access protected
		 */
		protected $lstDataPendidikan;
		/**
		 * @var QListBox lstDataPengalaman
		 * @access protected
		 */
		protected $lstDataPengalaman;
		/**
		 * @var QListBox lstDataPengalamanKerja
		 * @access protected
		 */
		protected $lstDataPengalamanKerja;
		/**
		 * @var QListBox lstDataPenghargaanEks
		 * @access protected
		 */
		protected $lstDataPenghargaanEks;
		/**
		 * @var QListBox lstDataPenghargaanIn
		 * @access protected
		 */
		protected $lstDataPenghargaanIn;
		/**
		 * @var QListBox lstDataPribadi
		 * @access protected
		 */
		protected $lstDataPribadi;
		/**
		 * @var QListBox lstDataRiwayatKerja
		 * @access protected
		 */
		protected $lstDataRiwayatKerja;
		/**
		 * @var QListBox lstDataSanksi
		 * @access protected
		 */
		protected $lstDataSanksi;
		/**
		 * @var QListBox lstDataSkLain
		 * @access protected
		 */
		protected $lstDataSkLain;

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References
		/**
		 * @var QLabel lblDataAnak
		 * @access protected
		 */
		protected $lblDataAnak;
		/**
		 * @var QLabel lblDataDevMandiri
		 * @access protected
		 */
		protected $lblDataDevMandiri;
		/**
		 * @var QLabel lblDataDiklat
		 * @access protected
		 */
		protected $lblDataDiklat;
		/**
		 * @var QLabel lblDataOrganisasi
		 * @access protected
		 */
		protected $lblDataOrganisasi;
		/**
		 * @var QLabel lblDataPasangan
		 * @access protected
		 */
		protected $lblDataPasangan;
		/**
		 * @var QLabel lblDataPendidikan
		 * @access protected
		 */
		protected $lblDataPendidikan;
		/**
		 * @var QLabel lblDataPengalaman
		 * @access protected
		 */
		protected $lblDataPengalaman;
		/**
		 * @var QLabel lblDataPengalamanKerja
		 * @access protected
		 */
		protected $lblDataPengalamanKerja;
		/**
		 * @var QLabel lblDataPenghargaanEks
		 * @access protected
		 */
		protected $lblDataPenghargaanEks;
		/**
		 * @var QLabel lblDataPenghargaanIn
		 * @access protected
		 */
		protected $lblDataPenghargaanIn;
		/**
		 * @var QLabel lblDataPribadi
		 * @access protected
		 */
		protected $lblDataPribadi;
		/**
		 * @var QLabel lblDataRiwayatKerja
		 * @access protected
		 */
		protected $lblDataRiwayatKerja;
		/**
		 * @var QLabel lblDataSanksi
		 * @access protected
		 */
		protected $lblDataSanksi;
		/**
		 * @var QLabel lblDataSkLain
		 * @access protected
		 */
		protected $lblDataSkLain;


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * DataPegawaiMetaControl to edit a single DataPegawai object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single DataPegawai object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this DataPegawaiMetaControl
		 * @param DataPegawai $objDataPegawai new or existing DataPegawai object
		 */
		 public function __construct($objParentObject, DataPegawai $objDataPegawai) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this DataPegawaiMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked DataPegawai object
			$this->objDataPegawai = $objDataPegawai;

			// Figure out if we're Editing or Creating New
			if ($this->objDataPegawai->__Restored) {
				$this->strTitleVerb = QApplication::Translate('Edit');
				$this->blnEditMode = true;
			} else {
				$this->strTitleVerb = QApplication::Translate('Create');
				$this->blnEditMode = false;
			}
		 }

		/**
		 * Static Helper Method to Create using PK arguments
		 * You must pass in the PK arguments on an object to load, or leave it blank to create a new one.
		 * If you want to load via QueryString or PathInfo, use the CreateFromQueryString or CreateFromPathInfo
		 * static helper methods.  Finally, specify a CreateType to define whether or not we are only allowed to
		 * edit, or if we are also allowed to create a new one, etc.
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this DataPegawaiMetaControl
		 * @param string $strNip primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing DataPegawai object creation - defaults to CreateOrEdit
 		 * @return DataPegawaiMetaControl
		 */
		public static function Create($objParentObject, $strNip = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($strNip)) {
				$objDataPegawai = DataPegawai::Load($strNip);

				// DataPegawai was found -- return it!
				if ($objDataPegawai)
					return new DataPegawaiMetaControl($objParentObject, $objDataPegawai);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a DataPegawai object with PK arguments: ' . $strNip);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new DataPegawaiMetaControl($objParentObject, new DataPegawai());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this DataPegawaiMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing DataPegawai object creation - defaults to CreateOrEdit
		 * @return DataPegawaiMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$strNip = QApplication::PathInfo(0);
			return DataPegawaiMetaControl::Create($objParentObject, $strNip, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this DataPegawaiMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing DataPegawai object creation - defaults to CreateOrEdit
		 * @return DataPegawaiMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$strNip = QApplication::QueryString('strNip');
			return DataPegawaiMetaControl::Create($objParentObject, $strNip, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QTextBox txtNip
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNip_Create($strControlId = null) {
			$this->txtNip = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNip->Name = QApplication::Translate('Nip');
			$this->txtNip->Text = $this->objDataPegawai->Nip;
			$this->txtNip->Required = true;
			$this->txtNip->MaxLength = DataPegawai::NipMaxLength;
			return $this->txtNip;
		}

		/**
		 * Create and setup QLabel lblNip
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblNip_Create($strControlId = null) {
			$this->lblNip = new QLabel($this->objParentObject, $strControlId);
			$this->lblNip->Name = QApplication::Translate('Nip');
			$this->lblNip->Text = $this->objDataPegawai->Nip;
			$this->lblNip->Required = true;
			return $this->lblNip;
		}

		/**
		 * Create and setup QTextBox txtNama
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNama_Create($strControlId = null) {
			$this->txtNama = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNama->Name = QApplication::Translate('Nama');
			$this->txtNama->Text = $this->objDataPegawai->Nama;
			$this->txtNama->MaxLength = DataPegawai::NamaMaxLength;
			return $this->txtNama;
		}

		/**
		 * Create and setup QLabel lblNama
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblNama_Create($strControlId = null) {
			$this->lblNama = new QLabel($this->objParentObject, $strControlId);
			$this->lblNama->Name = QApplication::Translate('Nama');
			$this->lblNama->Text = $this->objDataPegawai->Nama;
			return $this->lblNama;
		}

		/**
		 * Create and setup QDateTimePicker calTglAngkatCapeg
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calTglAngkatCapeg_Create($strControlId = null) {
			$this->calTglAngkatCapeg = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calTglAngkatCapeg->Name = QApplication::Translate('Tgl Angkat Capeg');
			$this->calTglAngkatCapeg->DateTime = $this->objDataPegawai->TglAngkatCapeg;
			$this->calTglAngkatCapeg->DateTimePickerType = QDateTimePickerType::Date;
			return $this->calTglAngkatCapeg;
		}

		/**
		 * Create and setup QLabel lblTglAngkatCapeg
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat optional DateTimeFormat to use
		 * @return QLabel
		 */
		public function lblTglAngkatCapeg_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblTglAngkatCapeg = new QLabel($this->objParentObject, $strControlId);
			$this->lblTglAngkatCapeg->Name = QApplication::Translate('Tgl Angkat Capeg');
			$this->strTglAngkatCapegDateTimeFormat = $strDateTimeFormat;
			$this->lblTglAngkatCapeg->Text = sprintf($this->objDataPegawai->TglAngkatCapeg) ? $this->objDataPegawai->TglAngkatCapeg->qFormat($this->strTglAngkatCapegDateTimeFormat) : null;
			return $this->lblTglAngkatCapeg;
		}

		protected $strTglAngkatCapegDateTimeFormat;


		/**
		 * Create and setup QDateTimePicker calTglAngkatPeg
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calTglAngkatPeg_Create($strControlId = null) {
			$this->calTglAngkatPeg = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calTglAngkatPeg->Name = QApplication::Translate('Tgl Angkat Peg');
			$this->calTglAngkatPeg->DateTime = $this->objDataPegawai->TglAngkatPeg;
			$this->calTglAngkatPeg->DateTimePickerType = QDateTimePickerType::Date;
			return $this->calTglAngkatPeg;
		}

		/**
		 * Create and setup QLabel lblTglAngkatPeg
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat optional DateTimeFormat to use
		 * @return QLabel
		 */
		public function lblTglAngkatPeg_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblTglAngkatPeg = new QLabel($this->objParentObject, $strControlId);
			$this->lblTglAngkatPeg->Name = QApplication::Translate('Tgl Angkat Peg');
			$this->strTglAngkatPegDateTimeFormat = $strDateTimeFormat;
			$this->lblTglAngkatPeg->Text = sprintf($this->objDataPegawai->TglAngkatPeg) ? $this->objDataPegawai->TglAngkatPeg->qFormat($this->strTglAngkatPegDateTimeFormat) : null;
			return $this->lblTglAngkatPeg;
		}

		protected $strTglAngkatPegDateTimeFormat;


		/**
		 * Create and setup QDateTimePicker calTglMenjabat
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calTglMenjabat_Create($strControlId = null) {
			$this->calTglMenjabat = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calTglMenjabat->Name = QApplication::Translate('Tgl Menjabat');
			$this->calTglMenjabat->DateTime = $this->objDataPegawai->TglMenjabat;
			$this->calTglMenjabat->DateTimePickerType = QDateTimePickerType::Date;
			return $this->calTglMenjabat;
		}

		/**
		 * Create and setup QLabel lblTglMenjabat
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat optional DateTimeFormat to use
		 * @return QLabel
		 */
		public function lblTglMenjabat_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblTglMenjabat = new QLabel($this->objParentObject, $strControlId);
			$this->lblTglMenjabat->Name = QApplication::Translate('Tgl Menjabat');
			$this->strTglMenjabatDateTimeFormat = $strDateTimeFormat;
			$this->lblTglMenjabat->Text = sprintf($this->objDataPegawai->TglMenjabat) ? $this->objDataPegawai->TglMenjabat->qFormat($this->strTglMenjabatDateTimeFormat) : null;
			return $this->lblTglMenjabat;
		}

		protected $strTglMenjabatDateTimeFormat;


		/**
		 * Create and setup QTextBox txtStatus
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtStatus_Create($strControlId = null) {
			$this->txtStatus = new QTextBox($this->objParentObject, $strControlId);
			$this->txtStatus->Name = QApplication::Translate('Status');
			$this->txtStatus->Text = $this->objDataPegawai->Status;
			$this->txtStatus->MaxLength = DataPegawai::StatusMaxLength;
			return $this->txtStatus;
		}

		/**
		 * Create and setup QLabel lblStatus
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblStatus_Create($strControlId = null) {
			$this->lblStatus = new QLabel($this->objParentObject, $strControlId);
			$this->lblStatus->Name = QApplication::Translate('Status');
			$this->lblStatus->Text = $this->objDataPegawai->Status;
			return $this->lblStatus;
		}

		/**
		 * Create and setup QTextBox txtGolongan
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtGolongan_Create($strControlId = null) {
			$this->txtGolongan = new QTextBox($this->objParentObject, $strControlId);
			$this->txtGolongan->Name = QApplication::Translate('Golongan');
			$this->txtGolongan->Text = $this->objDataPegawai->Golongan;
			$this->txtGolongan->MaxLength = DataPegawai::GolonganMaxLength;
			return $this->txtGolongan;
		}

		/**
		 * Create and setup QLabel lblGolongan
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblGolongan_Create($strControlId = null) {
			$this->lblGolongan = new QLabel($this->objParentObject, $strControlId);
			$this->lblGolongan->Name = QApplication::Translate('Golongan');
			$this->lblGolongan->Text = $this->objDataPegawai->Golongan;
			return $this->lblGolongan;
		}

		/**
		 * Create and setup QListBox lstDataAnak
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstDataAnak_Create($strControlId = null) {
			$this->lstDataAnak = new QListBox($this->objParentObject, $strControlId);
			$this->lstDataAnak->Name = QApplication::Translate('Data Anak');
			$this->lstDataAnak->AddItem(QApplication::Translate('- Select One -'), null);
			$objDataAnakArray = DataAnak::LoadAll();
			if ($objDataAnakArray) foreach ($objDataAnakArray as $objDataAnak) {
				$objListItem = new QListItem($objDataAnak->__toString(), $objDataAnak->Nip);
				if ($objDataAnak->Nip == $this->objDataPegawai->Nip)
					$objListItem->Selected = true;
				$this->lstDataAnak->AddItem($objListItem);
			}
			// Because DataAnak's DataAnak is not null, if a value is already selected, it cannot be changed.
			if ($this->lstDataAnak->SelectedValue)
				$this->lstDataAnak->Enabled = false;
			return $this->lstDataAnak;
		}

		/**
		 * Create and setup QLabel lblDataAnak
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblDataAnak_Create($strControlId = null) {
			$this->lblDataAnak = new QLabel($this->objParentObject, $strControlId);
			$this->lblDataAnak->Name = QApplication::Translate('Data Anak');
			$this->lblDataAnak->Text = ($this->objDataPegawai->DataAnak) ? $this->objDataPegawai->DataAnak->__toString() : null;
			return $this->lblDataAnak;
		}

		/**
		 * Create and setup QListBox lstDataDevMandiri
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstDataDevMandiri_Create($strControlId = null) {
			$this->lstDataDevMandiri = new QListBox($this->objParentObject, $strControlId);
			$this->lstDataDevMandiri->Name = QApplication::Translate('Data Dev Mandiri');
			$this->lstDataDevMandiri->AddItem(QApplication::Translate('- Select One -'), null);
			$objDataDevMandiriArray = DataDevMandiri::LoadAll();
			if ($objDataDevMandiriArray) foreach ($objDataDevMandiriArray as $objDataDevMandiri) {
				$objListItem = new QListItem($objDataDevMandiri->__toString(), $objDataDevMandiri->Nip);
				if ($objDataDevMandiri->Nip == $this->objDataPegawai->Nip)
					$objListItem->Selected = true;
				$this->lstDataDevMandiri->AddItem($objListItem);
			}
			// Because DataDevMandiri's DataDevMandiri is not null, if a value is already selected, it cannot be changed.
			if ($this->lstDataDevMandiri->SelectedValue)
				$this->lstDataDevMandiri->Enabled = false;
			return $this->lstDataDevMandiri;
		}

		/**
		 * Create and setup QLabel lblDataDevMandiri
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblDataDevMandiri_Create($strControlId = null) {
			$this->lblDataDevMandiri = new QLabel($this->objParentObject, $strControlId);
			$this->lblDataDevMandiri->Name = QApplication::Translate('Data Dev Mandiri');
			$this->lblDataDevMandiri->Text = ($this->objDataPegawai->DataDevMandiri) ? $this->objDataPegawai->DataDevMandiri->__toString() : null;
			return $this->lblDataDevMandiri;
		}

		/**
		 * Create and setup QListBox lstDataDiklat
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstDataDiklat_Create($strControlId = null) {
			$this->lstDataDiklat = new QListBox($this->objParentObject, $strControlId);
			$this->lstDataDiklat->Name = QApplication::Translate('Data Diklat');
			$this->lstDataDiklat->AddItem(QApplication::Translate('- Select One -'), null);
			$objDataDiklatArray = DataDiklat::LoadAll();
			if ($objDataDiklatArray) foreach ($objDataDiklatArray as $objDataDiklat) {
				$objListItem = new QListItem($objDataDiklat->__toString(), $objDataDiklat->Nip);
				if ($objDataDiklat->Nip == $this->objDataPegawai->Nip)
					$objListItem->Selected = true;
				$this->lstDataDiklat->AddItem($objListItem);
			}
			// Because DataDiklat's DataDiklat is not null, if a value is already selected, it cannot be changed.
			if ($this->lstDataDiklat->SelectedValue)
				$this->lstDataDiklat->Enabled = false;
			return $this->lstDataDiklat;
		}

		/**
		 * Create and setup QLabel lblDataDiklat
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblDataDiklat_Create($strControlId = null) {
			$this->lblDataDiklat = new QLabel($this->objParentObject, $strControlId);
			$this->lblDataDiklat->Name = QApplication::Translate('Data Diklat');
			$this->lblDataDiklat->Text = ($this->objDataPegawai->DataDiklat) ? $this->objDataPegawai->DataDiklat->__toString() : null;
			return $this->lblDataDiklat;
		}

		/**
		 * Create and setup QListBox lstDataOrganisasi
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstDataOrganisasi_Create($strControlId = null) {
			$this->lstDataOrganisasi = new QListBox($this->objParentObject, $strControlId);
			$this->lstDataOrganisasi->Name = QApplication::Translate('Data Organisasi');
			$this->lstDataOrganisasi->AddItem(QApplication::Translate('- Select One -'), null);
			$objDataOrganisasiArray = DataOrganisasi::LoadAll();
			if ($objDataOrganisasiArray) foreach ($objDataOrganisasiArray as $objDataOrganisasi) {
				$objListItem = new QListItem($objDataOrganisasi->__toString(), $objDataOrganisasi->Nip);
				if ($objDataOrganisasi->Nip == $this->objDataPegawai->Nip)
					$objListItem->Selected = true;
				$this->lstDataOrganisasi->AddItem($objListItem);
			}
			// Because DataOrganisasi's DataOrganisasi is not null, if a value is already selected, it cannot be changed.
			if ($this->lstDataOrganisasi->SelectedValue)
				$this->lstDataOrganisasi->Enabled = false;
			return $this->lstDataOrganisasi;
		}

		/**
		 * Create and setup QLabel lblDataOrganisasi
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblDataOrganisasi_Create($strControlId = null) {
			$this->lblDataOrganisasi = new QLabel($this->objParentObject, $strControlId);
			$this->lblDataOrganisasi->Name = QApplication::Translate('Data Organisasi');
			$this->lblDataOrganisasi->Text = ($this->objDataPegawai->DataOrganisasi) ? $this->objDataPegawai->DataOrganisasi->__toString() : null;
			return $this->lblDataOrganisasi;
		}

		/**
		 * Create and setup QListBox lstDataPasangan
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstDataPasangan_Create($strControlId = null) {
			$this->lstDataPasangan = new QListBox($this->objParentObject, $strControlId);
			$this->lstDataPasangan->Name = QApplication::Translate('Data Pasangan');
			$this->lstDataPasangan->AddItem(QApplication::Translate('- Select One -'), null);
			$objDataPasanganArray = DataPasangan::LoadAll();
			if ($objDataPasanganArray) foreach ($objDataPasanganArray as $objDataPasangan) {
				$objListItem = new QListItem($objDataPasangan->__toString(), $objDataPasangan->Nip);
				if ($objDataPasangan->Nip == $this->objDataPegawai->Nip)
					$objListItem->Selected = true;
				$this->lstDataPasangan->AddItem($objListItem);
			}
			// Because DataPasangan's DataPasangan is not null, if a value is already selected, it cannot be changed.
			if ($this->lstDataPasangan->SelectedValue)
				$this->lstDataPasangan->Enabled = false;
			return $this->lstDataPasangan;
		}

		/**
		 * Create and setup QLabel lblDataPasangan
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblDataPasangan_Create($strControlId = null) {
			$this->lblDataPasangan = new QLabel($this->objParentObject, $strControlId);
			$this->lblDataPasangan->Name = QApplication::Translate('Data Pasangan');
			$this->lblDataPasangan->Text = ($this->objDataPegawai->DataPasangan) ? $this->objDataPegawai->DataPasangan->__toString() : null;
			return $this->lblDataPasangan;
		}

		/**
		 * Create and setup QListBox lstDataPendidikan
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstDataPendidikan_Create($strControlId = null) {
			$this->lstDataPendidikan = new QListBox($this->objParentObject, $strControlId);
			$this->lstDataPendidikan->Name = QApplication::Translate('Data Pendidikan');
			$this->lstDataPendidikan->AddItem(QApplication::Translate('- Select One -'), null);
			$objDataPendidikanArray = DataPendidikan::LoadAll();
			if ($objDataPendidikanArray) foreach ($objDataPendidikanArray as $objDataPendidikan) {
				$objListItem = new QListItem($objDataPendidikan->__toString(), $objDataPendidikan->Nip);
				if ($objDataPendidikan->Nip == $this->objDataPegawai->Nip)
					$objListItem->Selected = true;
				$this->lstDataPendidikan->AddItem($objListItem);
			}
			// Because DataPendidikan's DataPendidikan is not null, if a value is already selected, it cannot be changed.
			if ($this->lstDataPendidikan->SelectedValue)
				$this->lstDataPendidikan->Enabled = false;
			return $this->lstDataPendidikan;
		}

		/**
		 * Create and setup QLabel lblDataPendidikan
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblDataPendidikan_Create($strControlId = null) {
			$this->lblDataPendidikan = new QLabel($this->objParentObject, $strControlId);
			$this->lblDataPendidikan->Name = QApplication::Translate('Data Pendidikan');
			$this->lblDataPendidikan->Text = ($this->objDataPegawai->DataPendidikan) ? $this->objDataPegawai->DataPendidikan->__toString() : null;
			return $this->lblDataPendidikan;
		}

		/**
		 * Create and setup QListBox lstDataPengalaman
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstDataPengalaman_Create($strControlId = null) {
			$this->lstDataPengalaman = new QListBox($this->objParentObject, $strControlId);
			$this->lstDataPengalaman->Name = QApplication::Translate('Data Pengalaman');
			$this->lstDataPengalaman->AddItem(QApplication::Translate('- Select One -'), null);
			$objDataPengalamanArray = DataPengalaman::LoadAll();
			if ($objDataPengalamanArray) foreach ($objDataPengalamanArray as $objDataPengalaman) {
				$objListItem = new QListItem($objDataPengalaman->__toString(), $objDataPengalaman->Nip);
				if ($objDataPengalaman->Nip == $this->objDataPegawai->Nip)
					$objListItem->Selected = true;
				$this->lstDataPengalaman->AddItem($objListItem);
			}
			// Because DataPengalaman's DataPengalaman is not null, if a value is already selected, it cannot be changed.
			if ($this->lstDataPengalaman->SelectedValue)
				$this->lstDataPengalaman->Enabled = false;
			return $this->lstDataPengalaman;
		}

		/**
		 * Create and setup QLabel lblDataPengalaman
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblDataPengalaman_Create($strControlId = null) {
			$this->lblDataPengalaman = new QLabel($this->objParentObject, $strControlId);
			$this->lblDataPengalaman->Name = QApplication::Translate('Data Pengalaman');
			$this->lblDataPengalaman->Text = ($this->objDataPegawai->DataPengalaman) ? $this->objDataPegawai->DataPengalaman->__toString() : null;
			return $this->lblDataPengalaman;
		}

		/**
		 * Create and setup QListBox lstDataPengalamanKerja
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstDataPengalamanKerja_Create($strControlId = null) {
			$this->lstDataPengalamanKerja = new QListBox($this->objParentObject, $strControlId);
			$this->lstDataPengalamanKerja->Name = QApplication::Translate('Data Pengalaman Kerja');
			$this->lstDataPengalamanKerja->AddItem(QApplication::Translate('- Select One -'), null);
			$objDataPengalamanKerjaArray = DataPengalamanKerja::LoadAll();
			if ($objDataPengalamanKerjaArray) foreach ($objDataPengalamanKerjaArray as $objDataPengalamanKerja) {
				$objListItem = new QListItem($objDataPengalamanKerja->__toString(), $objDataPengalamanKerja->Nip);
				if ($objDataPengalamanKerja->Nip == $this->objDataPegawai->Nip)
					$objListItem->Selected = true;
				$this->lstDataPengalamanKerja->AddItem($objListItem);
			}
			// Because DataPengalamanKerja's DataPengalamanKerja is not null, if a value is already selected, it cannot be changed.
			if ($this->lstDataPengalamanKerja->SelectedValue)
				$this->lstDataPengalamanKerja->Enabled = false;
			return $this->lstDataPengalamanKerja;
		}

		/**
		 * Create and setup QLabel lblDataPengalamanKerja
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblDataPengalamanKerja_Create($strControlId = null) {
			$this->lblDataPengalamanKerja = new QLabel($this->objParentObject, $strControlId);
			$this->lblDataPengalamanKerja->Name = QApplication::Translate('Data Pengalaman Kerja');
			$this->lblDataPengalamanKerja->Text = ($this->objDataPegawai->DataPengalamanKerja) ? $this->objDataPegawai->DataPengalamanKerja->__toString() : null;
			return $this->lblDataPengalamanKerja;
		}

		/**
		 * Create and setup QListBox lstDataPenghargaanEks
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstDataPenghargaanEks_Create($strControlId = null) {
			$this->lstDataPenghargaanEks = new QListBox($this->objParentObject, $strControlId);
			$this->lstDataPenghargaanEks->Name = QApplication::Translate('Data Penghargaan Eks');
			$this->lstDataPenghargaanEks->AddItem(QApplication::Translate('- Select One -'), null);
			$objDataPenghargaanEksArray = DataPenghargaanEks::LoadAll();
			if ($objDataPenghargaanEksArray) foreach ($objDataPenghargaanEksArray as $objDataPenghargaanEks) {
				$objListItem = new QListItem($objDataPenghargaanEks->__toString(), $objDataPenghargaanEks->Nip);
				if ($objDataPenghargaanEks->Nip == $this->objDataPegawai->Nip)
					$objListItem->Selected = true;
				$this->lstDataPenghargaanEks->AddItem($objListItem);
			}
			// Because DataPenghargaanEks's DataPenghargaanEks is not null, if a value is already selected, it cannot be changed.
			if ($this->lstDataPenghargaanEks->SelectedValue)
				$this->lstDataPenghargaanEks->Enabled = false;
			return $this->lstDataPenghargaanEks;
		}

		/**
		 * Create and setup QLabel lblDataPenghargaanEks
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblDataPenghargaanEks_Create($strControlId = null) {
			$this->lblDataPenghargaanEks = new QLabel($this->objParentObject, $strControlId);
			$this->lblDataPenghargaanEks->Name = QApplication::Translate('Data Penghargaan Eks');
			$this->lblDataPenghargaanEks->Text = ($this->objDataPegawai->DataPenghargaanEks) ? $this->objDataPegawai->DataPenghargaanEks->__toString() : null;
			return $this->lblDataPenghargaanEks;
		}

		/**
		 * Create and setup QListBox lstDataPenghargaanIn
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstDataPenghargaanIn_Create($strControlId = null) {
			$this->lstDataPenghargaanIn = new QListBox($this->objParentObject, $strControlId);
			$this->lstDataPenghargaanIn->Name = QApplication::Translate('Data Penghargaan In');
			$this->lstDataPenghargaanIn->AddItem(QApplication::Translate('- Select One -'), null);
			$objDataPenghargaanInArray = DataPenghargaanIn::LoadAll();
			if ($objDataPenghargaanInArray) foreach ($objDataPenghargaanInArray as $objDataPenghargaanIn) {
				$objListItem = new QListItem($objDataPenghargaanIn->__toString(), $objDataPenghargaanIn->Nip);
				if ($objDataPenghargaanIn->Nip == $this->objDataPegawai->Nip)
					$objListItem->Selected = true;
				$this->lstDataPenghargaanIn->AddItem($objListItem);
			}
			// Because DataPenghargaanIn's DataPenghargaanIn is not null, if a value is already selected, it cannot be changed.
			if ($this->lstDataPenghargaanIn->SelectedValue)
				$this->lstDataPenghargaanIn->Enabled = false;
			return $this->lstDataPenghargaanIn;
		}

		/**
		 * Create and setup QLabel lblDataPenghargaanIn
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblDataPenghargaanIn_Create($strControlId = null) {
			$this->lblDataPenghargaanIn = new QLabel($this->objParentObject, $strControlId);
			$this->lblDataPenghargaanIn->Name = QApplication::Translate('Data Penghargaan In');
			$this->lblDataPenghargaanIn->Text = ($this->objDataPegawai->DataPenghargaanIn) ? $this->objDataPegawai->DataPenghargaanIn->__toString() : null;
			return $this->lblDataPenghargaanIn;
		}

		/**
		 * Create and setup QListBox lstDataPribadi
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstDataPribadi_Create($strControlId = null) {
			$this->lstDataPribadi = new QListBox($this->objParentObject, $strControlId);
			$this->lstDataPribadi->Name = QApplication::Translate('Data Pribadi');
			$this->lstDataPribadi->AddItem(QApplication::Translate('- Select One -'), null);
			$objDataPribadiArray = DataPribadi::LoadAll();
			if ($objDataPribadiArray) foreach ($objDataPribadiArray as $objDataPribadi) {
				$objListItem = new QListItem($objDataPribadi->__toString(), $objDataPribadi->Nip);
				if ($objDataPribadi->Nip == $this->objDataPegawai->Nip)
					$objListItem->Selected = true;
				$this->lstDataPribadi->AddItem($objListItem);
			}
			// Because DataPribadi's DataPribadi is not null, if a value is already selected, it cannot be changed.
			if ($this->lstDataPribadi->SelectedValue)
				$this->lstDataPribadi->Enabled = false;
			return $this->lstDataPribadi;
		}

		/**
		 * Create and setup QLabel lblDataPribadi
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblDataPribadi_Create($strControlId = null) {
			$this->lblDataPribadi = new QLabel($this->objParentObject, $strControlId);
			$this->lblDataPribadi->Name = QApplication::Translate('Data Pribadi');
			$this->lblDataPribadi->Text = ($this->objDataPegawai->DataPribadi) ? $this->objDataPegawai->DataPribadi->__toString() : null;
			return $this->lblDataPribadi;
		}

		/**
		 * Create and setup QListBox lstDataRiwayatKerja
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstDataRiwayatKerja_Create($strControlId = null) {
			$this->lstDataRiwayatKerja = new QListBox($this->objParentObject, $strControlId);
			$this->lstDataRiwayatKerja->Name = QApplication::Translate('Data Riwayat Kerja');
			$this->lstDataRiwayatKerja->AddItem(QApplication::Translate('- Select One -'), null);
			$objDataRiwayatKerjaArray = DataRiwayatKerja::LoadAll();
			if ($objDataRiwayatKerjaArray) foreach ($objDataRiwayatKerjaArray as $objDataRiwayatKerja) {
				$objListItem = new QListItem($objDataRiwayatKerja->__toString(), $objDataRiwayatKerja->Nip);
				if ($objDataRiwayatKerja->Nip == $this->objDataPegawai->Nip)
					$objListItem->Selected = true;
				$this->lstDataRiwayatKerja->AddItem($objListItem);
			}
			// Because DataRiwayatKerja's DataRiwayatKerja is not null, if a value is already selected, it cannot be changed.
			if ($this->lstDataRiwayatKerja->SelectedValue)
				$this->lstDataRiwayatKerja->Enabled = false;
			return $this->lstDataRiwayatKerja;
		}

		/**
		 * Create and setup QLabel lblDataRiwayatKerja
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblDataRiwayatKerja_Create($strControlId = null) {
			$this->lblDataRiwayatKerja = new QLabel($this->objParentObject, $strControlId);
			$this->lblDataRiwayatKerja->Name = QApplication::Translate('Data Riwayat Kerja');
			$this->lblDataRiwayatKerja->Text = ($this->objDataPegawai->DataRiwayatKerja) ? $this->objDataPegawai->DataRiwayatKerja->__toString() : null;
			return $this->lblDataRiwayatKerja;
		}

		/**
		 * Create and setup QListBox lstDataSanksi
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstDataSanksi_Create($strControlId = null) {
			$this->lstDataSanksi = new QListBox($this->objParentObject, $strControlId);
			$this->lstDataSanksi->Name = QApplication::Translate('Data Sanksi');
			$this->lstDataSanksi->AddItem(QApplication::Translate('- Select One -'), null);
			$objDataSanksiArray = DataSanksi::LoadAll();
			if ($objDataSanksiArray) foreach ($objDataSanksiArray as $objDataSanksi) {
				$objListItem = new QListItem($objDataSanksi->__toString(), $objDataSanksi->Nip);
				if ($objDataSanksi->Nip == $this->objDataPegawai->Nip)
					$objListItem->Selected = true;
				$this->lstDataSanksi->AddItem($objListItem);
			}
			// Because DataSanksi's DataSanksi is not null, if a value is already selected, it cannot be changed.
			if ($this->lstDataSanksi->SelectedValue)
				$this->lstDataSanksi->Enabled = false;
			return $this->lstDataSanksi;
		}

		/**
		 * Create and setup QLabel lblDataSanksi
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblDataSanksi_Create($strControlId = null) {
			$this->lblDataSanksi = new QLabel($this->objParentObject, $strControlId);
			$this->lblDataSanksi->Name = QApplication::Translate('Data Sanksi');
			$this->lblDataSanksi->Text = ($this->objDataPegawai->DataSanksi) ? $this->objDataPegawai->DataSanksi->__toString() : null;
			return $this->lblDataSanksi;
		}

		/**
		 * Create and setup QListBox lstDataSkLain
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstDataSkLain_Create($strControlId = null) {
			$this->lstDataSkLain = new QListBox($this->objParentObject, $strControlId);
			$this->lstDataSkLain->Name = QApplication::Translate('Data Sk Lain');
			$this->lstDataSkLain->AddItem(QApplication::Translate('- Select One -'), null);
			$objDataSkLainArray = DataSkLain::LoadAll();
			if ($objDataSkLainArray) foreach ($objDataSkLainArray as $objDataSkLain) {
				$objListItem = new QListItem($objDataSkLain->__toString(), $objDataSkLain->Nip);
				if ($objDataSkLain->Nip == $this->objDataPegawai->Nip)
					$objListItem->Selected = true;
				$this->lstDataSkLain->AddItem($objListItem);
			}
			// Because DataSkLain's DataSkLain is not null, if a value is already selected, it cannot be changed.
			if ($this->lstDataSkLain->SelectedValue)
				$this->lstDataSkLain->Enabled = false;
			return $this->lstDataSkLain;
		}

		/**
		 * Create and setup QLabel lblDataSkLain
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblDataSkLain_Create($strControlId = null) {
			$this->lblDataSkLain = new QLabel($this->objParentObject, $strControlId);
			$this->lblDataSkLain->Name = QApplication::Translate('Data Sk Lain');
			$this->lblDataSkLain->Text = ($this->objDataPegawai->DataSkLain) ? $this->objDataPegawai->DataSkLain->__toString() : null;
			return $this->lblDataSkLain;
		}



		/**
		 * Refresh this MetaControl with Data from the local DataPegawai object.
		 * @param boolean $blnReload reload DataPegawai from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objDataPegawai->Reload();

			if ($this->txtNip) $this->txtNip->Text = $this->objDataPegawai->Nip;
			if ($this->lblNip) $this->lblNip->Text = $this->objDataPegawai->Nip;

			if ($this->txtNama) $this->txtNama->Text = $this->objDataPegawai->Nama;
			if ($this->lblNama) $this->lblNama->Text = $this->objDataPegawai->Nama;

			if ($this->calTglAngkatCapeg) $this->calTglAngkatCapeg->DateTime = $this->objDataPegawai->TglAngkatCapeg;
			if ($this->lblTglAngkatCapeg) $this->lblTglAngkatCapeg->Text = sprintf($this->objDataPegawai->TglAngkatCapeg) ? $this->objDataPegawai->TglAngkatCapeg->qFormat($this->strTglAngkatCapegDateTimeFormat) : null;

			if ($this->calTglAngkatPeg) $this->calTglAngkatPeg->DateTime = $this->objDataPegawai->TglAngkatPeg;
			if ($this->lblTglAngkatPeg) $this->lblTglAngkatPeg->Text = sprintf($this->objDataPegawai->TglAngkatPeg) ? $this->objDataPegawai->TglAngkatPeg->qFormat($this->strTglAngkatPegDateTimeFormat) : null;

			if ($this->calTglMenjabat) $this->calTglMenjabat->DateTime = $this->objDataPegawai->TglMenjabat;
			if ($this->lblTglMenjabat) $this->lblTglMenjabat->Text = sprintf($this->objDataPegawai->TglMenjabat) ? $this->objDataPegawai->TglMenjabat->qFormat($this->strTglMenjabatDateTimeFormat) : null;

			if ($this->txtStatus) $this->txtStatus->Text = $this->objDataPegawai->Status;
			if ($this->lblStatus) $this->lblStatus->Text = $this->objDataPegawai->Status;

			if ($this->txtGolongan) $this->txtGolongan->Text = $this->objDataPegawai->Golongan;
			if ($this->lblGolongan) $this->lblGolongan->Text = $this->objDataPegawai->Golongan;

			if ($this->lstDataAnak) {
				$this->lstDataAnak->RemoveAllItems();
				$this->lstDataAnak->AddItem(QApplication::Translate('- Select One -'), null);
				$objDataAnakArray = DataAnak::LoadAll();
				if ($objDataAnakArray) foreach ($objDataAnakArray as $objDataAnak) {
					$objListItem = new QListItem($objDataAnak->__toString(), $objDataAnak->Nip);
					if ($objDataAnak->Nip == $this->objDataPegawai->Nip)
						$objListItem->Selected = true;
					$this->lstDataAnak->AddItem($objListItem);
				}
				// Because DataAnak's DataAnak is not null, if a value is already selected, it cannot be changed.
				if ($this->lstDataAnak->SelectedValue)
					$this->lstDataAnak->Enabled = false;
				else
					$this->lstDataAnak->Enabled = true;
			}
			if ($this->lblDataAnak) $this->lblDataAnak->Text = ($this->objDataPegawai->DataAnak) ? $this->objDataPegawai->DataAnak->__toString() : null;

			if ($this->lstDataDevMandiri) {
				$this->lstDataDevMandiri->RemoveAllItems();
				$this->lstDataDevMandiri->AddItem(QApplication::Translate('- Select One -'), null);
				$objDataDevMandiriArray = DataDevMandiri::LoadAll();
				if ($objDataDevMandiriArray) foreach ($objDataDevMandiriArray as $objDataDevMandiri) {
					$objListItem = new QListItem($objDataDevMandiri->__toString(), $objDataDevMandiri->Nip);
					if ($objDataDevMandiri->Nip == $this->objDataPegawai->Nip)
						$objListItem->Selected = true;
					$this->lstDataDevMandiri->AddItem($objListItem);
				}
				// Because DataDevMandiri's DataDevMandiri is not null, if a value is already selected, it cannot be changed.
				if ($this->lstDataDevMandiri->SelectedValue)
					$this->lstDataDevMandiri->Enabled = false;
				else
					$this->lstDataDevMandiri->Enabled = true;
			}
			if ($this->lblDataDevMandiri) $this->lblDataDevMandiri->Text = ($this->objDataPegawai->DataDevMandiri) ? $this->objDataPegawai->DataDevMandiri->__toString() : null;

			if ($this->lstDataDiklat) {
				$this->lstDataDiklat->RemoveAllItems();
				$this->lstDataDiklat->AddItem(QApplication::Translate('- Select One -'), null);
				$objDataDiklatArray = DataDiklat::LoadAll();
				if ($objDataDiklatArray) foreach ($objDataDiklatArray as $objDataDiklat) {
					$objListItem = new QListItem($objDataDiklat->__toString(), $objDataDiklat->Nip);
					if ($objDataDiklat->Nip == $this->objDataPegawai->Nip)
						$objListItem->Selected = true;
					$this->lstDataDiklat->AddItem($objListItem);
				}
				// Because DataDiklat's DataDiklat is not null, if a value is already selected, it cannot be changed.
				if ($this->lstDataDiklat->SelectedValue)
					$this->lstDataDiklat->Enabled = false;
				else
					$this->lstDataDiklat->Enabled = true;
			}
			if ($this->lblDataDiklat) $this->lblDataDiklat->Text = ($this->objDataPegawai->DataDiklat) ? $this->objDataPegawai->DataDiklat->__toString() : null;

			if ($this->lstDataOrganisasi) {
				$this->lstDataOrganisasi->RemoveAllItems();
				$this->lstDataOrganisasi->AddItem(QApplication::Translate('- Select One -'), null);
				$objDataOrganisasiArray = DataOrganisasi::LoadAll();
				if ($objDataOrganisasiArray) foreach ($objDataOrganisasiArray as $objDataOrganisasi) {
					$objListItem = new QListItem($objDataOrganisasi->__toString(), $objDataOrganisasi->Nip);
					if ($objDataOrganisasi->Nip == $this->objDataPegawai->Nip)
						$objListItem->Selected = true;
					$this->lstDataOrganisasi->AddItem($objListItem);
				}
				// Because DataOrganisasi's DataOrganisasi is not null, if a value is already selected, it cannot be changed.
				if ($this->lstDataOrganisasi->SelectedValue)
					$this->lstDataOrganisasi->Enabled = false;
				else
					$this->lstDataOrganisasi->Enabled = true;
			}
			if ($this->lblDataOrganisasi) $this->lblDataOrganisasi->Text = ($this->objDataPegawai->DataOrganisasi) ? $this->objDataPegawai->DataOrganisasi->__toString() : null;

			if ($this->lstDataPasangan) {
				$this->lstDataPasangan->RemoveAllItems();
				$this->lstDataPasangan->AddItem(QApplication::Translate('- Select One -'), null);
				$objDataPasanganArray = DataPasangan::LoadAll();
				if ($objDataPasanganArray) foreach ($objDataPasanganArray as $objDataPasangan) {
					$objListItem = new QListItem($objDataPasangan->__toString(), $objDataPasangan->Nip);
					if ($objDataPasangan->Nip == $this->objDataPegawai->Nip)
						$objListItem->Selected = true;
					$this->lstDataPasangan->AddItem($objListItem);
				}
				// Because DataPasangan's DataPasangan is not null, if a value is already selected, it cannot be changed.
				if ($this->lstDataPasangan->SelectedValue)
					$this->lstDataPasangan->Enabled = false;
				else
					$this->lstDataPasangan->Enabled = true;
			}
			if ($this->lblDataPasangan) $this->lblDataPasangan->Text = ($this->objDataPegawai->DataPasangan) ? $this->objDataPegawai->DataPasangan->__toString() : null;

			if ($this->lstDataPendidikan) {
				$this->lstDataPendidikan->RemoveAllItems();
				$this->lstDataPendidikan->AddItem(QApplication::Translate('- Select One -'), null);
				$objDataPendidikanArray = DataPendidikan::LoadAll();
				if ($objDataPendidikanArray) foreach ($objDataPendidikanArray as $objDataPendidikan) {
					$objListItem = new QListItem($objDataPendidikan->__toString(), $objDataPendidikan->Nip);
					if ($objDataPendidikan->Nip == $this->objDataPegawai->Nip)
						$objListItem->Selected = true;
					$this->lstDataPendidikan->AddItem($objListItem);
				}
				// Because DataPendidikan's DataPendidikan is not null, if a value is already selected, it cannot be changed.
				if ($this->lstDataPendidikan->SelectedValue)
					$this->lstDataPendidikan->Enabled = false;
				else
					$this->lstDataPendidikan->Enabled = true;
			}
			if ($this->lblDataPendidikan) $this->lblDataPendidikan->Text = ($this->objDataPegawai->DataPendidikan) ? $this->objDataPegawai->DataPendidikan->__toString() : null;

			if ($this->lstDataPengalaman) {
				$this->lstDataPengalaman->RemoveAllItems();
				$this->lstDataPengalaman->AddItem(QApplication::Translate('- Select One -'), null);
				$objDataPengalamanArray = DataPengalaman::LoadAll();
				if ($objDataPengalamanArray) foreach ($objDataPengalamanArray as $objDataPengalaman) {
					$objListItem = new QListItem($objDataPengalaman->__toString(), $objDataPengalaman->Nip);
					if ($objDataPengalaman->Nip == $this->objDataPegawai->Nip)
						$objListItem->Selected = true;
					$this->lstDataPengalaman->AddItem($objListItem);
				}
				// Because DataPengalaman's DataPengalaman is not null, if a value is already selected, it cannot be changed.
				if ($this->lstDataPengalaman->SelectedValue)
					$this->lstDataPengalaman->Enabled = false;
				else
					$this->lstDataPengalaman->Enabled = true;
			}
			if ($this->lblDataPengalaman) $this->lblDataPengalaman->Text = ($this->objDataPegawai->DataPengalaman) ? $this->objDataPegawai->DataPengalaman->__toString() : null;

			if ($this->lstDataPengalamanKerja) {
				$this->lstDataPengalamanKerja->RemoveAllItems();
				$this->lstDataPengalamanKerja->AddItem(QApplication::Translate('- Select One -'), null);
				$objDataPengalamanKerjaArray = DataPengalamanKerja::LoadAll();
				if ($objDataPengalamanKerjaArray) foreach ($objDataPengalamanKerjaArray as $objDataPengalamanKerja) {
					$objListItem = new QListItem($objDataPengalamanKerja->__toString(), $objDataPengalamanKerja->Nip);
					if ($objDataPengalamanKerja->Nip == $this->objDataPegawai->Nip)
						$objListItem->Selected = true;
					$this->lstDataPengalamanKerja->AddItem($objListItem);
				}
				// Because DataPengalamanKerja's DataPengalamanKerja is not null, if a value is already selected, it cannot be changed.
				if ($this->lstDataPengalamanKerja->SelectedValue)
					$this->lstDataPengalamanKerja->Enabled = false;
				else
					$this->lstDataPengalamanKerja->Enabled = true;
			}
			if ($this->lblDataPengalamanKerja) $this->lblDataPengalamanKerja->Text = ($this->objDataPegawai->DataPengalamanKerja) ? $this->objDataPegawai->DataPengalamanKerja->__toString() : null;

			if ($this->lstDataPenghargaanEks) {
				$this->lstDataPenghargaanEks->RemoveAllItems();
				$this->lstDataPenghargaanEks->AddItem(QApplication::Translate('- Select One -'), null);
				$objDataPenghargaanEksArray = DataPenghargaanEks::LoadAll();
				if ($objDataPenghargaanEksArray) foreach ($objDataPenghargaanEksArray as $objDataPenghargaanEks) {
					$objListItem = new QListItem($objDataPenghargaanEks->__toString(), $objDataPenghargaanEks->Nip);
					if ($objDataPenghargaanEks->Nip == $this->objDataPegawai->Nip)
						$objListItem->Selected = true;
					$this->lstDataPenghargaanEks->AddItem($objListItem);
				}
				// Because DataPenghargaanEks's DataPenghargaanEks is not null, if a value is already selected, it cannot be changed.
				if ($this->lstDataPenghargaanEks->SelectedValue)
					$this->lstDataPenghargaanEks->Enabled = false;
				else
					$this->lstDataPenghargaanEks->Enabled = true;
			}
			if ($this->lblDataPenghargaanEks) $this->lblDataPenghargaanEks->Text = ($this->objDataPegawai->DataPenghargaanEks) ? $this->objDataPegawai->DataPenghargaanEks->__toString() : null;

			if ($this->lstDataPenghargaanIn) {
				$this->lstDataPenghargaanIn->RemoveAllItems();
				$this->lstDataPenghargaanIn->AddItem(QApplication::Translate('- Select One -'), null);
				$objDataPenghargaanInArray = DataPenghargaanIn::LoadAll();
				if ($objDataPenghargaanInArray) foreach ($objDataPenghargaanInArray as $objDataPenghargaanIn) {
					$objListItem = new QListItem($objDataPenghargaanIn->__toString(), $objDataPenghargaanIn->Nip);
					if ($objDataPenghargaanIn->Nip == $this->objDataPegawai->Nip)
						$objListItem->Selected = true;
					$this->lstDataPenghargaanIn->AddItem($objListItem);
				}
				// Because DataPenghargaanIn's DataPenghargaanIn is not null, if a value is already selected, it cannot be changed.
				if ($this->lstDataPenghargaanIn->SelectedValue)
					$this->lstDataPenghargaanIn->Enabled = false;
				else
					$this->lstDataPenghargaanIn->Enabled = true;
			}
			if ($this->lblDataPenghargaanIn) $this->lblDataPenghargaanIn->Text = ($this->objDataPegawai->DataPenghargaanIn) ? $this->objDataPegawai->DataPenghargaanIn->__toString() : null;

			if ($this->lstDataPribadi) {
				$this->lstDataPribadi->RemoveAllItems();
				$this->lstDataPribadi->AddItem(QApplication::Translate('- Select One -'), null);
				$objDataPribadiArray = DataPribadi::LoadAll();
				if ($objDataPribadiArray) foreach ($objDataPribadiArray as $objDataPribadi) {
					$objListItem = new QListItem($objDataPribadi->__toString(), $objDataPribadi->Nip);
					if ($objDataPribadi->Nip == $this->objDataPegawai->Nip)
						$objListItem->Selected = true;
					$this->lstDataPribadi->AddItem($objListItem);
				}
				// Because DataPribadi's DataPribadi is not null, if a value is already selected, it cannot be changed.
				if ($this->lstDataPribadi->SelectedValue)
					$this->lstDataPribadi->Enabled = false;
				else
					$this->lstDataPribadi->Enabled = true;
			}
			if ($this->lblDataPribadi) $this->lblDataPribadi->Text = ($this->objDataPegawai->DataPribadi) ? $this->objDataPegawai->DataPribadi->__toString() : null;

			if ($this->lstDataRiwayatKerja) {
				$this->lstDataRiwayatKerja->RemoveAllItems();
				$this->lstDataRiwayatKerja->AddItem(QApplication::Translate('- Select One -'), null);
				$objDataRiwayatKerjaArray = DataRiwayatKerja::LoadAll();
				if ($objDataRiwayatKerjaArray) foreach ($objDataRiwayatKerjaArray as $objDataRiwayatKerja) {
					$objListItem = new QListItem($objDataRiwayatKerja->__toString(), $objDataRiwayatKerja->Nip);
					if ($objDataRiwayatKerja->Nip == $this->objDataPegawai->Nip)
						$objListItem->Selected = true;
					$this->lstDataRiwayatKerja->AddItem($objListItem);
				}
				// Because DataRiwayatKerja's DataRiwayatKerja is not null, if a value is already selected, it cannot be changed.
				if ($this->lstDataRiwayatKerja->SelectedValue)
					$this->lstDataRiwayatKerja->Enabled = false;
				else
					$this->lstDataRiwayatKerja->Enabled = true;
			}
			if ($this->lblDataRiwayatKerja) $this->lblDataRiwayatKerja->Text = ($this->objDataPegawai->DataRiwayatKerja) ? $this->objDataPegawai->DataRiwayatKerja->__toString() : null;

			if ($this->lstDataSanksi) {
				$this->lstDataSanksi->RemoveAllItems();
				$this->lstDataSanksi->AddItem(QApplication::Translate('- Select One -'), null);
				$objDataSanksiArray = DataSanksi::LoadAll();
				if ($objDataSanksiArray) foreach ($objDataSanksiArray as $objDataSanksi) {
					$objListItem = new QListItem($objDataSanksi->__toString(), $objDataSanksi->Nip);
					if ($objDataSanksi->Nip == $this->objDataPegawai->Nip)
						$objListItem->Selected = true;
					$this->lstDataSanksi->AddItem($objListItem);
				}
				// Because DataSanksi's DataSanksi is not null, if a value is already selected, it cannot be changed.
				if ($this->lstDataSanksi->SelectedValue)
					$this->lstDataSanksi->Enabled = false;
				else
					$this->lstDataSanksi->Enabled = true;
			}
			if ($this->lblDataSanksi) $this->lblDataSanksi->Text = ($this->objDataPegawai->DataSanksi) ? $this->objDataPegawai->DataSanksi->__toString() : null;

			if ($this->lstDataSkLain) {
				$this->lstDataSkLain->RemoveAllItems();
				$this->lstDataSkLain->AddItem(QApplication::Translate('- Select One -'), null);
				$objDataSkLainArray = DataSkLain::LoadAll();
				if ($objDataSkLainArray) foreach ($objDataSkLainArray as $objDataSkLain) {
					$objListItem = new QListItem($objDataSkLain->__toString(), $objDataSkLain->Nip);
					if ($objDataSkLain->Nip == $this->objDataPegawai->Nip)
						$objListItem->Selected = true;
					$this->lstDataSkLain->AddItem($objListItem);
				}
				// Because DataSkLain's DataSkLain is not null, if a value is already selected, it cannot be changed.
				if ($this->lstDataSkLain->SelectedValue)
					$this->lstDataSkLain->Enabled = false;
				else
					$this->lstDataSkLain->Enabled = true;
			}
			if ($this->lblDataSkLain) $this->lblDataSkLain->Text = ($this->objDataPegawai->DataSkLain) ? $this->objDataPegawai->DataSkLain->__toString() : null;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC DATAPEGAWAI OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's DataPegawai instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveDataPegawai() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtNip) $this->objDataPegawai->Nip = $this->txtNip->Text;
				if ($this->txtNama) $this->objDataPegawai->Nama = $this->txtNama->Text;
				if ($this->calTglAngkatCapeg) $this->objDataPegawai->TglAngkatCapeg = $this->calTglAngkatCapeg->DateTime;
				if ($this->calTglAngkatPeg) $this->objDataPegawai->TglAngkatPeg = $this->calTglAngkatPeg->DateTime;
				if ($this->calTglMenjabat) $this->objDataPegawai->TglMenjabat = $this->calTglMenjabat->DateTime;
				if ($this->txtStatus) $this->objDataPegawai->Status = $this->txtStatus->Text;
				if ($this->txtGolongan) $this->objDataPegawai->Golongan = $this->txtGolongan->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it
				if ($this->lstDataAnak) $this->objDataPegawai->DataAnak = DataAnak::Load($this->lstDataAnak->SelectedValue);
				if ($this->lstDataDevMandiri) $this->objDataPegawai->DataDevMandiri = DataDevMandiri::Load($this->lstDataDevMandiri->SelectedValue);
				if ($this->lstDataDiklat) $this->objDataPegawai->DataDiklat = DataDiklat::Load($this->lstDataDiklat->SelectedValue);
				if ($this->lstDataOrganisasi) $this->objDataPegawai->DataOrganisasi = DataOrganisasi::Load($this->lstDataOrganisasi->SelectedValue);
				if ($this->lstDataPasangan) $this->objDataPegawai->DataPasangan = DataPasangan::Load($this->lstDataPasangan->SelectedValue);
				if ($this->lstDataPendidikan) $this->objDataPegawai->DataPendidikan = DataPendidikan::Load($this->lstDataPendidikan->SelectedValue);
				if ($this->lstDataPengalaman) $this->objDataPegawai->DataPengalaman = DataPengalaman::Load($this->lstDataPengalaman->SelectedValue);
				if ($this->lstDataPengalamanKerja) $this->objDataPegawai->DataPengalamanKerja = DataPengalamanKerja::Load($this->lstDataPengalamanKerja->SelectedValue);
				if ($this->lstDataPenghargaanEks) $this->objDataPegawai->DataPenghargaanEks = DataPenghargaanEks::Load($this->lstDataPenghargaanEks->SelectedValue);
				if ($this->lstDataPenghargaanIn) $this->objDataPegawai->DataPenghargaanIn = DataPenghargaanIn::Load($this->lstDataPenghargaanIn->SelectedValue);
				if ($this->lstDataPribadi) $this->objDataPegawai->DataPribadi = DataPribadi::Load($this->lstDataPribadi->SelectedValue);
				if ($this->lstDataRiwayatKerja) $this->objDataPegawai->DataRiwayatKerja = DataRiwayatKerja::Load($this->lstDataRiwayatKerja->SelectedValue);
				if ($this->lstDataSanksi) $this->objDataPegawai->DataSanksi = DataSanksi::Load($this->lstDataSanksi->SelectedValue);
				if ($this->lstDataSkLain) $this->objDataPegawai->DataSkLain = DataSkLain::Load($this->lstDataSkLain->SelectedValue);

				// Save the DataPegawai object
				$this->objDataPegawai->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's DataPegawai instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteDataPegawai() {
			$this->objDataPegawai->Delete();
		}



		///////////////////////////////////////////////
		// PUBLIC GETTERS and SETTERS
		///////////////////////////////////////////////

		/**
		 * Override method to perform a property "Get"
		 * This will get the value of $strName
		 *
		 * @param string $strName Name of the property to get
		 * @return mixed
		 */
		public function __get($strName) {
			switch ($strName) {
				// General MetaControlVariables
				case 'DataPegawai': return $this->objDataPegawai;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to DataPegawai fields -- will be created dynamically if not yet created
				case 'NipControl':
					if (!$this->txtNip) return $this->txtNip_Create();
					return $this->txtNip;
				case 'NipLabel':
					if (!$this->lblNip) return $this->lblNip_Create();
					return $this->lblNip;
				case 'NamaControl':
					if (!$this->txtNama) return $this->txtNama_Create();
					return $this->txtNama;
				case 'NamaLabel':
					if (!$this->lblNama) return $this->lblNama_Create();
					return $this->lblNama;
				case 'TglAngkatCapegControl':
					if (!$this->calTglAngkatCapeg) return $this->calTglAngkatCapeg_Create();
					return $this->calTglAngkatCapeg;
				case 'TglAngkatCapegLabel':
					if (!$this->lblTglAngkatCapeg) return $this->lblTglAngkatCapeg_Create();
					return $this->lblTglAngkatCapeg;
				case 'TglAngkatPegControl':
					if (!$this->calTglAngkatPeg) return $this->calTglAngkatPeg_Create();
					return $this->calTglAngkatPeg;
				case 'TglAngkatPegLabel':
					if (!$this->lblTglAngkatPeg) return $this->lblTglAngkatPeg_Create();
					return $this->lblTglAngkatPeg;
				case 'TglMenjabatControl':
					if (!$this->calTglMenjabat) return $this->calTglMenjabat_Create();
					return $this->calTglMenjabat;
				case 'TglMenjabatLabel':
					if (!$this->lblTglMenjabat) return $this->lblTglMenjabat_Create();
					return $this->lblTglMenjabat;
				case 'StatusControl':
					if (!$this->txtStatus) return $this->txtStatus_Create();
					return $this->txtStatus;
				case 'StatusLabel':
					if (!$this->lblStatus) return $this->lblStatus_Create();
					return $this->lblStatus;
				case 'GolonganControl':
					if (!$this->txtGolongan) return $this->txtGolongan_Create();
					return $this->txtGolongan;
				case 'GolonganLabel':
					if (!$this->lblGolongan) return $this->lblGolongan_Create();
					return $this->lblGolongan;
				case 'DataAnakControl':
					if (!$this->lstDataAnak) return $this->lstDataAnak_Create();
					return $this->lstDataAnak;
				case 'DataAnakLabel':
					if (!$this->lblDataAnak) return $this->lblDataAnak_Create();
					return $this->lblDataAnak;
				case 'DataDevMandiriControl':
					if (!$this->lstDataDevMandiri) return $this->lstDataDevMandiri_Create();
					return $this->lstDataDevMandiri;
				case 'DataDevMandiriLabel':
					if (!$this->lblDataDevMandiri) return $this->lblDataDevMandiri_Create();
					return $this->lblDataDevMandiri;
				case 'DataDiklatControl':
					if (!$this->lstDataDiklat) return $this->lstDataDiklat_Create();
					return $this->lstDataDiklat;
				case 'DataDiklatLabel':
					if (!$this->lblDataDiklat) return $this->lblDataDiklat_Create();
					return $this->lblDataDiklat;
				case 'DataOrganisasiControl':
					if (!$this->lstDataOrganisasi) return $this->lstDataOrganisasi_Create();
					return $this->lstDataOrganisasi;
				case 'DataOrganisasiLabel':
					if (!$this->lblDataOrganisasi) return $this->lblDataOrganisasi_Create();
					return $this->lblDataOrganisasi;
				case 'DataPasanganControl':
					if (!$this->lstDataPasangan) return $this->lstDataPasangan_Create();
					return $this->lstDataPasangan;
				case 'DataPasanganLabel':
					if (!$this->lblDataPasangan) return $this->lblDataPasangan_Create();
					return $this->lblDataPasangan;
				case 'DataPendidikanControl':
					if (!$this->lstDataPendidikan) return $this->lstDataPendidikan_Create();
					return $this->lstDataPendidikan;
				case 'DataPendidikanLabel':
					if (!$this->lblDataPendidikan) return $this->lblDataPendidikan_Create();
					return $this->lblDataPendidikan;
				case 'DataPengalamanControl':
					if (!$this->lstDataPengalaman) return $this->lstDataPengalaman_Create();
					return $this->lstDataPengalaman;
				case 'DataPengalamanLabel':
					if (!$this->lblDataPengalaman) return $this->lblDataPengalaman_Create();
					return $this->lblDataPengalaman;
				case 'DataPengalamanKerjaControl':
					if (!$this->lstDataPengalamanKerja) return $this->lstDataPengalamanKerja_Create();
					return $this->lstDataPengalamanKerja;
				case 'DataPengalamanKerjaLabel':
					if (!$this->lblDataPengalamanKerja) return $this->lblDataPengalamanKerja_Create();
					return $this->lblDataPengalamanKerja;
				case 'DataPenghargaanEksControl':
					if (!$this->lstDataPenghargaanEks) return $this->lstDataPenghargaanEks_Create();
					return $this->lstDataPenghargaanEks;
				case 'DataPenghargaanEksLabel':
					if (!$this->lblDataPenghargaanEks) return $this->lblDataPenghargaanEks_Create();
					return $this->lblDataPenghargaanEks;
				case 'DataPenghargaanInControl':
					if (!$this->lstDataPenghargaanIn) return $this->lstDataPenghargaanIn_Create();
					return $this->lstDataPenghargaanIn;
				case 'DataPenghargaanInLabel':
					if (!$this->lblDataPenghargaanIn) return $this->lblDataPenghargaanIn_Create();
					return $this->lblDataPenghargaanIn;
				case 'DataPribadiControl':
					if (!$this->lstDataPribadi) return $this->lstDataPribadi_Create();
					return $this->lstDataPribadi;
				case 'DataPribadiLabel':
					if (!$this->lblDataPribadi) return $this->lblDataPribadi_Create();
					return $this->lblDataPribadi;
				case 'DataRiwayatKerjaControl':
					if (!$this->lstDataRiwayatKerja) return $this->lstDataRiwayatKerja_Create();
					return $this->lstDataRiwayatKerja;
				case 'DataRiwayatKerjaLabel':
					if (!$this->lblDataRiwayatKerja) return $this->lblDataRiwayatKerja_Create();
					return $this->lblDataRiwayatKerja;
				case 'DataSanksiControl':
					if (!$this->lstDataSanksi) return $this->lstDataSanksi_Create();
					return $this->lstDataSanksi;
				case 'DataSanksiLabel':
					if (!$this->lblDataSanksi) return $this->lblDataSanksi_Create();
					return $this->lblDataSanksi;
				case 'DataSkLainControl':
					if (!$this->lstDataSkLain) return $this->lstDataSkLain_Create();
					return $this->lstDataSkLain;
				case 'DataSkLainLabel':
					if (!$this->lblDataSkLain) return $this->lblDataSkLain_Create();
					return $this->lblDataSkLain;
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

		/**
		 * Override method to perform a property "Set"
		 * This will set the property $strName to be $mixValue
		 *
		 * @param string $strName Name of the property to set
		 * @param string $mixValue New value of the property
		 * @return mixed
		 */
		public function __set($strName, $mixValue) {
			try {
				switch ($strName) {
					// Controls that point to DataPegawai fields
					case 'NipControl':
						return ($this->txtNip = QType::Cast($mixValue, 'QControl'));
					case 'NamaControl':
						return ($this->txtNama = QType::Cast($mixValue, 'QControl'));
					case 'TglAngkatCapegControl':
						return ($this->calTglAngkatCapeg = QType::Cast($mixValue, 'QControl'));
					case 'TglAngkatPegControl':
						return ($this->calTglAngkatPeg = QType::Cast($mixValue, 'QControl'));
					case 'TglMenjabatControl':
						return ($this->calTglMenjabat = QType::Cast($mixValue, 'QControl'));
					case 'StatusControl':
						return ($this->txtStatus = QType::Cast($mixValue, 'QControl'));
					case 'GolonganControl':
						return ($this->txtGolongan = QType::Cast($mixValue, 'QControl'));
					case 'DataAnakControl':
						return ($this->lstDataAnak = QType::Cast($mixValue, 'QControl'));
					case 'DataDevMandiriControl':
						return ($this->lstDataDevMandiri = QType::Cast($mixValue, 'QControl'));
					case 'DataDiklatControl':
						return ($this->lstDataDiklat = QType::Cast($mixValue, 'QControl'));
					case 'DataOrganisasiControl':
						return ($this->lstDataOrganisasi = QType::Cast($mixValue, 'QControl'));
					case 'DataPasanganControl':
						return ($this->lstDataPasangan = QType::Cast($mixValue, 'QControl'));
					case 'DataPendidikanControl':
						return ($this->lstDataPendidikan = QType::Cast($mixValue, 'QControl'));
					case 'DataPengalamanControl':
						return ($this->lstDataPengalaman = QType::Cast($mixValue, 'QControl'));
					case 'DataPengalamanKerjaControl':
						return ($this->lstDataPengalamanKerja = QType::Cast($mixValue, 'QControl'));
					case 'DataPenghargaanEksControl':
						return ($this->lstDataPenghargaanEks = QType::Cast($mixValue, 'QControl'));
					case 'DataPenghargaanInControl':
						return ($this->lstDataPenghargaanIn = QType::Cast($mixValue, 'QControl'));
					case 'DataPribadiControl':
						return ($this->lstDataPribadi = QType::Cast($mixValue, 'QControl'));
					case 'DataRiwayatKerjaControl':
						return ($this->lstDataRiwayatKerja = QType::Cast($mixValue, 'QControl'));
					case 'DataSanksiControl':
						return ($this->lstDataSanksi = QType::Cast($mixValue, 'QControl'));
					case 'DataSkLainControl':
						return ($this->lstDataSkLain = QType::Cast($mixValue, 'QControl'));
					default:
						return parent::__set($strName, $mixValue);
				}
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}
	}
?>