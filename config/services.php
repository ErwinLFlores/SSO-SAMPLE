<?php 

return [
    'microsoft' => [    
        'client_id' => env('MICROSOFT_CLIENT_ID'),  
        'client_secret' => env('MICROSOFT_CLIENT_SECRET'),  
        'redirect' => env('MICROSOFT_REDIRECT_URI') 
    ],
    'google' => [    
        'client_id' => env('GOOGLE_CLIENT_ID'),  
        'client_secret' => env('GOOGLE_CLIENT_SECRET'),  
        'redirect' => env('GOOGLE_REDIRECT_URI') 
      ],
];