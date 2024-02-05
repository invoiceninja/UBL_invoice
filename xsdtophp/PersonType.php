<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing PersonType
 *
 * ABIE
 *  Person. Details
 *  A class to describe a person.
 *  Person
 * XSD Type: PersonType
 */
class PersonType
{

    /**
     * BBIE
     *  Person. Identifier
     *  An identifier for this person.
     *  0..1
     *  Person
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Person. First_ Name. Name
     *  This person's given name.
     *  0..1
     *  Person
     *  First
     *  Name
     *  Name
     *  Name. Type
     *
     * @var \CleverIt\UBL\Invoice\FirstName $firstName
     */
    private $firstName = null;

    /**
     * BBIE
     *  Person. Family_ Name. Name
     *  This person's family name.
     *  0..1
     *  Person
     *  Family
     *  Name
     *  Name
     *  Name. Type
     *
     * @var \CleverIt\UBL\Invoice\FamilyName $familyName
     */
    private $familyName = null;

    /**
     * BBIE
     *  Person. Title. Text
     *  This person's title of address (e.g., Mr, Ms, Dr, Sir).
     *  0..1
     *  Person
     *  Title
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\Title $title
     */
    private $title = null;

    /**
     * BBIE
     *  Person. Middle_ Name. Name
     *  This person's middle name(s) or initials.
     *  0..1
     *  Person
     *  Middle
     *  Name
     *  Name
     *  Name. Type
     *
     * @var \CleverIt\UBL\Invoice\MiddleName $middleName
     */
    private $middleName = null;

    /**
     * BBIE
     *  Person. Other_ Name. Name
     *  This person's second family name.
     *  0..1
     *  Person
     *  Other
     *  Name
     *  Name
     *  Name. Type
     *  Delivery Dock
     *
     * @var \CleverIt\UBL\Invoice\OtherName $otherName
     */
    private $otherName = null;

    /**
     * BBIE
     *  Person. Name Suffix. Text
     *  A suffix to this person's name (e.g., PhD, OBE, Jr).
     *  0..1
     *  Person
     *  Name Suffix
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\NameSuffix $nameSuffix
     */
    private $nameSuffix = null;

    /**
     * BBIE
     *  Person. Job Title. Text
     *  This person's job title (for a particular role) within an organization.
     *  0..1
     *  Person
     *  Job Title
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\JobTitle $jobTitle
     */
    private $jobTitle = null;

    /**
     * BBIE
     *  Person. Nationality. Identifier
     *  An identifier for this person's nationality.
     *  0..1
     *  Person
     *  Nationality
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\NationalityID $nationalityID
     */
    private $nationalityID = null;

    /**
     * BBIE
     *  Person. Gender Code. Code
     *  A code (e.g., ISO 5218) signifying the gender of this person.
     *  0..1
     *  Person
     *  Gender Code
     *  Code
     *  Code. Type
     *
     * @var \CleverIt\UBL\Invoice\GenderCode $genderCode
     */
    private $genderCode = null;

    /**
     * BBIE
     *  Person. Birth Date. Date
     *  This person's date of birth.
     *  0..1
     *  Person
     *  Birth Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $birthDate
     */
    private $birthDate = null;

    /**
     * BBIE
     *  Person. Birthplace Name. Name
     *  The name of the place where this person was born, expressed as text.
     *  0..1
     *  Person
     *  Birthplace Name
     *  Name
     *  Name. Type
     *
     * @var \CleverIt\UBL\Invoice\BirthplaceName $birthplaceName
     */
    private $birthplaceName = null;

    /**
     * BBIE
     *  Person. Organization_ Department. Text
     *  The department or subdivision of an organization that this person belongs to (in a particular role).
     *  0..1
     *  Person
     *  Organization
     *  Department
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\OrganizationDepartment $organizationDepartment
     */
    private $organizationDepartment = null;

    /**
     * BBIE
     *  Person. Role Code. Code
     *  A code stating the person's role
     *  0..1
     *  Person
     *  Role Code
     *  Code
     *  Code. Type
     *
     * @var \CleverIt\UBL\Invoice\RoleCode $roleCode
     */
    private $roleCode = null;

    /**
     * ASBIE
     *  Person. Citizenship_ Country. Country
     *  The country of the person's citizenship.
     *  0..1
     *  Person
     *  Citizenship
     *  Country
     *  Country
     *  Country
     *
     * @var \CleverIt\UBL\Invoice\CitizenshipCountry $citizenshipCountry
     */
    private $citizenshipCountry = null;

