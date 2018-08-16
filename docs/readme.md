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

###### Reservations
    reservation period ; This is date-time set by a hosteller. The reservation period is the date-time range a hostel reservations can be placed.
    reservation duration: This is the time range for which a reserved bed can last. Or the expiration date for a reserved room. (Minutes calcation is perfered)
    booking duration: This This is the date-time range a tenant is allowed to occupy a room. Or reserved a ticket to a bed. Mostly academic year.
