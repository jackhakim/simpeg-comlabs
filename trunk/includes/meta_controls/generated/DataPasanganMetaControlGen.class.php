<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the DataPasangan class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single DataPasangan object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a DataPasanganMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 *
	 * @package My QCubed Application
	 * @subpackage MetaControls
	 * @property-read DataPasangan $DataPasangan the actual DataPasangan data class being edited
	 * @property QListBox $NipControl
	 * @property-read QLabel $NipLabel
	 * @property QTextBox $NamaPasanganControl
	 * @property-read QLabel $NamaPasanganLabel
	 * @property QTextBox $TempatLahirControl
	 * @property-read QLabel $TempatLahirLabel
	 * @property QDateTimePicker $TglLahirControl
	 * @property-read QLabel $TglLahirLabel
	 * @property QTextBox $AgamaControl
	 * @property-read QLabel $AgamaLabel
	 * @property QTextBox $StatusNikahControl
	 * @property-read QLabel $StatusNikahLabel
	 * @property QIntegerTextBox $JumTanggunganControl
	 * @property-read QLabel $JumTanggunganLabel
	 * @property QTextBox $AlamatControl
	 * @property-read QLabel $AlamatLabel
	 * @property QTextBox $NamaBapakControl
	 * @property-read QLabel $NamaBapakLabel
	 * @property QTextBox $NamaIbuControl
	 * @property-read QLabel $NamaIbuLabel
	 * @property QTextBox $PendidikanTerakhirControl
	 * @property-read QLabel $PendidikanTerakhirLabel
	 * @property QDateTimePicker $TglNikahControl
	 * @property-read QLabel $TglNikahLabel
	 * @property QDateTimePicker $TglCeraiControl
	 * @property-read QLabel $TglCeraiLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class DataPasanganMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var DataPasangan objDataPasangan
		 * @access protected
		 */
		protected $objDataPasangan;
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

		// Controls that allow the editing of DataPasangan's individual data fields
		/**
		 * @var QListBox lstNipObject
		 * @access protected
		 */
		protected $lstNipObject;
		/**
		 * @var QTextBox txtNamaPasangan
		 * @access protected
		 */
		protected $txtNamaPasangan;
		/**
		 * @var QTextBox txtTempatLahir
		 * @access protected
		 */
		protected $txtTempatLahir;
		/**
		 * @var QDateTimePicker calTglLahir
		 * @access protected
		 */
		protected $calTglLahir;
		/**
		 * @var QTextBox txtAgama
		 * @access protected
		 */
		protected $txtAgama;
		/**
		 * @var QTextBox txtStatusNikah
		 * @access protected
		 */
		protected $txtStatusNikah;
		/**
		 * @var QIntegerTextBox txtJumTanggungan
		 * @access protected
		 */
		protected $txtJumTanggungan;
		/**
		 * @var QTextBox txtAlamat
		 * @access protected
		 */
		protected $txtAlamat;
		/**
		 * @var QTextBox txtNamaBapak
		 * @access protected
		 */
		protected $txtNamaBapak;
		/**
		 * @var QTextBox txtNamaIbu
		 * @access protected
		 */
		protected $txtNamaIbu;
		/**
		 * @var QTextBox txtPendidikanTerakhir
		 * @access protected
		 */
		protected $txtPendidikanTerakhir;
		/**
		 * @var QDateTimePicker calTglNikah
		 * @access protected
		 */
		protected $calTglNikah;
		/**
		 * @var QDateTimePicker calTglCerai
		 * @access protected
		 */
		protected $calTglCerai;

		// Controls that allow the viewing of DataPasangan's individual data fields
		/**
		 * @var QLabel lblNip
		 * @access protected
		 */
		protected $lblNip;
		/**
		 * @var QLabel lblNamaPasangan
		 * @access protected
		 */
		protected $lblNamaPasangan;
		/**
		 * @var QLabel lblTempatLahir
		 * @access protected
		 */
		protected $lblTempatLahir;
		/**
		 * @var QLabel lblTglLahir
		 * @access protected
		 */
		protected $lblTglLahir;
		/**
		 * @var QLabel lblAgama
		 * @access protected
		 */
		protected $lblAgama;
		/**
		 * @var QLabel lblStatusNikah
		 * @access protected
		 */
		protected $lblStatusNikah;
		/**
		 * @var QLabel lblJumTanggungan
		 * @access protected
		 */
		protected $lblJumTanggungan;
		/**
		 * @var QLabel lblAlamat
		 * @access protected
		 */
		protected $lblAlamat;
		/**
		 * @var QLabel lblNamaBapak
		 * @access protected
		 */
		protected $lblNamaBapak;
		/**
		 * @var QLabel lblNamaIbu
		 * @access protected
		 */
		protected $lblNamaIbu;
		/**
		 * @var QLabel lblPendidikanTerakhir
		 * @access protected
		 */
		protected $lblPendidikanTerakhir;
		/**
		 * @var QLabel lblTglNikah
		 * @access protected
		 */
		protected $lblTglNikah;
		/**
		 * @var QLabel lblTglCerai
		 * @access protected
		 */
		protected $lblTglCerai;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * DataPasanganMetaControl to edit a single DataPasangan object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single DataPasangan object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this DataPasanganMetaControl
		 * @param DataPasangan $objDataPasangan new or existing DataPasangan object
		 */
		 public function __construct($objParentObject, DataPasangan $objDataPasangan) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this DataPasanganMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked DataPasangan object
			$this->objDataPasangan = $objDataPasangan;

			// Figure out if we're Editing or Creating New
			if ($this->objDataPasangan->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this DataPasanganMetaControl
		 * @param string $strNip primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing DataPasangan object creation - defaults to CreateOrEdit
 		 * @return DataPasanganMetaControl
		 */
		public static function Create($objParentObject, $strNip = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($strNip)) {
				$objDataPasangan = DataPasangan::Load($strNip);

				// DataPasangan was found -- return it!
				if ($objDataPasangan)
					return new DataPasanganMetaControl($objParentObject, $objDataPasangan);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a DataPasangan object with PK arguments: ' . $strNip);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new DataPasanganMetaControl($objParentObject, new DataPasangan());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this DataPasanganMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing DataPasangan object creation - defaults to CreateOrEdit
		 * @return DataPasanganMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$strNip = QApplication::PathInfo(0);
			return DataPasanganMetaControl::Create($objParentObject, $strNip, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this DataPasanganMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing DataPasangan object creation - defaults to CreateOrEdit
		 * @return DataPasanganMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$strNip = QApplication::QueryString('strNip');
			return DataPasanganMetaControl::Create($objParentObject, $strNip, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QListBox lstNipObject
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstNipObject_Create($strControlId = null) {
			$this->lstNipObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstNipObject->Name = QApplication::Translate('Nip Object');
			$this->lstNipObject->Required = true;
			if (!$this->blnEditMode)
				$this->lstNipObject->AddItem(QApplication::Translate('- Select One -'), null);
			$objNipObjectArray = DataPegawai::LoadAll();
			if ($objNipObjectArray) foreach ($objNipObjectArray as $objNipObject) {
				$objListItem = new QListItem($objNipObject->__toString(), $objNipObject->Nip);
				if (($this->objDataPasangan->NipObject) && ($this->objDataPasangan->NipObject->Nip == $objNipObject->Nip))
					$objListItem->Selected = true;
				$this->lstNipObject->AddItem($objListItem);
			}
			return $this->lstNipObject;
		}

		/**
		 * Create and setup QLabel lblNip
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblNip_Create($strControlId = null) {
			$this->lblNip = new QLabel($this->objParentObject, $strControlId);
			$this->lblNip->Name = QApplication::Translate('Nip Object');
			$this->lblNip->Text = ($this->objDataPasangan->NipObject) ? $this->objDataPasangan->NipObject->__toString() : null;
			$this->lblNip->Required = true;
			return $this->lblNip;
		}

		/**
		 * Create and setup QTextBox txtNamaPasangan
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNamaPasangan_Create($strControlId = null) {
			$this->txtNamaPasangan = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNamaPasangan->Name = QApplication::Translate('Nama Pasangan');
			$this->txtNamaPasangan->Text = $this->objDataPasangan->NamaPasangan;
			$this->txtNamaPasangan->MaxLength = DataPasangan::NamaPasanganMaxLength;
			return $this->txtNamaPasangan;
		}

		/**
		 * Create and setup QLabel lblNamaPasangan
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblNamaPasangan_Create($strControlId = null) {
			$this->lblNamaPasangan = new QLabel($this->objParentObject, $strControlId);
			$this->lblNamaPasangan->Name = QApplication::Translate('Nama Pasangan');
			$this->lblNamaPasangan->Text = $this->objDataPasangan->NamaPasangan;
			return $this->lblNamaPasangan;
		}

		/**
		 * Create and setup QTextBox txtTempatLahir
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtTempatLahir_Create($strControlId = null) {
			$this->txtTempatLahir = new QTextBox($this->objParentObject, $strControlId);
			$this->txtTempatLahir->Name = QApplication::Translate('Tempat Lahir');
			$this->txtTempatLahir->Text = $this->objDataPasangan->TempatLahir;
			$this->txtTempatLahir->MaxLength = DataPasangan::TempatLahirMaxLength;
			return $this->txtTempatLahir;
		}

		/**
		 * Create and setup QLabel lblTempatLahir
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblTempatLahir_Create($strControlId = null) {
			$this->lblTempatLahir = new QLabel($this->objParentObject, $strControlId);
			$this->lblTempatLahir->Name = QApplication::Translate('Tempat Lahir');
			$this->lblTempatLahir->Text = $this->objDataPasangan->TempatLahir;
			return $this->lblTempatLahir;
		}

		/**
		 * Create and setup QDateTimePicker calTglLahir
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calTglLahir_Create($strControlId = null) {
			$this->calTglLahir = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calTglLahir->Name = QApplication::Translate('Tgl Lahir');
			$this->calTglLahir->DateTime = $this->objDataPasangan->TglLahir;
			$this->calTglLahir->DateTimePickerType = QDateTimePickerType::Date;
			return $this->calTglLahir;
		}

		/**
		 * Create and setup QLabel lblTglLahir
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat optional DateTimeFormat to use
		 * @return QLabel
		 */
		public function lblTglLahir_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblTglLahir = new QLabel($this->objParentObject, $strControlId);
			$this->lblTglLahir->Name = QApplication::Translate('Tgl Lahir');
			$this->strTglLahirDateTimeFormat = $strDateTimeFormat;
			$this->lblTglLahir->Text = sprintf($this->objDataPasangan->TglLahir) ? $this->objDataPasangan->TglLahir->qFormat($this->strTglLahirDateTimeFormat) : null;
			return $this->lblTglLahir;
		}

		protected $strTglLahirDateTimeFormat;


		/**
		 * Create and setup QTextBox txtAgama
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtAgama_Create($strControlId = null) {
			$this->txtAgama = new QTextBox($this->objParentObject, $strControlId);
			$this->txtAgama->Name = QApplication::Translate('Agama');
			$this->txtAgama->Text = $this->objDataPasangan->Agama;
			$this->txtAgama->MaxLength = DataPasangan::AgamaMaxLength;
			return $this->txtAgama;
		}

		/**
		 * Create and setup QLabel lblAgama
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblAgama_Create($strControlId = null) {
			$this->lblAgama = new QLabel($this->objParentObject, $strControlId);
			$this->lblAgama->Name = QApplication::Translate('Agama');
			$this->lblAgama->Text = $this->objDataPasangan->Agama;
			return $this->lblAgama;
		}

		/**
		 * Create and setup QTextBox txtStatusNikah
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtStatusNikah_Create($strControlId = null) {
			$this->txtStatusNikah = new QTextBox($this->objParentObject, $strControlId);
			$this->txtStatusNikah->Name = QApplication::Translate('Status Nikah');
			$this->txtStatusNikah->Text = $this->objDataPasangan->StatusNikah;
			return $this->txtStatusNikah;
		}

		/**
		 * Create and setup QLabel lblStatusNikah
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblStatusNikah_Create($strControlId = null) {
			$this->lblStatusNikah = new QLabel($this->objParentObject, $strControlId);
			$this->lblStatusNikah->Name = QApplication::Translate('Status Nikah');
			$this->lblStatusNikah->Text = $this->objDataPasangan->StatusNikah;
			return $this->lblStatusNikah;
		}

		/**
		 * Create and setup QIntegerTextBox txtJumTanggungan
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtJumTanggungan_Create($strControlId = null) {
			$this->txtJumTanggungan = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtJumTanggungan->Name = QApplication::Translate('Jum Tanggungan');
			$this->txtJumTanggungan->Text = $this->objDataPasangan->JumTanggungan;
			return $this->txtJumTanggungan;
		}

		/**
		 * Create and setup QLabel lblJumTanggungan
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblJumTanggungan_Create($strControlId = null, $strFormat = null) {
			$this->lblJumTanggungan = new QLabel($this->objParentObject, $strControlId);
			$this->lblJumTanggungan->Name = QApplication::Translate('Jum Tanggungan');
			$this->lblJumTanggungan->Text = $this->objDataPasangan->JumTanggungan;
			$this->lblJumTanggungan->Format = $strFormat;
			return $this->lblJumTanggungan;
		}

		/**
		 * Create and setup QTextBox txtAlamat
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtAlamat_Create($strControlId = null) {
			$this->txtAlamat = new QTextBox($this->objParentObject, $strControlId);
			$this->txtAlamat->Name = QApplication::Translate('Alamat');
			$this->txtAlamat->Text = $this->objDataPasangan->Alamat;
			$this->txtAlamat->TextMode = QTextMode::MultiLine;
			return $this->txtAlamat;
		}

		/**
		 * Create and setup QLabel lblAlamat
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblAlamat_Create($strControlId = null) {
			$this->lblAlamat = new QLabel($this->objParentObject, $strControlId);
			$this->lblAlamat->Name = QApplication::Translate('Alamat');
			$this->lblAlamat->Text = $this->objDataPasangan->Alamat;
			return $this->lblAlamat;
		}

		/**
		 * Create and setup QTextBox txtNamaBapak
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNamaBapak_Create($strControlId = null) {
			$this->txtNamaBapak = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNamaBapak->Name = QApplication::Translate('Nama Bapak');
			$this->txtNamaBapak->Text = $this->objDataPasangan->NamaBapak;
			$this->txtNamaBapak->MaxLength = DataPasangan::NamaBapakMaxLength;
			return $this->txtNamaBapak;
		}

		/**
		 * Create and setup QLabel lblNamaBapak
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblNamaBapak_Create($strControlId = null) {
			$this->lblNamaBapak = new QLabel($this->objParentObject, $strControlId);
			$this->lblNamaBapak->Name = QApplication::Translate('Nama Bapak');
			$this->lblNamaBapak->Text = $this->objDataPasangan->NamaBapak;
			return $this->lblNamaBapak;
		}

		/**
		 * Create and setup QTextBox txtNamaIbu
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNamaIbu_Create($strControlId = null) {
			$this->txtNamaIbu = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNamaIbu->Name = QApplication::Translate('Nama Ibu');
			$this->txtNamaIbu->Text = $this->objDataPasangan->NamaIbu;
			$this->txtNamaIbu->MaxLength = DataPasangan::NamaIbuMaxLength;
			return $this->txtNamaIbu;
		}

		/**
		 * Create and setup QLabel lblNamaIbu
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblNamaIbu_Create($strControlId = null) {
			$this->lblNamaIbu = new QLabel($this->objParentObject, $strControlId);
			$this->lblNamaIbu->Name = QApplication::Translate('Nama Ibu');
			$this->lblNamaIbu->Text = $this->objDataPasangan->NamaIbu;
			return $this->lblNamaIbu;
		}

		/**
		 * Create and setup QTextBox txtPendidikanTerakhir
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtPendidikanTerakhir_Create($strControlId = null) {
			$this->txtPendidikanTerakhir = new QTextBox($this->objParentObject, $strControlId);
			$this->txtPendidikanTerakhir->Name = QApplication::Translate('Pendidikan Terakhir');
			$this->txtPendidikanTerakhir->Text = $this->objDataPasangan->PendidikanTerakhir;
			$this->txtPendidikanTerakhir->MaxLength = DataPasangan::PendidikanTerakhirMaxLength;
			return $this->txtPendidikanTerakhir;
		}

		/**
		 * Create and setup QLabel lblPendidikanTerakhir
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblPendidikanTerakhir_Create($strControlId = null) {
			$this->lblPendidikanTerakhir = new QLabel($this->objParentObject, $strControlId);
			$this->lblPendidikanTerakhir->Name = QApplication::Translate('Pendidikan Terakhir');
			$this->lblPendidikanTerakhir->Text = $this->objDataPasangan->PendidikanTerakhir;
			return $this->lblPendidikanTerakhir;
		}

		/**
		 * Create and setup QDateTimePicker calTglNikah
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calTglNikah_Create($strControlId = null) {
			$this->calTglNikah = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calTglNikah->Name = QApplication::Translate('Tgl Nikah');
			$this->calTglNikah->DateTime = $this->objDataPasangan->TglNikah;
			$this->calTglNikah->DateTimePickerType = QDateTimePickerType::Date;
			return $this->calTglNikah;
		}

		/**
		 * Create and setup QLabel lblTglNikah
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat optional DateTimeFormat to use
		 * @return QLabel
		 */
		public function lblTglNikah_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblTglNikah = new QLabel($this->objParentObject, $strControlId);
			$this->lblTglNikah->Name = QApplication::Translate('Tgl Nikah');
			$this->strTglNikahDateTimeFormat = $strDateTimeFormat;
			$this->lblTglNikah->Text = sprintf($this->objDataPasangan->TglNikah) ? $this->objDataPasangan->TglNikah->qFormat($this->strTglNikahDateTimeFormat) : null;
			return $this->lblTglNikah;
		}

		protected $strTglNikahDateTimeFormat;


		/**
		 * Create and setup QDateTimePicker calTglCerai
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calTglCerai_Create($strControlId = null) {
			$this->calTglCerai = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calTglCerai->Name = QApplication::Translate('Tgl Cerai');
			$this->calTglCerai->DateTime = $this->objDataPasangan->TglCerai;
			$this->calTglCerai->DateTimePickerType = QDateTimePickerType::Date;
			return $this->calTglCerai;
		}

		/**
		 * Create and setup QLabel lblTglCerai
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat optional DateTimeFormat to use
		 * @return QLabel
		 */
		public function lblTglCerai_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblTglCerai = new QLabel($this->objParentObject, $strControlId);
			$this->lblTglCerai->Name = QApplication::Translate('Tgl Cerai');
			$this->strTglCeraiDateTimeFormat = $strDateTimeFormat;
			$this->lblTglCerai->Text = sprintf($this->objDataPasangan->TglCerai) ? $this->objDataPasangan->TglCerai->qFormat($this->strTglCeraiDateTimeFormat) : null;
			return $this->lblTglCerai;
		}

		protected $strTglCeraiDateTimeFormat;




		/**
		 * Refresh this MetaControl with Data from the local DataPasangan object.
		 * @param boolean $blnReload reload DataPasangan from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objDataPasangan->Reload();

			if ($this->lstNipObject) {
					$this->lstNipObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstNipObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objNipObjectArray = DataPegawai::LoadAll();
				if ($objNipObjectArray) foreach ($objNipObjectArray as $objNipObject) {
					$objListItem = new QListItem($objNipObject->__toString(), $objNipObject->Nip);
					if (($this->objDataPasangan->NipObject) && ($this->objDataPasangan->NipObject->Nip == $objNipObject->Nip))
						$objListItem->Selected = true;
					$this->lstNipObject->AddItem($objListItem);
				}
			}
			if ($this->lblNip) $this->lblNip->Text = ($this->objDataPasangan->NipObject) ? $this->objDataPasangan->NipObject->__toString() : null;

			if ($this->txtNamaPasangan) $this->txtNamaPasangan->Text = $this->objDataPasangan->NamaPasangan;
			if ($this->lblNamaPasangan) $this->lblNamaPasangan->Text = $this->objDataPasangan->NamaPasangan;

			if ($this->txtTempatLahir) $this->txtTempatLahir->Text = $this->objDataPasangan->TempatLahir;
			if ($this->lblTempatLahir) $this->lblTempatLahir->Text = $this->objDataPasangan->TempatLahir;

			if ($this->calTglLahir) $this->calTglLahir->DateTime = $this->objDataPasangan->TglLahir;
			if ($this->lblTglLahir) $this->lblTglLahir->Text = sprintf($this->objDataPasangan->TglLahir) ? $this->objDataPasangan->TglLahir->qFormat($this->strTglLahirDateTimeFormat) : null;

			if ($this->txtAgama) $this->txtAgama->Text = $this->objDataPasangan->Agama;
			if ($this->lblAgama) $this->lblAgama->Text = $this->objDataPasangan->Agama;

			if ($this->txtStatusNikah) $this->txtStatusNikah->Text = $this->objDataPasangan->StatusNikah;
			if ($this->lblStatusNikah) $this->lblStatusNikah->Text = $this->objDataPasangan->StatusNikah;

			if ($this->txtJumTanggungan) $this->txtJumTanggungan->Text = $this->objDataPasangan->JumTanggungan;
			if ($this->lblJumTanggungan) $this->lblJumTanggungan->Text = $this->objDataPasangan->JumTanggungan;

			if ($this->txtAlamat) $this->txtAlamat->Text = $this->objDataPasangan->Alamat;
			if ($this->lblAlamat) $this->lblAlamat->Text = $this->objDataPasangan->Alamat;

			if ($this->txtNamaBapak) $this->txtNamaBapak->Text = $this->objDataPasangan->NamaBapak;
			if ($this->lblNamaBapak) $this->lblNamaBapak->Text = $this->objDataPasangan->NamaBapak;

			if ($this->txtNamaIbu) $this->txtNamaIbu->Text = $this->objDataPasangan->NamaIbu;
			if ($this->lblNamaIbu) $this->lblNamaIbu->Text = $this->objDataPasangan->NamaIbu;

			if ($this->txtPendidikanTerakhir) $this->txtPendidikanTerakhir->Text = $this->objDataPasangan->PendidikanTerakhir;
			if ($this->lblPendidikanTerakhir) $this->lblPendidikanTerakhir->Text = $this->objDataPasangan->PendidikanTerakhir;

			if ($this->calTglNikah) $this->calTglNikah->DateTime = $this->objDataPasangan->TglNikah;
			if ($this->lblTglNikah) $this->lblTglNikah->Text = sprintf($this->objDataPasangan->TglNikah) ? $this->objDataPasangan->TglNikah->qFormat($this->strTglNikahDateTimeFormat) : null;

			if ($this->calTglCerai) $this->calTglCerai->DateTime = $this->objDataPasangan->TglCerai;
			if ($this->lblTglCerai) $this->lblTglCerai->Text = sprintf($this->objDataPasangan->TglCerai) ? $this->objDataPasangan->TglCerai->qFormat($this->strTglCeraiDateTimeFormat) : null;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC DATAPASANGAN OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's DataPasangan instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveDataPasangan() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstNipObject) $this->objDataPasangan->Nip = $this->lstNipObject->SelectedValue;
				if ($this->txtNamaPasangan) $this->objDataPasangan->NamaPasangan = $this->txtNamaPasangan->Text;
				if ($this->txtTempatLahir) $this->objDataPasangan->TempatLahir = $this->txtTempatLahir->Text;
				if ($this->calTglLahir) $this->objDataPasangan->TglLahir = $this->calTglLahir->DateTime;
				if ($this->txtAgama) $this->objDataPasangan->Agama = $this->txtAgama->Text;
				if ($this->txtStatusNikah) $this->objDataPasangan->StatusNikah = $this->txtStatusNikah->Text;
				if ($this->txtJumTanggungan) $this->objDataPasangan->JumTanggungan = $this->txtJumTanggungan->Text;
				if ($this->txtAlamat) $this->objDataPasangan->Alamat = $this->txtAlamat->Text;
				if ($this->txtNamaBapak) $this->objDataPasangan->NamaBapak = $this->txtNamaBapak->Text;
				if ($this->txtNamaIbu) $this->objDataPasangan->NamaIbu = $this->txtNamaIbu->Text;
				if ($this->txtPendidikanTerakhir) $this->objDataPasangan->PendidikanTerakhir = $this->txtPendidikanTerakhir->Text;
				if ($this->calTglNikah) $this->objDataPasangan->TglNikah = $this->calTglNikah->DateTime;
				if ($this->calTglCerai) $this->objDataPasangan->TglCerai = $this->calTglCerai->DateTime;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the DataPasangan object
				$this->objDataPasangan->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's DataPasangan instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteDataPasangan() {
			$this->objDataPasangan->Delete();
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
				case 'DataPasangan': return $this->objDataPasangan;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to DataPasangan fields -- will be created dynamically if not yet created
				case 'NipControl':
					if (!$this->lstNipObject) return $this->lstNipObject_Create();
					return $this->lstNipObject;
				case 'NipLabel':
					if (!$this->lblNip) return $this->lblNip_Create();
					return $this->lblNip;
				case 'NamaPasanganControl':
					if (!$this->txtNamaPasangan) return $this->txtNamaPasangan_Create();
					return $this->txtNamaPasangan;
				case 'NamaPasanganLabel':
					if (!$this->lblNamaPasangan) return $this->lblNamaPasangan_Create();
					return $this->lblNamaPasangan;
				case 'TempatLahirControl':
					if (!$this->txtTempatLahir) return $this->txtTempatLahir_Create();
					return $this->txtTempatLahir;
				case 'TempatLahirLabel':
					if (!$this->lblTempatLahir) return $this->lblTempatLahir_Create();
					return $this->lblTempatLahir;
				case 'TglLahirControl':
					if (!$this->calTglLahir) return $this->calTglLahir_Create();
					return $this->calTglLahir;
				case 'TglLahirLabel':
					if (!$this->lblTglLahir) return $this->lblTglLahir_Create();
					return $this->lblTglLahir;
				case 'AgamaControl':
					if (!$this->txtAgama) return $this->txtAgama_Create();
					return $this->txtAgama;
				case 'AgamaLabel':
					if (!$this->lblAgama) return $this->lblAgama_Create();
					return $this->lblAgama;
				case 'StatusNikahControl':
					if (!$this->txtStatusNikah) return $this->txtStatusNikah_Create();
					return $this->txtStatusNikah;
				case 'StatusNikahLabel':
					if (!$this->lblStatusNikah) return $this->lblStatusNikah_Create();
					return $this->lblStatusNikah;
				case 'JumTanggunganControl':
					if (!$this->txtJumTanggungan) return $this->txtJumTanggungan_Create();
					return $this->txtJumTanggungan;
				case 'JumTanggunganLabel':
					if (!$this->lblJumTanggungan) return $this->lblJumTanggungan_Create();
					return $this->lblJumTanggungan;
				case 'AlamatControl':
					if (!$this->txtAlamat) return $this->txtAlamat_Create();
					return $this->txtAlamat;
				case 'AlamatLabel':
					if (!$this->lblAlamat) return $this->lblAlamat_Create();
					return $this->lblAlamat;
				case 'NamaBapakControl':
					if (!$this->txtNamaBapak) return $this->txtNamaBapak_Create();
					return $this->txtNamaBapak;
				case 'NamaBapakLabel':
					if (!$this->lblNamaBapak) return $this->lblNamaBapak_Create();
					return $this->lblNamaBapak;
				case 'NamaIbuControl':
					if (!$this->txtNamaIbu) return $this->txtNamaIbu_Create();
					return $this->txtNamaIbu;
				case 'NamaIbuLabel':
					if (!$this->lblNamaIbu) return $this->lblNamaIbu_Create();
					return $this->lblNamaIbu;
				case 'PendidikanTerakhirControl':
					if (!$this->txtPendidikanTerakhir) return $this->txtPendidikanTerakhir_Create();
					return $this->txtPendidikanTerakhir;
				case 'PendidikanTerakhirLabel':
					if (!$this->lblPendidikanTerakhir) return $this->lblPendidikanTerakhir_Create();
					return $this->lblPendidikanTerakhir;
				case 'TglNikahControl':
					if (!$this->calTglNikah) return $this->calTglNikah_Create();
					return $this->calTglNikah;
				case 'TglNikahLabel':
					if (!$this->lblTglNikah) return $this->lblTglNikah_Create();
					return $this->lblTglNikah;
				case 'TglCeraiControl':
					if (!$this->calTglCerai) return $this->calTglCerai_Create();
					return $this->calTglCerai;
				case 'TglCeraiLabel':
					if (!$this->lblTglCerai) return $this->lblTglCerai_Create();
					return $this->lblTglCerai;
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
					// Controls that point to DataPasangan fields
					case 'NipControl':
						return ($this->lstNipObject = QType::Cast($mixValue, 'QControl'));
					case 'NamaPasanganControl':
						return ($this->txtNamaPasangan = QType::Cast($mixValue, 'QControl'));
					case 'TempatLahirControl':
						return ($this->txtTempatLahir = QType::Cast($mixValue, 'QControl'));
					case 'TglLahirControl':
						return ($this->calTglLahir = QType::Cast($mixValue, 'QControl'));
					case 'AgamaControl':
						return ($this->txtAgama = QType::Cast($mixValue, 'QControl'));
					case 'StatusNikahControl':
						return ($this->txtStatusNikah = QType::Cast($mixValue, 'QControl'));
					case 'JumTanggunganControl':
						return ($this->txtJumTanggungan = QType::Cast($mixValue, 'QControl'));
					case 'AlamatControl':
						return ($this->txtAlamat = QType::Cast($mixValue, 'QControl'));
					case 'NamaBapakControl':
						return ($this->txtNamaBapak = QType::Cast($mixValue, 'QControl'));
					case 'NamaIbuControl':
						return ($this->txtNamaIbu = QType::Cast($mixValue, 'QControl'));
					case 'PendidikanTerakhirControl':
						return ($this->txtPendidikanTerakhir = QType::Cast($mixValue, 'QControl'));
					case 'TglNikahControl':
						return ($this->calTglNikah = QType::Cast($mixValue, 'QControl'));
					case 'TglCeraiControl':
						return ($this->calTglCerai = QType::Cast($mixValue, 'QControl'));
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