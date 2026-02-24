<?php

namespace App\Models\frontEnd;
use Mail;
use App\Mail\ContactMail;
use App\Mail\ResponseMail; // Import the email class for user response
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    use HasFactory;
    protected $fillable = ['name','email','phone','category','detail'];

    public static function boot() {

        parent::boot();

        // static::created(function ($item) {
        //     $adminEmail = ["anish@gurkhaclean.co.uk", "purja@gurkhaclean.co.uk", "samita@gurkhaclean.co.uk", "mateusz@gurkhaclean.co.uk" ];

        //     Mail::to($adminEmail)->send(new ContactMail($item));

        //     // Send email to user who filled the form
        //     $userEmail = $item->email; // Assuming 'email' is the field name in your database
        //     Mail::to($userEmail)->send(new ResponseMail($item));
        // });
    }
}
