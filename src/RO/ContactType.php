<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing ContactType
 *
 * ABIE
 *  Contact. Details
 *  A class to describe a contactable person or department in an organization.
 *  Contact
 * XSD Type: ContactType
 */
class ContactType
{
    /**
     * BBIE
     *  Contact. Identifier
     *  An identifier for this contact.
     *  0..1
     *  Contact
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Receivals Clerk
     *
     * @var \CleverIt\UBL\Invoice\RO\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Contact. Name
     *  The name of this contact. It is recommended that this be used for a functional name and not a personal name.
     *  0..1
     *  Contact
     *  Name
     *  Name
     *  Name. Type
     *  Delivery Dock
     *
     * @var \CleverIt\UBL\Invoice\RO\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Contact. Telephone. Text
     *  The primary telephone number of this contact.
     *  0..1
     *  Contact
     *  Telephone
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\Telephone $telephone
     */
    private $telephone = null;

    /**
     * BBIE
     *  Contact. Telefax. Text
     *  The primary fax number of this contact.
     *  0..1
     *  Contact
     *  Telefax
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\Telefax $telefax
     */
    private $telefax = null;

    /**
     * BBIE
     *  Contact. Electronic_ Mail. Text
     *  The primary email address of this contact.
     *  0..1
     *  Contact
     *  Electronic
     *  Mail
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\ElectronicMail $electronicMail
     */
    private $electronicMail = null;

    /**
     * BBIE
     *  Contact. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures; in particular, a textual description of the circumstances under which this contact can be used (e.g., "emergency" or "after hours").
     *  0..n
     *  Contact
     *  Note
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\Note[] $note
     */
    private $note = [
        
    ];

    /**
     * ASBIE
     *  Contact. Other_ Communication. Communication
     *  Another means of communication with this contact.
     *  0..n
     *  Contact
     *  Other
     *  Communication
     *  Communication
     *  Communication
     *
     * @var \CleverIt\UBL\Invoice\RO\OtherCommunication[] $otherCommunication
     */
    private $otherCommunication = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Contact. Identifier
     *  An identifier for this contact.
     *  0..1
     *  Contact
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Receivals Clerk
     *
     * @return \CleverIt\UBL\Invoice\RO\ID
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * BBIE
     *  Contact. Identifier
     *  An identifier for this contact.
     *  0..1
     *  Contact
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Receivals Clerk
     *
     * @param \CleverIt\UBL\Invoice\RO\ID $iD
     * @return self
     */
    public function setID(?\CleverIt\UBL\Invoice\RO\ID $iD = null)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as name
     *
     * BBIE
     *  Contact. Name
     *  The name of this contact. It is recommended that this be used for a functional name and not a personal name.
     *  0..1
     *  Contact
     *  Name
     *  Name
     *  Name. Type
     *  Delivery Dock
     *
     * @return \CleverIt\UBL\Invoice\RO\Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * BBIE
     *  Contact. Name
     *  The name of this contact. It is recommended that this be used for a functional name and not a personal name.
     *  0..1
     *  Contact
     *  Name
     *  Name
     *  Name. Type
     *  Delivery Dock
     *
     * @param \CleverIt\UBL\Invoice\RO\Name $name
     * @return self
     */
    public function setName(?\CleverIt\UBL\Invoice\RO\Name $name = null)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as telephone
     *
     * BBIE
     *  Contact. Telephone. Text
     *  The primary telephone number of this contact.
     *  0..1
     *  Contact
     *  Telephone
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\Telephone
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Sets a new telephone
     *
     * BBIE
     *  Contact. Telephone. Text
     *  The primary telephone number of this contact.
     *  0..1
     *  Contact
     *  Telephone
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\Telephone $telephone
     * @return self
     */
    public function setTelephone(?\CleverIt\UBL\Invoice\RO\Telephone $telephone = null)
    {
        $this->telephone = $telephone;
        return $this;
    }

    /**
     * Gets as telefax
     *
     * BBIE
     *  Contact. Telefax. Text
     *  The primary fax number of this contact.
     *  0..1
     *  Contact
     *  Telefax
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\Telefax
     */
    public function getTelefax()
    {
        return $this->telefax;
    }

    /**
     * Sets a new telefax
     *
     * BBIE
     *  Contact. Telefax. Text
     *  The primary fax number of this contact.
     *  0..1
     *  Contact
     *  Telefax
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\Telefax $telefax
     * @return self
     */
    public function setTelefax(?\CleverIt\UBL\Invoice\RO\Telefax $telefax = null)
    {
        $this->telefax = $telefax;
        return $this;
    }

