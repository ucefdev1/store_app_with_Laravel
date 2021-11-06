<?php

namespace App\Mail;

use App\Models\Product;
use http\Env\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class orderMail extends Mailable
{
    use Queueable, SerializesModels;
   public $prd;
   public $rqs;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Product $product,\Illuminate\Http\Request $request)
    {
        $this->prd = $product;
        $this->rqs = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      //  dd($this->prd);
        return $this->markdown('emails.newOrderMail')->with(['prd'=>$this->prd,'rqs'=>$this->rqs]);
    }
}
