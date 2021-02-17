<?php

namespace TruckersMP\APIClient\Models;

use Carbon\Carbon;
use Exception;

class CompanyEvent
{
    /**
     * The event id.
     *
     * @var int
     */
    protected $id;

    /**
     * The event name.
     *
     * @var string
     */
    protected $name;

    /**
     * The event slug.
     *
     * @var string
     */
    protected $slug;

    /**
     * The game that the event uses.
     *
     * @var string
     */
    protected $game;

    /**
     * The event language.
     *
     * @var string
     */
    protected $language;

    /**
     * The event departure location.
     *
     * @var array
     */
    protected $departureLocation;

    /**
     * The event departure city.
     *
     * @var array
     */
    protected $departureCity;

    /**
     * The event arrival location.
     *
     * @var array
     */
    protected $arrivalLocation;

    /**
     * The event arrival city.
     *
     * @var array
     */
    protected $arrivalCity;

    /**
     * The event's starting Timestamp
     *
     * @var Carbon
     */
    private $start_at;

    /**
     * The name of the server this event uses
     *
     * @var mixed
     */
    private $server;

    /**
     * The banner URL for this event
     *
     * @var mixed
     */
    private $banner;

    /**
     * The route map URL for this event
     *
     * @var mixed
     */
    private $map;

    /**
     * The description provided for the event
     *
     * @var mixed
     */
    private $description;

    /**
     * The voice link field provided for the event
     *
     * @var mixed
     */
    private $voice_link;

    /**
     * The external link provided for the event
     *
     * @var mixed
     */
    private $external_link;

    /**
     * The number of people who have marked as 'Confirmed' on the event page
     *
     * @var int
     */
    private $confirmed;

    /**
     * The number of people who have marked as 'Maybe / Unsure' on the event page
     *
     * @var mixed
     */
    private $unsure;

    /**
     * The event URL
     *
     * @var mixed
     */
    private $url;

    /**
     * Create a new CompanyEvent instance.
     *
     * @param  array  $event
     * @return void
     *
     * @throws Exception
     */
    public function __construct(array $event)
    {
        $this->id = $event['id'];
        $this->name = $event['name'];
        $this->slug = $event['slug'];
        $this->game = $event['game'];
        $this->server = $event['server']['name'];
        $this->language = $event['language'];
        $this->departureLocation = $event['departure']['location'];
        $this->departureCity = $event['departure']['city'];
        $this->arrivalCity = $event['arrival']['location'];
        $this->arrivalLocation = $event['arrival']['city'];
        $this->start_at = new Carbon($event['start_at'], 'UTC');
        $this->banner = $event['banner'];
        $this->map = $event['map'];
        $this->description = $event['description'];
        $this->voice_link = $event['voice_link'];
        $this->external_link = $event['external_link'];
        $this->confirmed = $event['attendances']['confirmed'];
        $this->unsure = $event['attendances']['unsure'];
        $this->url = $event['url'];
    }

    /**
     * Get the event id.
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get the provided Event name.
     *
     * @return string
     */
    public function getEventName(): string
    {
        return $this->name;
    }

    /**
     * Get the event slug.
     *
     * @return string
     */
    public function getEventSlug(): string
    {
        return $this->slug;
    }

    /**
     * Get the game this event is on (ETS2/ATS)
     *
     * @return string
     */
    public function getEventGame(): string
    {
        return $this->game;
    }

    /**
     * Get the name of the Server this event is held on.
     *
     * @return string
     */
    public function getEventServer(): string
    {
        return $this->server;
    }

    /**
     * Get the event slug.
     *
     * @return string
     */
    public function getEventLanguage(): string
    {
        return $this->language;
    }

    /**
     * Get the event's departure location.
     *
     * @return string
     */
    public function getEventDepartureLocation(): string
    {
        return $this->departureLocation;
    }

    /**
     * Get the event's departure city.
     *
     * @return string
     */
    public function getEventDepartureCity(): string
    {
        return $this->departureCity;
    }

    /**
     * Get the event's arrival location.
     *
     * @return string
     */
    public function getEventArrivalLocation(): string
    {
        return $this->arrivalLocation;
    }

    /**
     * Get the event's arrival city.
     *
     * @return string
     */
    public function getEventArrivalCity(): string
    {
        return $this->arrivalCity;
    }

    /**
     * Get the event's start date & time.
     *
     * @return string
     */
    public function getEventStart(): string
    {
        return $this->start_at;
    }

    /**
     * Get the event's banner URL.
     *
     * @return string
     */
    public function getEventBanner(): string
    {
        return $this->banner;
    }

    /**
     * Get the event's route map URL.
     *
     * @return string
     */
    public function getEventMap(): string
    {
        return $this->map;
    }

    /**
     * Get the event's description.
     *
     * @return string
     */
    public function getEventDescription(): string
    {
        return $this->description;
    }

    /**
     * Get the event's voice link.
     *
     * @return string
     */
    public function getEventVoiceLink(): string
    {
        return $this->voice_link;
    }

    /**
     * Get the event's external link.
     *
     * @return string
     */
    public function getEventExternalLink(): string
    {
        return $this->external_link;
    }

    /**
     * Get the number of users who have confirmed attendance to the event
     *
     * @return int
     */
    public function getEventConfirmed(): int
    {
        return $this->confirmed;
    }

    /**
     * Get the number of users who are unsure if they can attend the event
     *
     * @return int
     */
    public function getEventUnsure(): int
    {
        return $this->unsure;
    }

    /**
     * Get the URL of the event. This is DIFFERENT to the External URL provided by the end-user.
     *
     * @return string
     */
    public function getEventURL(): string
    {
        return $this->url;
    }
}
