<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the DataAnak class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single DataAnak object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a DataAnakMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 *
	 * @package My QCubed Application
	 * @subpackage MetaControls
	 * @property-read DataAnak $DataAnak the actual DataAnak data class being edited
	 * @property QListBox $NipControl
	 * @property-read QLabel $NipLabel
	 * @property QTextBox $NamaAnakControl
	 * @property-read QLabel $NamaAnakLabel
	 * @property QTextBox $TempatLahirControl
	 * @property-read QLabel $TempatLahirLabel
	 * @property QDateTimePicker $TglLahirControl
	 * @property-read QLabel $TglLahirLabel
	 * @property QTextBox $StatusAnakControl
	 * @property-read QLabel $StatusAnakLabel
	 * @property QTextBox $AgamaControl
	 * @property-read QLabel $AgamaLabel
	 * @property QTextBox $PendidikanControl
	 * @property-read QLabel $PendidikanLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class DataAnakMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var DataAnak objDataAnak
		 * @access protected
		 */
		protected $objDataAnak;
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

		// Controls that allow the editing of DataAnak's individual data fields
		/**
		 * @var QListBox lstNipObject
		 * @access protected
		 */
		protected $lstNipObject;
		/**
		 * @var QTextBox txtNamaAnak
		 * @access protected
		 */
		protected $txtNamaAnak;
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
		 * @var QTextBox txtStatusAnak
		 * @access protected
		 */
		protected $txtStatusAnak;
		/**
		 * @var QTextBox txtAgama
		 * @access protected
		 */
		protected $txtAgama;
		/**
		 * @var QTextBox txtPendidikan
		 * @access protected
		 */
		protected $txtPendidikan;

		// Controls that allow the viewing of DataAnak's individual data fields
		/**
		 * @var QLabel lblNip
		 * @access protected
		 */
		protected $lblNip;
		/**
		 * @var QLabel lblNamaAnak
		 * @access protected
		 */
		protected $lblNamaAnak;
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
		 * @var QLabel lblStatusAnak
		 * @access protected
		 */
		protected $lblStatusAnak;
		/**
		 * @var QLabel lblAgama
		 * @access protected
		 */
		protected $lblAgama;
		/**
		 * @var QLabel lblPendidikan
		 * @access protected
		 */
		protected $lblPendidikan;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * DataAnakMetaControl to edit a single DataAnak object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single DataAnak object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this DataAnakMetaControl
		 * @param DataAnak $objDataAnak new or existing DataAnak object
		 */
		 public function __construct($objParentObject, DataAnak $objDataAnak) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this DataAnakMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked DataAnak object
			$this->objDataAnak = $objDataAnak;

			// Figure out if we're Editing or Creating New
			if ($this->objDataAnak->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this DataAnakMetaControl
		 * @param string $strNip primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing DataAnak object creation - defaults to CreateOrEdit
 		 * @return DataAnakMetaControl
		 */
		public static function Create($objParentObject, $strNip = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($strNip)) {
				$objDataAnak = DataAnak::Load($strNip);

				// DataAnak was found -- return it!
				if ($objDataAnak)
					return new DataAnakMetaControl($objParentObject, $objDataAnak);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a DataAnak object with PK arguments: ' . $strNip);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new DataAnakMetaControl($objParentObject, new DataAnak());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this DataAnakMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing DataAnak object creation - defaults to CreateOrEdit
		 * @return DataAnakMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$strNip = QApplication::PathInfo(0);
			return DataAnakMetaControl::Create($objParentObject, $strNip, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this DataAnakMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing DataAnak object creation - defaults to CreateOrEdit
		 * @return DataAnakMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$strNip = QApplication::QueryString('strNip');
			return DataAnakMetaControl::Create($objParentObject, $strNip, $intCreateType);
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
				if (($this->objDataAnak->NipObject) && ($this->objDataAnak->NipObject->Nip == $objNipObject->Nip))
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
			$this->lblNip->Text = ($this->objDataAnak->NipObject) ? $this->objDataAnak->NipObject->__toString() : null;
			$this->lblNip->Required = true;
			return $this->lblNip;
		}

		/**
		 * Create and setup QTextBox txtNamaAnak
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNamaAnak_Create($strControlId = null) {
			$this->txtNamaAnak = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNamaAnak->Name = QApplication::Translate('Nama Anak');
			$this->txtNamaAnak->Text = $this->objDataAnak->NamaAnak;
			$this->txtNamaAnak->MaxLength = DataAnak::NamaAnakMaxLength;
			return $this->txtNamaAnak;
		}

		/**
		 * Create and setup QLabel lblNamaAnak
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblNamaAnak_Create($strControlId = null) {
			$this->lblNamaAnak = new QLabel($this->objParentObject, $strControlId);
			$this->lblNamaAnak->Name = QApplication::Translate('Nama Anak');
			$this->lblNamaAnak->Text = $this->objDataAnak->NamaAnak;
			return $this->lblNamaAnak;
		}

		/**
		 * Create and setup QTextBox txtTempatLahir
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtTempatLahir_Create($strControlId = null) {
			$this->txtTempatLahir = new QTextBox($this->objParentObject, $strControlId);
			$this->txtTempatLahir->Name = QApplication::Translate('Tempat Lahir');
			$this->txtTempatLahir->Text = $this->objDataAnak->TempatLahir;
			$this->txtTempatLahir->MaxLength = DataAnak::TempatLahirMaxLength;
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
			$this->lblTempatLahir->Text = $this->objDataAnak->TempatLahir;
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
			$this->calTglLahir->DateTime = $this->objDataAnak->TglLahir;
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
			$this->lblTglLahir->Text = sprintf($this->objDataAnak->TglLahir) ? $this->objDataAnak->TglLahir->qFormat($this->strTglLahirDateTimeFormat) : null;
			return $this->lblTglLahir;
		}

		protected $strTglLahirDateTimeFormat;


		/**
		 * Create and setup QTextBox txtStatusAnak
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtStatusAnak_Create($strControlId = null) {
			$this->txtStatusAnak = new QTextBox($this->objParentObject, $strControlId);
			$this->txtStatusAnak->Name = QApplication::Translate('Status Anak');
			$this->txtStatusAnak->Text = $this->objDataAnak->StatusAnak;
			$this->txtStatusAnak->MaxLength = DataAnak::StatusAnakMaxLength;
			return $this->txtStatusAnak;
		}

		/**
		 * Create and setup QLabel lblStatusAnak
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblStatusAnak_Create($strControlId = null) {
			$this->lblStatusAnak = new QLabel($this->objParentObject, $strControlId);
			$this->lblStatusAnak->Name = QApplication::Translate('Status Anak');
			$this->lblStatusAnak->Text = $this->objDataAnak->StatusAnak;
			return $this->lblStatusAnak;
		}

		/**
		 * Create and setup QTextBox txtAgama
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtAgama_Create($strControlId = null) {
			$this->txtAgama = new QTextBox($this->objParentObject, $strControlId);
			$this->txtAgama->Name = QApplication::Translate('Agama');
			$this->txtAgama->Text = $this->objDataAnak->Agama;
			$this->txtAgama->MaxLength = DataAnak::AgamaMaxLength;
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
			$this->lblAgama->Text = $this->objDataAnak->Agama;
			return $this->lblAgama;
		}

		/**
		 * Create and setup QTextBox txtPendidikan
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtPendidikan_Create($strControlId = null) {
			$this->txtPendidikan = new QTextBox($this->objParentObject, $strControlId);
			$this->txtPendidikan->Name = QApplication::Translate('Pendidikan');
			$this->txtPendidikan->Text = $this->objDataAnak->Pendidikan;
			$this->txtPendidikan->MaxLength = DataAnak::PendidikanMaxLength;
			return $this->txtPendidikan;
		}

		/**
		 * Create and setup QLabel lblPendidikan
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblPendidikan_Create($strControlId = null) {
			$this->lblPendidikan = new QLabel($this->objParentObject, $strControlId);
			$this->lblPendidikan->Name = QApplication::Translate('Pendidikan');
			$this->lblPendidikan->Text = $this->objDataAnak->Pendidikan;
			return $this->lblPendidikan;
		}



		/**
		 * Refresh this MetaControl with Data from the local DataAnak object.
		 * @param boolean $blnReload reload DataAnak from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objDataAnak->Reload();

			if ($this->lstNipObject) {
					$this->lstNipObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstNipObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objNipObjectArray = DataPegawai::LoadAll();
				if ($objNipObjectArray) foreach ($objNipObjectArray as $objNipObject) {
					$objListItem = new QListItem($objNipObject->__toString(), $objNipObject->Nip);
					if (($this->objDataAnak->NipObject) && ($this->objDataAnak->NipObject->Nip == $objNipObject->Nip))
						$objListItem->Selected = true;
					$this->lstNipObject->AddItem($objListItem);
				}
			}
			if ($this->lblNip) $this->lblNip->Text = ($this->objDataAnak->NipObject) ? $this->objDataAnak->NipObject->__toString() : null;

			if ($this->txtNamaAnak) $this->txtNamaAnak->Text = $this->objDataAnak->NamaAnak;
			if ($this->lblNamaAnak) $this->lblNamaAnak->Text = $this->objDataAnak->NamaAnak;

			if ($this->txtTempatLahir) $this->txtTempatLahir->Text = $this->objDataAnak->TempatLahir;
			if ($this->lblTempatLahir) $this->lblTempatLahir->Text = $this->objDataAnak->TempatLahir;

			if ($this->calTglLahir) $this->calTglLahir->DateTime = $this->objDataAnak->TglLahir;
			if ($this->lblTglLahir) $this->lblTglLahir->Text = sprintf($this->objDataAnak->TglLahir) ? $this->objDataAnak->TglLahir->qFormat($this->strTglLahirDateTimeFormat) : null;

			if ($this->txtStatusAnak) $this->txtStatusAnak->Text = $this->objDataAnak->StatusAnak;
			if ($this->lblStatusAnak) $this->lblStatusAnak->Text = $this->objDataAnak->StatusAnak;

			if ($this->txtAgama) $this->txtAgama->Text = $this->objDataAnak->Agama;
			if ($this->lblAgama) $this->lblAgama->Text = $this->objDataAnak->Agama;

			if ($this->txtPendidikan) $this->txtPendidikan->Text = $this->objDataAnak->Pendidikan;
			if ($this->lblPendidikan) $this->lblPendidikan->Text = $this->objDataAnak->Pendidikan;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC DATAANAK OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's DataAnak instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveDataAnak() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstNipObject) $this->objDataAnak->Nip = $this->lstNipObject->SelectedValue;
				if ($this->txtNamaAnak) $this->objDataAnak->NamaAnak = $this->txtNamaAnak->Text;
				if ($this->txtTempatLahir) $this->objDataAnak->TempatLahir = $this->txtTempatLahir->Text;
				if ($this->calTglLahir) $this->objDataAnak->TglLahir = $this->calTglLahir->DateTime;
				if ($this->txtStatusAnak) $this->objDataAnak->StatusAnak = $this->txtStatusAnak->Text;
				if ($this->txtAgama) $this->objDataAnak->Agama = $this->txtAgama->Text;
				if ($this->txtPendidikan) $this->objDataAnak->Pendidikan = $this->txtPendidikan->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the DataAnak object
				$this->objDataAnak->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's DataAnak instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteDataAnak() {
			$this->objDataAnak->Delete();
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
				case 'DataAnak': return $this->objDataAnak;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to DataAnak fields -- will be created dynamically if not yet created
				case 'NipControl':
					if (!$this->lstNipObject) return $this->lstNipObject_Create();
					return $this->lstNipObject;
				case 'NipLabel':
					if (!$this->lblNip) return $this->lblNip_Create();
					return $this->lblNip;
				case 'NamaAnakControl':
					if (!$this->txtNamaAnak) return $this->txtNamaAnak_Create();
					return $this->txtNamaAnak;
				case 'NamaAnakLabel':
					if (!$this->lblNamaAnak) return $this->lblNamaAnak_Create();
					return $this->lblNamaAnak;
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
				case 'StatusAnakControl':
					if (!$this->txtStatusAnak) return $this->txtStatusAnak_Create();
					return $this->txtStatusAnak;
				case 'StatusAnakLabel':
					if (!$this->lblStatusAnak) return $this->lblStatusAnak_Create();
					return $this->lblStatusAnak;
				case 'AgamaControl':
					if (!$this->txtAgama) return $this->txtAgama_Create();
					return $this->txtAgama;
				case 'AgamaLabel':
					if (!$this->lblAgama) return $this->lblAgama_Create();
					return $this->lblAgama;
				case 'PendidikanControl':
					if (!$this->txtPendidikan) return $this->txtPendidikan_Create();
					return $this->txtPendidikan;
				case 'PendidikanLabel':
					if (!$this->lblPendidikan) return $this->lblPendidikan_Create();
					return $this->lblPendidikan;
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
					// Controls that point to DataAnak fields
					case 'NipControl':
						return ($this->lstNipObject = QType::Cast($mixValue, 'QControl'));
					case 'NamaAnakControl':
						return ($this->txtNamaAnak = QType::Cast($mixValue, 'QControl'));
					case 'TempatLahirControl':
						return ($this->txtTempatLahir = QType::Cast($mixValue, 'QControl'));
					case 'TglLahirControl':
						return ($this->calTglLahir = QType::Cast($mixValue, 'QControl'));
					case 'StatusAnakControl':
						return ($this->txtStatusAnak = QType::Cast($mixValue, 'QControl'));
					case 'AgamaControl':
						return ($this->txtAgama = QType::Cast($mixValue, 'QControl'));
					case 'PendidikanControl':
						return ($this->txtPendidikan = QType::Cast($mixValue, 'QControl'));
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