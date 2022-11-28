function check(x)
{
    var result = document.getElementById(x);
    if(result.value=="")
    {
        alert("ERROR");
        result.value = 1;
    }
}

function Decrease(x, y, z)
{
    var result = document.getElementById(x);
    var min_number= result.min;
    if(Number(result.value) > Number(min_number))
    {
        result.value--;
    }
    var str = String(Number(result.value)*(y))
    if(str.length < 7)
    {
        str = str.slice(0,3) + "." + str.slice(3);
    }
    else if(str.length >= 7 & str.length < 8)
    {
        str = str.slice(0,1) + "." + str.slice(1);
        str = str.slice(0,5) + "." + str.slice(5);
    }
    else if(str.length >= 8 & str.length < 9)
    {
        str = str.slice(0,2) + "." + str.slice(2);
        str = str.slice(0,6) + "." + str.slice(6);
    }
    str += "<sup>₫</sup>";
    document.getElementById(z).innerHTML = str;
    return true;
}

function Increase(x, y, z)
{
    var result = document.getElementById(x);
    var max_number= result.max;
    if(Number(result.value) < Number(max_number))
    {
        result.value++;
    }
    var str = String(Number(result.value)*(y));
    if(str.length < 7)
    {
        str = str.slice(0,3) + "." + str.slice(3);
    }
    else if(str.length >= 7 & str.length < 8)
    {
        str = str.slice(0,1) + "." + str.slice(1);
        str = str.slice(0,5) + "." + str.slice(5);
    }
    else if(str.length >= 8 & str.length < 9)
    {
        str = str.slice(0,2) + "." + str.slice(2);
        str = str.slice(0,6) + "." + str.slice(6);
    }
    str += "<sup>₫</sup>";
    document.getElementById(z).innerHTML = str;
    return true;
}