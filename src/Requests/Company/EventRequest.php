<?php

namespace TruckersMP\APIClient\Requests\Company;

use Exception;
use Psr\Http\Client\ClientExceptionInterface;
use TruckersMP\APIClient\Exceptions\PageNotFoundException;
use TruckersMP\APIClient\Exceptions\RequestException;
use TruckersMP\APIClient\Models\CompanyEvent;
use TruckersMP\APIClient\Requests\Request;

class EventRequest extends Request
{
    /**
     * The ID of the requested company.
     *
     * @var int
     */
    protected $companyId;

    /**
     * The ID of the requested event.
     *
     * @var int
     */
    protected $eventId;

    /**
     * Create a new EventRequest instance.
     *
     * @param  int  $companyId
     * @param  int  $eventId
     * @return void
     */
    public function __construct(int $companyId, int $eventId)
    {
        parent::__construct();

        $this->companyId = $companyId;
        $this->eventId = $eventId;
    }

    /**
     * Get the endpoint of the request.
     *
     * @return string
     */
    public function getEndpoint(): string
    {
        return 'vtc/' . $this->companyId . '/events/' . $this->eventId;
    }

    /**
     * Get the data for the request.
     *
     * @return mixed
     *
     * @throws PageNotFoundException
     * @throws RequestException
     * @throws Exception
     * @throws ClientExceptionInterface
     */
    public function get(): CompanyEvent
    {
        return new CompanyEvent(
            $this->send()['response']
        );
    }
}
