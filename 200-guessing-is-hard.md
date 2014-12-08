# 200 - Guessing is hard

## Problem 

We really love guessing games. Try and get the flag at python.easyctf.com:10663!

[source](http://www.easyctf.com/problem_data/guessing-is-hard/guessing-is-hard.py)

## Hint

No hint for this problem. :P

## Solution

We wrote the program on the shell, and I forgot the code, so rewrote it here to the best of my ability...

At first glance, this problem seems unsolvable. After all, it's "truly random..." or is it? Taking a quick look into how random works, we note that if no seed is provided random will use long(time.time()*256) as seed (int or long, depending on your version). We also note that, since this finds integer amount of seconds, the ping time and code run time is irrelevant. I don't know if our system has os.urandom or not, but I don't really care and I can just seed random manually.

Using this, we have our preliminary code:

Planning it out:

    import random, time
    random.seed(long(time.time()*256))
    print(random.random())

We also need to connect to the server, so we have:

Almost there:

    import random, time
    import os
    random.seed(long(time.time()*256))
    os.system('echo '+str(random.random())+' | nc python.easyctf.com 10663')

But it doesn't work!!? Why not?
After closer inspection, we note that random.random is a float. Float outputs only a few decimal points, but we need an exact time. After searching it up on the internet, we find a format string which can show more decimal points. I chose 60.

Final Code:

    import random, time
    import os
    random.seed(long(time.time()*256))
    os.system('echo '+str('%.60f'%random.random())+' | nc python.easyctf.com 10663')

We run it, and get the flag!


## Flag:

`wow_the_random_module_in_python_is_pretty_easy_to_hax`

Note: Since the shell is down you probably won't be able to do it.
