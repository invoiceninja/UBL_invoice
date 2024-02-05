<?php

namespace CleverIt\UBL\Invoice;

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
     * @var \CleverIt\UBL\Invoice\ID $iD
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
     * @var \CleverIt\UBL\Invoice\Name $name
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
     * @var \CleverIt\UBL\Invoice\Telephone $telephone
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
     * @var \CleverIt\UBL\Invoice\Telefax $telefax
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
     * @var \CleverIt\UBL\Invoice\ElectronicMail $electronicMail
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
     * @var \CleverIt\UBL\Invoice\Note[] $note
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
     * @var \CleverIt\UBL\Invoice\OtherCommunication[] $otherCommunication
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
     *  Contact. Identifier
     *  An identifier for this contact.
     *  0..1
     *  Contact
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Receivals Clerk
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
     * @return \CleverIt\UBL\Invoice\Name
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
     * @param \CleverIt\UBL\Invoice\Name $name
     * @return self
     */
    public function setName(\CleverIt\UBL\Invoice\Name $name)
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
     * @return \CleverIt\UBL\Invoice\Telephone
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
     * @param \CleverIt\UBL\Invoice\Telephone $telephone
     * @return self
     */
    public function setTelephone(\CleverIt\UBL\Invoice\Telephone $telephone)
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
     * @return \CleverIt\UBL\Invoice\Telefax
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
     * @param \CleverIt\UBL\Invoice\Telefax $telefax
     * @return self
     */
    public function setTelefax(\CleverIt\UBL\Invoice\Telefax $telefax)
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
     * @return \CleverIt\UBL\Invoice\ElectronicMail
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
     * @param \CleverIt\UBL\Invoice\ElectronicMail $electronicMail
     * @return self
     */
    public function setElectronicMail(\CleverIt\UBL\Invoice\ElectronicMail $electronicMail)
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
     * @param \CleverIt\UBL\Invoice\Note $note
     */
    public function addToNote(\CleverIt\UBL\Invoice\Note $note)
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
     * @return \CleverIt\UBL\Invoice\Note[]
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
     * @param \CleverIt\UBL\Invoice\Note[] $note
     * @return self
     */
    public function setNote(array $note)
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
     * @param \CleverIt\UBL\Invoice\OtherCommunication $otherCommunication
     */
    public function addToOtherCommunication(\CleverIt\UBL\Invoice\OtherCommunication $otherCommunication)
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
     * @return \CleverIt\UBL\Invoice\OtherCommunication[]
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
     * @param \CleverIt\UBL\Invoice\OtherCommunication[] $otherCommunication
     * @return self
     */
    public function setOtherCommunication(array $otherCommunication)
    {
        $this->otherCommunication = $otherCommunication;
        return $this;
    }


}

