<?php require_once("includes/session.php"); ?>
<?php require_once("includes/db_connection.php") ?>
<?php require_once("includes/functions.php"); ?>
<?php require_once("includes/validation.php"); ?>

<?php require_once("includes/layouts/header.php"); ?>

<?php
    if( $_SERVER["REQUEST_METHOD"] === "GET" )
    {
        if( !logged_in() )
        {
            redirect("index.php");
        }
    }
?>

<div class="main_content">
    <div class="account">
        <h1>Account</h1>
        <ul class="account_info">
            <a href="profile.php?page=books"><li>My books</li></a>
            <a href="profile.php?page=wishlist"><li>Wishlist</li></a>
            <a href="profile.php?page=details"><li>My details</li></a>
        </ul>
    </div>
    <div class="account_content">

        <?php
            $username   = $_SESSION["user_id"];
            $user = find_user( $username );
            $first_name = $user["FIRSTNAME"];
            $last_name  = $user["LASTNAME"];
            $town       = $user["TOWN"];
            $email      = $user["EMAIL"];
        ?>

        <?php
            if(isset($_GET["page"]))
            {
                switch( $_GET["page"] )
                {
                    case "details":
                    {

                        if($_SERVER["REQUEST_METHOD"] === "POST")
                        {
                            $new_first_name = isset( $_POST["newfirstname"] ) ? escape($_POST["newfirstname"])  : $first_name;
                            $new_last_name  = isset( $_POST["newlastname"] )  ? escape($_POST["newlastname"])   : $last_name;
                            $new_town       = isset( $_POST["newtown"] )      ? escape($_POST["newtown"])      : $town;
                            $new_email      = isset( $_POST["newemail"] )     ? escape($_POST["newemail"])     : $email;

                            $query = "UPDATE USERS ";
                            $query .= "SET ";
                            $query .= "FIRSTNAME = '{$new_first_name}', LASTNAME = '{$new_last_name}', TOWN = '{$new_town}', EMAIL = '{$new_email}' ";
                            $query .= "WHERE USERNAME = '{$username}'";

                            $result = mysqli_query( $connection, $query );

                            query_check( $result );
                            mysqli_free_result($result);
                        }

                        // Update information
                        $username   = $_SESSION["user_id"];
                        $user = find_user( $username );
                        $first_name = $user["FIRSTNAME"];
                        $last_name  = $user["LASTNAME"];
                        $town       = $user["TOWN"];
                        $email      = $user["EMAIL"];

                        echo "<h1>Details</h1>";
                        echo "<p>Name: " .  ucfirst($first_name) . "</p>";
                        echo "<p>Last Name: " . ucfirst($last_name) . "</p>";
                        echo "<p>Town: " . ucfirst($town) . "</p>";
                        echo "<p>Email: " . ucfirst($email) . "</p>";
            ?>
            <div class="form_container">
                <!-- Contact Us Form -->
                <form action="profile.php?page=details" method="post" name="form">
                    <label for="name">First Name</label>
                    <input id="name" name="newfirstname" type="text" value="" placeholder="<?php echo $first_name ?>"><br>

                    <label for="lastname">Last Name</label>
                    <input type="text" name="newlastname" value="" placeholder="<?php echo $last_name ?>"><br>

                    <label for="town">Town</label>
                    <input type="text" name="newtown" value="" placeholder="<?php echo $town ?>"><br>

                    <label for="email">Email</label>
                    <input id="email" name="newemail" type="text" value="" placeholder="<?php echo $email?>">

                    <input type="submit" name="submit" value="update">
                </form>
            </div><br>
            <button onclick="show_form()">Edit</button>
            <?php
                            break;
                        }
                        case "wishlist":
                        {
                            echo "<h1>wishlist</h1>";
                            break;
                        }
                        case "books":
                        {
                            // Insert a book:
                            if($_SERVER["REQUEST_METHOD"] === "POST")
                            {
                                $required_fields = array( "BOOKNAME", "GENRE", "OFFERTYPE" );
                                validate_presences($required_fields);

                                if( !empty($errors) )
                                {
                                    $_SESSION["errors"] = $errors;
                                }

                                $bookname   = escape($_POST["bookname"]);
                                $genre      = escape($_POST["genre"]);
                                $offertype  = escape($_POST["offertype"]);
                                $blurb      = escape($_POST["blurb"]);
                                $publisher  = escape($_POST["publisher"]);
                                $price      = escape($_POST["price"]);
                                $published  = escape($_POST["publication_date"]);

                                
                            }

                            $books = (int) $user["BOOKSOWNED"];
                            echo "<h1>Books</h1>";
                            echo "<p>You currently have {$books} Books</p><br>";
            ?>
                            <div class="form_container">
                                <form action="" method="post">
                                        <label for="bookname">Book Name:</label>
                                        <input type="text" name="bookname" id="bookname" value=""><br>

                                        <label for="author">Author:</label>
                                        <input type="text" name="author" id="author" value=""><br>

                                        <label for="blurb">Blurb</label>
                                        <input type="text" name="blurb" id="blurb" value=""><br>

                                        <label for="publisher">Publisher</label><br>
                                        <input type="text" name="publisher" id="publisher" value=""><br>

                                        <label for="price">Price</label><br>
                                        <input type="text" name="price" id="price" value="">

                                        <label for="genre">Genre</label>
                                        <input type="text" name="genre" id="genre" value="">

                                        <label for="publication_date">Publication Date</label>
                                        <input type="text" name="publication_date" id="publication_date" value=""><br>

                                        <label for="offertype">Type</label>
                                        <select name="offertype">
                                            <option value="Swap">Swap</option>
                                            <option value="Free">Free</option>
                                            <option value="sell">Sell</option>
                                        </select><br>

                                        <input type="submit" name="submit" value="Add">
                                    </form>
                            </div>
                            <button onclick="show_form()" name="button">Add</button>
                            <a href="profile.php?page=books&book=1"><button type="button" name="button">View</button></a>
            <?php
                            break;
                        }
                    }
                }
                else {
                    echo "<h1>" . strtoupper("Welcome {$_SESSION["first_name"]}") . "</h1>";

                }
            ?>
        </div>
    </div>

<?php require_once("includes/layouts/footer.php"); ?>
