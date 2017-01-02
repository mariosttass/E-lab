<script type="text/javascript" language="JavaScript">
<!--
//--------------------------------
// This code compares two fields in a form and submit it
// if they're the same, or not if they're different.
//--------------------------------
function checkpass(theForm) {
    if (theForm.txt_password.value != theForm.txt_password_2.value)
    {
        alert('passwords don\'t match!');
        return false;
    } else {
        return true;
    }
}
//-->
</script> 
