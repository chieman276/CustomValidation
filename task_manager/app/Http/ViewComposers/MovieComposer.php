<?php
 namespace App\Http\ViewComposers;

 use Illuminate\View\View;
use stdClass;

class MovieComposer
 {
     public $movieList = [];
     /**
      * Create a movie composer.
      *
      * @return void
      */
     public function __construct()
     {
         $this->movieList = [
             'Shawshank redemption',
             'Forrest Gump',
             'The Matrix',
             'Pirates of the Carribean',
             'Back to the future',
         ];
     }

     /**
      * Bind data to the view.
      *
      * @param  View  $view
      * @return void
      */
     public function compose(View $view)
     {
        
         
         $customers=[ [
             "id"=>1,
             "name"=>"Nguyễn Văn A",
             "phone"=>"01234567890",
             "email"=>"email.test@mail.com",
         ],
         [
            "id"=>2,
            "name"=>"Nguyễn Văn B",
            "phone"=>"01234567890",
            "email"=>"email.test@mail.com",
        ],
        [
            "id"=>3,
            "name"=>"Nguyễn Văn C",
            "phone"=>"01234567890",
            "email"=>"email.test@mail.com",
        ],
        [
            "id"=>4,
            "name"=>"Nguyễn Văn D",
            "phone"=>"01234567890",
            "email"=>"email.test@mail.com",
        ],
        ];
        
        $view->with('customers', $customers);
         $view->with('latestMovie', end($this->movieList));
     }
 }
