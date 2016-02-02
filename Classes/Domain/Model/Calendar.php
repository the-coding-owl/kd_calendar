<?php
namespace KevinDitscheid\KdCalendar\Domain\Model;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2016 Kevin Ditscheid <kevinditscheid@gmail.com>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * A calendar
 */
class Calendar extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * kind
     *
     * @var string
     */
    protected $kind = '';
    
    /**
     * id
     *
     * @var string
     */
    protected $id = '';
    
    /**
     * summary
     *
     * @var string
     */
    protected $summary = '';
    
    /**
     * description
     *
     * @var string
     */
    protected $description = '';
    
    /**
     * location
     *
     * @var string
     */
    protected $location = '';
    
    /**
     * timeZone
     *
     * @var string
     */
    protected $timeZone = '';
    
    /**
     * The events for this calendar
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\KevinDitscheid\KdCalendar\Domain\Model\Event>
     * @cascade remove
     */
    protected $events = null;
    
    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }
    
    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->events = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }
    
    /**
     * Returns the kind
     *
     * @return string $kind
     */
    public function getKind()
    {
        return $this->kind;
    }
    
    /**
     * Sets the kind
     *
     * @param string $kind
     * @return void
     */
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    
    /**
     * Returns the id
     *
     * @return string $id
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * Sets the id
     *
     * @param string $id
     * @return void
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    
    /**
     * Returns the summary
     *
     * @return string $summary
     */
    public function getSummary()
    {
        return $this->summary;
    }
    
    /**
     * Sets the summary
     *
     * @param string $summary
     * @return void
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;
    }
    
    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
    
    /**
     * Returns the location
     *
     * @return string $location
     */
    public function getLocation()
    {
        return $this->location;
    }
    
    /**
     * Sets the location
     *
     * @param string $location
     * @return void
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }
    
    /**
     * Returns the timeZone
     *
     * @return string $timeZone
     */
    public function getTimeZone()
    {
        return $this->timeZone;
    }
    
    /**
     * Sets the timeZone
     *
     * @param string $timeZone
     * @return void
     */
    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;
    }
    
    /**
     * Adds a Event
     *
     * @param \KevinDitscheid\KdCalendar\Domain\Model\Event $event
     * @return void
     */
    public function addEvent(\KevinDitscheid\KdCalendar\Domain\Model\Event $event)
    {
        $this->events->attach($event);
    }
    
    /**
     * Removes a Event
     *
     * @param \KevinDitscheid\KdCalendar\Domain\Model\Event $eventToRemove The Event to be removed
     * @return void
     */
    public function removeEvent(\KevinDitscheid\KdCalendar\Domain\Model\Event $eventToRemove)
    {
        $this->events->detach($eventToRemove);
    }
    
    /**
     * Returns the events
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\KevinDitscheid\KdCalendar\Domain\Model\Event> $events
     */
    public function getEvents()
    {
        return $this->events;
    }
    
    /**
     * Sets the events
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\KevinDitscheid\KdCalendar\Domain\Model\Event> $events
     * @return void
     */
    public function setEvents(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $events)
    {
        $this->events = $events;
    }

}