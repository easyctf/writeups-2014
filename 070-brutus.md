# 70 - Brutus

## Problem

It appears the only thing you know about the flag is its MD5 hash f54f10fd6e38929084d505d0c2e9c997, and that the flag is formatted in this way: [number][adjective][color][animal]  (without the brackets).

Luckily, you have found some [lists of the words](http://www.easyctf.com/problem_data/brutus/brutus.zip) that may have been used. 

Tribute to http://hsctf.com

## Hint

As the title suggests, brute forcing the answer is necessary.

## Solution

The easiest way to brute force a problem, of course, is writing a script. For this solution, the script will be written in python.

To encrypt a string in md5 in python, we need to first write a function that returns the encrypted string given a string.
To do this in python, we can import hashlib, then write a function that looks like:

Code:

    import hashlib
    def MD5hash(string):
      m = hashlib.md5()
      m.update(string.encode('utf-8'))
      return m.hexdigest()

Then, we can make lists in python that contain the various strings given, then use a while loop to connect them in order such that we will inevitably get the right string, which it will print it if it is.

So, our final code looks like:

    import hashlib
    def MD5hash(string):
        m = hashlib.md5()
        m.update(string.encode('utf-8'))
        return m.hexdigest()
    
    numbers = ['1','2','3','4','5','6','7','8','9','10']
    colors = ['red','orange','yellow','green','blue','purple','pink','white','black']
    animals = ['cats','dog','mice','birds','fish','turtles','elephants','snakes','pigs','cows','goats']
    adjectives = ['cool','smart','funny','happy','weird','strange','normal','big','small','angry']
    c1 = 0
    while c1 < len(numbers):
        c2 = 0
        while c2 < len(adjectives):
            c3 = 0
            while c3 < len(colors):
                c4 = 0
                while c4 < len(animals):
                    if str(MD5hash(str(numbers[c1]+adjectives[c2]+colors[c3]+animals[c4]))) == 'f54f10fd6e38929084d505d0c2e9c997':
                        print(numbers[c1]+adjectives[c2]+colors[c3]+animals[c4])
                    c4 += 1
                c3 += 1
            c2 += 1
        c1 += 1

And it prints out the flag!

## Flag

5happypurpleturtles