    /**
     * Gets as electronicMail
     *
     * BBIE
     *  Contact. Electronic_ Mail. Text
     *  The primary email address of this contact.
     *  0..1
     *  Contact
     *  Electronic
     *  Mail
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\ElectronicMail
     */
    public function getElectronicMail()
    {
        return $this->electronicMail;
    }

    /**
     * Sets a new electronicMail
     *
     * BBIE
     *  Contact. Electronic_ Mail. Text
     *  The primary email address of this contact.
     *  0..1
     *  Contact
     *  Electronic
     *  Mail
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\ElectronicMail $electronicMail
     * @return self
     */
    public function setElectronicMail(?\CleverIt\UBL\Invoice\RO\ElectronicMail $electronicMail = null)
    {
        $this->electronicMail = $electronicMail;
        return $this;
    }

    /**
     * Adds as note
     *
     * BBIE
     *  Contact. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures; in particular, a textual description of the circumstances under which this contact can be used (e.g., "emergency" or "after hours").
     *  0..n
     *  Contact
     *  Note
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\Note $note
     */
    public function addToNote(\CleverIt\UBL\Invoice\RO\Note $note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * isset note
     *
     * BBIE
     *  Contact. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures; in particular, a textual description of the circumstances under which this contact can be used (e.g., "emergency" or "after hours").
     *  0..n
     *  Contact
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNote($index)
    {
        return isset($this->note[$index]);
    }

    /**
     * unset note
     *
     * BBIE
     *  Contact. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures; in particular, a textual description of the circumstances under which this contact can be used (e.g., "emergency" or "after hours").
     *  0..n
     *  Contact
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNote($index)
    {
        unset($this->note[$index]);
    }

    /**
     * Gets as note
     *
     * BBIE
     *  Contact. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures; in particular, a textual description of the circumstances under which this contact can be used (e.g., "emergency" or "after hours").
     *  0..n
     *  Contact
     *  Note
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\Note[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * BBIE
     *  Contact. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures; in particular, a textual description of the circumstances under which this contact can be used (e.g., "emergency" or "after hours").
     *  0..n
     *  Contact
     *  Note
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\Note[] $note
     * @return self
     */
    public function setNote(array $note = null)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Adds as otherCommunication
     *
     * ASBIE
     *  Contact. Other_ Communication. Communication
     *  Another means of communication with this contact.
     *  0..n
     *  Contact
     *  Other
     *  Communication
     *  Communication
     *  Communication
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\OtherCommunication $otherCommunication
     */
    public function addToOtherCommunication(\CleverIt\UBL\Invoice\RO\OtherCommunication $otherCommunication)
    {
        $this->otherCommunication[] = $otherCommunication;
        return $this;
    }

    /**
     * isset otherCommunication
     *
     * ASBIE
     *  Contact. Other_ Communication. Communication
     *  Another means of communication with this contact.
     *  0..n
     *  Contact
     *  Other
     *  Communication
     *  Communication
     *  Communication
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOtherCommunication($index)
    {
        return isset($this->otherCommunication[$index]);
    }

    /**
     * unset otherCommunication
     *
     * ASBIE
     *  Contact. Other_ Communication. Communication
     *  Another means of communication with this contact.
     *  0..n
     *  Contact
     *  Other
     *  Communication
     *  Communication
     *  Communication
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOtherCommunication($index)
    {
        unset($this->otherCommunication[$index]);
    }

    /**
     * Gets as otherCommunication
     *
     * ASBIE
     *  Contact. Other_ Communication. Communication
     *  Another means of communication with this contact.
     *  0..n
     *  Contact
     *  Other
     *  Communication
     *  Communication
     *  Communication
     *
     * @return \CleverIt\UBL\Invoice\RO\OtherCommunication[]
     */
    public function getOtherCommunication()
    {
        return $this->otherCommunication;
    }

    /**
     * Sets a new otherCommunication
     *
     * ASBIE
     *  Contact. Other_ Communication. Communication
     *  Another means of communication with this contact.
     *  0..n
     *  Contact
     *  Other
     *  Communication
     *  Communication
     *  Communication
     *
     * @param \CleverIt\UBL\Invoice\RO\OtherCommunication[] $otherCommunication
     * @return self
     */
    public function setOtherCommunication(array $otherCommunication = null)
    {
        $this->otherCommunication = $otherCommunication;
        return $this;
    }
}

