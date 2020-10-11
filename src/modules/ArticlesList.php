<?php

declare( strict_types = 1 );
namespace BoskeopolisLand;

class ArticlesList
{
	public static function getList() : array
	{
		return array_map( function( $item ) : Article { return new Article( $item ); }, self::DATA );
	}

	private const DATA =
	[
		[
			'name' => 'Cometropolis',
			'url' => 'https://www.mezunian.com/2020/10/09/boskeopolis-land-lets-code-a-crappy-2d-platformer-like-millions-o-other-people-on-the-internet-lose-interest-give-up-only-a-few-months-in-part-liv-cometropolis/',
			'date' => '2020-10-09',
			'content' => '<div><iframe class="mezun-post-video" src="https://www.youtube-nocookie.com/embed/u2Lb5nW7bJc" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" width="560" height="315" frameborder="0"></iframe></div><p>This level started with just the idea o’ a neon palette, the implementation o’ which probably did take the bulk o’ the time I spent on this level. The “palette changes” as they seem to be in the actual game use completely different coding, bending this game’s flimsy ’scuse for a palette system e’en farther. Unlike ol’ consoles &amp; computers, wherein changing palettes was much quicker than changing tiles that <a href="http://www.effectgames.com/effect/article-Old_School_Color_Cycling_with_HTML5.html">many ol’ games would cycle palettes to create the illusion o’ animation</a>, changing the palette in this game requires regenerating textures, which is much slower than just animating tiles. Theoretically it’d be possible to do it rather quickly using shaders; howe’er, SDL doesn’t allow shaders, &amp; it’s much too late in development to switch o’er to the much mo’ complex &amp; much less intuitive OpenGL. What I did do to create the illusion o’ a cycling palette is take advantage o’ 2 caveats to this problem: 1. I can render a rectangle o’ any color that covers the whole screen in no time; 2. SDL allows me to apply the equivalent to Photoshop’s “multiply” blending mode to textures, which, when used with a white &amp; black image makes whate’er is ’hind show through the white while still concealing what’s ’hind the black. Thus, I just set whate’er palette entries I want to show the shifting rainbow color ( which are dark gray &amp; black ) to white while everything else is black.</p><p>I had originally planned to use the city theme for this palette, since I felt the city would look nice in neon, but since I had all 4 city slots filled, I ’stead considered making a space level, since that theme has the fewest slots filled &amp; it would fit there, too. I think I played with the idea o’ focusing on dodging horizontally-moving sparks on wire or something; howe’er, none o’ this felt fun, so I shelved it for a while. I don’t remember where my mind went from there, but as some point I came up with the idea o’ dodging falling stars, — probably from the 1 memorable level from <i>New Super Mario Bros.</i>, the 1 wherein lava rocks fall from the sky — &amp; then decided to move “Sleet Streets” to the “domestic” theme ( since it’s mo’ ’bout homes than the city ) &amp; make this a city level. Then, finally, I decided to make this a space level ’gain, despite keeping the city graphics, &amp; would just say this was a city on ’nother planet. It’s not as if I haven’t been blending themes together &amp; sticking them into whate’er slot was most convenient, &amp; if any theme deserved to dip into other themes’ slots, it would be the city theme.</p>'
		],
		[
			'name' => 'Don’t Touch Me, I’m a Real Live Wire',
			'url' => 'https://www.mezunian.com/2020/10/01/boskeopolis-land-lets-code-a-crappy-2d-platformer-part-liii-dont-touch-me-im-a-real-live-wire/',
			'date' => '2020-10-01',
			'content' => '<div><iframe class="mezun-post-video" width="560" height="315" src="https://www.youtube-nocookie.com/embed/DTiBXTZVpMQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div><p>This level’s main gimmick, electric walls that could only be deactivated with switches in ’nother area, forcing the player to race from the switch to the electric walls, was originally going to be a space level, but I felt it would be better to use this mechanic to spice up an attic maze level idea I’d been toying with, since I feel exploring a maze just to find a keycane or collect a certain # o’ gems had already been done ’nough in this game. This gimmick also helps set this level apart from the attic levels in <i>Cool Spot</i> whence this level takes perhaps a bit too much inspiration otherwise.</p><p>I’m mixed on the size o’ this level. I insisted on constructing the maze so that all space is used for something, with no large chunks o’ solid wood ( which the <i>Cool Spot</i> levels also do ). While I feel like I did a rather good job o’ that, I do worry that the level might be too big. Then ’gain, a maze needs to be large ’nough to get lost in &amp; have plenty o’ dead ends to offer any challenge, &amp; players who know their way will be able to beat the level within less than a minute. Still, part o’ me can’t help feeling like some pieces — specially the lower left section — feel like filler that exists just to collect gems.</p>'
		],
		[
			'name' => 'I Wanna Be Your Vacuum Cleaner',
			'url' => 'https://www.mezunian.com/2020/08/12/boskeopolis-land-lets-code-a-crappy-2d-platformer-like-millions-o-other-people-on-the-internet-lose-interest-give-up-only-a-few-months-in-part-lii-i-wanna-be-your-vacuum-clean/',
			'date' => '2020-08-12',
			'content' => '<div><iframe class="mezun-post-video" src="https://www.youtube-nocookie.com/embed/JM9fweLMklw" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" width="560" height="315" frameborder="0"></iframe></div><p><a href="https://www.youtube.com/watch?v=6JmVBCAQzxI">Accompanying music</a></p><p>I’d been toying with the idea o’ a “race ’head o’ the screen” type level ( distinguished from typical autoscroll levels by the ability to go as quickly ’head as you want, rather than locking you back &amp; forcing you to wait, which I hate ) <a href="https://www.mezunian.com/2016/12/30/lets-code-a-crappy-2d-platformer-like-millions-o-other-people-on-the-internet-lose-interest-give-up-only-a-few-months-in-part-v/">since near the beginning o’ this project.</a> As that article shows, the original idea was a basic saw. Howe’er, not only is that idea cliché, ’twould also use a factory level, &amp; I already have all 4 o’ that theme’s slots filled, while the new domestic theme has plenty o’ slots to fill.</p><p>Having decided this, I for some reason came up with the idea o’ a giant cat chasing you, but then realized that that would be far too difficult to animate, so I changed it to a vacuum, which I could just slide forward without any animation. &amp; ’cause I was extra lazy &amp; too unskilled an artist to draw a tolerable vacuum, I just used a photo o’ my vacuum. I actually like how it looks in all its sloppiness: it’s like the indie video game version o’ a B-movie monster — a B-video-game monster.</p>'
		],
		[
			'name' => 'Cascade Parade',
			'url' => 'https://www.mezunian.com/2020/05/25/boskeopolis-land-lets-code-a-crappy-2d-platformer-like-millions-o-other-people-on-the-internet-lose-interest-give-up-only-a-few-months-in-part-li-cascade-parade/',
			'date' => '2020-05-25',
			'content' => '<div><iframe class="mezun-post-video" src="https://www.youtube.com/embed/-gnvtzkY1Dk" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" width="560" height="315" frameborder="0"></iframe></div><p>I particularly liked this level’s gimmick o’ log platforms moving leftward o’er deathly water &amp; the player needing to hop from platform to platform rightward gainst the tide. Tho I can’t imagine a gimmick similar to this has ne’er been done before, it’s rare ’nough to feel fresh, &amp; yet also feels nature, simple, &amp; integrates with the game’s core gameplay well. I’ve been conscious o’ the risk o’ breaking too far out from this game’s core gameplay with level gimmicks, which can be mo’ alienating than interesting, specially if the gimmick isn’t truly original, just different. ( This is why I canceled a shmup level I was working on. )</p>'
		],
		[
			'name' => '2020 Update',
			'url' => 'https://www.mezunian.com/2020/03/20/boskeopolis-land-lets-code-a-crappy-2d-platformer-like-millions-o-other-people-on-the-internet-lose-interest-give-up-only-a-few-months-in-part-l/',
			'date' => '2020-03-20',
			'content' => '<div><iframe class="mezun-post-video" src="https://www.youtube-nocookie.com/embed/TbOuioWTEdY" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" width="560" height="315" frameborder="0"></iframe></div><p>As the video shows @ the beginning, the basic animation I had before has been replaced by a “trainer” like @ the beginning o’ <i>Super Mario World</i>. I don’t know why I didn’t think to do this till now, since the ol’ animation I had was rather generic &amp; I clearly had autoplaying on my mind way back when I made “Rooftop Rumble”. Maybe I just hadn’t had the confidence yet.</p><p>Codewise, the TitleState instance just includes an instance o’ LevelState, but uses a slightly different update function &amp; has a camera with different dimensions. The player character uses the same input component “Dagny” does in “Rooftop Rumble”. In the code as it stands now, the title screen randomly cycles through “Blueberry Burroughs”, <a href="https://www.mezunian.com/2017/01/10/lets-code-a-crappy-2d-platformer-like-millions-o-other-people-on-the-internet-lose-interest-give-up-only-a-few-months-in-part-vi/">“Wasabi Woods”</a>, <a href="https://www.mezunian.com/2019/01/26/boskeopolis-land-lets-code-a-crappy-2d-platformer-like-millions-o-other-people-on-the-internet-lose-interest-give-up-only-a-few-months-in-part-xxxx/">“The Amazon Jungle”</a>, &amp; <a href="https://www.mezunian.com/2017/02/08/lets-code-a-crappy-2d-platformer-like-millions-o-other-people-on-the-internet-lose-interest-give-up-only-a-few-months-in-part-ix/">“Rooftop Rumble”</a> — though for this video I hacked the code so that it showed the same levels in the exact sequence I wanted so I could show off multiple without the risk o’ repeats.</p>'
		],
		[
			'name' => 'Mind Your Manors',
			'url' => 'https://www.mezunian.com/2019/10/31/boskeopolis-land-lets-code-a-crappy-2d-platformer-like-millions-o-other-people-on-the-internet-lose-interest-give-up-only-a-few-months-in-part-xxxxix-mind-your-manors/',
			'date' => '2019-10-31',
			'content' => '<div><iframe class="mezun-post-video" src="https://www.youtube-nocookie.com/embed/yKXJlrMB6A8" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" width="560" height="315" frameborder="0"></iframe></div><p>I spent all month working on just this 1 level &amp; still wasn’t sure I’d get it all done, including recording playthroughs o’ the level, by the end o’ October. But I did.</p><p>This level idea started out as just some kind o’ vague <span style="text-decoration: line-through;">Halloween</span>Muertoween-style mansion with this basic wallpaper &amp; floor graphics, but all the layouts I came up with seemed empty &amp; boring. Originally, I had bottomless pits in the mansion, which made no sense.</p><p>So then I came up with the idea o’ giving the player a flashlight in this level &amp; challenging them to defeat all the ghosts to beat the level, &amp; the 1st thing I did was prototype the programming for this to see if I could implement it in a way that didn’t feel awful. ’Twas tedious tinkering with pixels to get the rotating flashbeam &amp; flashlight arm to align with the collision lines, but it seems to work all right. Since I knew this gimmick would have a risk o’ being janky, I deliberately made this level laid back &amp; easy ( this also made recording easy &amp; fast ’nough to do in less than an hour, as opposed to, say, “Brier Flier”, which took multiple days ).</p>'
		],
		[
			'name' => 'Stop & Go Space Station',
			'url' => 'https://www.mezunian.com/2019/09/26/boskeopolis-land-lets-code-a-crappy-2d-platformer-like-millions-o-other-people-on-the-internet-lose-interest-give-up-only-a-few-months-in-part-xxxxviii-stop-go-space-station/',
			'date' => '2019-09-26',
			'content' => '<p><iframe class="mezun-post-video" src="https://www.youtube-nocookie.com/embed/n3pEGoZljSk" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" width="560" height="315" frameborder="0"></iframe></p><p>I actually finished this before <a href="https://www.mezunian.com/2019/09/08/boskeopolis-land-lets-code-a-crappy-2d-platformer-like-millions-o-other-people-on-the-internet-lose-interest-give-up-only-a-few-months-in-part-xxxxvii-brier-flier/">“Brier Flier”</a>, but was much mo’ mixed on the quality o’ this 1 &amp; wanted to improve it mo’, ’specially its graphics. However, since then I’ve been able to think o’ any way to improve it &amp; wanted to get this out before October, when I’d rather focus on “Mind Your Manors”.</p><p>I almost rejected this level’s gimmick o’ having to stop when the screen turns red every 3 seconds for being annoying &amp; slow-paced, &amp; I still wonder if maybe I should’ve. My thought process, in addition to urging myself to get this game o’er with, was that ’twas an original &amp; memorable ’nough gimmick to be worth not being particularly fun. I also didn’t think I’d be able to think o’ anything to make this gimmick meaningful without making it feel impossible, but I think I was able to avoid that.</p>'
		],
		[
			'name' => 'Brier Flier',
			'url' => 'https://www.mezunian.com/2019/09/08/boskeopolis-land-lets-code-a-crappy-2d-platformer-like-millions-o-other-people-on-the-internet-lose-interest-give-up-only-a-few-months-in-part-xxxxvii-brier-flier/',
			'date' => '2019-09-08',
			'content' => '<div><iframe class="mezun-post-video" width="560" height="315" src="https://www.youtube.com/embed/MFd3cEmNsoo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
<p>Fun fact: when I 1st recorded this, this level’s name was spelled “Brier Flyer” ’cause I thought “flier” was 1 o’ those weird words that goes gainst the rules o’ English spelling just to mire me &amp; for some reason didn’t look it up. I just found this out as I started typing this &amp; saw my spellcheck yell @ me, just as how it yells @ me that “’nough” isn’t a true word, which is ridiculous. However, due to the way I recorded this video — I didn’t want to have to keep going through the motions @ the beginning, including waiting for long ’nough for viewers to be able to read the goal text, every attempt I made @ this level, so I just spliced 2 separate recordings together during the pause on the goal message screen, when everything’s silent — I was able to fix it in post.</p>
<p>I chose to just show this level off in 1 playthrough, getting just the gem score &amp; the diamond, since the automoving nature o’ this level makes the time score as easy as beating the level normally. It <em>is</em> possible to take too long, since the angles you turn in can make you go faster or slower.</p>'
		],
		[
			'name' => 'Petrol Pond Place',
			'url' => 'https://www.mezunian.com/2019/08/11/boskeopolis-land-lets-code-a-crappy-2d-platformer-like-millions-o-other-people-on-the-internet-lose-interest-give-up-only-a-few-months-in-part-xxxxvi-petrol-pond-place/',
			'date' => '2019-08-11',
			'content' =>
				'<div><iframe class="mezun-post-video" src="https://www.youtube-nocookie.com/embed/_P4Q1Tdvzt4" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" width="560" height="315" frameborder="0"></iframe></div>
				<p>The main delay for this level was designer’s block. I knew I wanted a level with sunset harbor graphics, but I wasn’t sure what I wanted to do with such a level. Early on I decided on implementing oil water, which basically works like the water in “Rusty Bucket Bay” in <i>Banjo-Kazooie</i>: you lose oxygen faster &amp; don’t regain your oxygen till you return to land ( as opposed to just leaving water into the air, which only stops it from decreasing, but doesn’t replenish it ). But then I had trouble figuring out what to do with said oil water.</p>
				<p>Round that time I also wanted to have pipes you could walk through that maybe went down into the water & kept you oxygenated, but couldn’t figure out how to make it work well. This game uses block-based collision, & whole blocks were too thick for pipe walls. Plus, I wasn’t sure how to make them show you will the oil water still hid everything ’neath.</p>'
		],
		[
			'name' => 'Gravity, Hypocrisy, & the Perils o’ Being in 3D',
			'url' => 'https://www.mezunian.com/2019/06/24/boskeopolis-land-lets-code-a-crappy-2d-platformer-like-millions-o-other-people-on-the-internet-lose-interest-give-up-only-a-few-months-in-part-xxxxv-gravity-hypocrisy-the/',
			'date' => '2019-06-24',
			'content' => '<div><iframe class="mezun-post-video" src="https://www.youtube-nocookie.com/embed/fca3ArtesVI" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" width="560" height="315" frameborder="0"></iframe></div><p>I’m surprised this made it past the rejection bin. This started as an idle, silly idea that I planned to procrastinate to the sequel, ’specially due to the rigidity o’ this game engine, thanks to me to being a terrible programmer who was an e’en terribler programer when I started mo’ than 2 years ago. However, I figured out an easy way to do it by just adding some flags to hide all the blocks, make all the sprites invisible, &amp; then just create a background that draws everything seen in this level. This is thanks to the MapLayer class being ridiculously flexible: it’s basically just an update &amp; render virtual method.</p><p>This level &amp; associated classes all have “Doom” in their name, but they should truly be called “Wolfenstein3D”, as this level uses the much simpler raycasting method that that game uses, rather than <i>Doom</i>’s mo’ complicated ( &amp; mo’ powerful ) BSP trees. Raycasting works better for this game’s engine, as it works well with grid-based maps, which this game engine uses, whereas Doom’s system is based on lines which can be @ any angle ( &amp; thus can have walls that aren’t all @ 90° angles, as <i>Wolfenstein 3D</i> &amp; this game have ). That’s fine for me, since this is just 1 level &amp; it’s s’sposed to have a retro look. I can tell you that I’d worry ’bout how primitive the 16-pixel block textures ( smaller than <i>Wolfenstein</i>’s, actually, but the size o’ blocks in this Mario-inspired engine ) look stetched out before I worry ’bout perfectly square walls. Since this works well with grid-based maps, I can just use a regular grid-based map &amp; keep their usual behavior. This pseudo-3d gimmick is nothing mo’ than a visual gimmick o’er a normal isometric 2D level — basically just <a href="https://www.mezunian.com/2017/02/20/lets-code-a-crappy-2d-platformer-like-millions-o-other-people-on-the-internet-lose-interest-give-up-only-a-few-months-in-part-xiii/">“Maybe I’m a Maze”</a>, but with simpler, slower enemies that you can kill off. The walls are just regular solid blocks, the gems &amp; hearts are the same gem &amp; heart blocks used in all the other levels, &amp; thus I didn’t have to add any new behavior there. Only the hero, enemy, &amp; bullet sprites needed much new behavioral programming, &amp; that was mostly to handle moving in various angles.</p>'
		],
		[
			'name' => 'Through the Sharp Hawthorn Blow the Winds',
			'url' => 'https://www.mezunian.com/2019/05/27/boskeopolis-land-lets-code-a-crappy-2d-platformer-like-millions-o-other-people-on-the-internet-lose-interest-give-up-only-a-few-months-in-part-xxxxiv-through-the-sharp-hawthor/',
			'date' => '2019-05-27',
			'content' => '<div><iframe class="mezun-post-video" src="https://www.youtube-nocookie.com/embed/rhfrm1yeleo" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" width="560" height="315" frameborder="0"></iframe></div><p>’Cause everyone loves wind gimmicks.</p><p>Those who have been paying attention to these posts since their earliest entries ( surely nobody ) would recall that I had been working on a level with this gimmick, forest theme, &amp; palette since near the start, but couldn’t be arsed to finish due to other levels shoving it aside. ’Cept for the longest time, ’twas called “Windy Woods”, which was too unbearably cliché for me ( &amp; “Gusty Glade” was already used by Rare ). Sick o’ so many Rareware alliteration names &amp; puns, I stuck with an age-ol’ Shakespeare quote, showing no regard for the fact that this level has no hawthorns, &amp; that such a name would better fit a bramble sky level than a forest level.</p>'
		],
		[
			'name' => 'Catahoneycombs',
			'url' => 'https://www.mezunian.com/2019/03/24/boskeopolis-land-lets-code-a-crappy-2d-platformer-like-millions-o-other-people-on-the-internet-lose-interest-give-up-only-a-few-months-in-part-xxxxiii-catahoneycombs/',
			'date' => '2019-03-24',
			'content' => '<div><iframe class="mezun-post-video" src="https://www.youtube-nocookie.com/embed/WsguvNfNth0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" width="500" height="315" frameborder="0"></iframe></div><p>I delayed this video ’cause I felt this level may have too much content — &amp;, in particular, too many gimmicks — for just 1 level &amp; considered splitting it into 2 levels, which would conflict with my theme system, since I already had 3 mine levels &amp; no other theme where this level would fit, e’en in a game that already stretched level themes beyond their logical boundaries ( quite a hefty problem for a game revolving round revolving level themes, which needs meaningful level themes for the cycling o’ said level themes to have meaning ).</p><p><a href="https://www.mezunian.com/2019/01/26/boskeopolis-land-lets-code-a-crappy-2d-platformer-like-millions-o-other-people-on-the-internet-lose-interest-give-up-only-a-few-months-in-part-xxxx/">I mentioned in an earlier post</a> that I prefer to have multiple li’l gimmicks in a level than 1 all-encompassing level gimmick so that the level doesn’t feel too 1-dimensional; however, too many gimmicks either bloat the level too long ( &amp; I feel most games have levels that are too long ) or leave some gimmicks underused, which I fear may happen here, particularly with the sticky floor gimmick. Other than a few places near the beginning that simply show without telling how sticky floors work without risk, the sticky ground is only used in 1 small section in the middle o’ the level challenging you to dodge Pufferbees while traversing sticky floor. This can be ’splained by the fact that I didn’t consider adding this gimmick till late in this level’s development: originally, this level went straight from that 1st platform with a white ant on it to the next.</p>'
		]
	];
}
