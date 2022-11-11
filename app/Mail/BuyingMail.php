<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Product;

class BuyingMail extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    /* public Product $data; */

    public function __construct($product_name,$price,$postage,$mail)
    {
        /* dd($data); */
        $this->name = $product_name;
        $this->price = $price;
        $this->postage = $postage;
        $this->mail = $mail;
        /* dd($this); */
    }

    public function build()
    {
        /* dd($this); */
        return $this
        ->to($this->mail)
        ->subject('商品を購入いただきありがとうございます【Tawara屋】')
        ->view('emails.buying')
        ->with([
            'name' => $this->name,
            'price' => $this->price,
            'postage' => $this->postage,
        ]);
    }
}
