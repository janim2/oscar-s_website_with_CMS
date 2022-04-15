<?php
    // Google API configuration 
    define('GOOGLE_CLIENT_ID', '17875716685-a50m1k4t2of61sam7ibv5pru3ngpnfp2.apps.googleusercontent.com'); 
    define('GOOGLE_CLIENT_SECRET', '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'); 
    define('GOOGLE_OAUTH_SCOPE', 'https://www.googleapis.com/auth/calendar'); 
    define('REDIRECT_URI', 'http://localhost/oscar/Website/add_event.php'); 
        
    // Google OAuth URL 
    $googleOauthURL = 'https://accounts.google.com/o/oauth2/auth?scope=' . urlencode(GOOGLE_OAUTH_SCOPE) . '&redirect_uri=' . REDIRECT_URI . '&response_type=code&client_id=' . GOOGLE_CLIENT_ID . '&access_type=online'; 
    
    // Include Google calendar api handler class 
    include_once 'GoogleCalendarApi.class.php'; 
    
    $statusMsg = ''; 
    // Initialize Google Calendar API class 
    $GoogleCalendarApi = new GoogleCalendarApi(); 
            
    $calendar_event = array( 
        'summary' => "Hi", 
        'location' => "Ghana", 
        'description' => "I am describing" 
    ); 
        
    $event_datetime = array( 
        'event_date' => "14-04-2022", 
        'start_time' => "12:00:00", 
        'end_time' => "15:00:00"
    ); 

    $data = $GoogleCalendarApi->GetAccessToken(GOOGLE_CLIENT_ID, REDIRECT_URI, GOOGLE_CLIENT_SECRET, $_GET['code']); 
    $access_token = $data['access_token']; 
             
    try { 
        // Get the user's calendar timezone 
        $user_timezone = $GoogleCalendarApi->GetUserCalendarTimezone($access_token); 
        
        // Create an event on the primary calendar 
        $google_event_id = $GoogleCalendarApi->CreateCalendarEvent($access_token, 'primary', $calendar_event, 0, $event_datetime, $user_timezone); 
            
        //echo json_encode([ 'event_id' => $event_id ]); 
            
        if($google_event_id){ 
            echo "done";
        } 
    } catch(Exception $e) { 
        //header('Bad Request', true, 400); 
        //echo json_encode(array( 'error' => 1, 'message' => $e->getMessage() )); 
        $statusMsg = $e->getMessage(); 
    } 
     

?>