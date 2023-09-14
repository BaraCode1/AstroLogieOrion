<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link href="csss.css" rel="stylesheet" type='text/css'>
    <script type="text/javascript"></script>
 
        <title>Astrologie Orion</title>
    </head>
    <body>
    <div class="container-lg">
    <nav>
        <a href="file:///C:/Users/Admin/Desktop/Projet%2013/Universal-Astro.html">
            <img id="logo" src="images/logo.png">
        </a>

        <ul>
            <li>zodiac-signs</li>
            <li>Horoscope</li>
            <li>Compatibility</li>
            <li>Astrology</li>
            <li>Tarot</li>
            <li>Zodiac Calendar</li>
            <li>Blog</li>
        </ul>
              
    </nav>
       
    <h2>Zodiac Signs and Astrology Signs Meanings and Characteristics</h2>
   
     
       <p id="datee"></p>
        <script>   
            try
            {
               var todayDate = new Date().toISOString().slice(0, 10);
               
            document.getElementById("datee").innerHTML=todayDate;
            }
            catch(err)
            {
                document.getElementById("datee").innerHTML=err.message;
            }
        </script>
        

    <table id="table" align="center">

        <tr>
            <td>
                <div id="align" align="center">
                    <a href="https://www.astrology-zodiac-signs.com/zodiac-signs/aquarius/"><img class="image"
                            src="images/balance-horoscope.png"></a>
                    <p id="paraf">Aquarius</p>
                </div>

            </td>
            <td>
                <div id="align" align="center">
                    <a href="https://www.astrology-zodiac-signs.com/horoscope/capricorn/"><img class="image"
                            src="images/belier.png"></a>
                    <p id="paraf">Belier</p>
                </div>
            </td>
            <td>
                <div id="align" align="center">
                    <a href="https://www.astrology-zodiac-signs.com/horoscope/cancer/"><img class="image"
                            src="images/cancer.png"></a>
                    <p id="paraf">Cancer</p>
                </div>
            </td>
            <td>
                <div id="align" align="center">
                    <a href="https://www.astrology-zodiac-signs.com/horoscope/capricorn/"><img class="image"
                            src="images/capricorne-horoscope.png"></a>
                    <p id="paraf">Capricorn</p>
                </div>
            </td>
            <td>
                <div id="align" align="center">
                    <a href="https://www.astrology-zodiac-signs.com/horoscope/gemini/"> <img class="image"
                            src="images/gemeaux.png"></a>
                    <p id="paraf">Gemeaux</p>
                </div>
            </td>
            <td>
                <div id="align" align="center">

                    <a href="https://www.astrology-zodiac-signs.com/horoscope/leo/"> <img class="image"
                            src="images/lion.png"></a>
                    <p id="paraf">Lion</p>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div id="align" align="center">
                    <a href="https://www.astrology-zodiac-signs.com/horoscope/pisces/"><img class="image"
                            src="images/poissons.png"></a>
                    <p id="paraf">Pisces</p>
                </div>
            </td>
            <td>
                <div id="align" align="center">
                    <a href="https://www.astrology-zodiac-signs.com/horoscope/sagittarius/"><img class="image"
                            src="images/sagittaire-horoscope.png"></a>
                    <p id="paraf">Sagittarius</p>
                </div>
            </td>
            <td>
                <div id="align" align="center">
                    <a href="https://www.astrology-zodiac-signs.com/horoscope/scorpio/"><img class="image"
                            src="images/scorpion-horoscope.png"></a>
                    <p id="paraf">Scorpio</p>
                </div>
            </td>
            <td>
                <div id="align" align="center">
                    <a href="https://www.astrology-zodiac-signs.com/horoscope/taurus/"> <img class="image"
                            src="images/taureau.png"></a>
                    <p id="paraf">Taurus</p>
                </div>
            </td>
            <td>
                <div id="align" align="center">
                    <a href="https://www.astrology-zodiac-signs.com/horoscope/aquarius/"> <img class="image"
                            src="images/verseau.png"></a>
                    <p id="paraf">Aquarius</p>
                </div>
            </td>
            <td>
                <div id="align" align="center">
                    <a href="https://www.astrology-zodiac-signs.com/horoscope/virgo/"><img class="image"
                            src="images/vierge.png"></a>
                    <p id="paraf">Virgo</p>
                </div>
            </td>
        </tr>

    </table>



    <section id="section">
        <h2>Horoscope List</h2>


        <li> <b class="liste"> <a href="https://www.astrology-zodiac-signs.com/zodiac-signs/aries/">Aries</a>
            </b>
            - March 21 to April 19</li>
        <li> <b class="liste"><a href="https://www.astrology-zodiac-signs.com/horoscope/taurus/">Taurus</a></b>
            -
            April 20 - May 20</li>
        <li> <b class="liste"> <a href="https://www.astrology-zodiac-signs.com/horoscope/gemini/">Gemini</a></b>-
            May 21
            - June 21</li>
        <li> <b class="liste"><a href="https://www.astrology-zodiac-signs.com/horoscope/cancer/">Cancer</a></b>
            - June
            21 - July 22</li>
        <li> <b class="liste"><a href="https://www.astrology-zodiac-signs.com/horoscope/leo/">Leo</a></b> - July
            23
            -August 22</li>
        <li> <b class="liste"><a href="https://www.astrology-zodiac-signs.com/horoscope/virgo/">Virgo</a></b>-
            August 23
            - September 22</li>
        <li> <b class="liste"><a href="https://www.astrology-zodiac-signs.com/horoscope/virgo/">Libra</a></b>-
            September
            23 - October 22</li>
        <li> <b class="liste"><a href="https://www.astrology-zodiac-signs.com/horoscope/scorpio/">Scorpio</a></b> -
            October 23 - November 21 </li>
        <li> <b class="liste"><a
                    href="https://www.astrology-zodiac-signs.com/horoscope/sagittarius/">Sagittarius</a></b>-
            November
            22 - December 21</li>
        <li> <b class="liste"><a href="https://www.astrology-zodiac-signs.com/horoscope/capricorn/">Capricorn</a></b>-
            December 22 - January 19 </li>
        <li> <b class="liste"><a href="https://www.astrology-zodiac-signs.com/horoscope/aquarius/">Aquarius</a></b>
            -March 21 to April 19</li>
        <li> <b class="liste"><a href="https://www.astrology-zodiac-signs.com/horoscope/pisces/">Pisces</a></b>-
            February 19- March 20</li>

    </section>

   

        <form method='post' action="redirection.php" id="form">
           <h2>Appointment</h2>
            <label for="firstname">Firstname</label>
            <input type="text" id="firstname" name="firstname" placeholder="FirstName" required><Br>
            <label for="lastname">lastname</label>
            <input type="text" id="lastname" name="lastname" placeholder="LastName" required><br>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="aaaa@gmail.com" required><br>
            <label for="date">Anniversaire</label>
            <input type="date" id="date" name="date">
            <br>
            <label for="select">Select zodiac</label>
            <select name='option'>
                <option value="Aries">Aries</option>
                <option value="Taurus">Taurus</option>
                <option value="Gemini">Gemini</option>
                <option value="Cancer">Cancer</option>
                <option value="Leo">Leo</option>
                <option value="Virgo">Virgo</option>
                <option value="Libra">Libra</option>
                <option value="Scorpio">Scorpio</option>
                <option value="Libra">Sagittarius</option>
                <option value="Capricorn">Capricorn</option>
                <option value="Aquarius">Aquarius</option>
                <option value="Pisces">Pisces</option>
            </select>
          
            <br>
                <button id="button1" type="submit" name="submit">Submit</button>
           
         
                  
              
        </form>
        <br><br>
      
       
            
            <form id="rendez-vous" method="POST" action="courriel.php" >
               
                <h2>Envoyer un courriel</h2>
                <br>
                <label for="nom">Entrez votre nom</label>
                <br>
                <input type="text" id="nom" placeholder="name" name="nom">
                <br>
                <label for="courriel">Entrez votre courriel</label>
                <br>
                <input type="email" placeholder="aaaa@gmail.com" id="courriel" name="courriel">
                <br>
                <textarea name="textArea"></textarea>
                <br>
                <button type="submit" name="soumettre">Submit</button>
  
            </form>
       
        <div id="ajax"></div>
           
   
        <p>
            There are 12 zodiac signs, and each sign has its own strengths and weaknesses, its own specific traits,
            desires and attitude towards life and people. By analyzing the projection of the position of
            <a href="https://www.astrology-zodiac-signs.com/astrology/planets/"> <span
                    id="color"><b>planets</b></span></a>
            , and
            the Sun
            and the Moon on the Ecliptic at the moment of birth. Astrology can give us a glimpse of a person's basic
            characteristics, preferences, flaws and fears.
        </p>

        <P>

            We made it simple for you to find out what your zodiac sign is, Its complete profile and it's
            compatibility
            with other zodiac signs. By selecting your sign from the detailed zodiac sign dates list you will
            discover
            everything on the character of your Sun sign, it's Horoscope, traits, profile, history, myth and love
            compatibility.
        </P>

        <P>
            Each of the 12 horoscope signs belongs to one of the four elements – Air, Fire, Water and Earth. These
            elements
            represent an essential type of energy that acts in each of us. Astrology aims to help us focus these
            energies on the positive aspects and to gain a better understanding of our potential and our positive
            traits
            and deal
            with negative ones.
        </P>

        <P>
            These four elements help describe the unique personality types associated with astrological signs. The
            four
            zodiac elements exhibit profound influence on basic character traits, emotions, behavior and thinking.
        </P>

        <h2> Water Signs</h2>
        <p>

            Water signs are exceptionally emotional and ultra-sensitive. They are highly intuitive and they can be
            as
            mysterious as the ocean itself. Water signs love profound conversations and intimacy. They rarely do
            anything
            openly and are always there to support their loved ones. The Water Signs are: Cancer, Scorpio and
            Pisces.
        </p>
        <h2>Fire Signs</h2>
        <p>

            Fire signs tend to be passionate, dynamic, and temperamental. They get angry quickly, but they also
            forgive
            easily. They are adventurers with immense energy. They are physically very strong and are a source of
            inspiration for others. Fire signs are intelligent, self-aware, creative and idealistic people, always
            ready
            for action. The Fire Signs are: Aries, Leo and Sagittarius.
        </p>

        <h2>Earth Signs</h2>
        <P>
            Earth signs are “grounded” and the ones that bring us down to earth. They are mostly conservative and
            realistic, but they can also be very emotional. They are connected to our material reality and can be
            turned
            to material goods. They are practical, loyal and stable and they stick by their people through hard
            times.
            The Earth Signs are: Taurus, Virgo and Capricorn.
        </P>


    </div>
    <footer>
        <p>Astrologie Orion</p>
    </footer>

        
    
    </body>
</html>
