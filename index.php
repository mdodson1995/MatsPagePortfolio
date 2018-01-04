<!DOCTYPE>
<html>
	<head>
			<meta charset="utf-8">
			<title>Mat's Page</title>
			<meta name="description" content="My Portfolio with php, bootstrap css, and bootstrap js.">
			<meta name="name" content="Mathew Dodson">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			<link rel="stylesheet" href="css/styles.css">
            <link rel="icon" href="img/background.jpg">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
			<script	src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous"></script>
			<script src="js/script.js"></script>
            <script src = "https://code.jquery.com/jquery-1.12.4.js"></script>
            <script src="js/weather.js"></script>
	</head>
	<body>
	<div class="container-fluid" style = "background-image: url('img/background.jpg'); background-repeat: repeat-y" >
	<div class="row">
	<img style = "margin:5px; " src="img/mathew_logo.jpg" alt="logo">
	<br/>
	<br/>
	</div>

	<div class="row">
			<div class="col-sm-2">
	<ul id= "side_menu"  class="nav nav-pills nav-stacked">
	<li class="active"><a href="index.php">
	<span class="glyphicon glyphicon-th"></span>&nbsp;Home</a></li>
	<li><a href="#about">
		<span class="glyphicon glyphicon-user"></span>&nbsp;About Me</a></li>
	<li><a href="#education">
		<span class="glyphicon glyphicon-book"></span>&nbsp;Education</a></li>
	<li><a href="#experience">
		<span class="glyphicon glyphicon-eye-open"></span>&nbsp;Experience</a></li>	
	<li><a href="#contact">
		<span class="glyphicon glyphicon-equalizer"></span>&nbsp;Contact Me</a></li>
	<li>
	</ul>
                

			</div>

	
	

			<div class="col-sm-8" style = "background-color: #fff; border: 5px solid #2b3e57; border-radius:20px;">
			<div class="jumbotron">
			<h1 style = "font-size: 2.0em;"><strong>Welcome to my Portfolio Website, featuring HTML, PHP, CSS, jQuery, and Bootstrap.</strong></h1>
			</div>
			<h2>About Me</h2>
                    <p>Hi! My name is Mathew Dodson. I was born in Cleveland, Ohio, but spent most of my life is the Grand Traverse County area. I like to hangout with friends and family, play video games, and in my spare time, I like to go bowling with friends or League.</p>
                    <p>I got into computers at a very young age. I was born with a disability so I had to use a computer for learning, typing, and brain development skills.</p>
                    <p>I got into software and web development back in high school. I spent 2 years at the Traverse Bay Area Career-Tech Center, learning skills like HTML, CSS, JavaScript, PHP, and Python.</p>
                    <!--make this picture a slideshow-->
                    <div class="gallery">
                    <img style="float:right; clear:both; padding:auto; border: 2px solid black; border-radius:15px; right:5;" src="img/profile_pic.jpg" width = "300" height="300" alt="profile_picture">
                    </div>
                    <p>When I graduated high school, I stayed in Traverse City, going to Northwestern Michigan College. I obtained my associate's in CIT Developer and many certificates and MTA's along the way. </p>
                    <p>In the future, I would like to be a full stack .NET Developer. The skills<br/> that I've gained throughout the years include, but are not limited to, HTML, CSS, PHP, JavaScript, SQL(Server and MYSQL), C#, and ASP.Net, using many frameworks, including the MVC framework. I also obtained the various skills for project management and agile development.</p>

                <br/>
                <br/>
                <br/>
			<h2 id = "education" style="display:block">Education</h2><a href="#" class="scollup">Back to Top</a>

				<table>
				<caption>Down below are some of my educational achievements.</caption>
				<tr>
					<th>ID</th>
					<th>School Name</th>
					<th>Address</th>
					<th>City</th>
					<th>State</th>
					<th>Zip Code</th>
					<th>Phone Number</th>
					<th>Website</th>
					<th>G.P.A</th>
				</tr>
				<?php
				$connection = mysql_connect('localhost','root',''); //establish connection to db
				$selected = mysql_select_db('portfolio', $connection); //select db
				$viewQuery = "select * from education";
				$execute = mysql_query($viewQuery);
				while($dataRows=mysql_fetch_array($execute))
				{
					$id = $dataRows['id'];
					$school = $dataRows['school'];
					$address = $dataRows['address'];
					$city = $dataRows['city'];
					$state = $dataRows['state'];
					$zip = $dataRows['zip'];
					$phone = $dataRows['phone'];
					$web = $dataRows['web'];
					$gpa = $dataRows['gpa'];
				?>	
				<tr>
					<td><?php echo $id; ?></td>
					<td><?php echo $school; ?></td>
					<td><?php echo $address; ?></td>
					<td><?php echo $city; ?></td>
					<td><?php echo $state; ?></td>
					<td><?php echo $zip ?></td>
					<td><?php echo $phone ?></td>
                    <td><?php echo $web ?></td>
					<td><?php echo $gpa ?></td>
				</tr>
<?php } ?>


				</table>
			<h2 id="experience">Experience/Skills</h2><a href="#" class="scollup">Back to Top</a>
                <table width = "100%">
                    <caption>Skills</caption>
                        <tr>
                        <th>Skill</th>
                        <th>Certificate, if applicable</th>
                        </tr>
                        <tr>
                        <td>HTML, CSS</td>
                        <td><img src = "img/certs/CIW.PNG" style="width:50%; border: 2px solid #000; border-radius: 10px;"></td>
                        </tr>
                        <tr>
                        <td>SQL SERVER/MYSQL</td>
                        <td><img src = "img/certs/DB.PNG" style="width:50%; border: 2px solid #000; border-radius: 10px;"></td>
                        </tr>
                        <tr>
                        <td>jQuery/JavaScript</td>
                        <td><img src = "img/certs/jQueryCourse.png" style="width:50%; border: 2px solid #000; border-radius: 10px;"></td>                    
                        </tr>
                        <tr>
                        <td>PHP</td>
                        <td><img src = "img/certs/PHPCourse.jpg" style="width:50%; border: 2px solid #000; border-radius: 10px;"></td>
                        </tr>
                
                </table>

			     <table>
                    <caption>Jobs/Internships</caption>
                        <tr>
                        <th>Job/Internship</th>
                        <th>Duration</th>
                        <th>Description</th>
                     
                        </tr>
                
                </table>
                <br/>
                <br/>
                <br/>
			<h2 id = "contact">Contact Me</h2><a href="#" class="scollup">Back to Top</a>
