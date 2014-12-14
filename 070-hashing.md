# 70 - Hashing

*Written by Austin Zhou*

## Problem

I found this hashed password `dqcxxkgegmrunaue` and its hashing algorithm [hash1.py.](hash1.py) Can you find the password?

## Hint

Maybe there's more than 1 password that works...

## Solution

When inspecting the algorithm we can see that each letter is generated one at a time. So the first letter affects the first letter in the hash and the second letter affects the second letter in the hash etc. So an easy brute force algorithm can be written.

```python
text = "dqcxxkgegmrunaue"
flag= ""
for a in range(len(text)):
	for b in [chr(i) for i in range(97,97+26)]:
		if hash1(b)[0] == text[a]:
			flag += b
			break
print flag
``` 
 
One possible answer then would be `kxjeernlntybuhbl`

## Flag

`kxjeernlntybuhbl`










