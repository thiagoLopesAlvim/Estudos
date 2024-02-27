<?php 

namespace App\DTO;
use App\Http\Requests\StoreSupportRequest;

class CreateSupportDTO{

    public function __construct(public string $subject,public string $status,public string $body){
    }

    public static function makeFromRequest(StoreSupportRequest $request){
        return new self($request->subject, 'a', $request->body);
    }
}