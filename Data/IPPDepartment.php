/*******************************************************************************
* Copyright 2016 Intuit
*
* Licensed under the Apache License, Version 2.0 (the "License");
* you may not use this file except in compliance with the License.
* You may obtain a copy of the License at
*
*     http://www.apache.org/licenses/LICENSE-2.0
*
* Unless required by applicable law or agreed to in writing, software
* distributed under the License is distributed on an "AS IS" BASIS,
* WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
* See the License for the specific language governing permissions and
* limitations under the License.
*******************************************************************************/
<?php
require_once('IPPIntuitEntity.php');

/**
 * @xmlNamespace http://schema.intuit.com/finance/v3
 * @xmlType IntuitEntity
 * @xmlName IPPDepartment
 * @var IPPDepartment
 * @xmlDefinition Department provide a way to track different segments of the business, and to break down the income and expenses for each segment. Department can apply to all transactions, so they're not tied to a particular client or project.
 */
class IPPDepartment
	extends IPPIntuitEntity	{

		/**                                                                       
		* Initializes this object, optionally with pre-defined property values    
		*                                                                         
		* Initializes this object and it's property members, using the dictionary
		* of key/value pairs passed as an optional argument.                      
		*                                                                         
		* @param dictionary $keyValInitializers key/value pairs to be populated into object's properties 
		* @param boolean $verbose specifies whether object should echo warnings   
		*/                                                                        
		public function __construct($keyValInitializers=array(), $verbose=FALSE)
		{
			foreach($keyValInitializers as $initPropName => $initPropVal)
			{
				if (property_exists('IPPDepartment',$initPropName))
				{
					$this->{$initPropName} = $initPropVal;
				}
				else
				{
					if ($verbose)
						echo "Property does not exist ($initPropName) in class (".get_class($this).")";
				}
			}
		}

	
	/**
	 * @Definition User recognizable name for the Class.[br /]
								Length Restriction:
								QBO: 100 characters
								QBW: 1024
							
	 * @xmlType element
	 * @xmlNamespace http://schema.intuit.com/finance/v3
	 * @xmlMinOccurs 0
	 * @xmlName Name
	 * @var string
	 */
	public $Name;
	/**
	 * @Definition  Specifies the Department is a SubDepartment or Not. True if subdepartment, false or null if it is top-level department
							
	 * @xmlType element
	 * @xmlNamespace http://schema.intuit.com/finance/v3
	 * @xmlMinOccurs 0
	 * @xmlName SubDepartment
	 * @var boolean
	 */
	public $SubDepartment;
	/**
	 * @Definition Reference to parent class entity
	 * @xmlType element
	 * @xmlNamespace http://schema.intuit.com/finance/v3
	 * @xmlMinOccurs 0
	 * @xmlName ParentRef
	 * @var com\intuit\schema\finance\v3\IPPReferenceType
	 */
	public $ParentRef;
	/**
	 * @Definition 
								Product: ALL
								Description: Output Only. Fully qualified name of the entity. The fully qualified name prepends the topmost parent, followed by each sub element separated by colons. Takes the form of: [br /] Parent:Location1:SubLocation1:SubLocation2
							
	 * @xmlType element
	 * @xmlNamespace http://schema.intuit.com/finance/v3
	 * @xmlMinOccurs 0
	 * @xmlName FullyQualifiedName
	 * @var string
	 */
	public $FullyQualifiedName;
	/**
	 * @Definition Whether or not active inactive classes may be hidden from most display purposes and may not be used on financial transactions
	 * @xmlType element
	 * @xmlNamespace http://schema.intuit.com/finance/v3
	 * @xmlMinOccurs 0
	 * @xmlName Active
	 * @var boolean
	 */
	public $Active;
	/**
	 * @Definition Internal use only: extension place holder for DepartmentEx extensible element 
	 * @xmlType element
	 * @xmlNamespace http://schema.intuit.com/finance/v3
	 * @xmlMinOccurs 0
	 * @xmlName DepartmentEx
	 * @var com\intuit\schema\finance\v3\IPPIntuitAnyType
	 */
	public $DepartmentEx;


} // end class IPPDepartment
