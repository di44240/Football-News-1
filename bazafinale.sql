-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 17, 2021 at 11:30 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bazafinale`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `firstname` tinytext NOT NULL,
  `lastname` tinytext NOT NULL,
  `email` varchar(64) NOT NULL,
  `reason` tinytext NOT NULL,
  `mesazhi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `firstname`, `lastname`, `email`, `reason`, `mesazhi`) VALUES
(1, 'Zana', 'Agimi', 'zana@gmail.com', 'Report a site problem', 'I need your help to fix this problem when I liked your pictures. Every time I like your picture does not allow me to do it.');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_name` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_name`) VALUES
(1, 'News'),
(2, 'Transfers'),
(3, 'Tables'),
(4, 'Leagues & Cups'),
(5, 'About Us'),
(6, 'Account');

-- --------------------------------------------------------

--
-- Table structure for table `news_category`
--

CREATE TABLE `news_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_category`
--

INSERT INTO `news_category` (`category_id`, `category_name`) VALUES
(1, 'General'),
(2, 'Transfers');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `posts_id` int(11) NOT NULL,
  `posts_title` varchar(128) NOT NULL,
  `posts_body` varchar(4096) NOT NULL,
  `image` varchar(512) NOT NULL,
  `category_id` int(128) NOT NULL,
  `post_author` tinyint(4) NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `show_hide_post` tinyint(4) NOT NULL,
  `posts_highlights` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`posts_id`, `posts_title`, `posts_body`, `image`, `category_id`, `post_author`, `post_date`, `show_hide_post`, `posts_highlights`) VALUES
