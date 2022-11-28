<?php

$edad=2000;

switch ($edad) {
    case '1990':        
    case '1992':         
    case '1993':
    case '1994':
    case '1995':        
    case '1996':            
    case '1997':           
    case '1998':            
    case '1999':
        echo("Eres de los años 90");
        break;
    case '2000':  
    case '2001':       
    case '2002':       
    case '2003':       
    case '2004':       
    case '2005':   
    case '2006':
    case '2007':
        echo("Eres de los años 2000");
        break;
                                                                                        
    default:
        echo("eres de iun año no especificado");
        break;
}