    /**
     * ASBIE
     *  Person. Contact
     *  Contact information for this person.
     *  0..1
     *  Person
     *  Contact
     *  Contact
     *  Contact
     *
     * @var \CleverIt\UBL\Invoice\Contact $contact
     */
    private $contact = null;

    /**
     * ASBIE
     *  Person. Financial Account
     *  The financial account associated with this person.
     *  0..1
     *  Person
     *  Financial Account
     *  Financial Account
     *  Financial Account
     *
     * @var \CleverIt\UBL\Invoice\FinancialAccount $financialAccount
     */
    private $financialAccount = null;

    /**
     * ASBIE
     *  Person. Identity_ Document Reference. Document Reference
     *  A reference to a document that can precisely identify this person (e.g., a driver's license).
     *  0..n
     *  Person
     *  Identity
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \CleverIt\UBL\Invoice\IdentityDocumentReference[] $identityDocumentReference
     */
    private $identityDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Person. Residence_ Address. Address
     *  This person's address of residence.
     *  0..1
     *  Person
     *  Residence
     *  Address
     *  Address
     *  Address
     *
     * @var \CleverIt\UBL\Invoice\ResidenceAddress $residenceAddress
     */
    private $residenceAddress = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Person. Identifier
     *  An identifier for this person.
     *  0..1
     *  Person
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \CleverIt\UBL\Invoice\ID
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * BBIE
     *  Person. Identifier
     *  An identifier for this person.
     *  0..1
     *  Person
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \CleverIt\UBL\Invoice\ID $iD
     * @return self
     */
    public function setID(\CleverIt\UBL\Invoice\ID $iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as firstName
     *
     * BBIE
     *  Person. First_ Name. Name
     *  This person's given name.
     *  0..1
     *  Person
     *  First
     *  Name
     *  Name
     *  Name. Type
     *
     * @return \CleverIt\UBL\Invoice\FirstName
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Sets a new firstName
     *
     * BBIE
     *  Person. First_ Name. Name
     *  This person's given name.
     *  0..1
     *  Person
     *  First
     *  Name
     *  Name
     *  Name. Type
     *
     * @param \CleverIt\UBL\Invoice\FirstName $firstName
     * @return self
     */
    public function setFirstName(\CleverIt\UBL\Invoice\FirstName $firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * Gets as familyName
     *
     * BBIE
     *  Person. Family_ Name. Name
     *  This person's family name.
     *  0..1
     *  Person
     *  Family
     *  Name
     *  Name
     *  Name. Type
     *
     * @return \CleverIt\UBL\Invoice\FamilyName
     */
    public function getFamilyName()
    {
        return $this->familyName;
    }

    /**
     * Sets a new familyName
     *
     * BBIE
     *  Person. Family_ Name. Name
     *  This person's family name.
     *  0..1
     *  Person
     *  Family
     *  Name
     *  Name
     *  Name. Type
     *
     * @param \CleverIt\UBL\Invoice\FamilyName $familyName
     * @return self
     */
    public function setFamilyName(\CleverIt\UBL\Invoice\FamilyName $familyName)
    {
        $this->familyName = $familyName;
        return $this;
    }

    /**
     * Gets as title
     *
     * BBIE
     *  Person. Title. Text
     *  This person's title of address (e.g., Mr, Ms, Dr, Sir).
     *  0..1
     *  Person
     *  Title
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\Title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * BBIE
     *  Person. Title. Text
     *  This person's title of address (e.g., Mr, Ms, Dr, Sir).
     *  0..1
     *  Person
     *  Title
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\Title $title
     * @return self
     */
    public function setTitle(\CleverIt\UBL\Invoice\Title $title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as middleName
     *
     * BBIE
     *  Person. Middle_ Name. Name
     *  This person's middle name(s) or initials.
     *  0..1
     *  Person
     *  Middle
     *  Name
     *  Name
     *  Name. Type
     *
     * @return \CleverIt\UBL\Invoice\MiddleName
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * Sets a new middleName
     *
     * BBIE
     *  Person. Middle_ Name. Name
     *  This person's middle name(s) or initials.
     *  0..1
     *  Person
     *  Middle
     *  Name
     *  Name
     *  Name. Type
     *
     * @param \CleverIt\UBL\Invoice\MiddleName $middleName
     * @return self
     */
    public function setMiddleName(\CleverIt\UBL\Invoice\MiddleName $middleName)
    {
        $this->middleName = $middleName;
        return $this;
    }

    /**
     * Gets as otherName
     *
     * BBIE
     *  Person. Other_ Name. Name
     *  This person's second family name.
     *  0..1
     *  Person
     *  Other
     *  Name
     *  Name
     *  Name. Type
     *  Delivery Dock
     *
     * @return \CleverIt\UBL\Invoice\OtherName
     */
    public function getOtherName()
    {
        return $this->otherName;
    }

    /**
     * Sets a new otherName
     *
     * BBIE
     *  Person. Other_ Name. Name
     *  This person's second family name.
     *  0..1
     *  Person
     *  Other
     *  Name
     *  Name
     *  Name. Type
     *  Delivery Dock
     *
     * @param \CleverIt\UBL\Invoice\OtherName $otherName
     * @return self
     */
    public function setOtherName(\CleverIt\UBL\Invoice\OtherName $otherName)
    {
        $this->otherName = $otherName;
        return $this;
    }

    /**
     * Gets as nameSuffix
     *
     * BBIE
     *  Person. Name Suffix. Text
     *  A suffix to this person's name (e.g., PhD, OBE, Jr).
     *  0..1
     *  Person
     *  Name Suffix
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\NameSuffix
     */
    public function getNameSuffix()
    {
        return $this->nameSuffix;
    }

    /**
     * Sets a new nameSuffix
     *
     * BBIE
     *  Person. Name Suffix. Text
     *  A suffix to this person's name (e.g., PhD, OBE, Jr).
     *  0..1
     *  Person
     *  Name Suffix
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\NameSuffix $nameSuffix
     * @return self
     */
    public function setNameSuffix(\CleverIt\UBL\Invoice\NameSuffix $nameSuffix)
    {
        $this->nameSuffix = $nameSuffix;
        return $this;
    }

    /**
     * Gets as jobTitle
     *
     * BBIE
     *  Person. Job Title. Text
     *  This person's job title (for a particular role) within an organization.
     *  0..1
     *  Person
     *  Job Title
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\JobTitle
     */
    public function getJobTitle()
    {
        return $this->jobTitle;
    }

    /**
     * Sets a new jobTitle
     *
     * BBIE
     *  Person. Job Title. Text
     *  This person's job title (for a particular role) within an organization.
     *  0..1
     *  Person
     *  Job Title
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\JobTitle $jobTitle
     * @return self
     */
    public function setJobTitle(\CleverIt\UBL\Invoice\JobTitle $jobTitle)
    {
        $this->jobTitle = $jobTitle;
        return $this;
    }

    /**
     * Gets as nationalityID
     *
     * BBIE
     *  Person. Nationality. Identifier
     *  An identifier for this person's nationality.
     *  0..1
     *  Person
     *  Nationality
     *  Identifier
     *  Identifier. Type
     *
     * @return \CleverIt\UBL\Invoice\NationalityID
     */
    public function getNationalityID()
    {
        return $this->nationalityID;
    }

    /**
     * Sets a new nationalityID
     *
     * BBIE
     *  Person. Nationality. Identifier
     *  An identifier for this person's nationality.
     *  0..1
     *  Person
     *  Nationality
     *  Identifier
     *  Identifier. Type
     *
     * @param \CleverIt\UBL\Invoice\NationalityID $nationalityID
     * @return self
     */
    public function setNationalityID(\CleverIt\UBL\Invoice\NationalityID $nationalityID)
    {
        $this->nationalityID = $nationalityID;
        return $this;
    }

    /**
     * Gets as genderCode
     *
     * BBIE
     *  Person. Gender Code. Code
     *  A code (e.g., ISO 5218) signifying the gender of this person.
     *  0..1
     *  Person
     *  Gender Code
     *  Code
     *  Code. Type
     *
     * @return \CleverIt\UBL\Invoice\GenderCode
     */
    public function getGenderCode()
    {
        return $this->genderCode;
    }

    /**
     * Sets a new genderCode
     *
     * BBIE
     *  Person. Gender Code. Code
     *  A code (e.g., ISO 5218) signifying the gender of this person.
     *  0..1
     *  Person
     *  Gender Code
     *  Code
     *  Code. Type
     *
     * @param \CleverIt\UBL\Invoice\GenderCode $genderCode
     * @return self
     */
    public function setGenderCode(\CleverIt\UBL\Invoice\GenderCode $genderCode)
    {
        $this->genderCode = $genderCode;
        return $this;
    }

    /**
     * Gets as birthDate
     *
     * BBIE
     *  Person. Birth Date. Date
     *  This person's date of birth.
     *  0..1
     *  Person
     *  Birth Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Sets a new birthDate
     *
     * BBIE
     *  Person. Birth Date. Date
     *  This person's date of birth.
     *  0..1
     *  Person
     *  Birth Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $birthDate
     * @return self
     */
    public function setBirthDate(\DateTime $birthDate)
    {
        $this->birthDate = $birthDate;
        return $this;
    }

    /**
     * Gets as birthplaceName
     *
     * BBIE
     *  Person. Birthplace Name. Name
     *  The name of the place where this person was born, expressed as text.
     *  0..1
     *  Person
     *  Birthplace Name
     *  Name
     *  Name. Type
     *
     * @return \CleverIt\UBL\Invoice\BirthplaceName
     */
    public function getBirthplaceName()
    {
        return $this->birthplaceName;
    }

    /**
     * Sets a new birthplaceName
     *
     * BBIE
     *  Person. Birthplace Name. Name
     *  The name of the place where this person was born, expressed as text.
     *  0..1
     *  Person
     *  Birthplace Name
     *  Name
     *  Name. Type
     *
     * @param \CleverIt\UBL\Invoice\BirthplaceName $birthplaceName
     * @return self
     */
    public function setBirthplaceName(\CleverIt\UBL\Invoice\BirthplaceName $birthplaceName)
    {
        $this->birthplaceName = $birthplaceName;
        return $this;
    }

    /**
     * Gets as organizationDepartment
     *
     * BBIE
     *  Person. Organization_ Department. Text
     *  The department or subdivision of an organization that this person belongs to (in a particular role).
     *  0..1
     *  Person
     *  Organization
     *  Department
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\OrganizationDepartment
     */
    public function getOrganizationDepartment()
    {
        return $this->organizationDepartment;
    }

    /**
     * Sets a new organizationDepartment
     *
     * BBIE
     *  Person. Organization_ Department. Text
     *  The department or subdivision of an organization that this person belongs to (in a particular role).
     *  0..1
     *  Person
     *  Organization
     *  Department
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\OrganizationDepartment $organizationDepartment
     * @return self
     */
    public function setOrganizationDepartment(\CleverIt\UBL\Invoice\OrganizationDepartment $organizationDepartment)
    {
        $this->organizationDepartment = $organizationDepartment;
        return $this;
    }

    /**
     * Gets as roleCode
     *
     * BBIE
     *  Person. Role Code. Code
     *  A code stating the person's role
     *  0..1
     *  Person
     *  Role Code
     *  Code
     *  Code. Type
     *
     * @return \CleverIt\UBL\Invoice\RoleCode
     */
    public function getRoleCode()
    {
        return $this->roleCode;
    }

    /**
     * Sets a new roleCode
     *
     * BBIE
     *  Person. Role Code. Code
     *  A code stating the person's role
     *  0..1
     *  Person
     *  Role Code
     *  Code
     *  Code. Type
     *
     * @param \CleverIt\UBL\Invoice\RoleCode $roleCode
     * @return self
     */
    public function setRoleCode(\CleverIt\UBL\Invoice\RoleCode $roleCode)
    {
        $this->roleCode = $roleCode;
        return $this;
    }

    /**
     * Gets as citizenshipCountry
     *
     * ASBIE
     *  Person. Citizenship_ Country. Country
     *  The country of the person's citizenship.
     *  0..1
     *  Person
     *  Citizenship
     *  Country
     *  Country
     *  Country
     *
     * @return \CleverIt\UBL\Invoice\CitizenshipCountry
     */
    public function getCitizenshipCountry()
    {
        return $this->citizenshipCountry;
    }

    /**
     * Sets a new citizenshipCountry
     *
     * ASBIE
     *  Person. Citizenship_ Country. Country
     *  The country of the person's citizenship.
     *  0..1
     *  Person
     *  Citizenship
     *  Country
     *  Country
     *  Country
     *
     * @param \CleverIt\UBL\Invoice\CitizenshipCountry $citizenshipCountry
     * @return self
     */
    public function setCitizenshipCountry(\CleverIt\UBL\Invoice\CitizenshipCountry $citizenshipCountry)
    {
        $this->citizenshipCountry = $citizenshipCountry;
        return $this;
    }

    /**
     * Gets as contact
     *
     * ASBIE
     *  Person. Contact
     *  Contact information for this person.
     *  0..1
     *  Person
     *  Contact
     *  Contact
     *  Contact
     *
     * @return \CleverIt\UBL\Invoice\Contact
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * ASBIE
     *  Person. Contact
     *  Contact information for this person.
     *  0..1
     *  Person
     *  Contact
     *  Contact
     *  Contact
     *
     * @param \CleverIt\UBL\Invoice\Contact $contact
     * @return self
     */
    public function setContact(\CleverIt\UBL\Invoice\Contact $contact)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * Gets as financialAccount
     *
     * ASBIE
     *  Person. Financial Account
     *  The financial account associated with this person.
     *  0..1
     *  Person
     *  Financial Account
     *  Financial Account
     *  Financial Account
     *
     * @return \CleverIt\UBL\Invoice\FinancialAccount
     */
    public function getFinancialAccount()
    {
        return $this->financialAccount;
    }

    /**
     * Sets a new financialAccount
     *
     * ASBIE
     *  Person. Financial Account
     *  The financial account associated with this person.
     *  0..1
     *  Person
     *  Financial Account
     *  Financial Account
     *  Financial Account
     *
     * @param \CleverIt\UBL\Invoice\FinancialAccount $financialAccount
     * @return self
     */
    public function setFinancialAccount(\CleverIt\UBL\Invoice\FinancialAccount $financialAccount)
    {
        $this->financialAccount = $financialAccount;
        return $this;
    }

    /**
     * Adds as identityDocumentReference
     *
     * ASBIE
     *  Person. Identity_ Document Reference. Document Reference
     *  A reference to a document that can precisely identify this person (e.g., a driver's license).
     *  0..n
     *  Person
     *  Identity
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\IdentityDocumentReference $identityDocumentReference
     */
    public function addToIdentityDocumentReference(\CleverIt\UBL\Invoice\IdentityDocumentReference $identityDocumentReference)
    {
        $this->identityDocumentReference[] = $identityDocumentReference;
        return $this;
    }

    /**
     * isset identityDocumentReference
     *
     * ASBIE
     *  Person. Identity_ Document Reference. Document Reference
     *  A reference to a document that can precisely identify this person (e.g., a driver's license).
     *  0..n
     *  Person
     *  Identity
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIdentityDocumentReference($index)
    {
        return isset($this->identityDocumentReference[$index]);
    }

    /**
     * unset identityDocumentReference
     *
     * ASBIE
     *  Person. Identity_ Document Reference. Document Reference
     *  A reference to a document that can precisely identify this person (e.g., a driver's license).
     *  0..n
     *  Person
     *  Identity
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIdentityDocumentReference($index)
    {
        unset($this->identityDocumentReference[$index]);
    }

    /**
     * Gets as identityDocumentReference
     *
     * ASBIE
     *  Person. Identity_ Document Reference. Document Reference
     *  A reference to a document that can precisely identify this person (e.g., a driver's license).
     *  0..n
     *  Person
     *  Identity
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \CleverIt\UBL\Invoice\IdentityDocumentReference[]
     */
    public function getIdentityDocumentReference()
    {
        return $this->identityDocumentReference;
    }

    /**
     * Sets a new identityDocumentReference
     *
     * ASBIE
     *  Person. Identity_ Document Reference. Document Reference
     *  A reference to a document that can precisely identify this person (e.g., a driver's license).
     *  0..n
     *  Person
     *  Identity
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \CleverIt\UBL\Invoice\IdentityDocumentReference[] $identityDocumentReference
     * @return self
     */
    public function setIdentityDocumentReference(array $identityDocumentReference)
    {
        $this->identityDocumentReference = $identityDocumentReference;
        return $this;
    }

    /**
     * Gets as residenceAddress
     *
     * ASBIE
     *  Person. Residence_ Address. Address
     *  This person's address of residence.
     *  0..1
     *  Person
     *  Residence
     *  Address
     *  Address
     *  Address
     *
     * @return \CleverIt\UBL\Invoice\ResidenceAddress
     */
    public function getResidenceAddress()
    {
        return $this->residenceAddress;
    }

    /**
     * Sets a new residenceAddress
     *
     * ASBIE
     *  Person. Residence_ Address. Address
     *  This person's address of residence.
     *  0..1
     *  Person
     *  Residence
     *  Address
     *  Address
     *  Address
     *
     * @param \CleverIt\UBL\Invoice\ResidenceAddress $residenceAddress
     * @return self
     */
    public function setResidenceAddress(\CleverIt\UBL\Invoice\ResidenceAddress $residenceAddress)
    {
        $this->residenceAddress = $residenceAddress;
        return $this;
    }


}

