<?php
/****************************************************************************
 * DRBGuestbook
 * http://www.dbscripts.net/guestbook/
 * 
 * Copyright © 2007-2009 Don B
 ****************************************************************************/

// Field names
$NAME_FIELD_NAME = 'Name';
$EMAIL_FIELD_NAME = 'E-Mail Address';
$URL_FIELD_NAME = 'Website URL';
$COMMENTS_FIELD_NAME = 'Comments';
$CHALLENGE_FIELD_NAME = "Enter Code";

// Navigation text
$PREVIOUS_TEXT = "< Prev";
$NEXT_TEXT = "Next >";

// Form text

$ADD_FORM_BUTTON_TEXT = 'Add';

// Error text
// The %s directive is a placeholder for the field name and length.
// Use argument swapping if you need to change the order; 
// See http://us.php.net/sprintf for more details.
$ERROR_MSG_BAD_WORD = 'You entered a bad word.';
$ERROR_MSG_MAX_LENGTH = 'The %s field cannot accept values over %s characters in length.';
$ERROR_MSG_MIN_LENGTH = 'The %s field cannot accept values less than %s characters in length.';
$ERROR_MSG_REQUIRED = 'The %s field is required.';
$ERROR_MSG_EMAIL = 'The %s entered is not valid.';
$ERROR_MSG_URL_INVALID = 'The %s entered is not valid.';
$ERROR_MSG_URL_BAD_PROTOCOL = 'Only HTTP URLs are valid.';
$ERROR_MSG_TAGS_NOT_ALLOWED = 'HTML is not allowed.';
$ERROR_MSG_BAD_CHALLENGE_STRING = "The code was not correct.";
$ERROR_MSG_URLS_NOT_ALLOWED = "URLs are not allowed in comments.";
$ERROR_MSG_FLOOD_DETECTED = "You are attempting to post too frequently.";
$ERROR_MSG_MAX_WORD_LENGTH = "You attempted to use a word that was too long.";

?>
