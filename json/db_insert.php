<?php
$db_hostname="lochnagar.abertay.ac.uk"; //server name
$db_username="sql1206633";  //mysql username.
$db_password="MjWvMmKt";       //password
$db_database="sql1206633";  //database name which you created
$con=mysql_connect($db_hostname,$db_username,$db_password);
if(! $con)
{
	die('Connection Failed'.mysql_error());
}

mysql_select_db($db_database,$con);

/*//read the json file contents
$jsondata = file_get_contents('php://input');

//convert json object to php associative array
$data = json_decode($jsondata, true);

//store the element values into variables
$ext = $data['external'];
$int = $data['internal'];
$lum = $data['light'];

$fan = $data['fan'];
$heater = $data['heater'];
$auto = $data['auto'];
$alert = $data['alert'];

//insert values into mysql database
$sql="INSERT INTO greenhouse (ext_temperature, int_temperature, illuminance, alert) 
VALUES ('$ext', '$int', '$lum', '$alert')";*/

$sql="INSERT INTO prototype (topic, question) 
VALUES
('Movie', 'What was the last movie you watched? How was it?'),
('Movie', 'Do you prefer to watch movies in the theater or in the comfort of your own home?'),
('Movie', 'What’s the worst movie you have seen recently?'),
('Movie', 'What’s the strangest movie you have ever seen?'),
('Movie', 'What is the most overrated movie?'),
('Movie', 'What’s your favorite genre of movie?'),
('Movie', 'What movie scene choked you up the most?'),
('Movie', 'Do you like documentaries? Why / why not?'),
('Movie', 'When was the last time you went to a movie theater?'),
('Movie', 'Do movies have the same power as books to change the world?'),
('Movie', 'Which do you prefer? Books or movies?'),
('Movie', 'Do you like horror movies? Why or why not?'),
('Music', 'What song always puts you in a good mood?'),
('Music', 'Which do you prefer, popular music or relatively unknown music?'),
('Music', 'What was the last song you listened to?'),
('Music', 'What is your favorite Music soundtrack?'),
('Music', 'Are there any songs that always bring a tear to your eye?'),
('Music', 'Do you like going to concerts? Why or why not? What was the last concert you went to?'),
('Music', 'Who was the first band or musician you were really into? Do you still like them?'),
('Music', 'Records, tapes, CDs, MP3s. Which did you grow up with? What is good and bad about each?'),
('Music', 'What bands or types of music do you listen to when you exercise?'),
('Music', 'Do you like classical music?'),
('Music', 'What’s the best way to discover new music?'),
('Music', 'How has technology changed the music industry?'),
('Goals', 'What is the craziest, most outrageous thing you want to achieve?'),
('Goals', 'What are some goals you have already achieved?'),
('Goals', 'What personal goals do you have?'),
('Goals', 'What do you hope to achieve in your professional life?'),
('Goals', 'Have your parents influenced what goals you have?'),
('Goals', 'Do you usually achieve goals you set? Why or why not?'),
('Goals', 'What is the best way to stay motivated and complete goals?'),
('Goals', 'What are some goals you have failed to accomplish?'),
('Goals', 'When do you want to retire? What do you want to do when you retire?'),
('Goals', 'What are your goals for the next two years?'),
('Goals', 'How have your goals changed over your life?'),
('Goals', 'How much do you plan for the future?'),
('Goals', 'How do you plan to make the world a better place?'),
('Food', 'What is your favorite food?'),
('Food', 'Do you like spicy food? Why or why not? What is the spiciest thing you have ever eaten?'),
('Food', 'What foods do you absolutely hate?'),
('Food', 'What food do you know you shouldn’t eat but can’t help yourself?'),
('Food', 'Does government have a place in regulating food? To what extent should government regulate food?'),
('Food', 'When was the last time you had a food fight?'),
('Food', 'What do you get every time you go grocery shopping?'),
('Food', 'If your life was a meal, what would kind of meal would it be?'),
('Food', 'What do you think of buffets?'),
('Food', 'What would you want your last meal to be if you were on death row?'),
('Food', 'What food looks disgusting but tastes delicious?'),
('Weird', 'Time freezes for everyone but you for one day. What do you do?'),
('Weird', 'If you could call up anyone in the world and have a one hour conversation, who would you call?'),
('Weird', 'You have to relive one day of your life forever. Which day do you choose?'),
('Weird', 'If your mind was an island, what would it look like?'),
('Weird', 'What flavor of ice cream do you wish existed?'),
('Weird', 'What does your own personal hell look like? How about your own personal heaven?'),
('Weird', 'A portal to another world opens in front of you. You don’t know how long it will stay open or if you’ll be able to get back after you go through. What do you do?'),
('Weird', 'If you had a personal mascot, what would your mascot be?'),
('Weird', 'You find a remote that can rewind, fast forward, stop and start time. What do you do with it?'),
('Weird', 'If you were a king / queen, what would your throne look like?'),
('Weird', 'If you were on the run from the police for a crime you didn’t commit, where would you go?');";

if(!mysql_query($sql,$con)) //$con is mysql connection object
{
     die('Error : ' . mysql_error());
}

?>