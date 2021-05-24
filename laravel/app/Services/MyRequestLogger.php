<?php
namespace App\Services;

use Illuminate\Http\Request;

/**
 *  MyRequestLogger
 *
 */

class MyRequestLogger extends AbstractRequestLogger
{
    /**
     *  @inheritDoc
     */
    protected function generateMessage(): string
    {
	return 'Local request logger';
    }
    
    /**
     *  @inheritDoc
     */
    protected function extractRequestData(Request $request): array
    {
	if (app()->environment('local')) {
	    return [
		'Request came from' => $request->ip(),
		'Browser' => $request->header('User-Agent'),
	    ];
	}
    }
}