function subscribe(userTo, userFrom, button)
{
    if(userTo==userFrom)
    {
        alert("You cannot subscribe to yourslef");
        return;
    }

    $.post("ajax/subscribe.php", {userTo: userTo, userFrom:userFrom})
    .done(function(count){
        if(count!=null)
        {
            $(button).toggleClass("subscribe unsubscribe");

            var buttonText =$(button).hasClass("subscribe") ? "SUBSCRIBE": "SUBSCRIBED";

            $(button).text(buttonText + " " + count);
        }else
        { 
            alert("sth went wrong");
        }
    });
}