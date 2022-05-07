function menu(id)
{
    if (document.getElementById(id).style.display == 'block') 
    { 
        document.getElementById(id).style.display = "none";
    }
    else
    {
        document.getElementById(id).style.display = "block";
    }
}

function weight_left()
{
    // var div=document.getElementsByClassName('kg');
    //     style=div[0].style;
    //     style.float="left";       
    //     document.getElementById("quantity").innerHTML = "ФН";

    var elem=document.getElementById("kg");
    var pos=0;
    var id=setInterval(frame, 1);
    function frame()
    {
        if(pos == 165)
        {
            clearInterval(id);
            document.getElementById("quantity").innerHTML = "ФН"
        }
        else
        {
            pos++;
            elem.style.right = pos + 'px';
        }
    }

}

function weight_right()
{
    var elem=document.getElementById("kg");
    var pos=-165;
    var id=setInterval(frame, 1);
    function frame()
    {
        if(pos == 0)
        {
            clearInterval(id);
            document.getElementById("kg").removeAttribute("style");
            document.getElementById("quantity").innerHTML = "КГ"
            
        }
        else
        {
            pos++;
            elem.style.left = pos + 'px';
        }
    }

}
