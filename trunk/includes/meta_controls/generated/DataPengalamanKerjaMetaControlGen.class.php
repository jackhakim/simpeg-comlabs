<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the DataPengalamanKerja class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single DataPengalamanKerja object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a DataPengalamanKerjaMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 *
	 * @package My QCubed Application
	 * @subpackage MetaControls
	 * @property-read DataPengalamanKerja $DataPengalamanKerja the actual DataPengalamanKerja data class being edited
	 * @property QListBox $NipControl
	 * @property-read QLabel $NipLabel
	 * @property QTextBox $TempatKerjaControl
	 * @property-read QLabel $TempatKerjaLabel
	 * @property QTextBox $AlamatControl
	 * @property-read QLabel $AlamatLabel
	 * @property QIntegerTextBox $TahunMasukControl
	 * @property-read QLabel $TahunMasukLabel
	 * @property QIntegerTextBox $TahunKeluarControl
	 * @property-read QLabel $TahunKeluarLabel
	 * @property QIntegerTextBox $GajiTerakhirControl
	 * @property-read QLabel $GajiTerakhirLabel
	 * @property QTextBox $JabatanTerakhirControl
	 * @property-read QLabel $JabatanTerakhirLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class DataPengalamanKerjaMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var DataPengalamanKerja objDataPengalamanKerja
		 * @access protected
		 */
		protected $objDataPengalamanKerja;
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

		// Controls that allow the editing of DataPengalamanKerja's individual data fields
		/**
		 * @var QListBox lstNipObject
		 * @access protected
		 */
		protected $lstNipObject;
		/**
		 * @var QTextBox txtTempatKerja
		 * @access protected
		 */
		protected $txtTempatKerja;
		/**
		 * @var QTextBox txtAlamat
		 * @access protected
		 */
		protected $txtAlamat;
		/**
		 * @var QIntegerTextBox txtTahunMasuk
		 * @access protected
		 */
		protected $txtTahunMasuk;
		/**
		 * @var QIntegerTextBox txtTahunKeluar
		 * @access protected
		 */
		protected $txtTahunKeluar;
		/**
		 * @var QIntegerTextBox txtGajiTerakhir
		 * @access protected
		 */
		protected $txtGajiTerakhir;
		/**
		 * @var QTextBox txtJabatanTerakhir
		 * @access protected
		 */
		protected $txtJabatanTerakhir;

		// Controls that allow the viewing of DataPengalamanKerja's individual data fields
		/**
		 * @var QLabel lblNip
		 * @access protected
		 */
		protected $lblNip;
		/**
		 * @var QLabel lblTempatKerja
		 * @access protected
		 */
		protected $lblTempatKerja;
		/**
		 * @var QLabel lblAlamat
		 * @access protected
		 */
		protected $lblAlamat;
		/**
		 * @var QLabel lblTahunMasuk
		 * @access protected
		 */
		protected $lblTahunMasuk;
		/**
		 * @var QLabel lblTahunKeluar
		 * @access protected
		 */
		protected $lblTahunKeluar;
		/**
		 * @var QLabel lblGajiTerakhir
		 * @access protected
		 */
		protected $lblGajiTerakhir;
		/**
		 * @var QLabel lblJabatanTerakhir
		 * @access protected
		 */
		protected $lblJabatanTerakhir;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * DataPengalamanKerjaMetaControl to edit a single DataPengalamanKerja object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single DataPengalamanKerja object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this DataPengalamanKerjaMetaControl
		 * @param DataPengalamanKerja $objDataPengalamanKerja new or existing DataPengalamanKerja object
		 */
		 public function __construct($objParentObject, DataPengalamanKerja $objDataPengalamanKerja) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this DataPengalamanKerjaMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked DataPengalamanKerja object
			$this->objDataPengalamanKerja = $objDataPengalamanKerja;

			// Figure out if we're Editing or Creating New
			if ($this->objDataPengalamanKerja->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this DataPengalamanKerjaMetaControl
		 * @param string $strNip primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing DataPengalamanKerja object creation - defaults to CreateOrEdit
 		 * @return DataPengalamanKerjaMetaControl
		 */
		public static function Create($objParentObject, $strNip = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($strNip)) {
				$objDataPengalamanKerja = DataPengalamanKerja::Load($strNip);

				// DataPengalamanKerja was found -- return it!
				if ($objDataPengalamanKerja)
					return new DataPengalamanKerjaMetaControl($objParentObject, $objDataPengalamanKerja);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a DataPengalamanKerja object with PK arguments: ' . $strNip);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new DataPengalamanKerjaMetaControl($objParentObject, new DataPengalamanKerja());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this DataPengalamanKerjaMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing DataPengalamanKerja object creation - defaults to CreateOrEdit
		 * @return DataPengalamanKerjaMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$strNip = QApplication::PathInfo(0);
			return DataPengalamanKerjaMetaControl::Create($objParentObject, $strNip, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this DataPengalamanKerjaMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing DataPengalamanKerja object creation - defaults to CreateOrEdit
		 * @return DataPengalamanKerjaMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$strNip = QApplication::QueryString('strNip');
			return DataPengalamanKerjaMetaControl::Create($objParentObject, $strNip, $intCreateType);
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
				if (($this->objDataPengalamanKerja->NipObject) && ($this->objDataPengalamanKerja->NipObject->Nip == $objNipObject->Nip))
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
			$this->lblNip->Text = ($this->objDataPengalamanKerja->NipObject) ? $this->objDataPengalamanKerja->NipObject->__toString() : null;
			$this->lblNip->Required = true;
			return $this->lblNip;
		}

		/**
		 * Create and setup QTextBox txtTempatKerja
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtTempatKerja_Create($strControlId = null) {
			$this->txtTempatKerja = new QTextBox($this->objParentObject, $strControlId);
			$this->txtTempatKerja->Name = QApplication::Translate('Tempat Kerja');
			$this->txtTempatKerja->Text = $this->objDataPengalamanKerja->TempatKerja;
			$this->txtTempatKerja->MaxLength = DataPengalamanKerja::TempatKerjaMaxLength;
			return $this->txtTempatKerja;
		}

		/**
		 * Create and setup QLabel lblTempatKerja
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblTempatKerja_Create($strControlId = null) {
			$this->lblTempatKerja = new QLabel($this->objParentObject, $strControlId);
			$this->lblTempatKerja->Name = QApplication::Translate('Tempat Kerja');
			$this->lblTempatKerja->Text = $this->objDataPengalamanKerja->TempatKerja;
			return $this->lblTempatKerja;
		}

		/**
		 * Create and setup QTextBox txtAlamat
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtAlamat_Create($strControlId = null) {
			$this->txtAlamat = new QTextBox($this->objParentObject, $strControlId);
			$this->txtAlamat->Name = QApplication::Translate('Alamat');
			$this->txtAlamat->Text = $this->objDataPengalamanKerja->Alamat;
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
			$this->lblAlamat->Text = $this->objDataPengalamanKerja->Alamat;
			return $this->lblAlamat;
		}

		/**
		 * Create and setup QIntegerTextBox txtTahunMasuk
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtTahunMasuk_Create($strControlId = null) {
			$this->txtTahunMasuk = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtTahunMasuk->Name = QApplication::Translate('Tahun Masuk');
			$this->txtTahunMasuk->Text = $this->objDataPengalamanKerja->TahunMasuk;
			return $this->txtTahunMasuk;
		}

		/**
		 * Create and setup QLabel lblTahunMasuk
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblTahunMasuk_Create($strControlId = null, $strFormat = null) {
			$this->lblTahunMasuk = new QLabel($this->objParentObject, $strControlId);
			$this->lblTahunMasuk->Name = QApplication::Translate('Tahun Masuk');
			$this->lblTahunMasuk->Text = $this->objDataPengalamanKerja->TahunMasuk;
			$this->lblTahunMasuk->Format = $strFormat;
			return $this->lblTahunMasuk;
		}

		/**
		 * Create and setup QIntegerTextBox txtTahunKeluar
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtTahunKeluar_Create($strControlId = null) {
			$this->txtTahunKeluar = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtTahunKeluar->Name = QApplication::Translate('Tahun Keluar');
			$this->txtTahunKeluar->Text = $this->objDataPengalamanKerja->TahunKeluar;
			return $this->txtTahunKeluar;
		}

		/**
		 * Create and setup QLabel lblTahunKeluar
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblTahunKeluar_Create($strControlId = null, $strFormat = null) {
			$this->lblTahunKeluar = new QLabel($this->objParentObject, $strControlId);
			$this->lblTahunKeluar->Name = QApplication::Translate('Tahun Keluar');
			$this->lblTahunKeluar->Text = $this->objDataPengalamanKerja->TahunKeluar;
			$this->lblTahunKeluar->Format = $strFormat;
			return $this->lblTahunKeluar;
		}

		/**
		 * Create and setup QIntegerTextBox txtGajiTerakhir
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtGajiTerakhir_Create($strControlId = null) {
			$this->txtGajiTerakhir = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtGajiTerakhir->Name = QApplication::Translate('Gaji Terakhir');
			$this->txtGajiTerakhir->Text = $this->objDataPengalamanKerja->GajiTerakhir;
			return $this->txtGajiTerakhir;
		}

		/**
		 * Create and setup QLabel lblGajiTerakhir
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblGajiTerakhir_Create($strControlId = null, $strFormat = null) {
			$this->lblGajiTerakhir = new QLabel($this->objParentObject, $strControlId);
			$this->lblGajiTerakhir->Name = QApplication::Translate('Gaji Terakhir');
			$this->lblGajiTerakhir->Text = $this->objDataPengalamanKerja->GajiTerakhir;
			$this->lblGajiTerakhir->Format = $strFormat;
			return $this->lblGajiTerakhir;
		}

		/**
		 * Create and setup QTextBox txtJabatanTerakhir
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtJabatanTerakhir_Create($strControlId = null) {
			$this->txtJabatanTerakhir = new QTextBox($this->objParentObject, $strControlId);
			$this->txtJabatanTerakhir->Name = QApplication::Translate('Jabatan Terakhir');
			$this->txtJabatanTerakhir->Text = $this->objDataPengalamanKerja->JabatanTerakhir;
			$this->txtJabatanTerakhir->MaxLength = DataPengalamanKerja::JabatanTerakhirMaxLength;
			return $this->txtJabatanTerakhir;
		}

		/**
		 * Create and setup QLabel lblJabatanTerakhir
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblJabatanTerakhir_Create($strControlId = null) {
			$this->lblJabatanTerakhir = new QLabel($this->objParentObject, $strControlId);
			$this->lblJabatanTerakhir->Name = QApplication::Translate('Jabatan Terakhir');
			$this->lblJabatanTerakhir->Text = $this->objDataPengalamanKerja->JabatanTerakhir;
			return $this->lblJabatanTerakhir;
		}



		/**
		 * Refresh this MetaControl with Data from the local DataPengalamanKerja object.
		 * @param boolean $blnReload reload DataPengalamanKerja from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objDataPengalamanKerja->Reload();

			if ($this->lstNipObject) {
					$this->lstNipObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstNipObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objNipObjectArray = DataPegawai::LoadAll();
				if ($objNipObjectArray) foreach ($objNipObjectArray as $objNipObject) {
					$objListItem = new QListItem($objNipObject->__toString(), $objNipObject->Nip);
					if (($this->objDataPengalamanKerja->NipObject) && ($this->objDataPengalamanKerja->NipObject->Nip == $objNipObject->Nip))
						$objListItem->Selected = true;
					$this->lstNipObject->AddItem($objListItem);
				}
			}
			if ($this->lblNip) $this->lblNip->Text = ($this->objDataPengalamanKerja->NipObject) ? $this->objDataPengalamanKerja->NipObject->__toString() : null;

			if ($this->txtTempatKerja) $this->txtTempatKerja->Text = $this->objDataPengalamanKerja->TempatKerja;
			if ($this->lblTempatKerja) $this->lblTempatKerja->Text = $this->objDataPengalamanKerja->TempatKerja;

			if ($this->txtAlamat) $this->txtAlamat->Text = $this->objDataPengalamanKerja->Alamat;
			if ($this->lblAlamat) $this->lblAlamat->Text = $this->objDataPengalamanKerja->Alamat;

			if ($this->txtTahunMasuk) $this->txtTahunMasuk->Text = $this->objDataPengalamanKerja->TahunMasuk;
			if ($this->lblTahunMasuk) $this->lblTahunMasuk->Text = $this->objDataPengalamanKerja->TahunMasuk;

			if ($this->txtTahunKeluar) $this->txtTahunKeluar->Text = $this->objDataPengalamanKerja->TahunKeluar;
			if ($this->lblTahunKeluar) $this->lblTahunKeluar->Text = $this->objDataPengalamanKerja->TahunKeluar;

			if ($this->txtGajiTerakhir) $this->txtGajiTerakhir->Text = $this->objDataPengalamanKerja->GajiTerakhir;
			if ($this->lblGajiTerakhir) $this->lblGajiTerakhir->Text = $this->objDataPengalamanKerja->GajiTerakhir;

			if ($this->txtJabatanTerakhir) $this->txtJabatanTerakhir->Text = $this->objDataPengalamanKerja->JabatanTerakhir;
			if ($this->lblJabatanTerakhir) $this->lblJabatanTerakhir->Text = $this->objDataPengalamanKerja->JabatanTerakhir;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC DATAPENGALAMANKERJA OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's DataPengalamanKerja instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveDataPengalamanKerja() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstNipObject) $this->objDataPengalamanKerja->Nip = $this->lstNipObject->SelectedValue;
				if ($this->txtTempatKerja) $this->objDataPengalamanKerja->TempatKerja = $this->txtTempatKerja->Text;
				if ($this->txtAlamat) $this->objDataPengalamanKerja->Alamat = $this->txtAlamat->Text;
				if ($this->txtTahunMasuk) $this->objDataPengalamanKerja->TahunMasuk = $this->txtTahunMasuk->Text;
				if ($this->txtTahunKeluar) $this->objDataPengalamanKerja->TahunKeluar = $this->txtTahunKeluar->Text;
				if ($this->txtGajiTerakhir) $this->objDataPengalamanKerja->GajiTerakhir = $this->txtGajiTerakhir->Text;
				if ($this->txtJabatanTerakhir) $this->objDataPengalamanKerja->JabatanTerakhir = $this->txtJabatanTerakhir->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the DataPengalamanKerja object
				$this->objDataPengalamanKerja->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's DataPengalamanKerja instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteDataPengalamanKerja() {
			$this->objDataPengalamanKerja->Delete();
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
				case 'DataPengalamanKerja': return $this->objDataPengalamanKerja;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to DataPengalamanKerja fields -- will be created dynamically if not yet created
				case 'NipControl':
					if (!$this->lstNipObject) return $this->lstNipObject_Create();
					return $this->lstNipObject;
				case 'NipLabel':
					if (!$this->lblNip) return $this->lblNip_Create();
					return $this->lblNip;
				case 'TempatKerjaControl':
					if (!$this->txtTempatKerja) return $this->txtTempatKerja_Create();
					return $this->txtTempatKerja;
				case 'TempatKerjaLabel':
					if (!$this->lblTempatKerja) return $this->lblTempatKerja_Create();
					return $this->lblTempatKerja;
				case 'AlamatControl':
					if (!$this->txtAlamat) return $this->txtAlamat_Create();
					return $this->txtAlamat;
				case 'AlamatLabel':
					if (!$this->lblAlamat) return $this->lblAlamat_Create();
					return $this->lblAlamat;
				case 'TahunMasukControl':
					if (!$this->txtTahunMasuk) return $this->txtTahunMasuk_Create();
					return $this->txtTahunMasuk;
				case 'TahunMasukLabel':
					if (!$this->lblTahunMasuk) return $this->lblTahunMasuk_Create();
					return $this->lblTahunMasuk;
				case 'TahunKeluarControl':
					if (!$this->txtTahunKeluar) return $this->txtTahunKeluar_Create();
					return $this->txtTahunKeluar;
				case 'TahunKeluarLabel':
					if (!$this->lblTahunKeluar) return $this->lblTahunKeluar_Create();
					return $this->lblTahunKeluar;
				case 'GajiTerakhirControl':
					if (!$this->txtGajiTerakhir) return $this->txtGajiTerakhir_Create();
					return $this->txtGajiTerakhir;
				case 'GajiTerakhirLabel':
					if (!$this->lblGajiTerakhir) return $this->lblGajiTerakhir_Create();
					return $this->lblGajiTerakhir;
				case 'JabatanTerakhirControl':
					if (!$this->txtJabatanTerakhir) return $this->txtJabatanTerakhir_Create();
					return $this->txtJabatanTerakhir;
				case 'JabatanTerakhirLabel':
					if (!$this->lblJabatanTerakhir) return $this->lblJabatanTerakhir_Create();
					return $this->lblJabatanTerakhir;
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
					// Controls that point to DataPengalamanKerja fields
					case 'NipControl':
						return ($this->lstNipObject = QType::Cast($mixValue, 'QControl'));
					case 'TempatKerjaControl':
						return ($this->txtTempatKerja = QType::Cast($mixValue, 'QControl'));
					case 'AlamatControl':
						return ($this->txtAlamat = QType::Cast($mixValue, 'QControl'));
					case 'TahunMasukControl':
						return ($this->txtTahunMasuk = QType::Cast($mixValue, 'QControl'));
					case 'TahunKeluarControl':
						return ($this->txtTahunKeluar = QType::Cast($mixValue, 'QControl'));
					case 'GajiTerakhirControl':
						return ($this->txtGajiTerakhir = QType::Cast($mixValue, 'QControl'));
					case 'JabatanTerakhirControl':
						return ($this->txtJabatanTerakhir = QType::Cast($mixValue, 'QControl'));
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