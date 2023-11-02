<?php exit; ?>
[2023-10-11 06:09:50] ERROR: Form 254 > Mailchimp API error: 400 Bad Request. Invalid Resource. Your merge fields were invalid. 
- MMERGE : Please enter a value
- MMERGE1 : Please enter a value

Request: 
POST https://us8.api.mailchimp.com/3.0/lists/74574f63c7/members

{"status":"pending","email_address":"info@de**.com","interests":{},"merge_fields":{},"email_type":"html","ip_signup":"14.97.240.18","tags":[]}

Response: 
400 Bad Request
{"type":"https://mailchimp.com/developer/marketing/docs/errors/","title":"Invalid Resource","status":400,"detail":"Your merge fields were invalid.","instance":"8d36ecb6-9073-4e49-885b-7faecf7ef6da","errors":[{"field":"MMERGE","message":"Please enter a value"},{"field":"MMERGE1","message":"Please enter a value"}]}
[2023-10-11 08:59:06] ERROR: Form 254 > Mailchimp API error: 400 Bad Request. Invalid Resource. Your merge fields were invalid. 
- MMERGE : Please enter a value
- MMERGE1 : Please enter a value

Request: 
POST https://us8.api.mailchimp.com/3.0/lists/74574f63c7/members

{"status":"pending","email_address":"push************@gm***.com","interests":{},"merge_fields":{},"email_type":"html","ip_signup":"14.97.240.18","tags":[]}

Response: 
400 Bad Request
{"type":"https://mailchimp.com/developer/marketing/docs/errors/","title":"Invalid Resource","status":400,"detail":"Your merge fields were invalid.","instance":"7378a34d-6229-5481-9629-04bfadece070","errors":[{"field":"MMERGE","message":"Please enter a value"},{"field":"MMERGE1","message":"Please enter a value"}]}
