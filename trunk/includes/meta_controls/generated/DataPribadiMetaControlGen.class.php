<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the DataPribadi class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single DataPribadi object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a DataPribadiMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 *
	 * @package My QCubed Application
	 * @subpackage MetaControls
	 * @property-read DataPribadi $DataPribadi the actual DataPribadi data class being edited
	 * @property QListBox $NipControl
	 * @property-read QLabel $NipLabel
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
	 * @property QTextBox $JenisKelaminControl
	 * @property-read QLabel $JenisKelaminLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class DataPribadiMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var DataPribadi objDataPribadi
		 * @access protected
		 */
		protected $objDataPribadi;
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

		// Controls that allow the editing of DataPribadi's individual data fields
		/**
		 * @var QListBox lstNipObject
		 * @access protected
		 */
		protected $lstNipObject;
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
		 * @var QTextBox txtJenisKelamin
		 * @access protected
		 */
		protected $txtJenisKelamin;

		// Controls that allow the viewing of DataPribadi's individual data fields
		/**
		 * @var QLabel lblNip
		 * @access protected
		 */
		protected $lblNip;
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
		 * @var QLabel lblJenisKelamin
		 * @access protected
		 */
		protected $lblJenisKelamin;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * DataPribadiMetaControl to edit a single DataPribadi object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single DataPribadi object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this DataPribadiMetaControl
		 * @param DataPribadi $objDataPribadi new or existing DataPribadi object
		 */
		 public function __construct($objParentObject, DataPribadi $objDataPribadi) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this DataPribadiMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked DataPribadi object
			$this->objDataPribadi = $objDataPribadi;

			// Figure out if we're Editing or Creating New
			if ($this->objDataPribadi->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this DataPribadiMetaControl
		 * @param string $strNip primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing DataPribadi object creation - defaults to CreateOrEdit
 		 * @return DataPribadiMetaControl
		 */
		public static function Create($objParentObject, $strNip = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($strNip)) {
				$objDataPribadi = DataPribadi::Load($strNip);

				// DataPribadi was found -- return it!
				if ($objDataPribadi)
					return new DataPribadiMetaControl($objParentObject, $objDataPribadi);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a DataPribadi object with PK arguments: ' . $strNip);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new DataPribadiMetaControl($objParentObject, new DataPribadi());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this DataPribadiMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing DataPribadi object creation - defaults to CreateOrEdit
		 * @return DataPribadiMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$strNip = QApplication::PathInfo(0);
			return DataPribadiMetaControl::Create($objParentObject, $strNip, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this DataPribadiMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing DataPribadi object creation - defaults to CreateOrEdit
		 * @return DataPribadiMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$strNip = QApplication::QueryString('strNip');
			return DataPribadiMetaControl::Create($objParentObject, $strNip, $intCreateType);
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
				if (($this->objDataPribadi->NipObject) && ($this->objDataPribadi->NipObject->Nip == $objNipObject->Nip))
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
			$this->lblNip->Text = ($this->objDataPribadi->NipObject) ? $this->objDataPribadi->NipObject->__toString() : null;
			$this->lblNip->Required = true;
			return $this->lblNip;
		}

		/**
		 * Create and setup QTextBox txtTempatLahir
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtTempatLahir_Create($strControlId = null) {
			$this->txtTempatLahir = new QTextBox($this->objParentObject, $strControlId);
			$this->txtTempatLahir->Name = QApplication::Translate('Tempat Lahir');
			$this->txtTempatLahir->Text = $this->objDataPribadi->TempatLahir;
			$this->txtTempatLahir->MaxLength = DataPribadi::TempatLahirMaxLength;
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
			$this->lblTempatLahir->Text = $this->objDataPribadi->TempatLahir;
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
			$this->calTglLahir->DateTime = $this->objDataPribadi->TglLahir;
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
			$this->lblTglLahir->Text = sprintf($this->objDataPribadi->TglLahir) ? $this->objDataPribadi->TglLahir->qFormat($this->strTglLahirDateTimeFormat) : null;
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
			$this->txtAgama->Text = $this->objDataPribadi->Agama;
			$this->txtAgama->MaxLength = DataPribadi::AgamaMaxLength;
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
			$this->lblAgama->Text = $this->objDataPribadi->Agama;
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
			$this->txtStatusNikah->Text = $this->objDataPribadi->StatusNikah;
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
			$this->lblStatusNikah->Text = $this->objDataPribadi->StatusNikah;
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
			$this->txtJumTanggungan->Text = $this->objDataPribadi->JumTanggungan;
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
			$this->lblJumTanggungan->Text = $this->objDataPribadi->JumTanggungan;
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
			$this->txtAlamat->Text = $this->objDataPribadi->Alamat;
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
			$this->lblAlamat->Text = $this->objDataPribadi->Alamat;
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
			$this->txtNamaBapak->Text = $this->objDataPribadi->NamaBapak;
			$this->txtNamaBapak->MaxLength = DataPribadi::NamaBapakMaxLength;
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
			$this->lblNamaBapak->Text = $this->objDataPribadi->NamaBapak;
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
			$this->txtNamaIbu->Text = $this->objDataPribadi->NamaIbu;
			$this->txtNamaIbu->MaxLength = DataPribadi::NamaIbuMaxLength;
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
			$this->lblNamaIbu->Text = $this->objDataPribadi->NamaIbu;
			return $this->lblNamaIbu;
		}

		/**
		 * Create and setup QTextBox txtJenisKelamin
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtJenisKelamin_Create($strControlId = null) {
			$this->txtJenisKelamin = new QTextBox($this->objParentObject, $strControlId);
			$this->txtJenisKelamin->Name = QApplication::Translate('Jenis Kelamin');
			$this->txtJenisKelamin->Text = $this->objDataPribadi->JenisKelamin;
			return $this->txtJenisKelamin;
		}

		/**
		 * Create and setup QLabel lblJenisKelamin
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblJenisKelamin_Create($strControlId = null) {
			$this->lblJenisKelamin = new QLabel($this->objParentObject, $strControlId);
			$this->lblJenisKelamin->Name = QApplication::Translate('Jenis Kelamin');
			$this->lblJenisKelamin->Text = $this->objDataPribadi->JenisKelamin;
			return $this->lblJenisKelamin;
		}



		/**
		 * Refresh this MetaControl with Data from the local DataPribadi object.
		 * @param boolean $blnReload reload DataPribadi from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objDataPribadi->Reload();

			if ($this->lstNipObject) {
					$this->lstNipObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstNipObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objNipObjectArray = DataPegawai::LoadAll();
				if ($objNipObjectArray) foreach ($objNipObjectArray as $objNipObject) {
					$objListItem = new QListItem($objNipObject->__toString(), $objNipObject->Nip);
					if (($this->objDataPribadi->NipObject) && ($this->objDataPribadi->NipObject->Nip == $objNipObject->Nip))
						$objListItem->Selected = true;
					$this->lstNipObject->AddItem($objListItem);
				}
			}
			if ($this->lblNip) $this->lblNip->Text = ($this->objDataPribadi->NipObject) ? $this->objDataPribadi->NipObject->__toString() : null;

			if ($this->txtTempatLahir) $this->txtTempatLahir->Text = $this->objDataPribadi->TempatLahir;
			if ($this->lblTempatLahir) $this->lblTempatLahir->Text = $this->objDataPribadi->TempatLahir;

			if ($this->calTglLahir) $this->calTglLahir->DateTime = $this->objDataPribadi->TglLahir;
			if ($this->lblTglLahir) $this->lblTglLahir->Text = sprintf($this->objDataPribadi->TglLahir) ? $this->objDataPribadi->TglLahir->qFormat($this->strTglLahirDateTimeFormat) : null;

			if ($this->txtAgama) $this->txtAgama->Text = $this->objDataPribadi->Agama;
			if ($this->lblAgama) $this->lblAgama->Text = $this->objDataPribadi->Agama;

			if ($this->txtStatusNikah) $this->txtStatusNikah->Text = $this->objDataPribadi->StatusNikah;
			if ($this->lblStatusNikah) $this->lblStatusNikah->Text = $this->objDataPribadi->StatusNikah;

			if ($this->txtJumTanggungan) $this->txtJumTanggungan->Text = $this->objDataPribadi->JumTanggungan;
			if ($this->lblJumTanggungan) $this->lblJumTanggungan->Text = $this->objDataPribadi->JumTanggungan;

			if ($this->txtAlamat) $this->txtAlamat->Text = $this->objDataPribadi->Alamat;
			if ($this->lblAlamat) $this->lblAlamat->Text = $this->objDataPribadi->Alamat;

			if ($this->txtNamaBapak) $this->txtNamaBapak->Text = $this->objDataPribadi->NamaBapak;
			if ($this->lblNamaBapak) $this->lblNamaBapak->Text = $this->objDataPribadi->NamaBapak;

			if ($this->txtNamaIbu) $this->txtNamaIbu->Text = $this->objDataPribadi->NamaIbu;
			if ($this->lblNamaIbu) $this->lblNamaIbu->Text = $this->objDataPribadi->NamaIbu;

			if ($this->txtJenisKelamin) $this->txtJenisKelamin->Text = $this->objDataPribadi->JenisKelamin;
			if ($this->lblJenisKelamin) $this->lblJenisKelamin->Text = $this->objDataPribadi->JenisKelamin;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC DATAPRIBADI OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's DataPribadi instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveDataPribadi() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstNipObject) $this->objDataPribadi->Nip = $this->lstNipObject->SelectedValue;
				if ($this->txtTempatLahir) $this->objDataPribadi->TempatLahir = $this->txtTempatLahir->Text;
				if ($this->calTglLahir) $this->objDataPribadi->TglLahir = $this->calTglLahir->DateTime;
				if ($this->txtAgama) $this->objDataPribadi->Agama = $this->txtAgama->Text;
				if ($this->txtStatusNikah) $this->objDataPribadi->StatusNikah = $this->txtStatusNikah->Text;
				if ($this->txtJumTanggungan) $this->objDataPribadi->JumTanggungan = $this->txtJumTanggungan->Text;
				if ($this->txtAlamat) $this->objDataPribadi->Alamat = $this->txtAlamat->Text;
				if ($this->txtNamaBapak) $this->objDataPribadi->NamaBapak = $this->txtNamaBapak->Text;
				if ($this->txtNamaIbu) $this->objDataPribadi->NamaIbu = $this->txtNamaIbu->Text;
				if ($this->txtJenisKelamin) $this->objDataPribadi->JenisKelamin = $this->txtJenisKelamin->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the DataPribadi object
				$this->objDataPribadi->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's DataPribadi instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteDataPribadi() {
			$this->objDataPribadi->Delete();
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
				case 'DataPribadi': return $this->objDataPribadi;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to DataPribadi fields -- will be created dynamically if not yet created
				case 'NipControl':
					if (!$this->lstNipObject) return $this->lstNipObject_Create();
					return $this->lstNipObject;
				case 'NipLabel':
					if (!$this->lblNip) return $this->lblNip_Create();
					return $this->lblNip;
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
				case 'JenisKelaminControl':
					if (!$this->txtJenisKelamin) return $this->txtJenisKelamin_Create();
					return $this->txtJenisKelamin;
				case 'JenisKelaminLabel':
					if (!$this->lblJenisKelamin) return $this->lblJenisKelamin_Create();
					return $this->lblJenisKelamin;
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
					// Controls that point to DataPribadi fields
					case 'NipControl':
						return ($this->lstNipObject = QType::Cast($mixValue, 'QControl'));
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
					case 'JenisKelaminControl':
						return ($this->txtJenisKelamin = QType::Cast($mixValue, 'QControl'));
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