(15, 'Steve Jagielka: Former Shrewsbury and Accrington Stanley midfielder dies aged 43', 'Steve Jagielka played 176 games for Shrewsbury where he made his breakthrough; the midfielder had a spell at Sheffield United before helping Accrington Stanley to the Conference title in 2006; older brother of former England and Everton defender Phil has died at the age of 43.\r\nAccrington are &quot;absolutely devastated&quot; by the death of former midfielder Steve Jagielka.\r\nThe older brother of Sheffield United\'s former England and Everton defender Phil, Steve has died at the age of 43.\r\nAccrington tweeted a tribute, which read: &quot;Everyone at #ASFC is absolutely devastated to hear of the death of former midfielder Steve Jagielka.\r\n&quot;Steve made history with the Reds, playing a big part as Stanley won the Conference title in 2006. Our thoughts are with his family &amp; friends at this tragic time.&quot;\r\nA former Stoke youth player, Steve Jagielka made his first-team breakthrough at Shrewsbury and as a midfielder he played 176 league games for the Shrews, netting 18 times.\r\nA short spell at Sheffield United then followed in 2003 - the same time as his brother Phil - before a move to Accrington.\r\nShrewsbury tweeted: &quot;Shrewsbury Town Football Club is deeply saddened to receive news that Steve Jagielka has passed away aged 43.\r\n&quot;Our thoughts are with his family and friends at this tragic time.&quot;', '16160061631.jpg', 1, 0, '2021-03-17 18:36:09', 1, '&quot;Steve made history with the Reds, playing a big part as Stanley won the Conference title in 2006. Our thoughts are with his family &amp; friends at this tragic time.&quot;'),
(16, 'Real Madrid 3-1 Atalanta (agg 4-1): Karim Benzema scores as Real Madrid reach Champions League quarter-finals', 'Karim Benzema scores his sixth goal in five games in all competitions for Real Madrid; Sergio Ramos and Marco Asensio also on the scoresheet as Real reach Champions League quarter-finals; Draw will be made on Friday\r\nKarim Benzema scored in a fifth successive game as Real Madrid secured their place in the Champions League quarter-finals with a 3-1 win over Atalanta (agg 4-1).\r\n\r\nThe La Liga side had been 1-0 up from the first leg and, after the Italians missed a couple of early chances, Benzema fired them ahead on the night in the 34th minute.\r\n\r\nA penalty from captain Sergio Ramos on the hour all but ended the tie, with Luis Muriel clipping in a fine free-kick to pull a goal back for Atalanta before substitute Marco Asensio wrapped things up late on.', '16160062452.jpg', 1, 0, '2021-03-17 18:37:34', 1, 'Karim Benzema scored in a fifth successive game as Real Madrid secured their place in the Champions League quarter-finals with a 3-1 win over Atalanta (agg 4-1).'),
(17, 'Philip Billing scored a stunning acrobatic volley as Bournemouth beat Swansea 3-0 to dent the Welsh side\'s automatic promotion h', 'Billing\'s blistering early strike, an own goal from defender Joel Latibeaudiere and Arnaut Danjuma\'s thumping late finish helped revive Bournemouth\'s play-off ambitions.\r\nThe Cherries came into the game five points adrift of the play-off places after losing 3-2 at home to Barnsley on Saturday.\r\nJonathan Woodgate\'s side dominated the first half, with former Arsenal midfielder Jack Wilshere particularly impressive in midfield.\r\nNetherlands midfielder Danjuma raced away down the left wing before cutting the cross back for the unmarked Billing to plant a stunning left-footed volley into the net.\r\n\r\nTwo minutes later Dominic Solanke saw his effort deflected behind for a corner before both Junior Stanislas and Danjuma both blazed over in promising positions.', '16160063543.jpg', 1, 0, '2021-03-17 18:39:21', 1, 'Netherlands midfielder Danjuma raced away down the left wing before cutting the cross back for the unmarked Billing to plant a stunning left-footed volley into the net.'),
(18, 'Rui Patricio: Wolves keeper\'s head injury \'not as severe as first feared\'', 'Rui Patricio recovering at home after collision with team-mate Conor Coady in Monday night\'s defeat by Liverpool; goalkeeper received lengthy on-field treatment; Patricio included in Portugal squad for upcoming World Cup qualifiers\r\nWolves are confident the head injury Rui Patricio suffered against Liverpool is not as severe as was first feared, and he did not require hospital treatment after the game.\r\n\r\nThe Portuguese goalkeeper is now recovering at home after a distressing collision in Monday night\'s match where Patricio was accidentally struck in the head by Wolves captain Conor Coady\'s knee as they attempted to stop Mohamed Salah scoring. The Egyptian\'s goal was ruled out for offside.\r\n\r\nThe incident occurred in the 86th minute of the Premier League game, with play halted for 15 minutes while medics attended to Patricio on the pitch before he was immobilised and taken off on a stretcher.', '16160065364.jpg', 1, 0, '2021-03-17 18:42:35', 1, 'The Portuguese goalkeeper is now recovering at home after a distressing collision in Monday night\'s match where Patricio was accidentally struck in the head by Wolves captain Conor Coady\'s knee as they attempted to stop Mohamed Salah scoring.'),
(19, 'Cristiano Ronaldo: Zinedine Zidane says talk of Real Madrid return for Juventus forward might be true', '&quot;\'Yes, it may be [true],\' said Zinedine Zidane when asked about the rumours linking Cristiano Ronaldo with a return to Real Madrid this summer; Juventus\' elimination from the Champions League last week to Porto has intensified speculation around Ronaldo\'s future\r\nReal Madrid head coach Zinedine Zidane says the rumours linking Cristiano Ronaldo with a return to the Spanish capital might be true.\r\n\r\nRonaldo left Real in 2018 for Juventus in a £105m deal, after winning an unprecedented three Champions League titles in a row under Zidane, who also exited the club that summer only to return nine months later.\r\n\r\nJuventus were desperate to bring Ronaldo to Turin to replicate that success in Europe, however, the Italian champions have failed to progress beyond the quarter-final stage since the five-time Ballon d\'Or winner arrived.\r\n\r\n    Juve CEO: Ronaldo represents club\'s future\r\n    Pele praises Ronaldo\'s goalscoring exploits\r\n    Porto rally to knock out Juve in extra-time thriller\r\n\r\nAfter last week\'s elimination from the Champions League by underdogs Porto, talk has grown that the move away from Madrid was a mistake and that Ronaldo is destined to return to the club this summer.\r\n\r\n&quot;Yes, it may be [true],&quot; Zidane told Sky in Italy, when asked about the rumours linking Ronaldo with a return to Real.\r\n&quot;We know Cristiano, we know the person he is and everything he has done here.\r\n&quot;But now he\'s a Juventus player and we must respect this.', '16160066085.jpg', 1, 0, '2021-03-17 18:43:40', 1, '&quot;Yes, it may be [true],&quot; Zidane told Sky in Italy, when asked about the rumours linking Ronaldo with a return to Real.'),
(20, 'Rotherham 1-4 Watford: Hornets continue automatic promotion form at struggling Millers', 'Watford strengthened their grip on second place in the Championship as they scored four goals against relegation-threatened Rotherham.\r\n\r\nFrancisco Sierralta gave the Hornets the lead with an early header, before Ismaila Sarr\'s instinctive finish and Ken Sema\'s volley put them on course for a fourth successive win before half-time.\r\n\r\nRotherham saw a Michael Smith penalty saved by Daniel Bachmann early in the second half before Freddie Ladapo gave the hosts hope of a comeback with a superb solo run and strike.\r\n\r\nBut that proved to be short-lived as substitute Dan Gosling netted Watford\'s fourth from the restart as he swept in the rebound after Andre Gray\'s shot was saved by Jamal Blackman.\r\n\r\nWatford have won eight of their past nine matches while Rotherham\'s first return to action in 13 days, after having to postpone their past three fixtures because of a coronavirus outbreak, left them still third from bottom.\r\n\r\nThe Millers, whose manager Paul Warne was also absent from the touchline while he continues to self-isolate as a result of the three cases recorded, have won just once in their past seven games.\r\n\r\nWatford\'s hold on second place, meanwhile, was boosted as fellow promotion contenders Swansea City lost at Bournemouth and Brentford were held to a draw at Derby County.\r\n\r\nXisco Munoz\'s side started quickly at the New York Stadium, with Sierralta making amends for an own goal he netted at Cardiff on Saturday by heading in at the right end from Philip Zinckernagel\'s cross.', '16160067286.jpg', 1, 0, '2021-03-17 18:45:39', 1, 'Francisco Sierralta gave the Hornets the lead with an early header, before Ismaila Sarr\'s instinctive finish and Ken Sema\'s volley put them on course for a fourth successive win before half-time.'),
(21, 'Derby County 2-2 Brentford: Rooney\'s Rams rally to take point against Bees', 'Derby County came from 2-0 down at half-time to earn a deserved draw with Championship high fliers Brentford.\r\n\r\nAfter 27-goal Championship top scorer Ivan Toney\'s eighth-minute penalty and a low shot from Sergi Canos, Lee Gregory got one back before fellow half-time substitute Louie Sibley\'s stunning left-foot curler just four minutes from time.\r\n\r\nBrentford, who now trail second-placed Watford by five points, looked on course for a fourth win in five games.\r\n\r\nBut Derby boss Wayne Rooney shook things up with a three-man half-time substitution.\r\n\r\nAnd it paid off as the Rams hit back to earn only their second point in five matches in March - and edge eight points clear of danger.\r\n\r\nDerby had previously endured a miserable month, having picked up just one point and drawn four successive blanks in front of goal.\r\nIvan Toney\'s early penalty was the Championship top scorer\'s 27th goal of the season\r\nIvan Toney\'s early penalty was the Championship top scorer\'s 27th goal of the season\r\n\r\nIt looked bad for the Rams when Bryan Mbeumo was brought down by Lee Buchanan and Toney converted from the spot.\r\n\r\nThen Canos cut in from left on 23 minutes to drill a low right-foot shot which beat keeper Kelle Roos at his near right post to seemingly put the Bees on course for another win.\r\n\r\nBut Gregory was one of three half-time substitutes and the on-loan Stoke City striker, who replaced Louie Watson, scored within two minutes of coming on.\r\n\r\nHe steered home Nathan Byrne\'s low cross from close range for only his second goal for the Rams since arriving on the final day of the transfer window last month.\r\n\r\nThat gave the Rams the confidence to look for more and they got their point when Sibley came up with his first goal in almost eight months - since the 3-1 win at Birmingham last July.\r\n\r\nAnother of Derby\'s subs Patrick Roberts, who had only just come on, slipped a pass to his left inside and Sibley neatly feinted to give himself the space he needed to send a superb 20-yard shot arcing beyond the reach of David Raya.', '16160074297.jpg', 2, 0, '2021-03-17 18:57:16', 1, 'Derby County came from 2-0 down at half-time to earn a deserved draw with Championship high fliers Brentford.'),
(22, 'Bournemouth 3-0 Swansea City: Billing and Danjuma strikes help Cherries topple Swans', 'Bournemouth revived their play-off push with a 3-0 victory over Swansea City which dealt a blow to the Welsh club\'s automatic promotion hopes.\r\nPhilip Billing\'s spectacular volley and a Joel Latibeaudiere own goal put Bournemouth in control at the break.\r\nJonathan Woodgate\'s team sealed victory late on as Arnaut Danjuma drove home.\r\nBournemouth remain seventh but cut the gap on the top six to only two points, while Swansea stay third but lose ground on second-placed Watford.\r\nWoodgate was seeking a response after Barnsley\'s weekend win at the Vitality Stadium left his side five points adrift of the Tykes, who occupy the last the play-off spot ahead of their trip to bottom-club Wycombe on Wednesday.\r\nBournemouth delivered for their head coach as they deservedly claimed all three points against a weary-looking Swansea.\r\nSteve Cooper\'s side have proved in recent weeks that they can grind out results even when short of their best, but made life hard for themselves here by conceding after only nine minutes.\r\nA side with a fine defensive record were opened up all too easily, with the excellent Danjuma finding time on the flank to pick out the unmarked Billing eight yards from goal.\r\nThe Dane made a difficult task look easy, hooking home an acrobatic volley which Freddie Woodman could only push high into the net.\r\nSwansea enjoyed a spell of decent possession as they sought a response, though Bournemouth threatened on the counter through Dominic Solanke only for Kyle Naughton\'s challenge to clear the danger.\r\nA half of few clear chances ended with the hosts\' second goal, as Solanke glanced on Danjuma\'s corner and the ball ricocheted off the unfortunate Latibeaudiere\'s back before bouncing inside the far post.\r\nFormer Swansea defender Cameron Carter-Vickers\' header was clawed out by Woodman early in the second period before the visitors mustered a first effort of note as Matt Grimes dragged wide.\r\nSubstitute Morgan Whittaker then drew two decent saves from Asmir Begovic, first with a 25-yard drive then with a first-time effort from Ryan Manning\'s drilled cross.', '16160075238.jpg', 1, 0, '2021-03-17 18:58:50', 1, 'Bournemouth revived their play-off push with a 3-0 victory over Swansea City which dealt a blow to the Welsh club\'s automatic promotion hopes.'),
(23, 'Paul Warne: Rotherham United boss to miss two games because of Covid-19 isolation', 'Rotherham boss Paul Warne will miss the games against Watford and Bristol City because he has to self isolate after the club\'s recent Covid-19 outbreak.\r\nThe Millers postponed three matches because of three positive test results.\r\nAssistant Richie Barker and goalkeeping coach Andy Warrington will temporarily take charge, with first-team coach Matt Hamshaw also forced to self isolate.\r\n&quot;It\'s gone through the camp and we\'ve had a significant number isolating, including myself now,&quot; said Warne.\r\n&quot;The lads\' first day back in will be today, as I do this interview on Monday.\r\n&quot;They won\'t have myself, Richie or Hammy there, but fortunately we\'ve got Andy Warrington to oversee training.\r\n&quot;Richie will be able to take a session with the lads on Tuesday morning to take them through some work to prepare them as well as we can technically.&quot;\r\nThe club\'s Roundwood training ground has now reopened to players and staff after it was closed following the outbreak.\r\nThe Millers, who are third from bottom in the Championship and three points adrift of safety, initially postponed fixtures against Brentford and Luton before their home match with Coventry was forced to be called off too.', '16160098389.jpg', 1, 0, '2021-03-17 19:37:25', 1, 'Rotherham boss Paul Warne will miss the games against Watford and Bristol City because he has to self isolate after the club\'s recent Covid-19 outbreak.'),
(26, 'Queens Park Rangers 0-1 Huddersfield Town: Juninho Bacuna goal eases Terriers\' worries', 'Juninho Bacuna\'s second-half strike eased Huddersfield\'s relegation fears as they overcame QPR at the Kiyan Prince Foundation Stadium.\r\nThe midfielder rifled home a swerving half-volley to secure only the Terriers\' second victory since the turn of the year and relieve the pressure on boss Carlos Corberan.\r\nRangers saw plenty of the ball but created only one opportunity of note, with Todd Kane denied by Ryan Schofield at close range.\r\nHuddersfield\'s win lifts them to 18th place - nine points clear of the bottom three - while QPR slip to 13th.\r\n•	Relive Saturday\'s EFL action as it happened\r\nEmploying a high-tempo pressing game, the Terriers began brightly and Lewis O\'Brien strode through midfield to force Seny Dieng into a diving save as early as the second minute.\r\nIsaac Mbenza and Richard Keogh also went close for the visitors, while QPR controlled the bulk of the first-half possession without putting the Town defence under much pressure.\r\nBut they should have taken the lead 10 minutes before the break when Ilias Chair galloped infield and slid the ball back for Kane, who side-footed straight at Schofield from eight yards out.\r\nHowever, it was Huddersfield who broke the deadlock in the 55th minute as Pipa advanced down the left and bent the ball across for Bacuna to unleash a powerful finish from the edge of the box.\r\nThe Curacao international nearly made it 2-0 soon afterwards, whipping a free-kick narrowly wide, while Dieng dived to push away a low attempt from substitute Duane Holmes.\r\nThe Terriers, who had lost six of their previous seven away games, might have sealed the points with a late counter-attack, but Yaya Sanogo bundled O\'Brien\'s cross wide.', '161601010812.jpg', 1, 0, '2021-03-17 19:50:08', 1, 'Juninho Bacuna\'s second-half strike eased Huddersfield\'s relegation fears as they overcame QPR at the Kiyan Prince Foundation Stadium.'),
(27, 'Birmingham City: Stunning Arsenal and playing', 'Europa League in the Championship - 10 years on\r\nWith less than 10 minutes to go at Wembley, Alex McLeish turned to Obafemi Martins and asked him to win the 2011 Carling Cup final for Birmingham City. The Blues were level with Arsenal at 1-1, with Arsene Wenger\'s side expected to end their near six-year trophy drought.\r\n\r\nIn the penultimate minute of normal time, Ben Foster kicked the ball long. Serbian striker Nikola Zigic won the aerial battle. Confusion between goalkeeper Wojciech Szczesny and defender Laurent Koscielny saw the ball land at Martins\' feet.\r\n\r\nThe Nigerian striker, signed on loan from Rubin Kazan in January, had a tap-in. Pandemonium ensued.\r\n\r\n&quot;It was amazing,&quot; says defender Liam Ridgewell, reflecting before Saturday\'s 10-year anniversary of one of the competition\'s great final upsets. &quot;It was the biggest game of our careers. If you don\'t play for one of the top clubs, those experiences don\'t come too often.\r\n\r\n&quot;The way we did it was phenomenal. In the dressing room, everyone was buzzing. There was champagne everywhere, people taking pictures and grabbing every bit of memorabilia.&quot;\r\n\r\n&quot;My memory of the day is mixed emotions because I didn\'t get on the pitch,&quot; striker Kevin Phillips remembers. &quot;You\'re a team player and to get the medal was incredible. There was disappointment that I didn\'t go on, and in the back of my mind I was looking at Obafemi and thinking: \'That would have been me\'. You have a tap-in and you go down as a Blues legend.\r\n\r\n&quot;I\'ve played in some great atmospheres in my time, but when I\'m asked about the best, I have to say the noise when that goal went in, and at the final whistle, was amazing. It was disbelief really - we\'d just beaten Arsenal and Arsene Wenger with all their history.&quot;', '161601016213.jpg', 1, 0, '2021-03-17 19:50:15', 1, 'Europa League in the Championship - 10 years on\r\nWith less than 10 minutes to go at Wembley, Alex McLeish turned to Obafemi Martins and asked him to win the 2011 Carling Cup final for Birmingham City.'),
(28, 'AC Milan vs Man Utd: Europa League preview, team news, stats, kick-off time', 'Paul Pogba and David de Gea available but Edinson Cavani out for Man Utd\'s Europa League last-16 second leg at AC Milan, who are boosted by the return of Zlatan Ibrahimovic, Hakan Calhanoglu and Theo Hernandez; follow with our dedicated live blog across Sky Sports\' digital platforms\r\nManchester United manager Ole Gunnar Solskjaer offers an injury update on striker Anthony Martial and midfielder Donny van de Beek \r\nTeam news and stats ahead of AC Milan vs Man Utd in the Europa League last 16 second leg on Thursday; kick-off at 8pm.\r\nPaul Pogba and Donny van de Beek are back for Manchester United\'s crunch Europa League trip to AC Milan.\r\nUnited have confirmed Pogba is available for the first time since sustaining a thigh complaint against Everton on February 6, while Van De Beek is also in the squad heading to Italy.\r\nDavid de Gea is involved after returning from paternity leave in Spain, but Edinson Cavani, Anthony Martial, Eric Bailly and Shola Shoretire are not travelling to Italy.', '161601021014.jpg', 1, 0, '2021-03-17 19:49:38', 1, 'Paul Pogba and David de Gea available but Edinson Cavani out for Man Utd\'s Europa League last-16 second leg at AC Milan, who are boosted by the return of Zlatan Ibrahimovic, Hakan Calhanoglu and Theo Hernandez'),
(29, 'Zlatan Ibrahimovic: AC Milan striker recalled by Sweden', 'Sweden\'s record goalscorer Zlatan Ibrahimovic has been recalled to the national team five years after announcing his retirement. \r\nThe 39-year-old scored 62 goals in 116 internationals before quitting after the team\'s Euro 2016 group-stage exit.\r\nHe opened the door to a return in a newspaper interview in November 2020 and Sweden coach Janne Andersson then flew to Milan to meet with the striker.\r\nIbrahimovic has 14 goals in 14 Serie A appearances for AC Milan this season.\r\n•	Ibrahimovic: How the AC Milan striker is producing a European renaissance\r\nSweden face Georgia on Thursday, 25 March before playing Kosovo three days later in their opening two 2022 World Cup qualifiers.\r\nIbrahimovic has responded to Sweden\'s announcement of their squad by tweeting: &quot;The return of the God.&quot;\r\n&quot;He can be a little bit funny at times,&quot; Andersson said when told about the striker\'s tweet during an online news conference.\r\n&quot;First and foremost he is a very good footballer, the best we have had in Sweden. It\'s obviously very good that he wants to come back.\r\n&quot;Apart from what he can contribute on the field, he has incredible experience and can contribute that to the other players in the team.&quot;\r\nReport\r\nThe 6ft 5in striker made his international debut as a 19-year-old against the Faroe Islands and scored in his first competitive match - a qualifier for the 2002 World Cup against Azerbaijan.\r\nHe was appointed captain for Euro 2012 qualifying and scored one of the best goals of the finals with a volley in a 2-0 win over France, although Sweden were eliminated at the group stage.\r\nThe former Barcelona, Paris St-German, Manchester United and LA Galaxy striker rejoined AC Milan on a six-month deal - with the option for another season - in January 2020.\r\nIbrahimovic scored 29 goals in 53 games for United, who agreed to an early termination of his contact, before he joined MLS side Galaxy in 2018.', '161601025415.jpg', 1, 0, '2021-03-17 19:50:03', 1, 'Sweden\'s record goalscorer Zlatan Ibrahimovic has been recalled to the national team five years after announcing his retirement.'),
(30, 'Jordan Pickford: Everton keeper to miss England World Cup qualifiers through injury', 'Everton goalkeeper Jordan Pickford will miss England\'s three World Cup qualifiers this month after sustaining an abdominal muscle injury.\r\nPickford, 27, was forced off just before half-time in Saturday\'s Premier League defeat against Burnley.\r\nThe Toffees said he will miss their FA Cup quarter-final against Manchester City on Saturday as well as matches against San Marino, Albania and Poland.\r\nEngland boss Gareth Southgate will name his squad on Thursday.\r\nEverton said Pickford injured his oblique abdominal muscle attempting to stop a strike from Johann Berg Gudmundsson.\r\nPickford has won 30 caps and played in November\'s Nations League games.', '161601031216.jpg', 1, 0, '2021-03-17 19:49:59', 1, 'Everton goalkeeper Jordan Pickford will miss England\'s three World Cup qualifiers this month after sustaining an abdominal muscle injury.'),
(31, 'Man City 0-2 Man Utd: \'City suffer drop in standards but remain on course for glory\'', 'Manchester City manager Pep Guardiola looked in philosophical mood as he stood on the Etihad Stadium touchline with his arm around victorious opposite number Ole Gunnar Solskjaer.\r\nSolskjaer had every right to be elated after an outstanding display by Manchester United delivered a 2-0 win to end City\'s run of 21 consecutive victories in all competitions stretching back to November.\r\nThe pair had been involved in a lengthy touchline debate during the match - albeit one that ended with fist bumps - but Guardiola\'s exchange with the smiling Solskjaer at full-time probably reflected the City manager\'s knowledge this day had to come eventually.\r\nGreat credit must be given to Solskjaer and United, who made it 22 Premier League away games unbeaten. And it would be unjust not to recognise the impressive way they fashioned a win that puts them back in second place in the Premier League.\r\nThey did the double over City in the league last season and clearly know how to disrupt the leaders with their lethal counter-attacking play - a ploy even more effective when they are ahead from the penalty spot within seconds of the start.\r\nAs for City, their run of victories before finally being overcome by United stands a remarkable feat.\r\nIt was a run of form that changed the face of the title race to such an extent that, despite this loss, it would take a stunning collapse to see anyone other than City crowned champions.\r\nWhen Guardiola and City last tasted defeat, at Tottenham on 21 November, it was Jose Mourinho\'s team at the Premier League summit and their vanquished visitors eight points adrift in 11th place.\r\nNow, at the end of this magnificent hot streak, City are 11 points ahead of United despite losing another Etihad derby.\r\nIn other words, City will be frustrated their own sudden drop in standards but it is highly unlikely to disturb the short- or long-term prospects of the team on the hunt for four major trophies. \r\nAs well as enjoying a dominant lead in the league, City face Spurs in the League Cup final in April, Everton in the FA Cup quarter-final at Goodison Park later in March and look on course for the Champions League quarter-final after establishing a 2-0 lead over Borussia Monchengladbach with the home leg still to come.', '161601035417.jpg', 1, 0, '2021-03-17 19:49:54', 1, 'Manchester City manager Pep Guardiola looked in philosophical mood as he stood on the Etihad Stadium touchline with his arm around victorious opposite number Ole Gunnar Solskjaer.'),
(32, 'Barcelona 4-1 Huesca: Lionel Messi equals Xavi\'s Barcelona appearance record', 'Lionel Messi scored twice and made another on the day he equalled Xavi\'s record for most Barcelona appearances.\r\nMessi was playing for Barca for the 767th time and his curled double, along with goals from Antoine Griezmann and Oscar Mingueza, helped his side to a comfortable win over struggling Huesca.\r\nRafa Mir scored a controversial penalty for Huesca at the end of the first half, but Barca cruised to the victory.\r\nThey move second in La Liga, four points behind leaders Atletico Madrid.\r\nThe 33-year-old Argentina forward has won La Liga 10 times and the Champions League on four occasions among 34 trophies since he made his competitive debut as a substitute in a 1-0 away derby win against Espanyol on 16 October 2004.\r\nMessi, whose contract expires at the end of this season, will break former Spain midfielder Xavi\'s record on Sunday if he plays in the league game at Real Sociedad.\r\nBarcelona displayed a painted banner of Messi and Xavi together with the words \'touching the sky\' at the Nou Camp\r\nBarcelona were knocked out in the last 16 of the Champions League by Paris St-Germain on Wednesday but still have hopes of winning a domestic league and cup double.\r\nAgainst bottom-of-the-table Huesca, Messi scored after 13 minutes with a fine, left-footed curled effort from outside the penalty area before Griezmann added an almost identical goal 22 minutes later.\r\nHuesca had lost 8-2 at the Nou Camp in 2018, but were given a fortunate way back into the game when Barca goalkeeper Marc-Andre ter Stegen was adjudged to have fouled Huesca\'s Mir.\r\nThe striker, on loan from Wolves, converted the penalty, but the hosts restored their two-goal lead when Mingueza headed his first goal for the club following Messi\'s cross from the left wing.\r\nMir had a chance to make it 3-2 but somehow chested the ball over the bar from only a few yards out. Messi grabbed his second goal of the night, and his 661st for Barcelona, with another curled, left-footed shot from distance in stoppage time.\r\nThe win takes Barcelona, who have already reached the Copa del Rey final, above Real Madrid and into second with 11 league games of the season remaining.', '161601040618.jpg', 1, 0, '2021-03-17 19:49:50', 1, 'Lionel Messi scored twice and made another on the day he equalled Xavi\'s record for most Barcelona appearances.'),
(33, 'Cagliari 1-3 Juventus: Cristiano Ronaldo scores hat-trick', 'Pele congratulated Cristiano Ronaldo after the Portugal forward\'s hat-trick against Cagliari took him past the Brazilian legend\'s tally of goals scored in official matches.\r\n\r\nRonaldo netted three times inside the opening 32 minutes to take his career total to 770 - three clear of Pele\'s tally of 767.\r\n\r\n&quot;Life is a solo flight. Each makes his own journey. And what a beautiful journey you are having. I admire you a lot, I love watching you play and this is no secret to anyone. Congratulations on breaking my record of goals in official matches,&quot; Pele posted on Instagram\r\n\r\nSome reports suggest this is a world record tally but that is disputed by the Czech Football Association, which claims former Austria and Czechoslovakia striker Josef Bican is football\'s true all-time top scorer with 821 goals.\r\nMeanwhile, data from Rec.Sport.Soccer Statistics Foundation (RSSSF) says Bican scored 805 career goals. But among them were 27 goals for Rapid Vienna\'s reserve and amateur teams, as well as strikes which were not in official international games. Remove those and Bican finished his career on 759 goals - short of Pele and Ronaldo\'s total.\r\n\'My ever-lasting and unconditional admiration for Pele\'.', '161601044819.jpg', 1, 0, '2021-03-17 19:49:46', 1, 'Pele congratulated Cristiano Ronaldo after the Portugal forward\'s hat-trick against Cagliari took him past the Brazilian legend\'s tally of goals scored in official matches.'),
(34, 'How watching lockdown football differs across Europe\'s major leagues', 'For almost a year, the routines and rituals of matchdays across Europe have been lost. \r\nThat is not just the case for stadium-going regulars, but also for those supporters who ordinarily follow games from home.\r\nThe five major European leagues have adopted different approaches to keeping fans interested. So which of these are working best? Journalists from across Europe give their views.\r\nLigue 1 - \'It has become inaccessible\'\r\n Mauricio Pochettino has taken charge of Paris St-Germain this season but has yet to experience a proper welcome from fans because of restrictions\r\nIn France, lockdown has coincided with a TV broadcasting rights crisis. Ligue 1 is not a universally popular product - even domestically - and the most recent four-year rights agreement with Mediapro has collapsed after just five months.\r\n&quot;It is impossible to talk about Covid\'s impact without mentioning the television rights crisis - they are linked,&quot; said Paris-based Jonathan Johnson of CBS Sports.\r\n&quot;The loss of spectators is an obvious issue because so many clubs live hand to mouth on matchday income, TV money and transfers. Mediapro has massively exacerbated that.&quot;\r\nConcerns about the television rights contract surfaced soon after the season started. In October, Mediapro chief executive Jaume Roures insisted his company would not walk away, but made clear a desire to renegotiate terms because of the pandemic.\r\n&quot;No-one could have predicted the social and economic effects of Covid-19,&quot; Roures said. &quot;This has led to us seeing with the LFP [French football\'s governing body] how we can adapt to the situation, without calling into question the commitment we made in April 2018.&quot;\r\nIn December, LFP released a statement saying the Mediapro deal had ended,\r\nwith the broadcaster only committed to showing matches until January, and with Canal Plus negotiating to take over the rights.\r\n&quot;French football is being forced to modernise,&quot; Johnson added. &quot;It has never really been about the event of watching a match on TV or in the stadium, more about getting people interested in the product.\r\n&quot;Many turn away from Ligue 1 because they believe it is inferior to other leagues. However, now there is nowhere to watch free-to-air football. Ligue 1 is inaccessible to many an average French person.&quot;', '161601051120.jpg', 1, 0, '2021-03-17 19:49:43', 1, 'For almost a year, the routines and rituals of matchdays across Europe have been lost. \r\nThat is not just the case for stadium-going regulars, but also for those supporters who ordinarily follow games from home.'),
(35, 'Bradley Dack: Blackburn Rovers forward suffers suspected cruciate knee ligament injury', 'Blackburn Rovers manager Tony Mowbray fears forward Bradley Dack has sustained a cruciate knee ligament injury in their defeat by Brentford.\r\n\r\nDack, 27, was carried off in stoppage time of Friday\'s Championship game at Ewood Park, which Rovers lost 1-0.\r\n\r\nShortly after full-time, Mowbray revealed Dack was being treated with gas and air in the changing room.\r\n\r\n&quot;It doesn\'t look good, our medical staff seem to think it\'s a bad one,&quot; Mowbray said.\r\n\r\n&quot;I\'m not a medic, but the doctor is telling me that he thinks it\'s a cruciate knee ligament injury.\r\n\r\n&quot;It\'s an emotional place at the minute, but he\'s part of this family and we\'ll look after him and ensure he gets fit.&quot;\r\n\r\nDack went to ground in a collision with Brentford goalkeeper David Raya as he tried to intercept the ball from a clearance on the edge of the penalty box.\r\n\r\nAfter lengthy treatment on the pitch, Dack was led off down the tunnel on a stretcher.\r\n\r\n&quot;The players are all hugging him, (former Blackburn player) David Raya is in there as well because he\'s really concerned,&quot; Mowbray added.\r\n\r\n&quot;It\'s emotional for everyone and we\'ll wait and see on a proper diagnosis when it settles down and we can get a proper scan.&quot;\r\n\r\nDack was previously sidelined for 12 months after damaging the anterior cruciate ligament in his other knee in December 2019.\r\n\r\nHe returned to action on 26 December this season in the same week he signed an extension to his contract at Ewood Park until the end of the 2022-23 season.\r\n\r\nHis 17 appearances for Rovers this season have seen him score three goals, including against Swansea City on Tuesday.', '1616010799skysports-bradley-dack-dack_5307342.jpg', 1, 0, '2021-03-17 19:55:15', 1, 'Blackburn Rovers manager Tony Mowbray fears forward Bradley Dack has sustained a cruciate knee ligament injury in their defeat by Brentford.\r\nnuk ka problem. leshoje nese don.'),
(36, 'Norwich City came from a goal down to beat struggling Sheffield Wednesday at Hillsborough and go 10 points clear at the top of t', 'Norwich City came from a goal down to beat struggling Sheffield Wednesday at Hillsborough and go 10 points clear at the top of the Championship.\r\n\r\nJordan Rhodes gave Wednesday a surprise early lead from six yards against his former club after Barry Bannan\'s free-kick was blocked by the wall and Joey Pelupessy\'s follow-up strike was not properly cleared.\r\nTeemu Pukki blasted Norwich level from eight yards after an hour as good build-up play set up the prolific Finn to strike into the top corner.\r\nTodd Cantwell secured an eighth successive win for the Canaries 16 minutes later as he curled in a fine effort from inside the box. \r\nWednesday have now lost seven successive games and remain second-from-bottom of the Championship, seven points from safety with 11 games left to play. \r\n•	Relive Norwich\'s win at Sheffield Wednesday\r\nHaving hardly touched the ball in the opening minutes of the game, the Owls found themselves ahead when Josh Windass was brought down on the edge of the box by Ben Gibson and Rhodes reacted quickest from the free-kick for his fourth goal of the season.\r\nNorwich almost handed Wednesday a second goal when Gibson\'s mistake allowed Adam Reach the chance to shoot from the edge of the box, but his low effort was straight at Tim Krul.\r\nDarren Moore\'s Owls looked dangerous on the break throughout the first half, but having grown in confidence they were almost undone when Emiliano Buendia fed Pukki, but the Finnish striker\'s shot from 10 yards was well-blocked by Tom Lees.\r\nBut Norwich started the second half well and they were rewarded for their patience in possession when Buendia and Oliver Skipp\'s interplay combined to put Pukki through for his 50th Championship goal for the Canaries.\r\nHaving seen substitute Kieran Dowell and Pukki put good efforts wide soon after the equaliser, Buendia was also at the heart of Norwich\'s second goal. \r\nThe Argentine midfielder strongly won the ball off Windass in midfield before sending a well-weighted pass to Cantwell who skipped past Liam Palmer before firing home.', '161601090510.jpg', 1, 0, '2021-03-17 19:55:12', 1, 'Norwich City came from a goal down to beat struggling Sheffield Wednesday at Hillsborough and go 10 points clear at the top of the Championship.'),
(37, '\'You know you can\'t leave\' - Laporta issues Messi stay plea as he assumes Barca presidency', 'The new chief takes over at a critical time for the Catalans, with their captain\'s future a burning question at the club\r\n\r\nNew Barcelona president Joan Laporta made a direct plea to Lionel Messi to stay at Camp Nou as he celebrated his inauguration at the Blaugrana helm. \r\n\r\nLaporta was sworn into office on Wednesday after winning club elections in a landslide, 11 years after leaving the post for the first time in 2010. \r\n\r\nAnd predictably, the Argentine figured prominently in his opening speech to members at a time where his future at Barcelona is less than clear.', '1616011030t1.jpeg', 2, 0, '2021-03-17 21:37:53', 1, 'The new chief takes over at a critical time for the Catalans, with their captain\'s future a burning question at the club'),
(38, 'Las Palmas chief reveals how much Barcelona could end up paying for wonderkid Pedri', 'The 18-year-old has become a key figure at Camp Nou in his first season with the Catalan club\r\n\r\nLas Palmas president Miguel Angel Ramirez has said his club could collect up to €23 million (£20m/$27m) from Barcelona for Pedri\'s transfer if he fulfils all of the clauses and bonus conditions included in the deal. \r\n\r\nPedri was signed by Barca prior to last season, with the midfielder sent back on loan to Las Palmas for the 2019-20 campaign.\r\n\r\nThis season, the 18-year-old has become a key figure at Camp Nou in his first campaign with Barcelona, positioning himself as a fixture for years to come.', '1616011077t2.jpg', 2, 0, '2021-03-17 19:58:03', 1, 'The 18-year-old has become a key figure at Camp Nou in his first season with the Catalan club');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(512) NOT NULL,
  `roli` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `name`, `email`, `password`, `roli`) VALUES
(12802, 'Qendrimi', 'qendrim@football.net', '$2y$10$6aZqyDufsKuSZIC49xQXEekGilTo5s5J.Lsoar4pPI8f/cKUeLHN.', 1),
(12803, 'Bashkim', 'bashkim@footballnews.net', '$2y$10$rZ61Xc611S5ROy6BCo22FOKFoenvh4OKfXT/m0BWBYAgUUeU2P1bm', 0),
(12804, 'bashkim ', 'bashkimi@gmail.com', '$2y$10$FuOmN4UqWy1WJKYr1/rotuTdTZM0JY1O08Q4BqBbHM9pi8CE9RakC', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `news_category`
--
ALTER TABLE `news_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`posts_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `news_category`
--
ALTER TABLE `news_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `posts_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12805;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
