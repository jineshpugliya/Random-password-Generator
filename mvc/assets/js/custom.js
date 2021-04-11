function jsredirect(path,msg='Aage leke jano hee toh haa bol!')
{
    if(confirm(msg))
    {
        location.href=path;
    }
}
$(document).ready(function()
{
    setTimeout(function(){
    $('#success').hide(300);
    $('#error').hide(300);

},5000);
});