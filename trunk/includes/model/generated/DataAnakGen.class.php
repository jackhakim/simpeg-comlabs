<?php
	/**
	 * The abstract DataAnakGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the DataAnak subclass which
	 * extends this DataAnakGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the DataAnak class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property string $Nip the value for strNip (PK)
	 * @property string $NamaAnak the value for strNamaAnak 
	 * @property string $TempatLahir the value for strTempatLahir 
	 * @property QDateTime $TglLahir the value for dttTglLahir 
	 * @property string $StatusAnak the value for strStatusAnak 
	 * @property string $Agama the value for strAgama 
	 * @property string $Pendidikan the value for strPendidikan 
	 * @property DataPegawai $NipObject the value for the DataPegawai object referenced by strNip (PK)
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class DataAnakGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK column data_anak.nip
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
		 * Protected member variable that maps to the database column data_anak.nama_anak
		 * @var string strNamaAnak
		 */
		protected $strNamaAnak;
		const NamaAnakMaxLength = 150;
		const NamaAnakDefault = null;


		/**
		 * Protected member variable that maps to the database column data_anak.tempat_lahir
		 * @var string strTempatLahir
		 */
		protected $strTempatLahir;
		const TempatLahirMaxLength = 45;
		const TempatLahirDefault = null;


		/**
		 * Protected member variable that maps to the database column data_anak.tgl_lahir
		 * @var QDateTime dttTglLahir
		 */
		protected $dttTglLahir;
		const TglLahirDefault = null;


		/**
		 * Protected member variable that maps to the database column data_anak.status_anak
		 * @var string strStatusAnak
		 */
		protected $strStatusAnak;
		const StatusAnakMaxLength = 100;
		const StatusAnakDefault = null;


		/**
		 * Protected member variable that maps to the database column data_anak.agama
		 * @var string strAgama
		 */
		protected $strAgama;
		const AgamaMaxLength = 45;
		const AgamaDefault = null;


		/**
		 * Protected member variable that maps to the database column data_anak.pendidikan
		 * @var string strPendidikan
		 */
		protected $strPendidikan;
		const PendidikanMaxLength = 64;
		const PendidikanDefault = null;


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
		 * in the database column data_anak.nip.
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
			$this->strNip = DataAnak::NipDefault;
			$this->strNamaAnak = DataAnak::NamaAnakDefault;
			$this->strTempatLahir = DataAnak::TempatLahirDefault;
			$this->dttTglLahir = (DataAnak::TglLahirDefault === null)?null:new QDateTime(DataAnak::TglLahirDefault);
			$this->strStatusAnak = DataAnak::StatusAnakDefault;
			$this->strAgama = DataAnak::AgamaDefault;
			$this->strPendidikan = DataAnak::PendidikanDefault;
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
		 * Load a DataAnak from PK Info
		 * @param string $strNip
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DataAnak
		 */
		public static function Load($strNip, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return DataAnak::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::DataAnak()->Nip, $strNip)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all DataAnaks
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DataAnak[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call DataAnak::QueryArray to perform the LoadAll query
			try {
				return DataAnak::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all DataAnaks
		 * @return int
		 */
		public static function CountAll() {
			// Call DataAnak::QueryCount to perform the CountAll query
			return DataAnak::QueryCount(QQ::All());
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
			$objDatabase = DataAnak::GetDatabase();

			// Create/Build out the QueryBuilder object with DataAnak-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'data_anak');
			DataAnak::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('data_anak');

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
		 * Static Qcubed Query method to query for a single DataAnak object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return DataAnak the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = DataAnak::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new DataAnak object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = DataAnak::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return DataAnak::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of DataAnak objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return DataAnak[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = DataAnak::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return DataAnak::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of DataAnak objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = DataAnak::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = DataAnak::GetDatabase();

			$strQuery = DataAnak::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/dataanak', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = DataAnak::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this DataAnak
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'data_anak';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'nip', $strAliasPrefix . 'nip');
			$objBuilder->AddSelectItem($strTableName, 'nama_anak', $strAliasPrefix . 'nama_anak');
			$objBuilder->AddSelectItem($strTableName, 'tempat_lahir', $strAliasPrefix . 'tempat_lahir');
			$objBuilder->AddSelectItem($strTableName, 'tgl_lahir', $strAliasPrefix . 'tgl_lahir');
			$objBuilder->AddSelectItem($strTableName, 'status_anak', $strAliasPrefix . 'status_anak');
			$objBuilder->AddSelectItem($strTableName, 'agama', $strAliasPrefix . 'agama');
			$objBuilder->AddSelectItem($strTableName, 'pendidikan', $strAliasPrefix . 'pendidikan');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a DataAnak from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this DataAnak::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return DataAnak
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the DataAnak object
			$objToReturn = new DataAnak();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'nip', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'nip'] : $strAliasPrefix . 'nip';
			$objToReturn->strNip = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$objToReturn->__strNip = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'nama_anak', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'nama_anak'] : $strAliasPrefix . 'nama_anak';
			$objToReturn->strNamaAnak = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'tempat_lahir', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'tempat_lahir'] : $strAliasPrefix . 'tempat_lahir';
			$objToReturn->strTempatLahir = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'tgl_lahir', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'tgl_lahir'] : $strAliasPrefix . 'tgl_lahir';
			$objToReturn->dttTglLahir = $objDbRow->GetColumn($strAliasName, 'Date');
			$strAliasName = array_key_exists($strAliasPrefix . 'status_anak', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'status_anak'] : $strAliasPrefix . 'status_anak';
			$objToReturn->strStatusAnak = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'agama', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'agama'] : $strAliasPrefix . 'agama';
			$objToReturn->strAgama = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'pendidikan', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'pendidikan'] : $strAliasPrefix . 'pendidikan';
			$objToReturn->strPendidikan = $objDbRow->GetColumn($strAliasName, 'VarChar');

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
				$strAliasPrefix = 'data_anak__';

			// Check for NipObject Early Binding
			$strAlias = $strAliasPrefix . 'nip__nip';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objNipObject = DataPegawai::InstantiateDbRow($objDbRow, $strAliasPrefix . 'nip__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of DataAnaks from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return DataAnak[]
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
					$objItem = DataAnak::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = DataAnak::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single DataAnak object,
		 * by Nip Index(es)
		 * @param string $strNip
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DataAnak
		*/
		public static function LoadByNip($strNip, $objOptionalClauses = null) {
			return DataAnak::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::DataAnak()->Nip, $strNip)
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
		 * Save this DataAnak
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return void
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = DataAnak::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `data_anak` (
							`nip`,
							`nama_anak`,
							`tempat_lahir`,
							`tgl_lahir`,
							`status_anak`,
							`agama`,
							`pendidikan`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strNip) . ',
							' . $objDatabase->SqlVariable($this->strNamaAnak) . ',
							' . $objDatabase->SqlVariable($this->strTempatLahir) . ',
							' . $objDatabase->SqlVariable($this->dttTglLahir) . ',
							' . $objDatabase->SqlVariable($this->strStatusAnak) . ',
							' . $objDatabase->SqlVariable($this->strAgama) . ',
							' . $objDatabase->SqlVariable($this->strPendidikan) . '
						)
					');


				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`data_anak`
						SET
							`nip` = ' . $objDatabase->SqlVariable($this->strNip) . ',
							`nama_anak` = ' . $objDatabase->SqlVariable($this->strNamaAnak) . ',
							`tempat_lahir` = ' . $objDatabase->SqlVariable($this->strTempatLahir) . ',
							`tgl_lahir` = ' . $objDatabase->SqlVariable($this->dttTglLahir) . ',
							`status_anak` = ' . $objDatabase->SqlVariable($this->strStatusAnak) . ',
							`agama` = ' . $objDatabase->SqlVariable($this->strAgama) . ',
							`pendidikan` = ' . $objDatabase->SqlVariable($this->strPendidikan) . '
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
		 * Delete this DataAnak
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->strNip)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this DataAnak with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = DataAnak::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`data_anak`
				WHERE
					`nip` = ' . $objDatabase->SqlVariable($this->strNip) . '');
		}

		/**
		 * Delete all DataAnaks
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = DataAnak::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`data_anak`');
		}

		/**
		 * Truncate data_anak table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = DataAnak::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `data_anak`');
		}

		/**
		 * Reload this DataAnak from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved DataAnak object.');

			// Reload the Object
			$objReloaded = DataAnak::Load($this->strNip);

			// Update $this's local variables to match
			$this->Nip = $objReloaded->Nip;
			$this->__strNip = $this->strNip;
			$this->strNamaAnak = $objReloaded->strNamaAnak;
			$this->strTempatLahir = $objReloaded->strTempatLahir;
			$this->dttTglLahir = $objReloaded->dttTglLahir;
			$this->strStatusAnak = $objReloaded->strStatusAnak;
			$this->strAgama = $objReloaded->strAgama;
			$this->strPendidikan = $objReloaded->strPendidikan;
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

				case 'NamaAnak':
					/**
					 * Gets the value for strNamaAnak 
					 * @return string
					 */
					return $this->strNamaAnak;

				case 'TempatLahir':
					/**
					 * Gets the value for strTempatLahir 
					 * @return string
					 */
					return $this->strTempatLahir;

				case 'TglLahir':
					/**
					 * Gets the value for dttTglLahir 
					 * @return QDateTime
					 */
					return $this->dttTglLahir;

				case 'StatusAnak':
					/**
					 * Gets the value for strStatusAnak 
					 * @return string
					 */
					return $this->strStatusAnak;

				case 'Agama':
					/**
					 * Gets the value for strAgama 
					 * @return string
					 */
					return $this->strAgama;

				case 'Pendidikan':
					/**
					 * Gets the value for strPendidikan 
					 * @return string
					 */
					return $this->strPendidikan;


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

				case 'NamaAnak':
					/**
					 * Sets the value for strNamaAnak 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strNamaAnak = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'TempatLahir':
					/**
					 * Sets the value for strTempatLahir 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strTempatLahir = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'TglLahir':
					/**
					 * Sets the value for dttTglLahir 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttTglLahir = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'StatusAnak':
					/**
					 * Sets the value for strStatusAnak 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strStatusAnak = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Agama':
					/**
					 * Sets the value for strAgama 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strAgama = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Pendidikan':
					/**
					 * Sets the value for strPendidikan 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPendidikan = QType::Cast($mixValue, QType::String));
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
							throw new QCallerException('Unable to set an unsaved NipObject for this DataAnak');

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
			$strToReturn = '<complexType name="DataAnak"><sequence>';
			$strToReturn .= '<element name="NipObject" type="xsd1:DataPegawai"/>';
			$strToReturn .= '<element name="NamaAnak" type="xsd:string"/>';
			$strToReturn .= '<element name="TempatLahir" type="xsd:string"/>';
			$strToReturn .= '<element name="TglLahir" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="StatusAnak" type="xsd:string"/>';
			$strToReturn .= '<element name="Agama" type="xsd:string"/>';
			$strToReturn .= '<element name="Pendidikan" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('DataAnak', $strComplexTypeArray)) {
				$strComplexTypeArray['DataAnak'] = DataAnak::GetSoapComplexTypeXml();
				DataPegawai::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, DataAnak::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new DataAnak();
			if ((property_exists($objSoapObject, 'NipObject')) &&
				($objSoapObject->NipObject))
				$objToReturn->NipObject = DataPegawai::GetObjectFromSoapObject($objSoapObject->NipObject);
			if (property_exists($objSoapObject, 'NamaAnak'))
				$objToReturn->strNamaAnak = $objSoapObject->NamaAnak;
			if (property_exists($objSoapObject, 'TempatLahir'))
				$objToReturn->strTempatLahir = $objSoapObject->TempatLahir;
			if (property_exists($objSoapObject, 'TglLahir'))
				$objToReturn->dttTglLahir = new QDateTime($objSoapObject->TglLahir);
			if (property_exists($objSoapObject, 'StatusAnak'))
				$objToReturn->strStatusAnak = $objSoapObject->StatusAnak;
			if (property_exists($objSoapObject, 'Agama'))
				$objToReturn->strAgama = $objSoapObject->Agama;
			if (property_exists($objSoapObject, 'Pendidikan'))
				$objToReturn->strPendidikan = $objSoapObject->Pendidikan;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, DataAnak::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objNipObject)
				$objObject->objNipObject = DataPegawai::GetSoapObjectFromObject($objObject->objNipObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->strNip = null;
			if ($objObject->dttTglLahir)
				$objObject->dttTglLahir = $objObject->dttTglLahir->qFormat(QDateTime::FormatSoap);
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
			$iArray['NamaAnak'] = $this->strNamaAnak;
			$iArray['TempatLahir'] = $this->strTempatLahir;
			$iArray['TglLahir'] = $this->dttTglLahir;
			$iArray['StatusAnak'] = $this->strStatusAnak;
			$iArray['Agama'] = $this->strAgama;
			$iArray['Pendidikan'] = $this->strPendidikan;
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
     * @property-read QQNode $NamaAnak
     * @property-read QQNode $TempatLahir
     * @property-read QQNode $TglLahir
     * @property-read QQNode $StatusAnak
     * @property-read QQNode $Agama
     * @property-read QQNode $Pendidikan
     *
     *

     * @property-read QQNodeDataPegawai $_PrimaryKeyNode
     **/
	class QQNodeDataAnak extends QQNode {
		protected $strTableName = 'data_anak';
		protected $strPrimaryKey = 'nip';
		protected $strClassName = 'DataAnak';
		public function __get($strName) {
			switch ($strName) {
				case 'Nip':
					return new QQNode('nip', 'Nip', 'VarChar', $this);
				case 'NipObject':
					return new QQNodeDataPegawai('nip', 'NipObject', 'VarChar', $this);
				case 'NamaAnak':
					return new QQNode('nama_anak', 'NamaAnak', 'VarChar', $this);
				case 'TempatLahir':
					return new QQNode('tempat_lahir', 'TempatLahir', 'VarChar', $this);
				case 'TglLahir':
					return new QQNode('tgl_lahir', 'TglLahir', 'Date', $this);
				case 'StatusAnak':
					return new QQNode('status_anak', 'StatusAnak', 'VarChar', $this);
				case 'Agama':
					return new QQNode('agama', 'Agama', 'VarChar', $this);
				case 'Pendidikan':
					return new QQNode('pendidikan', 'Pendidikan', 'VarChar', $this);

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
     * @property-read QQNode $NamaAnak
     * @property-read QQNode $TempatLahir
     * @property-read QQNode $TglLahir
     * @property-read QQNode $StatusAnak
     * @property-read QQNode $Agama
     * @property-read QQNode $Pendidikan
     *
     *

     * @property-read QQNodeDataPegawai $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeDataAnak extends QQReverseReferenceNode {
		protected $strTableName = 'data_anak';
		protected $strPrimaryKey = 'nip';
		protected $strClassName = 'DataAnak';
		public function __get($strName) {
			switch ($strName) {
				case 'Nip':
					return new QQNode('nip', 'Nip', 'string', $this);
				case 'NipObject':
					return new QQNodeDataPegawai('nip', 'NipObject', 'string', $this);
				case 'NamaAnak':
					return new QQNode('nama_anak', 'NamaAnak', 'string', $this);
				case 'TempatLahir':
					return new QQNode('tempat_lahir', 'TempatLahir', 'string', $this);
				case 'TglLahir':
					return new QQNode('tgl_lahir', 'TglLahir', 'QDateTime', $this);
				case 'StatusAnak':
					return new QQNode('status_anak', 'StatusAnak', 'string', $this);
				case 'Agama':
					return new QQNode('agama', 'Agama', 'string', $this);
				case 'Pendidikan':
					return new QQNode('pendidikan', 'Pendidikan', 'string', $this);

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
