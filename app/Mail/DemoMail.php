<?php
  
namespace App\Mail;
  
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
  
class DemoMail extends Mailable
{
    use Queueable, SerializesModels;
  
    public $mailData;
    public $name;
  
    // /**
    //  * Create a new message instance.
    //  *
    //  * @return void
    //  */
    // public function __construct($mailData)
    // {
    //     $this->mailData = $mailData;
    // }
  
    // /**
    //  * Build the message.
    //  *
    //  * @return $this
    //  */
    // public function build()
    // {
    //     return $this->subject('Mail from ItSolutionStuff.com')
    //                 ->view('emails.demoMail');
    // }
    public function __construct(string $name)
{
    $this->name = $name; //可以傳到html的view檔案做使用
    $this->subject = 'Notification to '.$name; //信件標題
}

public function build(){
		return view('example_mail'); //引用html的view檔案
}
}