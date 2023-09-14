<?php

if (isset($_POST['submit']))
{
      
            require_once 'login.php';
            $conn= new mysqli($hn,$un,$pw,$db);
            if($conn->connect_error) die("erreur fatale");

              
            if(isset($_POST['submit']))
            {
                try
                {
                
                
                $requete=$conn->prepare('INSERT INTO client  (firstName,lastName,email,dateOfBirth,Zodiac) values(?,?,?,?,?)');
                $requete->bind_param('sssss',$firstName,$lastName,$email,$anniversaire,$zodiac);
                $firstName=$_POST['firstname'];
                $lastName=$_POST['lastname'];
                $email=$_POST['email'];
                $anniversaire=$_POST['date'];
                $zodiac=$_POST['option'];
                $requete->execute();
                $requete->close();
                }
                catch(e)
                {
                    console.log(e);
                }
               
               
              
                if(!$requete)
                {
                    echo "Erreur dans l\'ajout des informations";
                    
                }
                else
                {
                    echo "Données enregistrées";
                }
                
             
            }
           
           $conn->close();
            
    try
    {
         switch($_POST['option'])
     {
         case "Aries":
              header('Location:https://www.mon-horoscope-du-jour.com/horoscopes/quotidien/belier.htm');
              break;
         case "Taurus":
             header('Location:https://www.mon-horoscope-du-jour.com/horoscopes/quotidien/belier.htm');
             break;
         case "Gemini":
              header('Location:https://www.mon-horoscope-du-jour.com/horoscopes/quotidien/gemeaux.htm');
             break;
         case "Cancer":
              header('Location:https://www.mon-horoscope-du-jour.com/horoscopes/quotidien/cancer.htm');
             break;
         case "Leo":
             header('Location:https://www.mon-horoscope-du-jour.com/horoscopes/quotidien/lion.htm');
             break;
         case "Virgo":
             header('Location:https://www.mon-horoscope-du-jour.com/horoscopes/quotidien/vierge.htm');
        break;
         case "Libra":
              header('Location:https://www.mon-horoscope-du-jour.com/horoscopes/quotidien/balance.htm');
             break;
         
         case "Scorpio":
             header('Location:https://www.mon-horoscope-du-jour.com/horoscopes/quotidien/scorpion.htm');
             break;
         case "Sagittarius":
             header('Location:https://www.mon-horoscope-du-jour.com/horoscopes/quotidien/sagittaire.htm');
         break;
         case "Capricorn":
             header('Location:https://www.mon-horoscope-du-jour.com/horoscopes/quotidien/capricorne.htm');
             break;
         case "Aquarius":
             
             header('Location:https://www.mon-horoscope-du-jour.com/horoscopes/quotidien/verseau.htm');
             break;
         
         case "Pisces":
             header('Location:https://www.mon-horoscope-du-jour.com/horoscopes/quotidien/poissons.htm');
             break;
     }
    }
    catch(e)
    {
        console.log(e);
    }
    
   
    }
?>
   
      

