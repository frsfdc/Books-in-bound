<!doctype html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="A books trading website for students">
        <meta name="viewport" content="width=device-with, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <link rel="shortcut icon" href="images/book-icon.ico">

        <link rel="stylesheet" href="css/reset.css" type="text/css">
        <link rel="stylesheet" href="css/index.css" type="text/css">
        
        <title>Books In Bound</title>
    </head>
    
    <!-- Beginning of Body tag -->
    <body>
        <header id="page_header">
            <nav>
                <ul>
                    <a href="#"><li>Sign up |      </li></a>
                    <a href="#"><li>Login |   </li></a>
                    <a href="#"><li>Help |      </li></a>
					<a href="#"><li>F.A.Q |      </li></a>
                </ul>
            </nav>

            <!--Logo-->
            <div id="logo">
                <p>Logo</p>
            </div> <!-- End of logo div -->

            <!--search box-->
            <form id="browse" action="search.php" method="GET">
                <fieldset>
                    <select name="genre">
                        <option value="Genre" selected>Genre</option>
                        <option value="fantasy">fantasy</option>
                        <option value="Non-fiction">Non-fiction</option>
                        <option value="Science fiction">Science fiction</option>
                        <option value="Satire">Satire</option>
                        <option value="drama">Drama</option>
                        <option value="Action &#38;"> Action and Adventure</option>
                        <option value="romance">Romance</option>
                        <option value="mystery">Mystery</option>
                        <option value="horror">Horror</option>
                        <option value="health">Health</option>
                        <option value="travel">Travel</option>
                        <option value="children">Children's</option>
                        <option value="religion, Spirituality">Religion, Spirituality &#38; New Age
                        Science</option>
                        <option value="history">History</option>
                        <option="math">Math</option>
                        <option="anthology">Anthology</option>
                        <option="poetry">Poetry</option>
                        <option="encyclopedias">Encyclopedias</option>
                        <option="comics">Comics</option>
                        <option="art">Art</option>
                        <option="cookbooks">Cookbooks</option>
                        <option="journals">Journals</option>
                        <option="prayer books">Prayer books</option>
                        <option="series">Series</option>
                        <option="trilogy">Trilogy</option>
                        <option="biographies">Biographies</option>
                        <option="autobiographies">Autobiographies</option>
                        <option="fantasy">Fantasy</option>
                    </select>
                    <input type="search" name ="bookname"placeholder="Browse Books">
                    <input  type="submit"  value="Search" > 
                </fieldset>
            
        </header> <!-- End of main header tag -->
		
		
		 
		
		
		   <div class="filt" >
			  <ul >
			      
                  <li onclick="myFunction()" >Offer type</li>
				  <li id="myDIV">
                       <ul>
					      <li><input type="radio" checked="checked"  name="offertype">all</input></li>
					      <li><input type="radio" value="free" name="offertype">free</input></li>
						  <li><input type="radio" value="trade"name="offertype">trade</input></li>
						  <li><input type="radio" value="sell" name="offertype">sell</input></li>
						</ul>
                  </li>
				 
				  
                  <li onclick="myFunction2()">Publisher
				   <li id="myDIV2">
                     <input type="search" name="publisher" placeholder="enter publisher name">	
                  </li>
				  </li>
				
                  <li  onclick="myFunction3()">pricing</li>
				  <li id="myDIV3">
                       
					      <ul>
					      <li><input type="radio" checked="checked" name="price order" value="low">Lowest to Highest</input></li>
						  <li><input type="radio" name="price order" value="high">Highest to Lowest </input></li>
						  
						</ul>
					   
                  </li>
				  </li >
                  <li onclick="myFunction4()">Publish date</li>
				     <li id="myDIV4"> 
				         <input type="search" placeholder="enter year of release">
						 
				     </li>
				 
              </ul> 
			 </div>
			 
		 <div class="result" >
		    <ul>
                  <li><a id="book1" href="#home"></img> </a></li>
                  <li><a href="#">Book2</a></li>
                  <li><a href="#contact">Book3</a></li>
                  <li><a href="#about">Book4</a></li>
				  <li><a href="#about">Book5</a></li>
            </ul>
		   
	     </div>
		 </form>
			  
	   
<script>
function myFunction() {
    var x = document.getElementById('myDIV');
    if (x.style.display === 'none') {
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }
}
function myFunction2(){
    var x = document.getElementById('myDIV2');
    if (x.style.display === 'none') {
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }
}
function myFunction3(){
    var x = document.getElementById('myDIV3');
	
    if (x.style.display === 'none') {
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }
}
function myFunction4(){
    var x = document.getElementById('myDIV4');
    if (x.style.display === 'none') {
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }
}

function searchme(str)
{
	
	document.getElementById("book1").innerHTML="fuck off";
	return;
	
	
}
</script>
		
		
    </body>
</html>