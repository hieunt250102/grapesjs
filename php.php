$scopes = [
'https://www.googleapis.com/auth/userinfo.email',
'https://www.googleapis.com/auth/userinfo.profile',
'openid',
'https://www.googleapis.com/auth/calendar',
'https://www.googleapis.com/auth/calendar.readonly',
'https://www.googleapis.com/auth/calendar.events'
];
$client = new Google_Client();
$client->setScopes(
$scopes
);
$client->setClientId(env('GOOGLE_CLIENT_ID'));
$client->setClientSecret(env('GOOGLE_CLIENT_SECRET'));
$client->setRedirectUri(env('GOOGLE_REDIRECT_URI'));
$client->setAccessType('offline');
$client->setApprovalPrompt('force');
$client->setIncludeGrantedScopes(true);