<?php
namespace App\Services;

use Illuminate\Http\Request;

/**
 *  ProductionRequestLogger
 *
 */

class ProctionRequestLogger extends AbstractRequestLogger
{
    /**
     *  @inheritDoc
     */
    protected function generateMessage(): string
    {
	return 'Production request logger';
    }
    
    /**
     *  @inheritDoc
     */
    protected function extractRequestData(Request $request): array
    {
	if (app()->environment('produtcion')) {
	    return [
		'Request came from' => $request->ip(),
		'Browser' => $request->header('User-Agent'),
	    ];
	}
    }
}