<?php 
if(isset($_POST["submit"]))
{
if (!empty($_POST["name"] && !empty($_POST["phone"])))
{
	

$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$comment = $_POST["comments"];
$connection = mysql_connect('localhost','root',''); //establish connection to db
$selected = mysql_select_db('portfolio', $connection); //select db
$query = "Insert into comments(Name, Phone, Email, Comment) 
values('$name','$phone', '$email', '$comment')";
$execute = mysql_query($query);
if ($execute)
{
echo "Record added";
echo'<script>window.open("index.php?Deleted=Recored Added Successfully","_self")</script>';
}
}

}


?>
			<form  action = "index.php" method="POST">
			<fieldset>
			<label for = "name">Name</label>
			<input type="text" name = "name" placeholder = "Name" required><br/>
			<label for = "phone">Phone Number</label>
			<input type="text" name = "phone" placeholder = "Phone No." maxlength = "10" required><br/>
			<label for = "email">Email Address</label>
			<input type="email" name="email" placeholder = "Email Address" maxlength = "20" required><br/>
			<textarea cols = "40" rows = "3" name="comments" placeholder = "Comments"></textarea>
                <br/>
			<input type="submit" value = "Submit" name = "submit">
			</fieldset>
			</form>
            <table style="clear:left;">
				<caption>Comments from viewers like you.</caption>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>Comment</th>
                    <th>Delete</th>
				</tr>
				<?php
				$connection = mysql_connect('localhost','root',''); //establish connection to db
				$selected = mysql_select_db('portfolio', $connection); //select db
				$viewQuery = "select * from comments";
				$execute = mysql_query($viewQuery);
				while($dataRows=mysql_fetch_array($execute))
				{
					$id = $dataRows['cID'];
					$name = $dataRows['Name'];
					$email = $dataRows['Email'];
					$comment = $dataRows['Comment'];
				?>	
				<tr>
					<td><?php echo $id; ?></td>
					<td><?php echo $name; ?></td>
					<td><?php echo $email; ?></td>
					<td><?php echo $comment; ?></td>
                    <td><a href="delete.php?delete=<?php echo $id;?>">Delete</a></td>
				</tr>
<?php } ?>


				</table>
                <br/>
                <caption>Top News from <a href="https://techcrunch.com" target="_blank">Tech Crunch</a>, API from <a href="https://newsapi.org/", target="_blank">NewsAPI.org</a></caption>
                <pre><code id="news"></code></pre>
                <br/>
        </div>

			<div class="col-sm-2" style="color:#fff;">
			<h1 style="color:#fff;">Side Area</h1>
                <p>Here is the local weather in various Grand Traverse Areas, brought to you by jQuery and OpenWeather.org/API.</p>
                <pre><code id="openWeather"></code></pre>
                <br/>
                <pre><code id="openWeather2"></code></pre>
	
			</div>
        <div class="lightbox">
        <h1>Welcome to my Portfolio Page</h1>
            <p>This website will demonstrate my skills of HTML, CSS, PHP, MYSQL, jQuery, and Ajax.</p>
            <p><strong>Click anywhere to exit.</strong></p>
        </div>

	</div>	
	
	</div>


		
	</body>
	
	
	<footer style="border-top:5px solid; text-align:center;">
	<p>Mathew Dodson &copy; 2017</p>
	
	</footer>

</html>