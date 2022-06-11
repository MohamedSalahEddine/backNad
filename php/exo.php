<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<h3>S'inscrire</h3>

<div>
  <form action="/action_page.php">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>
  
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>


function display_salle($id, $photo, $titre, $prix, $description, $date_depart, $date_arrivee, $rating ){
        $rating_stars="";
        $description_sub=substr($description, 0, 25)."...";
        for($i=0; $i<$rating; $i++){$rating_stars.="<span class='material-symbols-outlined'>star</span>";};
        echo "
        <div class='div_salle'>
            <span class='hide'>1</span>
            <img src='../images/$photo' alt='$titre' width='260px' height='130px'/>
            <div class='info'>
                <div class='div1'>
                    <span class='titre'>$titre</span>
                    <span class='prix'>$prix €</span>
                <div class='div2'>
                    <span>$description_sub</span>
                    <span>$date_depart au $date_arrivee<span>
                <div class='div3'>
                    <span class='span_rating'>$rating_stars<span>
                    <span class='span_search'>
                        <span class='material-symbols-outlined'>search</span>
                        <span>Voir</span>
                    </span>
                </div>
            </div>
        </div>
        ";
    }