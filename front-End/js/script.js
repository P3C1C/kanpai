function switchu() 
{
    document.getElementById('bar').style.display = 'none';
    document.getElementById('utente').style.display = 'inline-block';  
    document.getElementById('btnu').style.backgroundColor = '#d37bea';
    document.getElementById('btnb').style.backgroundColor = '#656360';
}

function switchb() 
{
    document.getElementById('utente').style.display = 'none';
    document.getElementById('bar').style.display = 'inline-block';  
    document.getElementById('btnu').style.backgroundColor = '#656360';
    document.getElementById('btnb').style.backgroundColor = '#d37bea';
}