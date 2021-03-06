<?php

/**
 * This file was generated by phpSPO model generator 2020-04-25T20:53:05+00:00 16.0.20008.12009
 */
namespace Office365\OutlookServices;

use Office365\Runtime\ResourcePath;

/**
 * A folder that contains contacts.
 * @package Office365\Outlook
 */
class ContactFolder extends OutlookEntity
{
    /**
     * The collection of child folders in the folder. Navigation property.
     * @var array
     */
    public $ChildFolders;
    /**
     * The contacts in the folder. Navigation property.
     * @var array
     */
    public $Contacts;
    /**
     * The folder's display name.
     * @var string
     */
    public $DisplayName;
    /**
     * The ID of the folder's parent folder.
     * @var string
     */
    public $ParentFolderId;
    /**
     * @return ContactCollection
     */
    public function getContacts()
    {
        if (!$this->isPropertyAvailable("Contacts")) {
            $this->setProperty("Contacts", new ContactCollection($this->getContext(),
                new ResourcePath("Contacts", $this->getResourcePath())));
        }
        return $this->getProperty("Contacts");
    }
}