# 230 - failedxyz

## Problem

My name is Michael Zhang.

## Hint

This is a recon problem. Clues are scattered over the internet, and you have to piece them together to solve the problem. THIS IS INSANELY HARD. If you solve this problem, you are required to write a write-up and send it (using the email you signed your team up with) to failed.down@gmail.com.

## Solution

This problem had 4 parts. These 4 parts could be found by scouring all of my accounts and looking for flag-related clues. Obtaining my phone number and address didn't get you anywhere as far as solving the problem.

### Part 1

On my YouTube channel at http://youtube.com/user/failedxyz, one of the videos is called [**ice - L (Cytus)**](https://www.youtube.com/watch?v=eUSQBqGZwH4). In the description of the video you'll find these lines:

```
Part One
If you're looking for something, "failed_up_".
```

Another way to reach this video is from my MuseScore profile, which is linked on multiple sites across the internet. [One of my transcriptions](http://musescore.com/user/133763/scores/213861) links to the above video.

### Part 2

My [personal site](http://failedxyz.github.io) would be a good place to look for clues. In this case, the source code was publicly available on GitHub, so instead, the clue was hidden inside the profile image on the top right.

![1](mz1.jpg)

The file end signature for JPEG files is `FF D9`, so anything after this signature will not be a part of the JPEG. Moving everything after `FF D9` to a new `.rar` file (notice the `Rar!` file signature indicating that this is a rar archive), we find a file called `sh58` inside. This file contained the following contents:

```
check out puffdonut's dulles airport rendition in minecraft! fehxNkfgzX96S1P7vwDtew==
```

It turns out that this hash was incorrect, so it was replaced with `dE+0bYbrewc=`, which can be found on the clarification page. A quick Google on `puffdonut dulles airport minecraft` produces the following URL:

```
http://www.minecraftforum.net/forums/mapping-and-modding/maps/1528032-dulles-airport-v6
```

On page 2 of the comments, notice a post by failedxyz that says

```
Nice job! Your video was amazing.Will you do any more maps of real places?

key: sonicetherunbelievableshader
```

We now have a key and a ciphertext. What is the algorithm? That's not too hard to find. Under my Minecraft Forum profile (the same site as before), my interests are DES encryption.

At this point, any online decrypting service would work. Using the key `sonicetherunbelievableshader` and the ciphertext `dE+0bYbrewc=`, we get `is_the_` as the second part of the flag.

### Part 3

This one is simple. You can reach http://projectnebula.org/failosu through many methods including:

* a link on my [Twitter](http://twitter.com/fdetzl) (which I never use)
* a link from my [osu! profile](http://osu.ppy.sh/u/IOException)

Click on any of the songs listed and browse the source code. Close inspection of [this site](http://projectnebula.org/failosu/play.php?folder=39804+xi+-+FREEDOM+DiVE&map=xi+-+FREEDOM+DiVE+%28Nakagawa-Kanon%29+%5BFOUR+DIMENSIONS%5D.osu) reveals:

```
<script type="text/javascript">
	/*
	Version 1
	 + Loading WOsu (http://wosu.ga)
	Upcoming
	 + Slider ticks
	 + Auto replay based on map
		 + score and combo calculations
	*/
```

The third part can be found at the bottom of http://wosu.ga.

```
</script>

<!-- Part 3: best_fail_ -->

</body>
</html>
```

### Part 4

Most people found this first. In my [Twitch](http://twitch.tv/failedxyz) bio, I included a string "2*impossible". This refers to the Impossible Duet. Performing a Google search on `failedxyz impossible duet` brings us to [this recording](https://soundcloud.com/failedxyz/passacaglia). The recording has a link to sheet music, which was available at https://sites.google.com/site/fdetzl/impossible-duet.

This site looks pretty innocent, but under the Sitemap view, there's a page called [Part 4](https://sites.google.com/site/fdetzl/part-4), which has the following contents:

```
Fish duet is pretty good too. You might want to know this: 5ktxaA0e8yaL5tvrXjfKjM4ZYGmgVtSvsS7yZoH9udI=
```

Fish duet refers to *twofish* encryption. Again, the hash is given to you (the hash was found to be broken in the middle of the competition, but this time it was changed directly on the site).

So we already have a ciphertext and encryption method! Where's the key? Well, twofish encryption keys must be either 16, 24, or 32 characters in length. Notice that the title of the page, `fdetzl`, has a length of 6, which perfectly divides into 24. 

## Flag

`failed_up_is_the_best_fail_you_are_ctf_champion`




