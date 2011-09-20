<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the DataPengalaman class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single DataPengalaman object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a DataPengalamanMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 *
	 * @package My QCubed Application
	 * @subpackage MetaControls
	 * @property-read DataPengalaman $DataPengalaman the actual DataPengalaman data class being edited
	 * @property QListBox $NipControl
	 * @property-read QLabel $NipLabel
	 * @property QTextBox $PengalamanControl
	 * @property-read QLabel $PengalamanLabel
	 * @property QDateTimePicker $TanggalControl
	 * @property-read QLabel $TanggalLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class DataPengalamanMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var DataPengalaman objDataPengalaman
		 * @access protected
		 */
		protected $objDataPengalaman;
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

		// Controls that allow the editing of DataPengalaman's individual data fields
		/**
		 * @var QListBox lstNipObject
		 * @access protected
		 */
		protected $lstNipObject;
		/**
		 * @var QTextBox txtPengalaman
		 * @access protected
		 */
		protected $txtPengalaman;
		/**
		 * @var QDateTimePicker calTanggal
		 * @access protected
		 */
		protected $calTanggal;

		// Controls that allow the viewing of DataPengalaman's individual data fields
		/**
		 * @var QLabel lblNip
		 * @access protected
		 */
		protected $lblNip;
		/**
		 * @var QLabel lblPengalaman
		 * @access protected
		 */
		protected $lblPengalaman;
		/**
		 * @var QLabel lblTanggal
		 * @access protected
		 */
		protected $lblTanggal;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * DataPengalamanMetaControl to edit a single DataPengalaman object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single DataPengalaman object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this DataPengalamanMetaControl
		 * @param DataPengalaman $objDataPengalaman new or existing DataPengalaman object
		 */
		 public function __construct($objParentObject, DataPengalaman $objDataPengalaman) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this DataPengalamanMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked DataPengalaman object
			$this->objDataPengalaman = $objDataPengalaman;

			// Figure out if we're Editing or Creating New
			if ($this->objDataPengalaman->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this DataPengalamanMetaControl
		 * @param string $strNip primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing DataPengalaman object creation - defaults to CreateOrEdit
 		 * @return DataPengalamanMetaControl
		 */
		public static function Create($objParentObject, $strNip = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($strNip)) {
				$objDataPengalaman = DataPengalaman::Load($strNip);

				// DataPengalaman was found -- return it!
				if ($objDataPengalaman)
					return new DataPengalamanMetaControl($objParentObject, $objDataPengalaman);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a DataPengalaman object with PK arguments: ' . $strNip);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new DataPengalamanMetaControl($objParentObject, new DataPengalaman());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this DataPengalamanMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing DataPengalaman object creation - defaults to CreateOrEdit
		 * @return DataPengalamanMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$strNip = QApplication::PathInfo(0);
			return DataPengalamanMetaControl::Create($objParentObject, $strNip, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this DataPengalamanMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing DataPengalaman object creation - defaults to CreateOrEdit
		 * @return DataPengalamanMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$strNip = QApplication::QueryString('strNip');
			return DataPengalamanMetaControl::Create($objParentObject, $strNip, $intCreateType);
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
				if (($this->objDataPengalaman->NipObject) && ($this->objDataPengalaman->NipObject->Nip == $objNipObject->Nip))
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
			$this->lblNip->Text = ($this->objDataPengalaman->NipObject) ? $this->objDataPengalaman->NipObject->__toString() : null;
			$this->lblNip->Required = true;
			return $this->lblNip;
		}

		/**
		 * Create and setup QTextBox txtPengalaman
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtPengalaman_Create($strControlId = null) {
			$this->txtPengalaman = new QTextBox($this->objParentObject, $strControlId);
			$this->txtPengalaman->Name = QApplication::Translate('Pengalaman');
			$this->txtPengalaman->Text = $this->objDataPengalaman->Pengalaman;
			$this->txtPengalaman->MaxLength = DataPengalaman::PengalamanMaxLength;
			return $this->txtPengalaman;
		}

		/**
		 * Create and setup QLabel lblPengalaman
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblPengalaman_Create($strControlId = null) {
			$this->lblPengalaman = new QLabel($this->objParentObject, $strControlId);
			$this->lblPengalaman->Name = QApplication::Translate('Pengalaman');
			$this->lblPengalaman->Text = $this->objDataPengalaman->Pengalaman;
			return $this->lblPengalaman;
		}

		/**
		 * Create and setup QDateTimePicker calTanggal
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calTanggal_Create($strControlId = null) {
			$this->calTanggal = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calTanggal->Name = QApplication::Translate('Tanggal');
			$this->calTanggal->DateTime = $this->objDataPengalaman->Tanggal;
			$this->calTanggal->DateTimePickerType = QDateTimePickerType::Date;
			return $this->calTanggal;
		}

		/**
		 * Create and setup QLabel lblTanggal
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat optional DateTimeFormat to use
		 * @return QLabel
		 */
		public function lblTanggal_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblTanggal = new QLabel($this->objParentObject, $strControlId);
			$this->lblTanggal->Name = QApplication::Translate('Tanggal');
			$this->strTanggalDateTimeFormat = $strDateTimeFormat;
			$this->lblTanggal->Text = sprintf($this->objDataPengalaman->Tanggal) ? $this->objDataPengalaman->Tanggal->qFormat($this->strTanggalDateTimeFormat) : null;
			return $this->lblTanggal;
		}

		protected $strTanggalDateTimeFormat;




		/**
		 * Refresh this MetaControl with Data from the local DataPengalaman object.
		 * @param boolean $blnReload reload DataPengalaman from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objDataPengalaman->Reload();

			if ($this->lstNipObject) {
					$this->lstNipObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstNipObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objNipObjectArray = DataPegawai::LoadAll();
				if ($objNipObjectArray) foreach ($objNipObjectArray as $objNipObject) {
					$objListItem = new QListItem($objNipObject->__toString(), $objNipObject->Nip);
					if (($this->objDataPengalaman->NipObject) && ($this->objDataPengalaman->NipObject->Nip == $objNipObject->Nip))
						$objListItem->Selected = true;
					$this->lstNipObject->AddItem($objListItem);
				}
			}
			if ($this->lblNip) $this->lblNip->Text = ($this->objDataPengalaman->NipObject) ? $this->objDataPengalaman->NipObject->__toString() : null;

			if ($this->txtPengalaman) $this->txtPengalaman->Text = $this->objDataPengalaman->Pengalaman;
			if ($this->lblPengalaman) $this->lblPengalaman->Text = $this->objDataPengalaman->Pengalaman;

			if ($this->calTanggal) $this->calTanggal->DateTime = $this->objDataPengalaman->Tanggal;
			if ($this->lblTanggal) $this->lblTanggal->Text = sprintf($this->objDataPengalaman->Tanggal) ? $this->objDataPengalaman->Tanggal->qFormat($this->strTanggalDateTimeFormat) : null;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC DATAPENGALAMAN OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's DataPengalaman instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveDataPengalaman() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstNipObject) $this->objDataPengalaman->Nip = $this->lstNipObject->SelectedValue;
				if ($this->txtPengalaman) $this->objDataPengalaman->Pengalaman = $this->txtPengalaman->Text;
				if ($this->calTanggal) $this->objDataPengalaman->Tanggal = $this->calTanggal->DateTime;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the DataPengalaman object
				$this->objDataPengalaman->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's DataPengalaman instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteDataPengalaman() {
			$this->objDataPengalaman->Delete();
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
				case 'DataPengalaman': return $this->objDataPengalaman;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to DataPengalaman fields -- will be created dynamically if not yet created
				case 'NipControl':
					if (!$this->lstNipObject) return $this->lstNipObject_Create();
					return $this->lstNipObject;
				case 'NipLabel':
					if (!$this->lblNip) return $this->lblNip_Create();
					return $this->lblNip;
				case 'PengalamanControl':
					if (!$this->txtPengalaman) return $this->txtPengalaman_Create();
					return $this->txtPengalaman;
				case 'PengalamanLabel':
					if (!$this->lblPengalaman) return $this->lblPengalaman_Create();
					return $this->lblPengalaman;
				case 'TanggalControl':
					if (!$this->calTanggal) return $this->calTanggal_Create();
					return $this->calTanggal;
				case 'TanggalLabel':
					if (!$this->lblTanggal) return $this->lblTanggal_Create();
					return $this->lblTanggal;
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
					// Controls that point to DataPengalaman fields
					case 'NipControl':
						return ($this->lstNipObject = QType::Cast($mixValue, 'QControl'));
					case 'PengalamanControl':
						return ($this->txtPengalaman = QType::Cast($mixValue, 'QControl'));
					case 'TanggalControl':
						return ($this->calTanggal = QType::Cast($mixValue, 'QControl'));
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