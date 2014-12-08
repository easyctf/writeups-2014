# 70 - The Raven

*Written by Michael Zhang, Writeup by MegaAbsol*

## Problem

Once upon a midnight dreary, while I pondered, weak and weary,
Over many a quaint and curious volume of forgotten lore –
While I nodded, nearly napping, suddenly there came a tapping,
As of some one gently rapping, rapping at my chamber door –
"'Tis some visitor," I muttered, "tapping at my chamber door –
Only this and nothing more."

Ah, distinctly I remember it was in the bleak December;
And each separate dying ember wrought its ghost upon the floor.
Eagerly I wished the morrow; – vainly I had sought to borrow
From my books surcease of sorrow – sorrow for the lost Lenore – 
For the rare and radiant maiden whom the angels name Lenore – 
Nameless here for evermore.

 

ciphertext: 6 11 22 28 66 uooy htue mghn salc mria rrop clns pggl eoie nioo ifdt iwtd eres atau odgh dfgr doti dwii sbsc eato eorf gjgr sron owud sefe

## Hint

Poems were used in cryptography in WW2 to encrypt messages, but were regarded as extremely insecure. Those first five numbers look important - what could they be referring to in the poem?

## Solution

Searching up "poem code" on google, we get some idea of how poem codes work. It seems that the key is the 6th, 11th, 22nd, 28th, and 66th words. This means while, weary, while, there, and bleak. So our key is whilewearywhiletherebleak. Then, this means that the "ordering" is 22 10 13 16 4 23 5 1 19 25 24 11 14 17 6 20 12 7 20 8 3 18 9 2 15, where the 1 corresponds with the first "a" in our key, the 2 corresponds with the second "a", and so on. What this means is that uooy, the first block of text, corresponds with the 22nd column of plaintext.

Putting it together, we get:
    poemcodeshidmessagesdurin
    gworldwartwogreatjobforfi
    guringitouttheflagisgoodo
    ldfashionedinsecurecrypto
## Flag

goodoldfashionedinsecurecrypto
