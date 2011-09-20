<?php
	/**
	 * The abstract DataPenghargaanEksGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the DataPenghargaanEks subclass which
	 * extends this DataPenghargaanEksGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the DataPenghargaanEks class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property string $Nip the value for strNip (PK)
	 * @property string $NamaPenghargaan the value for strNamaPenghargaan 
	 * @property QDateTime $TglDapat the value for dttTglDapat 
	 * @property string $Pemberi the value for strPemberi 
	 * @property string $Alamat the value for strAlamat 
	 * @property DataPegawai $NipObject the value for the DataPegawai object referenced by strNip (PK)
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class DataPenghargaanEksGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK column data_penghargaan_eks.nip
		 * @var string strNip
		 */
		protected $strNip;
		const NipMaxLength = 45;
		const NipDefault = null;


		/**
		 * Protected internal member variable that stores the original version of the PK column value (if restored)
		 * Used by Save() to update a PK column during UPDATE
		 * @var string __strNip;
		 */
		protected $__strNip;

		/**
		 * Protected member variable that maps to the database column data_penghargaan_eks.nama_penghargaan
		 * @var string strNamaPenghargaan
		 */
		protected $strNamaPenghargaan;
		const NamaPenghargaanMaxLength = 150;
		const NamaPenghargaanDefault = null;


		/**
		 * Protected member variable that maps to the database column data_penghargaan_eks.tgl_dapat
		 * @var QDateTime dttTglDapat
		 */
		protected $dttTglDapat;
		const TglDapatDefault = null;


		/**
		 * Protected member variable that maps to the database column data_penghargaan_eks.pemberi
		 * @var string strPemberi
		 */
		protected $strPemberi;
		const PemberiMaxLength = 150;
		const PemberiDefault = null;


		/**
		 * Protected member variable that maps to the database column data_penghargaan_eks.alamat
		 * @var string strAlamat
		 */
		protected $strAlamat;
		const AlamatDefault = null;


		/**
		 * Protected array of virtual attributes for this object (e.g. extra/other calculated and/or non-object bound
		 * columns from the run-time database query result for this object).  Used by InstantiateDbRow and
		 * GetVirtualAttribute.
		 * @var string[] $__strVirtualAttributeArray
		 */
		protected $__strVirtualAttributeArray = array();

		/**
		 * Protected internal member variable that specifies whether or not this object is Restored from the database.
		 * Used by Save() to determine if Save() should perform a db UPDATE or INSERT.
		 * @var bool __blnRestored;
		 */
		protected $__blnRestored;




		///////////////////////////////
		// PROTECTED MEMBER OBJECTS
		///////////////////////////////

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column data_penghargaan_eks.nip.
		 *
		 * NOTE: Always use the NipObject property getter to correctly retrieve this DataPegawai object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var DataPegawai objNipObject
		 */
		protected $objNipObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->strNip = DataPenghargaanEks::NipDefault;
			$this->strNamaPenghargaan = DataPenghargaanEks::NamaPenghargaanDefault;
			$this->dttTglDapat = (DataPenghargaanEks::TglDapatDefault === null)?null:new QDateTime(DataPenghargaanEks::TglDapatDefault);
			$this->strPemberi = DataPenghargaanEks::PemberiDefault;
			$this->strAlamat = DataPenghargaanEks::AlamatDefault;
		}


		///////////////////////////////
		// CLASS-WIDE LOAD AND COUNT METHODS
		///////////////////////////////

		/**
		 * Static method to retrieve the Database object that owns this class.
		 * @return QDatabaseBase reference to the Database object that can query this class
		 */
		public static function GetDatabase() {
			return QApplication::$Database[1];
		}

		/**
		 * Load a DataPenghargaanEks from PK Info
		 * @param string $strNip
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DataPenghargaanEks
		 */
		public static function Load($strNip, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return DataPenghargaanEks::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::DataPenghargaanEks()->Nip, $strNip)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all DataPenghargaanEkses
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DataPenghargaanEks[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call DataPenghargaanEks::QueryArray to perform the LoadAll query
			try {
				return DataPenghargaanEks::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all DataPenghargaanEkses
		 * @return int
		 */
		public static function CountAll() {
			// Call DataPenghargaanEks::QueryCount to perform the CountAll query
			return DataPenghargaanEks::QueryCount(QQ::All());
		}




		///////////////////////////////
		// QCUBED QUERY-RELATED METHODS
		///////////////////////////////

		/**
		 * Internally called method to assist with calling Qcubed Query for this class
		 * on load methods.
		 * @param QQueryBuilder &$objQueryBuilder the QueryBuilder object that will be created
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause object or array of QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with (sending in null will skip the PrepareStatement step)
		 * @param boolean $blnCountOnly only select a rowcount
		 * @return string the query statement
		 */
		protected static function BuildQueryStatement(&$objQueryBuilder, QQCondition $objConditions, $objOptionalClauses, $mixParameterArray, $blnCountOnly) {
			// Get the Database Object for this Class
			$objDatabase = DataPenghargaanEks::GetDatabase();

			// Create/Build out the QueryBuilder object with DataPenghargaanEks-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'data_penghargaan_eks');
			DataPenghargaanEks::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('data_penghargaan_eks');

			// Set "CountOnly" option (if applicable)
			if ($blnCountOnly)
				$objQueryBuilder->SetCountOnlyFlag();

			// Apply Any Conditions
			if ($objConditions)
				try {
					$objConditions->UpdateQueryBuilder($objQueryBuilder);
				} catch (QCallerException $objExc) {
					$objExc->IncrementOffset();
					throw $objExc;
				}

			// Iterate through all the Optional Clauses (if any) and perform accordingly
			if ($objOptionalClauses) {
				if ($objOptionalClauses instanceof QQClause)
					$objOptionalClauses->UpdateQueryBuilder($objQueryBuilder);
				else if (is_array($objOptionalClauses))
					foreach ($objOptionalClauses as $objClause)
						$objClause->UpdateQueryBuilder($objQueryBuilder);
				else
					throw new QCallerException('Optional Clauses must be a QQClause object or an array of QQClause objects');
			}

			// Get the SQL Statement
			$strQuery = $objQueryBuilder->GetStatement();

			// Prepare the Statement with the Query Parameters (if applicable)
			if ($mixParameterArray) {
				if (is_array($mixParameterArray)) {
					if (count($mixParameterArray))
						$strQuery = $objDatabase->PrepareStatement($strQuery, $mixParameterArray);

					// Ensure that there are no other Unresolved Named Parameters
					if (strpos($strQuery, chr(QQNamedValue::DelimiterCode) . '{') !== false)
						throw new QCallerException('Unresolved named parameters in the query');
				} else
					throw new QCallerException('Parameter Array must be an array of name-value parameter pairs');
			}

			// Return the Objects
			return $strQuery;
		}

		/**
		 * Static Qcubed Query method to query for a single DataPenghargaanEks object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return DataPenghargaanEks the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = DataPenghargaanEks::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new DataPenghargaanEks object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = DataPenghargaanEks::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
					if ($objItem)
						$objToReturn[] = $objItem;
				}
				if (count($objToReturn)) {
					// Since we only want the object to return, lets return the object and not the array.
					return $objToReturn[0];
				} else {
					return null;
				}
			} else {
				// No expands just return the first row
				$objDbRow = $objDbResult->GetNextRow();
				if(null === $objDbRow)
					return null;
				return DataPenghargaanEks::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of DataPenghargaanEks objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return DataPenghargaanEks[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = DataPenghargaanEks::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return DataPenghargaanEks::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of DataPenghargaanEks objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = DataPenghargaanEks::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and return the row_count
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Figure out if the query is using GroupBy
			$blnGrouped = false;

			if ($objOptionalClauses) foreach ($objOptionalClauses as $objClause) {
				if ($objClause instanceof QQGroupBy) {
					$blnGrouped = true;
					break;
				}
			}

			if ($blnGrouped)
				// Groups in this query - return the count of Groups (which is the count of all rows)
				return $objDbResult->CountRows();
			else {
				// No Groups - return the sql-calculated count(*) value
				$strDbRow = $objDbResult->FetchRow();
				return QType::Cast($strDbRow[0], QType::Integer);
			}
		}

		public static function QueryArrayCached(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = DataPenghargaanEks::GetDatabase();

			$strQuery = DataPenghargaanEks::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/datapenghargaaneks', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = DataPenghargaanEks::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this DataPenghargaanEks
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'data_penghargaan_eks';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'nip', $strAliasPrefix . 'nip');
			$objBuilder->AddSelectItem($strTableName, 'nama_penghargaan', $strAliasPrefix . 'nama_penghargaan');
			$objBuilder->AddSelectItem($strTableName, 'tgl_dapat', $strAliasPrefix . 'tgl_dapat');
			$objBuilder->AddSelectItem($strTableName, 'pemberi', $strAliasPrefix . 'pemberi');
			$objBuilder->AddSelectItem($strTableName, 'alamat', $strAliasPrefix . 'alamat');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a DataPenghargaanEks from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this DataPenghargaanEks::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return DataPenghargaanEks
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the DataPenghargaanEks object
			$objToReturn = new DataPenghargaanEks();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'nip', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'nip'] : $strAliasPrefix . 'nip';
			$objToReturn->strNip = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$objToReturn->__strNip = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'nama_penghargaan', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'nama_penghargaan'] : $strAliasPrefix . 'nama_penghargaan';
			$objToReturn->strNamaPenghargaan = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'tgl_dapat', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'tgl_dapat'] : $strAliasPrefix . 'tgl_dapat';
			$objToReturn->dttTglDapat = $objDbRow->GetColumn($strAliasName, 'Date');
			$strAliasName = array_key_exists($strAliasPrefix . 'pemberi', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'pemberi'] : $strAliasPrefix . 'pemberi';
			$objToReturn->strPemberi = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'alamat', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'alamat'] : $strAliasPrefix . 'alamat';
			$objToReturn->strAlamat = $objDbRow->GetColumn($strAliasName, 'Blob');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->Nip != $objPreviousItem->Nip) {
						continue;
					}

					// complete match - all primary key columns are the same
					return null;
				}
			}

			// Instantiate Virtual Attributes
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				$strVirtualPrefix = $strAliasPrefix . '__';
				$strVirtualPrefixLength = strlen($strVirtualPrefix);
				if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'data_penghargaan_eks__';

			// Check for NipObject Early Binding
			$strAlias = $strAliasPrefix . 'nip__nip';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objNipObject = DataPegawai::InstantiateDbRow($objDbRow, $strAliasPrefix . 'nip__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of DataPenghargaanEkses from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return DataPenghargaanEks[]
		 */
		public static function InstantiateDbResult(QDatabaseResultBase $objDbResult, $strExpandAsArrayNodes = null, $strColumnAliasArray = null) {
			$objToReturn = array();

			if (!$strColumnAliasArray)
				$strColumnAliasArray = array();

			// If blank resultset, then return empty array
			if (!$objDbResult)
				return $objToReturn;

			// Load up the return array with each row
			if ($strExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = DataPenghargaanEks::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = DataPenghargaanEks::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single DataPenghargaanEks object,
		 * by Nip Index(es)
		 * @param string $strNip
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DataPenghargaanEks
		*/
		public static function LoadByNip($strNip, $objOptionalClauses = null) {
			return DataPenghargaanEks::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::DataPenghargaanEks()->Nip, $strNip)
				),
				$objOptionalClauses
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////




		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this DataPenghargaanEks
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return void
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = DataPenghargaanEks::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `data_penghargaan_eks` (
							`nip`,
							`nama_penghargaan`,
							`tgl_dapat`,
							`pemberi`,
							`alamat`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strNip) . ',
							' . $objDatabase->SqlVariable($this->strNamaPenghargaan) . ',
							' . $objDatabase->SqlVariable($this->dttTglDapat) . ',
							' . $objDatabase->SqlVariable($this->strPemberi) . ',
							' . $objDatabase->SqlVariable($this->strAlamat) . '
						)
					');


				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`data_penghargaan_eks`
						SET
							`nip` = ' . $objDatabase->SqlVariable($this->strNip) . ',
							`nama_penghargaan` = ' . $objDatabase->SqlVariable($this->strNamaPenghargaan) . ',
							`tgl_dapat` = ' . $objDatabase->SqlVariable($this->dttTglDapat) . ',
							`pemberi` = ' . $objDatabase->SqlVariable($this->strPemberi) . ',
							`alamat` = ' . $objDatabase->SqlVariable($this->strAlamat) . '
						WHERE
							`nip` = ' . $objDatabase->SqlVariable($this->__strNip) . '
					');
				}

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Update __blnRestored and any Non-Identity PK Columns (if applicable)
			$this->__blnRestored = true;
			$this->__strNip = $this->strNip;


			// Return
			return $mixToReturn;
		}

		/**
		 * Delete this DataPenghargaanEks
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->strNip)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this DataPenghargaanEks with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = DataPenghargaanEks::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`data_penghargaan_eks`
				WHERE
					`nip` = ' . $objDatabase->SqlVariable($this->strNip) . '');
		}

		/**
		 * Delete all DataPenghargaanEkses
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = DataPenghargaanEks::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`data_penghargaan_eks`');
		}

		/**
		 * Truncate data_penghargaan_eks table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = DataPenghargaanEks::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `data_penghargaan_eks`');
		}

		/**
		 * Reload this DataPenghargaanEks from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved DataPenghargaanEks object.');

			// Reload the Object
			$objReloaded = DataPenghargaanEks::Load($this->strNip);

			// Update $this's local variables to match
			$this->Nip = $objReloaded->Nip;
			$this->__strNip = $this->strNip;
			$this->strNamaPenghargaan = $objReloaded->strNamaPenghargaan;
			$this->dttTglDapat = $objReloaded->dttTglDapat;
			$this->strPemberi = $objReloaded->strPemberi;
			$this->strAlamat = $objReloaded->strAlamat;
		}



		////////////////////
		// PUBLIC OVERRIDERS
		////////////////////

				/**
		 * Override method to perform a property "Get"
		 * This will get the value of $strName
		 *
		 * @param string $strName Name of the property to get
		 * @return mixed
		 */
		public function __get($strName) {
			switch ($strName) {
				///////////////////
				// Member Variables
				///////////////////
				case 'Nip':
					/**
					 * Gets the value for strNip (PK)
					 * @return string
					 */
					return $this->strNip;

				case 'NamaPenghargaan':
					/**
					 * Gets the value for strNamaPenghargaan 
					 * @return string
					 */
					return $this->strNamaPenghargaan;

				case 'TglDapat':
					/**
					 * Gets the value for dttTglDapat 
					 * @return QDateTime
					 */
					return $this->dttTglDapat;

				case 'Pemberi':
					/**
					 * Gets the value for strPemberi 
					 * @return string
					 */
					return $this->strPemberi;

				case 'Alamat':
					/**
					 * Gets the value for strAlamat 
					 * @return string
					 */
					return $this->strAlamat;


				///////////////////
				// Member Objects
				///////////////////
				case 'NipObject':
					/**
					 * Gets the value for the DataPegawai object referenced by strNip (PK)
					 * @return DataPegawai
					 */
					try {
						if ((!$this->objNipObject) && (!is_null($this->strNip)))
							$this->objNipObject = DataPegawai::Load($this->strNip);
						return $this->objNipObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////


				case '__Restored':
					return $this->__blnRestored;

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
			switch ($strName) {
				///////////////////
				// Member Variables
				///////////////////
				case 'Nip':
					/**
					 * Sets the value for strNip (PK)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						$this->objNipObject = null;
						return ($this->strNip = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'NamaPenghargaan':
					/**
					 * Sets the value for strNamaPenghargaan 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strNamaPenghargaan = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'TglDapat':
					/**
					 * Sets the value for dttTglDapat 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttTglDapat = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Pemberi':
					/**
					 * Sets the value for strPemberi 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPemberi = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Alamat':
					/**
					 * Sets the value for strAlamat 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strAlamat = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'NipObject':
					/**
					 * Sets the value for the DataPegawai object referenced by strNip (PK)
					 * @param DataPegawai $mixValue
					 * @return DataPegawai
					 */
					if (is_null($mixValue)) {
						$this->strNip = null;
						$this->objNipObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a DataPegawai object
						try {
							$mixValue = QType::Cast($mixValue, 'DataPegawai');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED DataPegawai object
						if (is_null($mixValue->Nip))
							throw new QCallerException('Unable to set an unsaved NipObject for this DataPenghargaanEks');

						// Update Local Member Variables
						$this->objNipObject = $mixValue;
						$this->strNip = $mixValue->Nip;

						// Return $mixValue
						return $mixValue;
					}
					break;

				default:
					try {
						return parent::__set($strName, $mixValue);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

		/**
		 * Lookup a VirtualAttribute value (if applicable).  Returns NULL if none found.
		 * @param string $strName
		 * @return string
		 */
		public function GetVirtualAttribute($strName) {
			if (array_key_exists($strName, $this->__strVirtualAttributeArray))
				return $this->__strVirtualAttributeArray[$strName];
			return null;
		}



		///////////////////////////////
		// ASSOCIATED OBJECTS' METHODS
		///////////////////////////////





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="DataPenghargaanEks"><sequence>';
			$strToReturn .= '<element name="NipObject" type="xsd1:DataPegawai"/>';
			$strToReturn .= '<element name="NamaPenghargaan" type="xsd:string"/>';
			$strToReturn .= '<element name="TglDapat" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="Pemberi" type="xsd:string"/>';
			$strToReturn .= '<element name="Alamat" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('DataPenghargaanEks', $strComplexTypeArray)) {
				$strComplexTypeArray['DataPenghargaanEks'] = DataPenghargaanEks::GetSoapComplexTypeXml();
				DataPegawai::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, DataPenghargaanEks::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new DataPenghargaanEks();
			if ((property_exists($objSoapObject, 'NipObject')) &&
				($objSoapObject->NipObject))
				$objToReturn->NipObject = DataPegawai::GetObjectFromSoapObject($objSoapObject->NipObject);
			if (property_exists($objSoapObject, 'NamaPenghargaan'))
				$objToReturn->strNamaPenghargaan = $objSoapObject->NamaPenghargaan;
			if (property_exists($objSoapObject, 'TglDapat'))
				$objToReturn->dttTglDapat = new QDateTime($objSoapObject->TglDapat);
			if (property_exists($objSoapObject, 'Pemberi'))
				$objToReturn->strPemberi = $objSoapObject->Pemberi;
			if (property_exists($objSoapObject, 'Alamat'))
				$objToReturn->strAlamat = $objSoapObject->Alamat;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, DataPenghargaanEks::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objNipObject)
				$objObject->objNipObject = DataPegawai::GetSoapObjectFromObject($objObject->objNipObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->strNip = null;
			if ($objObject->dttTglDapat)
				$objObject->dttTglDapat = $objObject->dttTglDapat->qFormat(QDateTime::FormatSoap);
			return $objObject;
		}


		////////////////////////////////////////
		// METHODS for JSON Object Translation
		////////////////////////////////////////

		// this function is required for objects that implement the
		// IteratorAggregate interface
		public function getIterator() {
			///////////////////
			// Member Variables
			///////////////////
			$iArray['Nip'] = $this->strNip;
			$iArray['NamaPenghargaan'] = $this->strNamaPenghargaan;
			$iArray['TglDapat'] = $this->dttTglDapat;
			$iArray['Pemberi'] = $this->strPemberi;
			$iArray['Alamat'] = $this->strAlamat;
			return new ArrayIterator($iArray);
		}

		// this function returns a Json formatted string using the
		// IteratorAggregate interface
		public function getJson() {
			return json_encode($this->getIterator());
		}


	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $Nip
     * @property-read QQNodeDataPegawai $NipObject
     * @property-read QQNode $NamaPenghargaan
     * @property-read QQNode $TglDapat
     * @property-read QQNode $Pemberi
     * @property-read QQNode $Alamat
     *
     *

     * @property-read QQNodeDataPegawai $_PrimaryKeyNode
     **/
	class QQNodeDataPenghargaanEks extends QQNode {
		protected $strTableName = 'data_penghargaan_eks';
		protected $strPrimaryKey = 'nip';
		protected $strClassName = 'DataPenghargaanEks';
		public function __get($strName) {
			switch ($strName) {
				case 'Nip':
					return new QQNode('nip', 'Nip', 'VarChar', $this);
				case 'NipObject':
					return new QQNodeDataPegawai('nip', 'NipObject', 'VarChar', $this);
				case 'NamaPenghargaan':
					return new QQNode('nama_penghargaan', 'NamaPenghargaan', 'VarChar', $this);
				case 'TglDapat':
					return new QQNode('tgl_dapat', 'TglDapat', 'Date', $this);
				case 'Pemberi':
					return new QQNode('pemberi', 'Pemberi', 'VarChar', $this);
				case 'Alamat':
					return new QQNode('alamat', 'Alamat', 'Blob', $this);

				case '_PrimaryKeyNode':
					return new QQNodeDataPegawai('nip', 'Nip', 'VarChar', $this);
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
	}

    /**
     * @property-read QQNode $Nip
     * @property-read QQNodeDataPegawai $NipObject
     * @property-read QQNode $NamaPenghargaan
     * @property-read QQNode $TglDapat
     * @property-read QQNode $Pemberi
     * @property-read QQNode $Alamat
     *
     *

     * @property-read QQNodeDataPegawai $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeDataPenghargaanEks extends QQReverseReferenceNode {
		protected $strTableName = 'data_penghargaan_eks';
		protected $strPrimaryKey = 'nip';
		protected $strClassName = 'DataPenghargaanEks';
		public function __get($strName) {
			switch ($strName) {
				case 'Nip':
					return new QQNode('nip', 'Nip', 'string', $this);
				case 'NipObject':
					return new QQNodeDataPegawai('nip', 'NipObject', 'string', $this);
				case 'NamaPenghargaan':
					return new QQNode('nama_penghargaan', 'NamaPenghargaan', 'string', $this);
				case 'TglDapat':
					return new QQNode('tgl_dapat', 'TglDapat', 'QDateTime', $this);
				case 'Pemberi':
					return new QQNode('pemberi', 'Pemberi', 'string', $this);
				case 'Alamat':
					return new QQNode('alamat', 'Alamat', 'string', $this);

				case '_PrimaryKeyNode':
					return new QQNodeDataPegawai('nip', 'Nip', 'string', $this);
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
	}

?>
