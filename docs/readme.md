### myRoommie Shortcuts
##### hvs : Hosteller Verification status
         hvs:  Hosteller Verification status
         Hosteller verification status is a middleware that verifies that hosteller
         a hosteller's provided information has being confirmed by the myRoommie team
        'hvs' => \myRoommie\Http\Middleware\CheckHostellerStatus::class
        
###### Steps
        Steps found in the 'Modules' folder are responsible for all the form wizards in the app.

###### published: published hostels

    Published: Check For published hostels is a middleware responsible for checking if a hostel has been
    published by a hosteller.  Published publishes only hostels with active status.
    Inactive hostels should always not be visible to any user. 
    'published' =>\myRoommie\Http\Middleware\CheckForPublishedHostels::class
    
###### chrp: Complete hostel registration process

    chrp: Complete hostel registration process is a middleware responsible for checking if a 
    hosteller has completed its hostel registration process
    
    'chrp' => \myRoommie\Http\Middleware\CompleteHostelRegistrationProcess::class
