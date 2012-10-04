# In this test, exit should be highlighted as a keyword, not as a string

$foo = '"' . '"
';
exit;
